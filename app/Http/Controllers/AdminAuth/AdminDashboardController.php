<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Models\User; 
use Illuminate\View\View;

class AdminDashboardController extends Controller
{
//     public function index(): View
// {
//     return view('admin.auth.dashboard');
// }
    public function index(): View
    {
        $users = User::all(); 

        return view('admin.auth.dashboard', compact('users'));
    }
}
