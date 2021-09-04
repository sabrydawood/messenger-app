<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Str ;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }


    public function customLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password' , 'role');
        if (Auth::attempt($credentials)) {
                  $user = Auth::user();  
            if ($user->role === 'admin'){
      return redirect()->intended('home')
                ->withSuccess('Signed in');
                          } else {
           return redirect()->intended('user')
                            ->withSuccess('Signed in');
              }
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }



    public function register()
    {
        return view('auth.register');
    }

    public function customRegistration(Request $request)
    {

        $request->validate([
            'first_name' => ['required', 'string', 'max:25'],
            'middle_name' => ['required', 'string', 'max:25'],
            'phone' => ['required', 'numeric', 'min:11' , 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect("home")->withSuccess('You have signed-in');
    }
//   public function GenerateUsername($n)
//     {
//         $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//         $randomString = '';
  
//         for ($i = 0; $i < $n; $i++) {
//             $index = rand(0, strlen($characters) - 1);
//             $randomString .= $characters[$index];
//         }
//     } 

    public function create(array $data)
    {  
 
        return User::create([
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'username' => uniqid(),
            'country' => $data['country'],
            'password' => Hash::make($data['password']),
        ]);


    }
    public function home()
    {
        if(Auth::check()){
            return view('home');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }



    // social logins

    // facebook
    public function facebook(){
        return Socialite::driver('facebook')->redirect();

    }
    public function facebookRedirect(){
        $user = Socialite::driver('facebook')->user();
        dd($user);
        $user = User::firstOrCreate([
            'email' => $user->getEmail()
        ],[
            'name' => $user->getName(),
            'password'=> Hash::make(Str::random(24))
        ]);

        Auth::login($user , true);
        return redirect('home');
    }

    // google
    public function google(){
        return Socialite::driver('google')->redirect();

    }
    public function googleRedirect(){
        $user = Socialite::driver('google')->user();
        dd($user);
        $user = User::firstOrCreate([
            'email' => $user->getEmail()
        ],[
            'name' => $user->getName(),
            'password'=> Hash::make(Str::random(24))
        ]);

        Auth::login($user , true);
        return redirect('home');
    }

    // github
    public function github(){

        return Socialite::driver('github')->redirect();

    }

    public function githubRedirect(){
        $user = Socialite::driver('github')->user();
        dd($user);
        $user = User::firstOrCreate([
            'email' => $user->getEmail()
        ],[
            'name' => $user->getName(),
            'password'=> Hash::make(Str::random(24))
        ]);

        Auth::login($user , true);
        return redirect('home');
    }

    // twitter  //https://developer.twitter.com/en/apps
    public function twitter(){

        return Socialite::driver('twitter')->redirect();

    }

    public function twitterRedirect(){
        $user = Socialite::driver('twitter')->user();
        dd($user);
        $user = User::firstOrCreate([
            'email' => $user->getEmail()
        ],[
            'name' => $user->getName(),
            'password'=> Hash::make(Str::random(24))
        ]);

        Auth::login($user , true);
        return redirect('home');
    }





}
