<?php

use App\Http\Controllers\AdminAuth\AdminDashboardController;
use App\Http\Controllers\AdminAuth\AdminUserController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';

Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::delete('/admin/users/{user}', [AdminUserController::class, 'softDelete'])->name('admin.users.softDelete');
});
require __DIR__.'/adminauth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('/user/passenger', [PassengerController::class, 'create'])->name('passenger.create');
    Route::post('/user/passenger', [PassengerController::class, 'store'])->name('passenger.store');

    Route::get('/user/driver', [DriverController::class, 'create'])->name('driver.create');
    Route::post('/user/driver', [DriverController::class, 'store'])->name('driver.store');
});

