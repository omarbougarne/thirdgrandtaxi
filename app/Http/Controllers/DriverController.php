<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    public function index()
    {
        if (Auth::user()->role != 'driver') {
            return redirect('/'); 
        }else{
        
        return view('user.driver');}
    }
}

