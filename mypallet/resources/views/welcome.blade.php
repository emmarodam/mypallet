<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>myPallet</title>
    <script src="https://unpkg.com/htmx.org@1.9.6" integrity="sha384-FhXw7b6AlE/jyjlZH5iHa/tTe9EpJ1Y55RjcgPbjeWMskSxZt1v9qkxLJWNJaGni" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <main>
        <div>
            <ul>
                <li>
                    <a href="#" hx-get="/trucks" hx-target="#vehicle-list" hx-swap="outerHTML">Trucks</a>
                </li>
                <li>
                    <a href="#" hx-get="/trailers" hx-target="#vehicle-list" hx-swap="outerHTML">Trailers</a>
                </li>
            </ul>
        </div>
        <p>Search</p>

        <!-- Vehicle list will be updated dynamically here -->
        <div id="vehicle-list">
            <h2>Trucks</h2>
            <ul>
                @foreach ($transportUnits->where('type', 'truck') as $truck)
                    <li>{{ $truck->name }}</li>
                @endforeach
            </ul>
        </div>
    </main>
</body>

</html>