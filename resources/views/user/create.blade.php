<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Booking Form</title>
</head>
<body>
    <h1 class="text-4xl font-bold text-center mt-8">Book your travel</h1>

    <form method="POST" action="{{ route('bookings.store') }}" class="max-w-md mx-auto">
        @csrf
    
        <input type="hidden" name="passenger_id" value="{{ auth()->user()->id }}">
        
    
        <div class="mb-4">
            <label for="departure_city" class="block text-gray-700 text-sm font-bold mb-2">Departure City:</label>
            <input id="departure_city" type="text" name="departure_city" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
    
        <div class="mb-6">
            <label for="destination_city" class="block text-gray-700 text-sm font-bold mb-2">Destination City:</label>
            <input id="destination_city" type="text" name="destination_city" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Book Now</button>
        </div>
    </form>
    
</body>
</html>
