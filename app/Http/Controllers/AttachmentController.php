<?php

namespace App\Http\Controllers;

use App\Models\attachment;
use Illuminate\Http\Request;

class AttachmentController extends Controller
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
     * @param  \App\Models\attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function show(attachment $attachment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function edit(attachment $attachment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, attachment $attachment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function destroy(attachment $attachment)
    {
        //
    }
}
