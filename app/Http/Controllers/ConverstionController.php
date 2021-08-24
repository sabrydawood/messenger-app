<?php

namespace App\Http\Controllers;

use App\Models\converstion;
use Illuminate\Http\Request;

class ConverstionController extends Controller
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
     * @param  \App\Models\converstion  $converstion
     * @return \Illuminate\Http\Response
     */
    public function show(converstion $converstion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\converstion  $converstion
     * @return \Illuminate\Http\Response
     */
    public function edit(converstion $converstion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\converstion  $converstion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, converstion $converstion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\converstion  $converstion
     * @return \Illuminate\Http\Response
     */
    public function destroy(converstion $converstion)
    {
        //
    }
}
