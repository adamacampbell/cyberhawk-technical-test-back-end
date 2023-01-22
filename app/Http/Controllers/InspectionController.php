<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInspectionRequest;
use App\Http\Requests\UpdateInspectionRequest;
use App\Models\Inspection;

class InspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inspection::all();
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
     * @param  \App\Http\Requests\StoreInspectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInspectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inspection  $inspection
     * @return \Illuminate\Http\Response
     */
    public function show(Inspection $inspection)
    {
        return $inspection;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inspection  $inspection
     * @return \Illuminate\Http\Response
     */
    public function edit(Inspection $inspection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInspectionRequest  $request
     * @param  \App\Inspection  $inspection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInspectionRequest $request, Inspection $inspection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inspection  $inspection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inspection $inspection)
    {
        //
    }

    /**
     * Get grades based on inspection ID
     * 
     * @param Illuminate\Http\Request $inspectionID
     * @return \Illuminate\Http\Response
     */
    public function getGrades(Request $request) {
        $inspection = Inspection::find($request->inspectionID);
        return $inspection->grades;
    }

    /**
     * Get grades based on inspection and Grade ID
     * 
     * @param Illuminate\Http\Request $inspectionID
     * @param Illuminate\Http\Request $gradeID
     * @return \Illuminate\Http\Response
     */
    public function getGrade(Request $request) {
        $inspection = Inspection::find($request->inspectionID);
        $gradeId = $request->gradeID;
        return $inspection->grades->where('id', $gradeId);
    }
}
