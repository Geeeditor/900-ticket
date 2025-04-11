<?php



namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DynamicLogin extends Controller
{
    public function create() {
        return view('verify.login');
    }

    public function store(Request $request, $redirectRoute = 'dashboard', $sessionData = []) {
        // Validate the incoming request
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt to authenticate the user
        if (auth()->attempt($request->only(['email', 'password']), $request->filled('remember'))) {
            $user = Auth::user();
            $usertype = $user->usertype;
            $firstname = $user->firstname;
            $lastname = $user->lastname;

            // Store additional session data dynamically if needed
            foreach ($sessionData as $key => $value) {
                $request->session()->put($key, $value);
            }

            if ($usertype == 'user') {
                return redirect()->route($redirectRoute)->with([
                    'loginsuccess' => 'Welcome back,',
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                ]);
            } elseif ($usertype == 'admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->back();
            }
        }

        // Handle the case where authentication fails
        return back()->withInput()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}