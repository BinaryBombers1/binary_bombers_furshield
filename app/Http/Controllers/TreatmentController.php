<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class TreatmentController extends Controller {
    public function create(Appointment $appointment) {
        return view('treatments.create',compact('appointment'));
    }
    public function store(Request $r, Appointment $appointment) {
        $appointment->treatment()->create($r->all());
        return redirect()->route('vet.dashboard');
    }
}
