<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTurbineRequest;
use App\Http\Requests\UpdateTurbineRequest;
use App\Models\Turbine;

class TurbineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Turbine::all();
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
     * @param  \App\Http\Requests\StoreTurbineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTurbineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turbine  $turbine
     * @return \Illuminate\Http\Response
     */
    public function show(Turbine $turbine)
    {
        return $turbine;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turbine  $turbine
     * @return \Illuminate\Http\Response
     */
    public function edit(Turbine $turbine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTurbineRequest  $request
     * @param  \App\Turbine  $turbine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTurbineRequest $request, Turbine $turbine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turbine  $turbine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turbine $turbine)
    {
        //
    }

    /**
     * Get components based on turbine ID
     * 
     * @param Illuminate\Http\Request $turbineID
     * @return \Illuminate\Http\Response
     */
    public function getComponents(Request $request) {
        $turbine = Turbine::find($request->turbineID);
        return $turbine->components;
    }

    /**
     * Get component based on turbine and component ID
     * 
     * @param Illuminate\Http\Request $turbineID
     * @param Illuminate\Http\Request $componentID
     * @return \Illuminate\Http\Response
     */
    public function getComponent(Request $request) {
        $turbine = Turbine::find($request->turbineID);
        $componentId = $request->componentID;
        return $turbine->components->where('id', $componentId);
    }

    /**
     * Get inspections based on turbine ID
     * 
     * @param Illuminate\Http\Request $turbineID
     * @return \Illuminate\Http\Response
     */
    public function getInspections(Request $request) {
        $turbine = Turbine::find($request->turbineID);
        return $turbine->inspections;
    }

    /**
     * Get inspections based on turbine ID
     * 
     * @param Illuminate\Http\Request $turbineID
     * @param Illuminate\Http\Request $inspectionID
     * @return \Illuminate\Http\Response
     */
    public function getInspection(Request $request) {
        $turbine = Turbine::find($request->turbineID);
        $inspectionId = $request->inspectionID;
        return $turbine->inspections->where('id', $inspectionId);
    }
}
