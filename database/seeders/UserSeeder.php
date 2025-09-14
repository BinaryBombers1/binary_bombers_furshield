<?php

// database/seeders/UserSeeder.php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    public function run(): void {
        User::create([
            'name'=>'Alice admin',
            'email'=>'admin@test.com',
            'password'=>Hash::make('password'),
            'role'=>'admin'
        ]);
        // Owner
        User::create([
            'name'=>'Alice Owner',
            'email'=>'owner@test.com',
            'password'=>Hash::make('password'),
            'role'=>'owner'
        ]);

        // Vet
        User::create([
            'name'=>'Dr. Bob Vet',
            'email'=>'vet@test.com',
            'password'=>Hash::make('password'),
            'role'=>'vet',
            'specialization'=>'General',
            'experience'=>5
        ]);

        // Shelter
        User::create([
            'name'=>'Happy Paws Shelter',
            'email'=>'shelter@test.com',
            'password'=>Hash::make('password'),
            'role'=>'shelter'
        ]);
    }
}
