<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
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
