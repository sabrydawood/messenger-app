<?php

namespace App\Http\Controllers;

use App\Models\friend;
use Illuminate\Http\Request;

class FriendController extends Controller
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
     * @param  \App\Models\friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function show(friend $friend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function edit(friend $friend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, friend $friend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function destroy(friend $friend)
    {
        //
    }
}
