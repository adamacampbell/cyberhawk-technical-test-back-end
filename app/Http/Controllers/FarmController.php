<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFarmRequest;
use App\Http\Requests\UpdateFarmRequest;
use App\Models\Turbine;

class FarmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Farm::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFarmRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFarmRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function show(Farm $farm)
    {
        return $farm;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function edit(Farm $farm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFarmRequest  $request
     * @param  \App\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFarmRequest $request, Farm $farm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farm $farm)
    {
        //
    }

    /**
     * Get all turbines belonging to farm
     * 
     * @param Illuminate\Http\Request $farmID
     * @return \Illuminate\Http\Response
     */
    public function getTurbines(Request $request)
    {
        $farm = Farm::find($request->farmID);
        return $farm->turbines;
    }

    /**
     * Get turbine based on Farm and Turbine ID
     * 
     * @param Illuminate\Http\Request $farmID
     * @param Illuminate\Http\Request $turbineID
     * @return \Illuminate\Http\Response
     */
    public function getTurbine(Request $request) {
        $farmId = $request->farmID;
        $farm = Farm::find($farmId);
        $turbineId = $request->turbineID;
        return $farm->turbines->where('id', $turbineId);
    }
}
