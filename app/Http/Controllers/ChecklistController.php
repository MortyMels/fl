<?php

namespace App\Http\Controllers;

use App\Models\Checklist;
use App\Models\Point;
use Illuminate\Http\Request;

class ChecklistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $checklists = Checklist::all();
        return view('checklist.index', compact('checklists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('checklist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'min:7'],
            'description' => ['required', 'string', 'min:7'],
        ]);
        Checklist::create($validated);
        return redirect()->route('checklists.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(checklist $checklist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(checklist $checklist)
    {
        return view('checklist.edit', compact('checklist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, checklist $checklist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(checklist $checklist)
    {
        //
    }

    /**
     * Add a point to checklist
     */
    public function addPoint(Request $request, Checklist $checklist)
    {
        $validated = $request->validate([
            'points' => ['array'],
            'points.*' => ['exists:points,id'],
        ]);

        $checklist->points()->sync($validated['points'] ?? []);

        return redirect()->route('checklists.edit', $checklist->id);
    }
}
