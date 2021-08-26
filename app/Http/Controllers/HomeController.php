<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Friend;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }




    public function index()
    {
        $user = Auth::user();
        $friends = Friend:: all();
        
        return view('home', compact('user' , 'friends'));
    }
}
