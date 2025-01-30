<?php

namespace App\Http\Controllers;

use App\Models\Trooper;
use App\Http\Requests\StoreTrooperRequest;
use App\Http\Requests\UpdateTrooperRequest;
use Illuminate\Support\Facades\DB;

class TrooperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trooper = Trooper::all()->sortByDesc("id"); //Select * From tanks;

        return view("troopers.index", ["trooper" => $trooper]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('troopers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrooperRequest $request)
    {
        $newTrooper = Trooper::create($request->all());

        return back()->with("success", "Add");
    }

    /**
     * Display the specified resource.
     */
    public function show(Trooper $trooper)
    {
        return view("troopers.show", ["trooper" => $trooper]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trooper $trooper)
    {
        return view("troopers.edit", ["trooper" => $trooper]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrooperRequest $request, Trooper $trooper)
    {
        $trooper->update($request->all());
        return back()->with("success", "{$trooper->name} frissítve.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trooper $trooper)
    {
        $trooper->delete();
        return back()->with("success", "{$trooper->name} törölve.");
    }
}
