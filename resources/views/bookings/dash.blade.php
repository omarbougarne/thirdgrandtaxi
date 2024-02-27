<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Dashboard</h1>
                @if (auth()->user()->role === 'driver')
                    <p>Welcome, {{ auth()->user()->name }}!</p>
                    @if ($booking)
                        <h2>Your Assigned Booking</h2>
                        <ul>
                            <li>Departure City: {{ $booking->departure_city }}</li>
                            <li>Destination City: {{ $booking->destination_city }}</li>
                        </ul>
                    @else
                        <p>No booking assigned yet.</p>
                    @endif
                @else
                    <p>You are not authorized to view this page.</p>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
