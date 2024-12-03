<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogRequests;
use App\Http\Middleware\CheckAge;

// Group routes that use the 'web' middleware and log requests
Route::middleware(['web', LogRequests::class])->group(function () {

    // Login route at the root URL "/"
    Route::get('/', function () {
        return view('goTologin', ['username' => 'Guest'])->with('hideNavAndFooter', true);
    })->name('goTologin');

    // Form submission route for homepage with username validation
    Route::post('/homepage', function (Request $request) {
        // Validate that the username only contains alphabetic characters (a-z, A-Z)
        $request->validate([
            'username' => 'required|alpha'
        ], [
            'username.alpha' => 'The username should only contain alphabetic characters.',
            'username.required' => 'The username field is required.'
        ]);

        $username = $request->input('username', 'Guest');
        return redirect("/homepage/$username");
    });

    // Homepage, About Us, Menu, Contact Us routes with dynamic username
    Route::get('/homepage/{username}', function ($username) {
        return view('homepage', ['username' => $username]);
    })->name('homepage');

    Route::get('/aboutus/{username}', function ($username) {
        return view('aboutus', ['username' => $username]);
    })->name('aboutus');

    Route::get('/menu/{username}', function ($username) {
        return view('menu', ['username' => $username]);
    })->name('menu');

    Route::get('/contactus/{username}', function ($username) {
        return view('contactus', ['username' => $username]);
    })->name('contactus');

    Route::get('/route/{username}', function ($username) {
        return view('route', ['username' => $username]);
    })->name('route');

    Route::get('/views/{username}', function ($username) {
        return view('views', ['username' => $username]);
    })->name('views');

    Route::get('/lay/{username}', function ($username) {
        return view('lay', ['username' => $username]);
    })->name('lay');

    Route::get('/middleware/{username}', function ($username) {
        return view('middleware', ['username' => $username]);
    })->name('middleware');

    // Route for restricted area with dynamic username
    Route::get('/restrictedArea/{username}', function ($username) {
        return view('restrictedArea', ['username' => $username]);
    })->name('restrictedArea');

    // Middleware for age verification, restricted access, or homepage access post-login
    Route::post('/homepage', function (Request $request) {
        return view('homepage', ['username' => $request->input('username')]);
    })->middleware(CheckAge::class);

    // Access Denied route
    Route::get('/accessDenied', function () {
        return view('accessDenied');
    })->name('accessDenied');

    // Fallback route for the login page, hidden navbar and footer
    Route::get('/goTologin', function () {
        return view('goTologin', ['username' => 'YourUsernameHere'])->with('hideNavAndFooter', true);
    });

});
