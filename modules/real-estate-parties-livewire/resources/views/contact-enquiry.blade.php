<div>
    @if ($submitted)
        <p role="status">Thank you. We will be in touch soon.</p>
    @endif

    <form wire:submit="submit" class="grid grid-cols-1 gap-4 sm:grid-cols-2">
        <div class="flex flex-col gap-1">
            <label for="contact-name">Name</label>
            <input id="contact-name" wire:model="name" autocomplete="name" required class="w-full rounded border border-gray-300 px-3 py-2">
            @error('name') <p role="alert" class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="flex flex-col gap-1">
            <label for="contact-email">Email</label>
            <input id="contact-email" type="email" wire:model="email" autocomplete="email" required class="w-full rounded border border-gray-300 px-3 py-2">
            @error('email') <p role="alert" class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="flex flex-col gap-1">
            <label for="contact-phone">Phone</label>
            <input id="contact-phone" type="tel" wire:model="phone" autocomplete="tel" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>

        <div class="flex flex-col gap-1">
            <label for="contact-interest">I am interested in</label>
            <select id="contact-interest" wire:model="interest" class="w-full rounded border border-gray-300 px-3 py-2">
                <option value="">Please select</option>
                <option value="buying">Buying</option>
                <option value="selling">Selling</option>
                <option value="renting">Renting</option>
                <option value="letting">Letting</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div class="flex flex-col gap-1 sm:col-span-2">
            <label for="contact-message">Message</label>
            <textarea id="contact-message" wire:model="message" required class="w-full rounded border border-gray-300 px-3 py-2"></textarea>
            @error('message') <p role="alert" class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="sm:col-span-2">
            <button type="submit" wire:loading.attr="disabled">Send message</button>
        </div>
    </form>
</div>
