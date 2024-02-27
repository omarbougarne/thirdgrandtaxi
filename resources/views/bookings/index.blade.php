<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($bookings as $booking)
            <li>
                Departure City: {{ $booking->departure_city }}, Destination City: {{ $booking->destination_city }}
            </li>
        @endforeach
    </ul>
</body>
</html>