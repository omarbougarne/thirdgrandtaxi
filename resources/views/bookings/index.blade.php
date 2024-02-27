<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookings</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
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
