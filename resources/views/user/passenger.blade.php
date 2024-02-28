<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CabHUB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap" rel="stylesheet"> 
</head>
<body class="font-sans">
    <header id="page_header" class="flex items-center justify-between py-4 px-6 bg-yellow-500 text-white">
        <nav id="nav_bar">
            <ul id="nav_list" class="flex">
                <li class="nav_link"><a href="#" class="px-4 py-2">HOME</a></li>
                <li class="nav_link"><a href="#" class="px-4 py-2">BOOK</a></li>
                <li class="nav_link"><a href="#" class="px-4 py-2">FEATURES</a></li>
                <li class="nav_link"><a href="#" class="px-4 py-2">BLOG</a></li>
                <li class="nav_link"><a href="#" class="px-4 py-2">ORDER NOW</a></li>
                <li class="nav_link"><a href="#" class="px-4 py-2">CONTACTS</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>

<body>
    <form method="POST" action="{{ route('passenger.store') }}">
        @csrf
        <div>
            <x-label for="name" :value="__('Name')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
        </div>
        <div class="mt-4">
            <x-label for="email" :value="__('Email')" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
        </div>
        <div class="mt-4">
            <x-label for="password" :value="__('Password')" />

            <x-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
        </div>
        <div class="mt-4">
            <x-label for="departure_city" :value="__('Departure City')" />

            <x-input id="departure_city" class="block mt-1 w-full" type="text" name="departure_city" :value="old('departure_city')" />
        </div>
        
        <div class="flex items-center justify-end mt-4">
            <x-button>
                {{ __('Register') }}
            </x-button>
        </div>
    </form>

</body>
</html>
