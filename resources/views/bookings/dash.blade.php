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
    <header id="page_header" class="flex items-center justify-between py-4 px-6 bg-yellow-500 text-white">
        <nav id="nav_bar">
            <ul id="nav_list" class="flex">
                <li class="nav_link"><a href="#" class="px-4 py-2">HOME</a></li>
                <li class="nav_link"><a href="#" class="px-4 py-2">BOOK</a></li>
            </ul>
        </nav>
    </header>
<body>
    <header id="page_header">
        <div id="logo">
            <img src="pics/cab hub.png" alt="Cab HUB">
            <br>
            <img src="pics/relax.png" alt="relax">
        </div>
        <nav id="nav_bar">
            <ul id="nav_list">
                <li class="nav_link">HOME</li>
                <li class="nav_link">ABOUT</li>
                <li class="nav_link">FEATURES</li>
                <li class="nav_link">BLOG</li>
                <li class="nav_link">ORDER NOW</li>
                <li class="nav_link">CONTACTS</li>
            </ul>
        </nav>
    </header>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <div class="max-w-xl mx-auto bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-3xl font-bold mb-4">Dashboard</h1>
            @if (auth()->user()->role === 'driver')
                <p class="text-lg">Welcome, {{ auth()->user()->user->name }}!</p>
                @if ($booking)
                    <h2 class="text-xl font-bold mt-4 mb-2">Your Assigned Booking</h2>
                    <ul>
                        <li><span class="font-semibold">Departure City:</span> {{ $booking->departure_city }}</li>
                        <li><span class="font-semibold">Destination City:</span> {{ $booking->destination_city }}</li>
                    </ul>
                @else
                    <p class="mt-4">No booking assigned yet.</p>
                @endif
            @else
                <p class="text-red-500">You are not authorized to view this page.</p>
            @endif
        </div>
    </div>
</body>
</html>
