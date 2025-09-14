<?php

// database/seeders/PetSeeder.php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Pet;
use App\Models\User;

class PetSeeder extends Seeder {
    public function run(): void {
        $owner = User::where('role','owner')->first();
        Pet::create([
            'user_id'=>$owner->id,
            'name'=>'Buddy',
            'species'=>'Dog',
            'breed'=>'Labrador',
            'age'=>3,
            'gender'=>'Male'
        ]);
        Pet::create([
            'user_id'=>$owner->id,
            'name'=>'Whiskers',
            'species'=>'Cat',
            'breed'=>'Persian',
            'age'=>2,
            'gender'=>'Female'
        ]);
    }
}
