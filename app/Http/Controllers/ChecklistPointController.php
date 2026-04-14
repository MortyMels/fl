<?php

namespace App\Http\Controllers;

use App\Models\ChecklistPoint;
use Illuminate\Http\Request;

class ChecklistPointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $checklistpoints = ChecklistPoint::all();
        return view('checklistpoint.index', compact('checklistpoints'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $checklistsections = \App\Models\ChecklistSection::all();
        return view('checklistpoint.create', compact('checklistsections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'checklist_section_id'  => ['required', 'exists:checklist_sections,id'],
        'requirement'  => ['required', 'string', 'min:7'],
        'description' => ['required', 'string', 'min:11'],
        ]);
        ChecklistPoint::create($validated);
        return redirect()->route('checklistpoints.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ChecklistPoint $checklistPoint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChecklistPoint $checklistPoint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ChecklistPoint $checklistPoint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChecklistPoint $checklistPoint)
    {
        //
    }
}
