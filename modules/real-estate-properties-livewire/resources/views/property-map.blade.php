@props(['properties' => []])

<div class="overflow-hidden rounded border border-gray-200 bg-gray-100">
    <div wire:ignore data-map data-properties="{{ json_encode($properties) }}"
         class="h-[240px] w-full sm:h-[320px] lg:h-[440px]" role="application" aria-label="{{ __('Map of available properties') }}"></div>
    <div class="flex flex-col items-start gap-2 border-t border-gray-200 bg-white px-3 py-2 sm:flex-row sm:items-center sm:justify-between sm:gap-3">
        <p data-map-count aria-live="polite">
            {{ trans_choice(':count property mapped|:count properties mapped', count($properties), ['count' => count($properties)]) }}
        </p>
        <button type="button" data-map-locate>{{ __('Show my location') }}</button>
    </div>
</div>

@once
    @push('scripts')
        <script type="module">
            (() => {
                const leaflet = window.L;
                if (!leaflet) return;

                document.querySelectorAll('[data-map]').forEach((element) => {
                    let map;
                    const markers = [];

                    const draw = () => {
                        if (map) return;
                        map = leaflet.map(element).setView([51.5, -0.09], 10);
                        leaflet.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; OpenStreetMap contributors',
                        }).addTo(map);
                        plot(JSON.parse(element.dataset.properties || '[]'));
                    };

                    const plot = (properties) => {
                        const bounds = [];
                        properties.forEach((property) => {
                            if (property.latitude === null || property.longitude === null) return;
                            const point = [Number(property.latitude), Number(property.longitude)];
                            if (point.some((value) => Number.isNaN(value))) return;
                            bounds.push(point);
                            const popup = document.createElement('div');
                            const title = document.createElement('strong');
                            title.textContent = property.title || '';
                            popup.append(title);
                            if (property.price !== null && property.price !== undefined && property.price !== '') {
                                popup.append(document.createElement('br'));
                                popup.append(document.createTextNode((property.currency || '') + Number(property.price).toLocaleString()));
                            }
                            markers.push(leaflet.marker(point).addTo(map).bindPopup(popup));
                        });
                        if (bounds.length) map.fitBounds(bounds, {padding: [40, 40], maxZoom: 15});
                    };

                    if ('IntersectionObserver' in window) {
                        const observer = new IntersectionObserver((entries) => {
                            if (entries.some((entry) => entry.isIntersecting)) {
                                draw();
                                observer.disconnect();
                            }
                        }, {rootMargin: '200px'});
                        observer.observe(element);
                    } else draw();

                    element.parentElement.querySelector('[data-map-locate]')?.addEventListener('click', () => {
                        draw();
                        map.locate({setView: true, maxZoom: 15});
                    });
                });
            })();
        </script>
    @endpush
@endonce
