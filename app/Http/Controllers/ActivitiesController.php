<?php

namespace App\Http\Controllers;

use App\Models\activities;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function show(activities $activities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function edit(activities $activities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, activities $activities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function destroy(activities $activities)
    {
        //
    }
}
