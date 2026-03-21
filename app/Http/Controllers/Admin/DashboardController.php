<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Hike;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'hikesCount' => Hike::count(),
            'productsCount' => Product::count(),
            'bookingsCount' => Booking::count(),
            'recentBookings' => Booking::latest()->take(5)->get(),
        ]);
    }
}