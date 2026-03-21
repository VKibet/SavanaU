<?php

use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HikeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Models\Hike;
use App\Models\Product;
use Illuminate\Support\Facades\Schema;

Route::get('/', function () {
    $hikes = Schema::hasTable('hikes') ? Hike::latest()->get() : collect();
    $products = Schema::hasTable('products') ? Product::where('active', true)->latest()->get() : collect();

    return view('welcome', [
        'hikes' => $hikes,
        'products' => $products,
    ]);
});

Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/hikes', HikeController::class)->except('show');
    Route::resource('/products', ProductController::class)->except('show');
    Route::get('/bookings', [AdminBookingController::class, 'index'])->name('bookings.index');
    Route::delete('/bookings/{booking}', [AdminBookingController::class, 'destroy'])->name('bookings.destroy');
});