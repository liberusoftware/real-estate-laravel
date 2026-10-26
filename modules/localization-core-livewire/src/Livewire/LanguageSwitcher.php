<?php

namespace Liberu\Foundation\LocalizationLivewire\Livewire;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Livewire\Component;

final class LanguageSwitcher extends Component
{
    public string $currentLocale = '';

    /** @var array<string, string> */
    public array $availableLocales = [];

    /** @param array<string, string>|null $locales Restricts the switcher to a subset of app.supported_locales — e.g. the admin panel offering only ru/en. Null uses the full site list. */
    public function mount(?array $locales = null): void
    {
        $this->currentLocale = App::getLocale();
        $this->availableLocales = array_filter($locales ?? (array) config('app.supported_locales', []), 'is_string');
    }

    public function switchLanguage(string $locale): void
    {
        if (! array_key_exists($locale, $this->availableLocales) || ! array_key_exists($locale, (array) config('app.supported_locales', []))) {
            return;
        }
        Session::put('locale', $locale);
        if (($user = auth()->user()) instanceof Model) {
            $user->update(['locale' => $locale]);
        }
        $this->currentLocale = $locale;

        // A same-page reload, not a redirect: the switcher is mounted inside
        // other pages (Filament panels, public layouts) via a render hook, so
        // it has no page of its own to send the visitor back to. Guessing the
        // origin page from the Referer header was fragile — wrong or missing
        // on some requests — and sent people straight to "/" instead of back
        // to where they clicked from.
        $this->js('window.location.reload()');
    }

    public function render(): View
    {
        return view('localization-livewire::livewire.language-switcher');
    }
}
