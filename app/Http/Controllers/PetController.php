<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetController extends Controller
{
    // list pets for logged in user
    public function index()
    {
        $pets = Pet::where('user_id', Auth::id())->get();
        return view('pets.index', compact('pets'));
    }

    // show create form
    public function create()
    {
        return view('pets.create');
    }

    // store new pet
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'name'    => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'breed'   => 'nullable|string|max:255',
            'age'     => 'nullable|integer',
            'gender'  => 'nullable|string|max:50',
            'medical_history' => 'nullable|string',
        ]);

        Pet::create([
            'user_id'        => Auth::id(),
            'name'           => $request->name,
            'species'        => $request->species,
            'breed'          => $request->breed,
            'age'            => $request->age,
            'gender'         => $request->gender,
            'medical_history'=> $request->medical_history,
        ]);

        return redirect()->route('pets.index')->with('success','Pet added.');
    }

    // edit form
    public function edit(Pet $pet)
    {
        return view('pets.edit', compact('pet'));
    }

    // update pet
    public function update(Request $request, Pet $pet)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'breed'   => 'nullable|string|max:255',
            'age'     => 'nullable|integer',
            'gender'  => 'nullable|string|max:50',
            'medical_history' => 'nullable|string',
        ]);

        $pet->update($request->only([
            'name','species','breed','age','gender','medical_history'
        ]));

        return redirect()->route('pets.index')->with('success','Pet updated.');
    }

    // delete pet
    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect()->route('pets.index')->with('success','Pet deleted.');
    }
}
