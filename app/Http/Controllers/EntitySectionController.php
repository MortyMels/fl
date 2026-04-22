<?php

namespace App\Http\Controllers;

use App\Models\EntitySection;
use App\Models\Entity;
use Illuminate\Http\Request;

class EntitySectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entitysections = EntitySection::all();
        return view('entitysections.index', compact('entitysections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entitysections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'min:11'],
            'is_public' => ['boolean'],
        ]);

        EntitySection::create($validate);
        //return redirect()->route('entitysections.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(entity_section $entity_section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(entity_section $entity_section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, entity_section $entity_section)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(entity_section $entity_section)
    {
        //
    }
}
