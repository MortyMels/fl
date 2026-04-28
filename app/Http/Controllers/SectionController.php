<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = Section::all();
        return view('section.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('section.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'name'  => ['required', 'string', 'min:7'],
        ]);
        Section::create($validated);
        return redirect()->route('sections.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $Section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $Section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Section $Section)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $Section)
    {
        //
    }
}
