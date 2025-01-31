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

<body class="bg-green-900 text-white">
    <div id="app" class="min-h-screen flex flex-col items-center p-8">
        <component-a></component-a>

        <!-- Tabs -->
        <div class="w-full max-w-2xl flex">
            <a href="#" hx-get="/trucks" hx-target="#vehicle-list" hx-swap="outerHTML"
                class="flex-1 text-center py-4 font-bold uppercase transition-colors duration-300 bg-green-900 text-gray-100 hover:bg-green-700 active:text-green-900 active:bg-gray-100">
                Trucks
            </a>
            <a href="#" hx-get="/trailers" hx-target="#vehicle-list" hx-swap="outerHTML"
                class="flex-1 text-center py-4 font-bold uppercase transition-colors duration-300 bg-green-900 text-gray-100 hover:bg-green-700 active:text-green-900 active:bg-gray-100">
                Trailers
            </a>
        </div>

        <!-- Search Bar -->
        <div class="m-6 w-full max-w-lg">
            <div class="relative">
                <input type="text" placeholder="Søg"
                    class="w-full py-2 pl-10 pr-4 rounded-lg bg-gray-100 text-green-900 focus:outline-none">
                <span class="absolute left-3 top-3 text-green-900">
                    🔍
                </span>
            </div>
        </div>

        <!-- Listen over units -->
        <div id="vehicle-list" class="w-full max-w-lg mt-6">
            
        </div>
    </div>
</body>

</html>