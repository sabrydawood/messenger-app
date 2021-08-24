<?php

namespace App\Http\Controllers;

use App\Models\deleted_message;
use Illuminate\Http\Request;

class DeletedMessageController extends Controller
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
     * @param  \App\Models\deleted_message  $deleted_message
     * @return \Illuminate\Http\Response
     */
    public function show(deleted_message $deleted_message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\deleted_message  $deleted_message
     * @return \Illuminate\Http\Response
     */
    public function edit(deleted_message $deleted_message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\deleted_message  $deleted_message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, deleted_message $deleted_message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\deleted_message  $deleted_message
     * @return \Illuminate\Http\Response
     */
    public function destroy(deleted_message $deleted_message)
    {
        //
    }
}
