@props(['title', 'body', 'icon' => '•'])

<article {{ $attributes->class(['re-feature']) }}>
    <span aria-hidden="true" class="text-2xl text-[var(--color-action-primary)]">{{ $icon }}</span>
    <h3>{{ $title }}</h3>
    <p>{{ $body }}</p>
</article>
