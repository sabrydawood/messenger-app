<?php

namespace App\Http\Controllers;

use App\Models\user_contact;
use Illuminate\Http\Request;

class UserContactController extends Controller
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
     * @param  \App\Models\user_contact  $user_contact
     * @return \Illuminate\Http\Response
     */
    public function show(user_contact $user_contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_contact  $user_contact
     * @return \Illuminate\Http\Response
     */
    public function edit(user_contact $user_contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user_contact  $user_contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user_contact $user_contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_contact  $user_contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_contact $user_contact)
    {
        //
    }
}
