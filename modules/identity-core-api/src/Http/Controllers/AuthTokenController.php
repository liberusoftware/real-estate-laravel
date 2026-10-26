<?php

declare(strict_types=1);

namespace Liberu\Foundation\IdentityCoreApi\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Sanctum\PersonalAccessToken;
use Liberu\Foundation\Identity\Jobs\SyncNewUserToCrm;
use Liberu\Foundation\Organizations\Models\Team;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

final class AuthTokenController
{
    /**
     * Self-declared registration intent -> the real Spatie role it grants.
     * 'tourist' has no distinct permission role (see PartyType for that
     * separate, CRM-facing concept) — it maps to 'buyer', with the raw
     * intent kept on the user for personalizing their /app dashboard and
     * default browsing view.
     */
    private const INTENT_TO_ROLE = [
        'buyer' => 'buyer',
        'tourist' => 'buyer',
        'tenant' => 'tenant',
        'landlord' => 'landlord',
        'seller' => 'seller',
    ];

    /**
     * Self-registration for API consumers (the Nuxt storefront), reusing
     * Fortify's own CreatesNewUsers action (jetstream-bridge's
     * CreateNewUser) rather than duplicating its validation, email
     * normalization, and RegistrationPolicy/invitation checks — the same
     * rules the web registration form enforces apply here.
     *
     * A brand-new user has no team; booking a viewing or favoriting a
     * property both require current_team_id !== null (same constraint
     * Filament's CreateUser page works around for admin-created users), so
     * attach to the storefront's public team, same as
     * PublicTerritoryController/PublicPropertyController resolve it.
     */
    public function register(Request $request, CreatesNewUsers $creator): JsonResponse
    {
        $user = $creator->create($request->only(['name', 'email', 'password', 'password_confirmation']));

        $intent = $request->string('signup_intent')->lower()->value();
        if (array_key_exists($intent, config('identity.signup_roles', self::INTENT_TO_ROLE))) {
            $user->forceFill(['signup_intent' => $intent])->save();
        } else {
            $intent = null;
        }

        $team = Team::query()->when(config('identity.public_team_id'), fn ($query, $id) => $query->whereKey($id))->oldest()->first();
        if ($team) {
            if (! $team->users()->whereKey($user->id)->exists()) {
                $team->users()->attach($user->id);
            }
            $user->forceFill(['current_team_id' => $team->id])->save();

            $registrar = app(PermissionRegistrar::class);
            $previousTeamId = $registrar->getPermissionsTeamId();
            try {
                $registrar->setPermissionsTeamId($team->id);
                $role = $intent !== null ? config('identity.signup_roles', self::INTENT_TO_ROLE)[$intent] : 'buyer';
                Role::findOrCreate($role, 'web');
                $user->assignRole($role);
            } finally {
                $registrar->setPermissionsTeamId($previousTeamId);
            }
        }

        if ($request->hasSession()) {
            Auth::guard('web')->login($user);
            $request->session()->regenerate();
        }

        $token = $user->createToken(config('services.frontend.token_name', 'frontend'))->plainTextToken;

        SyncNewUserToCrm::dispatch(
            $user->id,
            'email',
            [
                'signup_intent' => $intent,
                'locale' => app()->getLocale(),
                'team_id' => $user->current_team_id,
            ],
            [
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'referer' => $request->header('referer'),
                'registered_at' => $user->created_at?->toIso8601String(),
            ],
        );

        return response()->json([
            'plainTextToken' => $token,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'roles' => $this->roleNames($user),
            ],
        ], 201);
    }

    /**
     * Bearer-token login for API consumers (the Nuxt storefront).
     *
     * Deliberately rejects any 2FA-enabled user rather than silently
     * bypassing Fortify's 2FA challenge — a plain Auth::attempt()-style
     * credential check has no way to honor it. Resolving the real 2FA
     * challenge over the API is a follow-up.
     */
    public function store(Request $request): JsonResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        // Resolve the configured user model rather than importing App\Models\User —
        // no package here may depend on the host's App\ namespace.
        $userModel = config('auth.providers.users.model');
        $user = $userModel::where('email', $credentials['email'])->first();

        if (! $user || ! Hash::check($credentials['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => [__('auth.failed')],
            ]);
        }

        if ($user->two_factor_confirmed_at !== null) {
            return response()->json([
                'message' => __('Two-factor authentication is required for this account.'),
                'code' => 'two_factor_required',
            ], 422);
        }

        if ($request->hasSession()) {
            Auth::guard('web')->login($user);
            $request->session()->regenerate();
        }

        $token = $user->createToken(config('services.frontend.token_name', 'frontend'))->plainTextToken;

        return response()->json([
            'plainTextToken' => $token,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'roles' => $this->roleNames($user),
            ],
        ]);
    }

    /**
     * Role checks elsewhere on User route through team-agnostic helpers
     * because Spatie's own hasRole()/getRoleNames() are bound to whichever
     * team the permissions registrar is currently pointed at — which is
     * nothing, here, since this runs outside any Filament panel's tenant
     * middleware. Point it at the user's own team before reading their
     * roles, same as shield:generate and role assignment already must.
     */
    private function roleNames(mixed $user): array
    {
        if ($user->current_team_id === null) {
            return [];
        }

        $registrar = app(PermissionRegistrar::class);
        $previousTeamId = $registrar->getPermissionsTeamId();
        try {
            $registrar->setPermissionsTeamId($user->current_team_id);

            return $user->getRoleNames()->all();
        } finally {
            $registrar->setPermissionsTeamId($previousTeamId);
        }
    }

    public function show(Request $request): JsonResponse
    {
        $user = $request->user();

        return response()->json([
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'roles' => $this->roleNames($user),
            ],
        ]);
    }

    public function destroy(Request $request): JsonResponse
    {
        // Now that store()/register() also log the request into the 'web'
        // session, a request carrying both a valid session cookie and a
        // Bearer header authenticates via the session guard, and
        // currentAccessToken() resolves to Sanctum's TransientToken
        // placeholder (no real row, no delete()) rather than the actual
        // PersonalAccessToken the client is trying to revoke. Look the real
        // token up from the raw bearer string instead, independent of
        // whichever guard won.
        $bearerToken = $request->bearerToken();
        if ($bearerToken !== null) {
            $token = PersonalAccessToken::findToken($bearerToken);
            if ($token?->tokenable?->is($request->user())) {
                $token->delete();
            }
        }

        // Mirrors store()/register() establishing the web session alongside
        // the token: tear both down together, so a Nuxt "log out" doesn't
        // leave the /app panel still recognizing a stale session.
        if ($request->hasSession()) {
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return response()->json(['message' => 'Logged out.']);
    }
}
