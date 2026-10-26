<div class="cs-social">
    @if(! empty(\JoelButcher\Socialstream\Socialstream::providers()) || config('services.telegram.bot_username'))
        <div class="cs-social__divider">
            <span>{{ config('socialstream.prompt', 'Or Login Via') }}</span>
        </div>

        <x-input-error :for="'socialstream'" class="text-center"/>

        <div class="cs-social__buttons">
            @foreach (\JoelButcher\Socialstream\Socialstream::providers() as $provider)
                <a class="cs-btn cs-btn--ghost cs-social__button" href="{{ route('oauth.redirect', $provider['id']) }}">
                    <x-socialstream-icons.provider-icon :provider="$provider['id']" class="cs-social__icon"/>
                    <span>{{ $provider['buttonLabel'] }}</span>
                </a>
            @endforeach

            @if (config('services.telegram.bot_username'))
                <div class="cs-social__telegram">
                    <script async
                        src="https://telegram.org/js/telegram-widget.js?22"
                        data-telegram-login="{{ config('services.telegram.bot_username') }}"
                        data-size="large"
                        data-radius="10"
                        data-auth-url="{{ route('oauth.telegram.callback') }}"
                        data-request-access="write"></script>
                </div>
            @endif
        </div>
    @endif
</div>

<style>
    .cs-social { margin-top: 1.5rem; }
    .cs-social__divider { position: relative; display: flex; align-items: center; margin-bottom: 1.25rem; }
    .cs-social__divider::before,
    .cs-social__divider::after { content: ""; flex: 1; border-top: 1px solid var(--border); }
    .cs-social__divider span { flex-shrink: 0; padding: 0 1rem; font-size: .8125rem; color: var(--ink-muted); }
    .cs-social__buttons { display: grid; gap: .75rem; }
    .cs-social__button { width: 100%; }
    .cs-social__icon { height: 1.25rem; width: 1.25rem; }
    .cs-social__telegram { display: flex; justify-content: center; }
</style>
