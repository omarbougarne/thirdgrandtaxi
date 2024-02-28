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
    <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>

<h2 class="text-xl font-bold mb-2">Users</h2>
<ul>
    @foreach ($users as $user)
        <li class="flex items-center justify-between mb-2">
            <span class="text-lg">{{ $user->name }}</span>
            <form action="{{ route('admin.users.softDelete', $user) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">Soft Delete</button>
            </form>
        </li>
    @endforeach
</ul>

</body>
</html>