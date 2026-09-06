<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Boilerplate Laravel') }}</title>

    @fonts
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        :root {
            /* ihona brand green (docs/brand/README.txt — Изумруд #2E7D5C is
               --brand-emphasis here, same colour as brand-600 on the main
               storefront). Was an unrelated teal from a different theme. */
            --brand-primary: #37956e;
            --brand-deep: #246349;
            --brand-emphasis: #2e7d5c;
            --brand-on-dark: #43b786;
            --canvas: #fafcfc;
            --surface: #ffffff;
            --surface-sunken: #f1f5f5;
            --border: #dce4e4;
            --ink: #2a3338;
            --ink-muted: #626e74;
            --danger: #d23a2c;
            --success: #1f9d57;
            --font-sans: 'Inter', ui-sans-serif, system-ui, -apple-system, 'Segoe UI', sans-serif;
            --r-md: 10px;
            --r-lg: 16px;
            --shadow-md: 0 10px 30px -12px rgba(11, 55, 60, .22);
            --shadow-lg: 0 40px 80px -32px rgba(11, 55, 60, .28);
        }
        @media (prefers-color-scheme: dark) {
            :root {
                --canvas: #171c1f; --surface: #1f262a; --surface-sunken: #232c30;
                --border: #2d353a; --ink: #ecf0f0; --ink-muted: #a5afb3;
                --brand-emphasis: #43b786; --brand-deep: #43b786;
                --shadow-md: 0 10px 30px -12px rgba(0,0,0,.5); --shadow-lg: 0 40px 80px -30px rgba(0,0,0,.6);
            }
        }

        [x-cloak] { display: none !important; }

        body {
            margin: 0; font-family: var(--font-sans); color: var(--ink); background: var(--canvas);
            -webkit-font-smoothing: antialiased; font-size: .9375rem;
        }

        /* centered auth stage with a soft Clear Signal glow */
        .cs-auth {
            min-height: 100vh; min-height: 100svh;
            display: flex; flex-direction: column; align-items: center; justify-content: center;
            padding: clamp(1.25rem, 5vw, 2.5rem); position: relative; overflow: hidden;
        }
        .cs-auth::before {
            content: ""; position: absolute; inset: 0; z-index: 0; pointer-events: none;
            background:
                radial-gradient(60% 55% at 50% -10%, color-mix(in oklab, var(--brand-primary) 16%, transparent), transparent 70%);
        }
        .cs-auth > * { position: relative; z-index: 1; }

        .cs-logo { display: inline-flex; margin-bottom: 1.4rem; }
        .cs-logo svg { width: 44px; height: 44px; }

        .cs-card {
            width: 100%; max-width: 27rem;
            background: var(--surface); border: 1px solid var(--border);
            border-radius: var(--r-lg); box-shadow: var(--shadow-lg);
            padding: clamp(1.5rem, 4vw, 2.25rem);
        }

        .cs-home { margin-top: 1.5rem; font-size: .8125rem; color: var(--ink-muted); }
        .cs-home a { color: var(--ink-muted); text-decoration: none; }
        .cs-home a:hover { color: var(--brand-emphasis); }

        /* form primitives */
        .cs-label { display: block; font-weight: 500; font-size: .8125rem; color: var(--ink); margin-bottom: .1rem; }
        .cs-input {
            width: 100%; font: inherit; color: var(--ink);
            background: var(--surface); border: 1px solid var(--border);
            border-radius: var(--r-md); padding: .6rem .75rem;
            transition: border-color .15s ease, box-shadow .15s ease;
        }
        .cs-input::placeholder { color: var(--ink-muted); }
        .cs-input:focus {
            outline: none; border-color: var(--brand-primary);
            box-shadow: 0 0 0 3px color-mix(in oklab, var(--brand-primary) 22%, transparent);
        }

        .cs-check { width: 1.05rem; height: 1.05rem; accent-color: var(--brand-emphasis); border-radius: 4px; }

        .cs-btn {
            display: inline-flex; align-items: center; justify-content: center; gap: .5rem;
            font: inherit; font-weight: 600; line-height: 1; cursor: pointer; white-space: nowrap;
            padding: .65rem 1.1rem; border-radius: var(--r-md); border: 1px solid transparent;
            transition: background-color .16s ease, border-color .16s ease, transform .16s ease, box-shadow .16s ease;
        }
        .cs-btn--primary { background: var(--brand-emphasis); color: #fff; }
        .cs-btn--primary:hover { background: var(--brand-deep); transform: translateY(-1px); box-shadow: var(--shadow-md); }
        @media (prefers-color-scheme: dark) { .cs-btn--primary { color: #06232a; } }
        .cs-btn--ghost { background: var(--surface); color: var(--ink); border-color: var(--border); }
        .cs-btn--ghost:hover { background: var(--surface-sunken); }
        .cs-btn:focus-visible { outline: 2px solid var(--brand-primary); outline-offset: 2px; }

        /* errors */
        .cs-error { margin: .3rem 0 0; font-size: .8rem; color: var(--danger); }
        .cs-errors { border: 1px solid color-mix(in oklab, var(--danger) 40%, var(--border)); background: color-mix(in oklab, var(--danger) 8%, var(--surface)); border-radius: var(--r-md); padding: .75rem .85rem; }
        .cs-errors__title { font-weight: 600; font-size: .82rem; color: var(--danger); }
        .cs-errors ul { margin: .4rem 0 0; padding-left: 1.1rem; font-size: .8rem; color: var(--danger); }

        .cs-status { border-radius: var(--r-md); background: color-mix(in oklab, var(--success) 12%, var(--surface)); color: color-mix(in oklab, var(--success) 55%, var(--ink)); font-size: .82rem; font-weight: 500; padding: .6rem .8rem; }

        /* brand links inside the card (forgot / already registered / terms) */
        .cs-card a { color: var(--brand-emphasis); }
        .cs-card a:hover { color: var(--brand-deep); }

        :focus-visible { outline: 2px solid var(--brand-primary); outline-offset: 2px; border-radius: 6px; }
    </style>
</head>
<body>
    <div class="cs-auth">
        {{ $slot }}
    </div>
    @stack('modals')
</body>
</html>
