<?php

namespace App\Http\Controllers;

use App\Models\deleted_conversation;
use Illuminate\Http\Request;

class DeletedConversationController extends Controller
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
     * @param  \App\Models\deleted_conversation  $deleted_conversation
     * @return \Illuminate\Http\Response
     */
    public function show(deleted_conversation $deleted_conversation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\deleted_conversation  $deleted_conversation
     * @return \Illuminate\Http\Response
     */
    public function edit(deleted_conversation $deleted_conversation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\deleted_conversation  $deleted_conversation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, deleted_conversation $deleted_conversation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\deleted_conversation  $deleted_conversation
     * @return \Illuminate\Http\Response
     */
    public function destroy(deleted_conversation $deleted_conversation)
    {
        //
    }
}
