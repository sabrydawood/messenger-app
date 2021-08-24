<?php

namespace App\Http\Controllers;

use App\Models\particpants;
use Illuminate\Http\Request;

class ParticpantsController extends Controller
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
     * @param  \App\Models\particpants  $particpants
     * @return \Illuminate\Http\Response
     */
    public function show(particpants $particpants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\particpants  $particpants
     * @return \Illuminate\Http\Response
     */
    public function edit(particpants $particpants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\particpants  $particpants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, particpants $particpants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\particpants  $particpants
     * @return \Illuminate\Http\Response
     */
    public function destroy(particpants $particpants)
    {
        //
    }
}
