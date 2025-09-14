<?php

// database/seeders/HealthRecordSeeder.php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\HealthRecord;
use App\Models\Pet;
use App\Models\User;

class HealthRecordSeeder extends Seeder {
    public function run(): void {
        $owner = User::where('role','owner')->first();
        $pet   = Pet::first();

        HealthRecord::create([
            'pet_id' => $pet->id,
            'user_id' => $owner->id,
            'visit_date' => now()->subMonths(3),
            'type' => 'Vaccination',
            'notes' => 'Rabies vaccine administered',
        ]);

        HealthRecord::create([
            'pet_id' => $pet->id,
            'user_id' => $owner->id,
            'visit_date' => now()->subMonth(),
            'type' => 'Checkup',
            'notes' => 'General wellness check',
        ]);
    }
}
