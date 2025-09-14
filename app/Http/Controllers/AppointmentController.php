<?php

// app/Http/Controllers/AppointmentController.php
namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AppointmentController extends Controller {
    public function index() {
        $appointments = Auth::user()->appointments()->with('pet','vet')->get();
        return view('appointments.index',compact('appointments'));
    }
    public function create() {
        $pets = Auth::user()->pets;
        $vets = User::where('role','vet')->get();
        return view('appointments.create',compact('pets','vets'));
    }
    public function store(Request $r) {
        Appointment::create([
            'pet_id'=>$r->pet_id,
            'user_id'=>Auth::id(),
            'vet_id'=>$r->vet_id,
            'appointment_time'=>$r->appointment_time,
        ]);
        return redirect()->route('appointments.index');
    }
    public function destroy(Appointment $appointment) {
        $appointment->delete();
        return back();
    }
}
