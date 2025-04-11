<?php


namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\EmailOtp;
use App\Mail\EmailOtpMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;

class DynamicRegister extends Controller
{
    public function create() {
        return view('verify.register');
    }

    public function store(Request $request, $redirectRoute = 'register.verify.otp', $sessionData = []) {
        $request->validate([
            'firstname'=> ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'string', 'max:255'],
            'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols()]
        ]);

        $otp = rand(100000, 999999);

        EmailOtp::updateOrCreate(['email' => $request->email], [
            'email' => $request->email,
            'otp' => $otp,
            'expired_at' => Carbon::now()->addMinute(10)
        ]);

        Mail::to($request->email)->send(new EmailOtpMail($otp, $request->firstname));

        // Store session data dynamically
        foreach ($sessionData as $key => $value) {
            $request->session()->put($key, $value);
        }

        return redirect()->route($redirectRoute);
    }

    public function registerVerifyOtpStore(Request $request, $redirectRoute = 'dashboard') {
        $request->validate([
            'otp1' => 'required|digits:1',
            'otp2' => 'required|digits:1',
            'otp3' => 'required|digits:1',
            'otp4' => 'required|digits:1',
            'otp5' => 'required|digits:1',
            'otp6' => 'required|digits:1'
        ]);

        // Concatenate the OTP Digits
        $otp = $request->otp1 . $request->otp2 . $request->otp3 . $request->otp4 . $request->otp5 . $request->otp6;

        $email = $request->session()->get('register_email');
        $firstname = $request->session()->get('register_firstname');
        $lastname = $request->session()->get('register_lastname');
        $address = $request->session()->get('register_address');
        $phone = $request->session()->get('register_phone');
        $password = $request->session()->get('register_password');

        $emailOtp = EmailOtp::where('email', $email)->where('otp', $otp)->where('expired_at', '>=', Carbon::now())->first();

        if (!$emailOtp) {
            return redirect()->back()->withInput()->with(['message' => 'Invalid or Expired OTP Provided!']);
        }

        $user = User::create([
            'firstname'=> $firstname,
            'lastname'=> $lastname,
            'address'=> $address,
            'email'=> $email,
            'phone'=> $phone,
            'password'=> $password,
        ]);

        $emailOtp->delete();

        // Clear session data
        $request->session()->forget([
            'register_email',
            'register_firstname',
            'register_lastname',
            'register_address',
            'register_phone',
            'register_password'
        ]);

        Auth::login($user);

        return redirect()->route($redirectRoute)->with(['regsuccess'=> 'Welcome to 900ticket', 'firstname' => $firstname, 'lastname' => $lastname]);
    }

    public function destroy(Request $request) {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}