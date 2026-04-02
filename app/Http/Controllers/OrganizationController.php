<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;

class OrganizationController extends Controller
{
    /**
     * Display alisting of the resource.
     */
    public function index()
    {
        $organizations = Organization::all();
        return view('organization.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organization.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'name'  => ['required', 'string', 'min:7'],
        'sname' => ['required', 'string', 'min:3'],
        // Передаем правила массивом, чтобы regex не ломался
        'tin'   => ['required', 'string', 'unique:organizations,tin', 'regex:/^\d{10}$/'], 
        ]);
        Organization::create($validated);
        return redirect()->route('organizations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
