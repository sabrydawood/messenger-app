<?php

use Illuminate\Support\Facades\Route;

use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\Users;
use App\Http\Controllers\Profile;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ChatingController;
use App\Http\Controllers\MessageController;


Route::get('/', function () {
            return view('welcome');
});
// errors pages
Route::get('/404', function () { return view('errors.404'); }); // not found
Route::get('/500', function () { return view('errors.500'); }); // server bug
Route::get('/419', function () { return view('errors.419'); }); // expired page

// Route::post('/send-message', function(Request $request ){
//        return ["success" => true];
//    });
// Auth::routes();
// login ANd registerition
Route::get('home', [CustomAuthController::class, 'home']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'register'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::post('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// social Logins
// facebook
Route::get('sign-in/facebook', [CustomAuthController::class, 'facebook'])->name('facebook');
Route::get('sign-in/facebook/redirect', [CustomAuthController::class, 'facebookRedirect'])->name('facebook.redirect');
// google
Route::get('sign-in/google', [CustomAuthController::class, 'google'])->name('google');
Route::get('sign-in/google/redirect', [CustomAuthController::class, 'googleRedirect'])->name('google.redirect');
//github
Route::get('sign-in/github', [CustomAuthController::class, 'github'])->name('github');
Route::get('sign-in/github/redirect', [CustomAuthController::class, 'githubRedirect'])->name('github.redirect');
//twitter
Route::get('sign-in/twitter', [CustomAuthController::class, 'twitter'])->name('twitter');
Route::get('sign-in/twitter/redirect', [CustomAuthController::class, 'twitterRedirect'])->name('twitter.redirect');
// Route::get('login', [CustomAuthController::class, 'index'])->name('login'); //fire base


Route::get('/home', [HomeController::class, 'index'])->name('home');

// profile
Route::get('/user', [Profile::class, 'index'])->name('user');
Route::post('/user/store', [Profile::class, 'store'])->name('user.store');
Route::post('/user/create', [Profile::class, 'create'])->name('user.create');
Route::post('/user/update/{id}', [Profile::class, 'update'])->name('user.update');
Route::get('/user/edit/{id}', [Profile::class, 'edit'])->name('user.edit');
Route::get('/user/show/{id}', [Profile::class, 'show'])->name('user.show');
// update Profile
Route::post('/user/update-bio', [Profile::class, 'updateUserBio'])->name('user.updateBio');
Route::post('/user/updateUserUsername', [Profile::class, 'updateUserUsername'])->name('user.updateUsername');
Route::post('/user/updateUserPassword', [Profile::class, 'updateUserPassword'])->name('user.updatePassword');
Route::post('/user/updateUserEmail', [Profile::class, 'updateUserEmail'])->name('user.updateEmail');
Route::post('/user/updateUserAvatar', [Profile::class, 'updateUserAvatar'])->name('user.updateAvatar');





//messages have some problems yet beacuse vue will changed 

Route::get('/chat', function () {
    return view('chat');
})->name('chat');

Route::get('/private', [HomeController::class, 'private'])->name('private');
Route::get('messages',[MessageController::class, 'fetchMessages']);
Route::post('messages',[MessageController::class, 'sendMessage']);
Route::get('/private-messages/{user}',[MessageController::class, 'privateMessages'])->name('privateMessages');
Route::post('/private-messages/{user}', [MessageController::class, 'sendPrivateMessage'])->name('privateMessages.store');
