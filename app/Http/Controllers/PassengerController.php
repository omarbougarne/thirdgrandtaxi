<?php 
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PassengerController extends Controller
{
    public function create()
    {
        return view('passenger.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'departure_city' => ['required', 'string', 'max:255'],
            'destination_city' => ['required', 'string', 'max:255'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'passenger',
            'departure_city' => $request->departure_city,
            'destination_city' => $request->destination_city,
        ]);

        // Redirect to a success page or dashboard
        return redirect()->route('passenger.create')->with('success', 'Passenger registered successfully!');
    }
}
