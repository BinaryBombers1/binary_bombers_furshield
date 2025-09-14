<?php
// app/Http/Controllers/VetController.php
namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class VetController extends Controller
{
    public function dashboard()
    {
        $appointments = Auth::user()->vetAppointments()->with('pet', 'owner')->get();
        return view('vet.dashboard', compact('appointments'));
    }
    public function updateProfile(Request $r)
    {
        Auth::user()->update($r->only('specialization', 'experience', 'available_slots'));
        return back();
    }
    public function updateAppointment(Appointment $appointment, Request $r)
    {
        $appointment->update(['status' => $r->status]);

        if ($r->status === 'approved') {
            $appointment->owner->notify(new \App\Notifications\AppointmentConfirmed());
        }

        return back();
    }
}
