<?php

namespace App\Http\Controllers;

use App\Models\block_list;
use Illuminate\Http\Request;

class BlockListController extends Controller
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
     * @param  \App\Models\block_list  $block_list
     * @return \Illuminate\Http\Response
     */
    public function show(block_list $block_list)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\block_list  $block_list
     * @return \Illuminate\Http\Response
     */
    public function edit(block_list $block_list)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\block_list  $block_list
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, block_list $block_list)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\block_list  $block_list
     * @return \Illuminate\Http\Response
     */
    public function destroy(block_list $block_list)
    {
        //
    }
}
