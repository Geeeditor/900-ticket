<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

// Facade for successfull authentication
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
    //
    public function index(){
        return view('auth.index');
    }

    public function otpView() {
        return view('auth.auth');
    }

    public function login(Request $request){


        $request -> validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->attempt(request()->only(['email', 'password']), request()->filled('remember'))) {
            return 'success';
        }
        return redirect()->back()->withErrors(['email' => 'Invalid Credentials']);
    }

    // For termination user session
    public function logout(){
        auth()->logout();

        return redirect('/');
    }
}
