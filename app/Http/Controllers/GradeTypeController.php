<?php

namespace App\Http\Controllers;

use App\Models\GradeType;
use App\Http\Requests\StoreGradeTypeRequest;
use App\Http\Requests\UpdateGradeTypeRequest;

class GradeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return GradeType::all();
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
     * @param  \App\Http\Requests\StoreGradeTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGradeTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GradeType  $gradeType
     * @return \Illuminate\Http\Response
     */
    public function show(GradeType $gradeType)
    {
        return $gradeType;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GradeType  $gradeType
     * @return \Illuminate\Http\Response
     */
    public function edit(GradeType $gradeType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGradeTypeRequest  $request
     * @param  \App\GradeType  $gradeType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGradeTypeRequest $request, GradeType $gradeType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GradeType  $gradeType
     * @return \Illuminate\Http\Response
     */
    public function destroy(GradeType $gradeType)
    {
        //
    }
}
