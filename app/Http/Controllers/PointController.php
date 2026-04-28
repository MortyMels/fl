<?php

namespace App\Http\Controllers;

use App\Models\Point;
use App\Models\Section;
use Illuminate\Http\Request;

class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $points = Point::all();
        return view('point.index', compact('points'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sections = Section::all();
        return view('point.create', compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'section_id'  => ['required', 'exists:sections,id'],
        'requirement'  => ['required', 'string', 'min:7'],
        'description' => ['required', 'string', 'min:11'],
        ]);
        Point::create($validated);
        return redirect()->route('points.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Point $Point)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Point $Point)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Point $Point)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Point $Point)
    {
        //
    }
}
