<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Component;
use App\Http\Requests\StoreComponentRequest;
use App\Http\Requests\UpdateComponentRequest;
use App\Models\Grade;

class ComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Component::all();
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
     * @param  \App\Http\Requests\StoreComponentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComponentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function show(Component $component)
    {
        $component;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function edit(Component $component)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComponentRequest  $request
     * @param  \App\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComponentRequest $request, Component $component)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function destroy(Component $component)
    {
        //
    }

    /**
     * Get grades based on component ID
     * 
     * @param Illuminate\Http\Request $componentID
     * @return \Illuminate\Http\Response
     */
    public function getGrades(Request $request) {
        $component = Component::find($request->componentID);
        return $component->grades;
    }

    /**
     * Get grades based on component and Grade ID
     * 
     * @param Illuminate\Http\Request $componentID
     * @param Illuminate\Http\Request $gradeID
     * @return \Illuminate\Http\Response
     */
    public function getGrade(Request $request) {
        $component = Component::find($request->componentID);
        $gradeId = $request->gradeID;
        return $component->grades->where('id', $gradeId);
    }
}
