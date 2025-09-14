<?php

// database/seeders/AppointmentSeeder.php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Pet;

class AppointmentSeeder extends Seeder {
    public function run(): void {
        $owner = User::where('role','owner')->first();
        $vet   = User::where('role','vet')->first();
        $pet   = Pet::first();

        Appointment::create([
            'pet_id' => $pet->id,
            'user_id' => $owner->id,
            'vet_id' => $vet->id,
            'appointment_time' => now()->addDays(2),
            'status' => 'approved'
        ]);

        Appointment::create([
            'pet_id' => $pet->id,
            'user_id' => $owner->id,
            'vet_id' => $vet->id,
            'appointment_time' => now()->addWeek(),
            'status' => 'pending'
        ]);
    }
}
