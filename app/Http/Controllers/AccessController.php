<?php

namespace App\Http\Controllers;

use App\Models\access;
use Illuminate\Http\Request;

class AccessController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(access $access)
    {
        //
    }


    public function edit(access $access)
    {
        //
    }

    public function update(Request $request, access $access)
    {
        //
    }

    public function destroy(access $access)
    {
        //
    }
}
