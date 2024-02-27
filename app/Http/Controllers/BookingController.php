<?php 
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
public function assign($id)
{
    $user = auth()->user();

    if ($user->role === 'driver') {
        $booking = Booking::with('user_id')->find($id);
        if ($booking) {
            $userName = $booking->user->name;
            return view('bookings.dash', compact('booking', 'userName'));
        }

        return redirect()->back()->with('error', 'Booking not found.');
    }
    return redirect()->back()->with('error', 'Only drivers can assign bookings.');
}
public function createrating()
    {
        return view('bookings.rating');
    }
public function reviewstore(Request $request){
    $user_id = Auth::id();
    $booking = Booking::where('user_id', $user_id)->first();
    $booking = $booking->id;
    
    $review = Rating::create([
        'comment' => $request->comment,
        'star_rating' => $request->rating,
        'booking_id' => $booking, 
    ]);
    $review->save();
    return redirect()->back()->with('flash_msg_success','Your review has been submitted Successfully,');
}

}



