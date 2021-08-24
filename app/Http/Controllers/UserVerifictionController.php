<?php

namespace App\Http\Controllers;

use App\Models\user_verifiction;
use Illuminate\Http\Request;

class UserVerifictionController extends Controller
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
     * @param  \App\Models\user_verifiction  $user_verifiction
     * @return \Illuminate\Http\Response
     */
    public function show(user_verifiction $user_verifiction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_verifiction  $user_verifiction
     * @return \Illuminate\Http\Response
     */
    public function edit(user_verifiction $user_verifiction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user_verifiction  $user_verifiction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user_verifiction $user_verifiction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_verifiction  $user_verifiction
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_verifiction $user_verifiction)
    {
        //
    }
}
