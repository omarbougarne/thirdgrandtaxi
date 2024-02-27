<?php 
namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }
    public function create()
    {
        return view('bookings.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'departure_city' => ['required', 'string', 'max:255'],
        'destination_city' => ['required', 'string', 'max:255'],
    ]);
    $user_id = auth()->id();
    $booking = Booking::create([
        'user_id' => $user_id,
        'departure_city' => $request->departure_city,
        'destination_city' => $request->destination_city,
    ]);

    
    return back();
}


}
