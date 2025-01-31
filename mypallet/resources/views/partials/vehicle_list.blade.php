<div id="vehicle-list" class="w-full max-w-lg mt-6 bg-green-800 text-white rounded-lg p-4 shadow-lg">
    @if (isset($trucks))
        <h2 class="text-lg font-bold uppercase border-b border-green-600 pb-2">Trucks</h2>
        <ul class="mt-2">
            @foreach ($trucks as $truck)
                <li class="py-2 px-4 border-b border-green-700 last:border-none">{{ $truck->name }}</li>
            @endforeach
        </ul>
    @elseif (isset($trailers))
        <h2 class="text-lg font-bold uppercase border-b border-green-600 pb-2">Trailers</h2>
        <ul class="mt-2">
            @foreach ($trailers as $trailer)
                <li class="py-2 px-4 border-b border-green-700 last:border-none">{{ $trailer->name }}</li>
            @endforeach
        </ul>
    @endif
</div>