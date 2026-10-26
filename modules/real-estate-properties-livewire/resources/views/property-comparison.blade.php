<div class="mx-auto w-full max-w-5xl space-y-6 px-4 py-6 sm:px-6 lg:px-8">
    <section aria-label="Property comparison" class="space-y-4">
        <h1 class="text-2xl font-bold sm:text-3xl">Compare properties</h1>

        @if ($properties === [])
            <p>Select two to four properties to compare.</p>
        @else
            <div class="overflow-x-auto">
                <table class="w-full min-w-[480px] border-collapse text-left">
                    <thead>
                        <tr>
                            <th scope="col" class="border-b border-gray-200 px-3 py-2">Feature</th>
                            @foreach ($properties as $property)
                                <th scope="col" class="border-b border-gray-200 px-3 py-2">
                                    {{ $property['title'] }}
                                    <button type="button" wire:click="removeProperty('{{ $property['id'] }}')">Remove</button>
                                </th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comparisonFields as $field)
                            <tr wire:key="comparison-{{ $field }}">
                                <th scope="row" class="border-b border-gray-100 px-3 py-2 text-left">{{ str_replace('_', ' ', ucfirst($field)) }}</th>
                                @foreach ($properties as $property)
                                    <td class="border-b border-gray-100 px-3 py-2">{{ $property[$field] ?? 'Not supplied' }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        @if (count($propertyIds) < 4)
            <div class="flex flex-col gap-1">
                <label for="comparison-search">Add a property</label>
                <input id="comparison-search" type="search" wire:model.live="searchTerm" minlength="3" autocomplete="off" class="w-full max-w-sm rounded border border-gray-300 px-3 py-2">
            </div>
            @if ($searchResults !== [])
                <ul aria-label="Property search results" class="grid grid-cols-1 gap-2 sm:grid-cols-2">
                    @foreach ($searchResults as $result)
                        <li wire:key="comparison-result-{{ $result['id'] }}" class="flex items-center justify-between gap-2 rounded border border-gray-200 px-3 py-2">
                            {{ $result['title'] }}
                            <button type="button" wire:click="addProperty('{{ $result['id'] }}')">Add</button>
                        </li>
                    @endforeach
                </ul>
            @endif
        @endif
    </section>
</div>
