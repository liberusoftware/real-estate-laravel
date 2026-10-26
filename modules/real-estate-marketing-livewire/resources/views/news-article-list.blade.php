<div class="mx-auto w-full max-w-5xl space-y-4 px-4 py-6 sm:px-6 lg:px-8">
    <div wire:loading role="status" class="text-sm text-gray-500">Loading news…</div>
    <input wire:model.live="search" type="search" placeholder="Search news" class="w-full max-w-sm rounded border border-gray-300 px-3 py-2">

    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
        @forelse ($articles as $article)
            <article wire:key="news-{{ $article->id }}" class="rounded-lg border border-gray-200 p-4">
                <h2 class="text-lg font-semibold">{{ $article->title }}</h2>
                <p class="text-gray-600">{{ $article->excerpt }}</p>
            </article>
        @empty
            <p class="col-span-full">No news articles found.</p>
        @endforelse
    </div>

    {{ $articles->links() }}
</div>
