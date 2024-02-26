<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passenger Dashboard</title>
</head>
<body>
    <form method="POST" action="{{ route('passenger.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-label for="name" :value="__('Name')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="email" :value="__('Email')" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Password')" />

            <x-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
        </div>

        <!-- Departure City -->
        <div class="mt-4">
            <x-label for="departure_city" :value="__('Departure City')" />

            <x-input id="departure_city" class="block mt-1 w-full" type="text" name="departure_city" :value="old('departure_city')" />
        </div>

        <!-- Destination City -->
        <div class="mt-4">
            <x-label for="destination_city" :value="__('Destination City')" />

            <x-input id="destination_city" class="block mt-1 w-full" type="text" name="destination_city" :value="old('destination_city')" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button>
                {{ __('Register') }}
            </x-button>
        </div>
    </form>

</body>
</html>