<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BuktiBookingController extends Controller
{
    public function index() {
        $bookings = Booking::latest()->paginate(1);
        return view('show', compact('bookings'));
    }
}
