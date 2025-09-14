<?php

// database/seeders/AdoptionSeeder.php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\AdoptionListing;
use App\Models\User;

class AdoptionSeeder extends Seeder {
    public function run(): void {
        $shelter = User::where('role','shelter')->first();
        AdoptionListing::create([
            'user_id'=>$shelter->id,
            'pet_name'=>'Max',
            'species'=>'Dog',
            'breed'=>'Beagle',
            'age'=>2,
            'health_status'=>'Healthy',
            'status'=>'available'
        ]);
        AdoptionListing::create([
            'user_id'=>$shelter->id,
            'pet_name'=>'Luna',
            'species'=>'Cat',
            'breed'=>'Siamese',
            'age'=>1,
            'health_status'=>'Vaccinated',
            'status'=>'available'
        ]);
    }
}
