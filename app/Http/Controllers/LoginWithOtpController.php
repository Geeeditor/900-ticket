<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Models\User;

// Facade for successfull authentication
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginWithOtpController extends Controller
{
    //

    public function create(){
        return view('verify.login');
    }

    public function store(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    // Attempt to authenticate the user
    if (auth()->attempt($request->only(['email', 'password']), $request->filled('remember'))) {
        // Redirect to the intended page after successful authentication
        // return redirect()->intended('dashboard');
    // return redirect(route('index.welcome', absolute: false));

        dd('done');

    }

    // Handle the case where authentication fails
    return back()->withInput()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}





}
