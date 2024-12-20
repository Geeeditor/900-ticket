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
            // return redirected()->intended('dashboard');
        }
        return redirect()->back()->withErrors(['email' => 'Email or password incorrect. Please try again']);
    }

    public function register(Request $request)
    {
        // Validate the incoming request data
        \Log::info('Register method called.');

        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'address' => 'required|string|max:255', // Add address validation if needed
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8', // Use 'confirmed' to validate against confirm_password
        ]);

        try {
            // Create the user
            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'address' => $request->address,
                'email' => $request->email,
                'password' => Hash::make($request->password), // Hash the password before storing
            ]);

            // Generate and store OTP
            $otp = rand(100000, 999999);
            Session::put('otp', $otp);

            // Send OTP to user's email (implement actual sending logic)
            // Example: Mail::to($request->email)->send(new OtpMail($otp));

            return redirect()->route('auth.otp')->with('status', 'OTP has been sent to your email.');
        } catch (\Exception $e) {
            // Handle any exceptions that occur during registration
            return back()->withErrors(['error' => 'Registration failed, please try again.']);
        }
    }

     public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        if ($request->otp == Session::get('otp')) {
            Auth::loginUsingId(Session::get('user_id')); // Assuming user ID is stored
            Session::forget('otp'); // Clear the OTP from session
            return redirect('dashboard'); // Redirect to the dashboard
        }

        return back()->withErrors(['otp' => 'The provided OTP is incorrect.']);
    }

    // For termination user session
    public function logout(){
        auth()->logout();

        return redirect('/');
    }
}
