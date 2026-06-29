<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
   public function index()
    {
        $appointments = Appointment::with(['client', 'service', 'levelApp'])->get();
        return view('appointments.index', compact('appointments'));
    }
}
