<?php

namespace App\Http\Controllers;

use App\Models\chating;
use Illuminate\Http\Request;

class ChatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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


    public function store(Request $request)
    {
     
// $msg = $request->all();

dd($request->all());

    }

    public function show(chating $chating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chating  $chating
     * @return \Illuminate\Http\Response
     */
    public function edit(chating $chating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chating  $chating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chating $chating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chating  $chating
     * @return \Illuminate\Http\Response
     */
    public function destroy(chating $chating)
    {
        //
    }
}
