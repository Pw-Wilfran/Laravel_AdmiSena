<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apprentice = Apprentice::all();
        return view('apprentices.index', compact('apprentice'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apprentices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $apprentice = new Apprentice();
        $apprentice->name = $request->name;
        $apprentice->email = $request->email;
        $apprentice->call_number = $request->call_number;

        return $apprentice;
    }

    /**
     * Display the specified resource.
     */
    public function show(Apprentice $apprentice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apprentice $apprentice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apprentice $apprentice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apprentice $apprentice)
    {
        //
    }
}
