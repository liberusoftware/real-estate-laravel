<?php

declare(strict_types=1);

namespace Liberu\Foundation\IdentityCoreApi\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Liberu\Foundation\Organizations\Models\Team;

final class AuthTokenController
{
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

        $team = Team::query()->oldest()->first();
        if ($team) {
            if (! $team->users()->whereKey($user->id)->exists()) {
                $team->users()->attach($user->id);
            }
            $user->forceFill(['current_team_id' => $team->id])->save();
        }

        $token = $user->createToken('ihona-frontend')->plainTextToken;

        return response()->json([
            'plainTextToken' => $token,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
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
                'email' => ['Неверный email или пароль.'],
            ]);
        }

        if ($user->two_factor_confirmed_at !== null) {
            return response()->json([
                'message' => 'Для этого аккаунта включена двухфакторная аутентификация — вход через API пока недоступен.',
                'code' => 'two_factor_required',
            ], 422);
        }

        $token = $user->createToken('ihona-frontend')->plainTextToken;

        return response()->json([
            'plainTextToken' => $token,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ],
        ]);
    }

    public function destroy(Request $request): JsonResponse
    {
        $request->user()?->currentAccessToken()?->delete();

        return response()->json(['message' => 'Logged out.']);
    }
}
