<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:40',
            'hike' => 'required|string|max:255',
            'start_date' => 'nullable|date',
            'pax' => 'required|integer|min:1|max:100',
            'notes' => 'nullable|string',
        ]);

        Booking::create($data);

        return redirect('/#booking')->with('success', 'Booking submitted. We will contact you shortly.');
    }
}
