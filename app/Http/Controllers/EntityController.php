<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use App\Models\EntitySection;
use App\Models\Location;
use Illuminate\Http\Request;


class EntityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entities = Entity::all();
        return view('entities.index', compact('entities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $entitysections = EntitySection::all();
        $locations = Location::all();
        return view ('entities.create', compact('entitysections','locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'entity_section_id' => ['required', 'exists:entity_sections,id'],
            'location_id' => ['required', 'exists:locations,id'],
            'description' => ['string'],
        ]);

        Entity::create($validated);

        return redirect()->route('entities.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(entity $entity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(entity $entity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, entity $entity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(entity $entity)
    {
        //
    }
}
