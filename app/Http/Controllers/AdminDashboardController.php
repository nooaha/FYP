<?php

namespace App\Http\Controllers;
use App\Models\MilestoneChecklist;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $checklists = MilestoneChecklist::orderBy('updated_at', 'desc')->take(5)->get();
        
        return view('admin.admin-dashboard', compact('checklists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
