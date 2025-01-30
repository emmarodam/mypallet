<!-- resources/views/partials/vehicle_list.blade.php -->
<div id="vehicle-list">
    @if (isset($trucks))
        <h2>Trucks</h2>
        <ul>
            @foreach ($trucks as $truck)
                <li>{{ $truck->name }} (Type: {{ $truck->type }})</li>
            @endforeach
        </ul>
    @elseif (isset($trailers))
        <h2>Trailers</h2>
        <ul>
            @foreach ($trailers as $trailer)
                <li>{{ $trailer->name }} (Type: {{ $trailer->type }})</li>
            @endforeach
        </ul>
    @endif
</div>