<section aria-label="Submit a property" class="mx-auto w-full max-w-3xl space-y-4 px-4 py-6 sm:px-6">
    <h2 class="text-2xl font-bold sm:text-3xl">Submit a property</h2>

    @if (session('message'))
        <p role="status">{{ session('message') }}</p>
    @endif

    <form wire:submit="submit" enctype="multipart/form-data" class="grid grid-cols-1 gap-4 sm:grid-cols-2">
        <div class="flex flex-col gap-1 sm:col-span-2">
            <label for="property-submission-title">Title</label>
            <input id="property-submission-title" type="text" wire:model="title" class="w-full rounded border border-gray-300 px-3 py-2">
            @error('title') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="flex flex-col gap-1 sm:col-span-2">
            <label for="property-submission-description">Description</label>
            <textarea id="property-submission-description" wire:model="description" class="w-full rounded border border-gray-300 px-3 py-2"></textarea>
            @error('description') <p class="text-red-600">{{ $message }}</p> @enderror
            <button type="button" wire:click="generateAIDescription" class="self-start">Generate description</button>
        </div>

        <div class="flex flex-col gap-1 sm:col-span-2">
            <label for="property-submission-location">Location</label>
            <input id="property-submission-location" type="text" wire:model="location" class="w-full rounded border border-gray-300 px-3 py-2">
            @error('location') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="flex flex-col gap-1">
            <label for="property-submission-price">Price</label>
            <input id="property-submission-price" type="number" wire:model="price" min="0" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="property-submission-bedrooms">Bedrooms</label>
            <input id="property-submission-bedrooms" type="number" wire:model="bedrooms" min="0" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="property-submission-bathrooms">Bathrooms</label>
            <input id="property-submission-bathrooms" type="number" wire:model="bathrooms" min="0" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="property-submission-area">Area (sq m)</label>
            <input id="property-submission-area" type="number" wire:model="area_sqft" min="0" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="property-submission-year">Year built</label>
            <input id="property-submission-year" type="number" wire:model="year_built" min="1066" class="w-full rounded border border-gray-300 px-3 py-2">
            @error('year_built') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="flex flex-col gap-1">
            <label for="property-submission-type">Property type</label>
            <input id="property-submission-type" type="text" wire:model="property_type" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>

        <div class="flex flex-col gap-1 sm:col-span-2">
            <label for="property-submission-images">Images</label>
            <input id="property-submission-images" type="file" wire:model="images" accept="image/*" multiple class="w-full">
            @error('images.*') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="flex flex-col gap-1 sm:col-span-2">
            <label for="property-submission-video">Video tour</label>
            <input id="property-submission-video" type="file" wire:model="video" accept="video/mp4,video/quicktime" class="w-full">
            @error('video') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="flex flex-col gap-1 sm:col-span-2">
            <label for="property-submission-custom-description">Additional notes</label>
            <textarea id="property-submission-custom-description" wire:model="customDescription" class="w-full rounded border border-gray-300 px-3 py-2"></textarea>
        </div>
        <div class="flex flex-col gap-1 sm:col-span-2">
            <label for="property-submission-tone">Description tone</label>
            <select id="property-submission-tone" wire:model="descriptionTone" class="w-full rounded border border-gray-300 px-3 py-2 sm:w-auto">
                <option value="professional">Professional</option>
                <option value="casual">Casual</option>
                <option value="luxury">Luxury</option>
            </select>
        </div>

        @error('submission') <p class="text-red-600 sm:col-span-2">{{ $message }}</p> @enderror

        <div class="flex flex-col gap-2 sm:col-span-2 sm:flex-row">
            <button type="button" wire:click="preview">Preview property</button>
            <button type="submit">Submit property</button>
        </div>
    </form>
</section>
