<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Stormtrooper;
use App\Http\Requests\StoreStormtrooperRequest;
use App\Http\Requests\UpdateStormtrooperRequest;
use Illuminate\Support\Facades\DB;

class StormtrooperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stormtroopers = Stormtrooper::all();
        
        return view('stormtroopers.index', ['stormtroopers'=> $stormtroopers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stormtroopers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStormtrooperRequest $request)
    {
        Stormtrooper::create($request->all());
        Accessory::create($request->all());
        return back()->with("success", "hozzáadva");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Stormtrooper $stormtrooper)
    {
        $accessory = DB::table("accessories")->where('id', $stormtrooper->id)->get();
    
    return view('stormtrooper.show', [
        "stormtrooper" => $stormtrooper, 
        "accessory" => $accessory
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stormtrooper $stormtrooper)
    {
        $accessory = DB::table("accessories")->where('id', $stormtrooper->id)->get();
        return view('stormtrooper.edit', ["stormtrooper" => $stormtrooper, "accessories" => $accessory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStormtrooperRequest $request, Stormtrooper $stormtrooper)
    {

        $stormtrooper -> update($request->all());
        return back()->with("success", "módosítva");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stormtrooper $stormtrooper)
    {

        DB::table("accessories")->where('id', $stormtrooper->id)->delete();
        $stormtrooper->delete();
        return back()->with("success", "törölve");
    }
}
