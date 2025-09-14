<?php

// app/Http/Controllers/ShelterController.php
namespace App\Http\Controllers;
use App\Models\AdoptionListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pet;

class ShelterController extends Controller {
    public function dashboard() {
        $listings = AdoptionListing::where('user_id',Auth::id())->get();
        return view('shelter.dashboard',compact('listings'));
    }
    public function checkPets(){
        $pets = Pet::all();
        return view('adoption.public', compact('pets'));
    }
    public function create() { return view('shelter.create'); }
    public function store(Request $r) {
        $path = $r->file('image')?->store('adoptions','public');
        AdoptionListing::create([
            'user_id'=>Auth::id(),
            'pet_name'=>$r->pet_name,
            'species'=>$r->species,
            'breed'=>$r->breed,
            'age'=>$r->age,
            'health_status'=>$r->health_status,
            'status'=>'available',
            'image'=>$path
        ]);
        return redirect()->route('shelter.dashboard');
    }
    public function update(Request $r, AdoptionListing $listing) {
        $listing->update($r->only('status','health_status'));
        return back();
    }
}
