<!-- resources/views/admin/auth/dashboard.blade.php -->

<h1>Admin Dashboard</h1>

<h2>Users</h2>
<ul>
    @foreach ($users as $user)
        <li>
            {{ $user->name }}
            <form action="{{ route('admin.users.softDelete', $user) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Soft Delete</button>
            </form>
            
            
            
        </li>
    @endforeach
</ul>
