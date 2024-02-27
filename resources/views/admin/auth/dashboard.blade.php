<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
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