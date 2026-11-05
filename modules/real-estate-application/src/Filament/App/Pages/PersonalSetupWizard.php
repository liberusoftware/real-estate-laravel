<?php

namespace Liberu\RealEstate\Application\Filament\App\Pages;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\DB;
use Liberu\Foundation\Settings\Contracts\SettingDefinition;
use Liberu\Foundation\Settings\Services\ScopedSettings;

class PersonalSetupWizard extends Page
{
    protected string $view = 'real-estate-application::app.pages.personal-setup-wizard';

    protected static ?string $slug = 'welcome';

    protected static ?string $title = 'Make yourself at home';

    protected static ?string $navigationLabel = 'Your preferences';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-adjustments-horizontal';

    protected static string|\UnitEnum|null $navigationGroup = 'Account';

    public array $data = [];

    public function mount(): void
    {
        $user = auth()->user();
        abort_unless($user !== null, 403);
        $this->form->fill(['name' => $user->name, 'locale' => $user->locale ?? config('app.locale')]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema->statePath('data')->components([
            Wizard::make([
                Step::make('About you')->description('Choose how we greet you')->schema([
                    TextInput::make('name')->label('Your name')->required()->maxLength(255),
                ]),
                Step::make('Preferences')->description('Make the panel work for you')->schema([
                    Select::make('locale')->label('Language')->required()->options(
                        collect(config('app.supported_locales', ['en' => 'English']))->mapWithKeys(
                            fn ($label, $key): array => [is_int($key) ? $label : $key => $label],
                        )->all(),
                    ),
                ]),
            ])->submitAction(view('real-estate-application::app.pages.setup-submit')),
        ]);
    }

    public function save(): void
    {
        abort_unless(auth()->check(), 403);
        $state = $this->form->getState();
        DB::transaction(function () use ($state): void {
            auth()->user()->update(['name' => $state['name'], 'locale' => $state['locale']]);
            app(ScopedSettings::class)->put(new class() implements SettingDefinition
            {
                public function key(): string
                {
                    return 'user.onboarding_completed';
                }

                public function validate(mixed $value): bool
                {
                    return is_bool($value);
                }

                public function secret(): bool
                {
                    return false;
                }
            }, 'user', (string) auth()->id(), true);
        });
        $this->redirect(route('filament.app.pages.dashboard'), navigate: true);
    }

    public static function isComplete(): bool
    {
        return (bool) app(ScopedSettings::class)->resolve('user.onboarding_completed', ['user' => auth()->id()], false);
    }
}
