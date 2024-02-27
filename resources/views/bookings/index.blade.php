<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookings</title>
</head>
<body>
    <ul>
        @foreach ($bookings as $booking)
                <li>
                    Departure City: {{ $booking->departure_city }}, Destination City: {{ $booking->destination_city }}
                    @if (auth()->user()->role === 'driver')
                        <form method="POST" action="{{ route('bookings.dash', [$booking->id]) }}" class="inline">
                            @csrf
                            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Assign</button>
                        </form>
                    @endif
                </li>
                
        @endforeach
        
        
    </ul>
</body>
</html>
