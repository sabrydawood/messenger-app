<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{


    use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    protected function authenticated(Request $request, $user)
    {
        // to admin dashboard
        if($user->isAdmin()) {
            return redirect(route('home'));
        }

        // to user dashboard
        else if($user->isUser()) {
            return redirect(route('home'));
        }

        abort(404);
    }


}
