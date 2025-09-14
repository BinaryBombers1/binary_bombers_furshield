<?php

namespace App\Http\Controllers;

use App\Models\HealthRecord;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HealthRecordController extends Controller
{
    /**
     * List all health records for a specific pet.
     */
    public function index(Pet $pet)
    {
        $records = $pet->healthRecords;
        return view('health.index', compact('pet', 'records'));
    }

    /**
     * Show form to create a new health record.
     */
    public function create(Pet $pet)
    {
        return view('health.create', compact('pet'));
    }

    /**
     * Store a new health record for the pet.
     */
    public function store(Request $request, Pet $pet)
    {
        $data = $request->validate([
            'visit_date' => 'required|date',
            'type'       => 'required|string|max:255',
            'notes'      => 'nullable|string',
            'document'   => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120', // optional file
        ]);

        if ($request->hasFile('document') && $request->file('document')->isValid()) {
            $data['document'] = $request->file('document')->store('records', 'public');
        }

        $data['user_id'] = Auth::id();

        $pet->healthRecords()->create($data);

        return redirect()->route('pets.health.index', $pet)
                         ->with('success', 'Record added successfully.');
    }

    /**
     * Show form to edit an existing health record.
     */
    public function edit(Pet $pet, HealthRecord $health)
    {
        return view('health.edit', [
            'pet'    => $pet,
            'record' => $health
        ]);
    }

    /**
     * Update a specific health record.
     */
    public function update(Request $request, Pet $pet, HealthRecord $health)
    {
        $data = $request->validate([
            'visit_date' => 'required|date',
            'type'       => 'required|string|max:255',
            'notes'      => 'nullable|string',
            'document'   => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120', // optional file
        ]);

        if ($request->hasFile('document') && $request->file('document')->isValid()) {
            $data['document'] = $request->file('document')->store('records', 'public');
        }

        $health->update($data);

        return redirect()->route('pets.health.index', $pet)
                         ->with('success', 'Record updated successfully.');
    }

    /**
     * Delete a health record.
     */
    public function destroy(Pet $pet, HealthRecord $health)
    {
        $health->delete();
        return back()->with('success', 'Record deleted successfully.');
    }
}
