<?php

use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
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
    Route::resource('shokunin', PackageController::class);
    Route::get('/packages/search', [PackageController::class, 'search'])->name('packages.search');
    Route::get('/packages/check', [PackageController::class, 'check'])->name('packages.check');
    Route::get('reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
    Route::post('reservations/store', [ReservationController::class, 'store'])->name('reservations.store');
    Route::get('reservations/check', [ReservationController::class, 'check'])->name('reservations.check');
    // 検証用 
    // Route::get('/packages/show', [PackageController::class, 'show'])->name('packages.show');
});

require __DIR__ . '/auth.php';
