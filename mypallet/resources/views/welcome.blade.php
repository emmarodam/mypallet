<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myPallet</title>
</head>
<body>

<main>

    <div class="">
        <ul>
            <li>Trucks</li>
            <li>Trailers</li>
        </ul>
    </div>    
        <p>Search</p>
    
        <h2>Name (trucks)</h2>
    <ul>
        @foreach ($trucks as $truck)
            <li>{{ $truck->name }}</li>
        @endforeach
    </ul>

    <h2>Name (trailers)</h2>
    <ul>
        @foreach ($trailers as $trailer)
            <li>{{ $trailer->name }}</li>
        @endforeach
    </ul>
        
</main>

</body>
</html>