<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CabHUB</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap" rel="stylesheet"> 
</head>
<body class="font-sans">
    <header id="page_header" class="flex items-center justify-between py-4 px-6 bg-blue-500 text-white">
        <nav id="nav_bar">
            <ul id="nav_list" class="flex">
                <li class="nav_link"><a href="#" class="px-4 py-2">HOME</a></li>
                <li class="nav_link"><a href="#" class="px-4 py-2">BOOK</a></li>
            </ul>
        </nav>
    </header>
<body>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <ul class="max-w-xl mx-auto">
            @foreach ($bookings as $booking)
                <li class="bg-white rounded-lg shadow-md p-4 mb-4">
                    <h4>Passenger: {{ $booking->user->name ?? 'Unknown' }}</h4>
                    <span class="block mb-2">Departure City: {{ $booking->departure_city }}, Destination City: {{ $booking->destination_city }}</span>
                    @if (auth()->user()->role === 'driver')
                        <form method="POST" action="{{ route('bookings.dash', [$booking->id]) }}" class="inline">
                            @csrf
                            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">Assign</button>
                        </form>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
