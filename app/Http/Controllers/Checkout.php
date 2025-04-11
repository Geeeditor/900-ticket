<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Checkout extends Controller
{
    //
    

    public function getPartyTicketOrder(Request $request) {
        // Check if the user is authenticated
        if (!auth()->check()) {
            return redirect()->back()->with('warning', 'Oops! You need to create an account or login to complete checkout.');
        } elseif (auth()->user()->usertype === 'admin') {
            return redirect()->back('admin.index')->with('error', 'You are not allowed to access this page.');
        }

        $data = $request->validate([
            'event_reference' => 'required',
            'regular_unit' => 'required|integer',
            'vip_unit' => 'required|integer',
            'vvip_unit' => 'required|integer',
        ]);

            // Clear previous session values
        $request->session()->forget([
            'event_reference',
            'regular_unit',
            'vip_unit',
            'vvip_unit',
        ]);

        $data['event_reference'] = $request->event_reference;
        $data['regular_unit'] = $data['regular_unit'] == 0 ? null : $data['regular_unit'];
        $data['vip_unit'] = $data['vip_unit'] == 0 ? null : $data['vip_unit'];
        $data['vvip_unit'] = $data['vvip_unit'] == 0 ? null : $data['vvip_unit'];

        $event = Event::where('event_reference', $data['event_reference'])->first();

        $request->session()->put('event_reference', $data['event_reference']);
        $request->session()->put('regular_unit', $data['regular_unit']);
        $request->session()->put('vip_unit', $data['vip_unit']);
        $request->session()->put('vvip_unit', $data['vvip_unit']);

        return redirect()->route('checkout.index', [
            'event' => $event,
            'event_reference' => $data['event_reference'],
            'regular_unit' => $data['regular_unit'],
            'vip_unit' => $data['vip_unit'],
            'vvip_unit' => $data['vvip_unit'],
        ]); 


        // dd($data);
        
    }
    
    public function checkoutPartyTicket(Event $event, Request $request)
    {   

        $event_reference = $request->session()->get('event_reference');
        $regular_unit = $request->session()->get('regular_unit');
        $vip_unit = $request->session()->get('vip_unit');
        $vvip_unit = $request->session()->get('vvip_unit');


        if (!$event_reference) {
            return redirect()->route('event.index')->with('error', 'We couldn\'t find the event details.');
        }

        $event = Event::where('event_reference', $event_reference)->first();


        return view('pages.events.checkout', [
            'event' => $event,
            'event_reference' => $event_reference,
            'regular_unit' => $regular_unit,
            'vip_unit' => $vip_unit,
            'vvip_unit' => $vvip_unit,
        ]);
    }

    public function loginCheckout(Event $event, Request $request){

         // Validate the incoming request
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'event_reference' => 'required',
            'regular_unit' => 'required|integer',
            'vip_unit' => 'required|integer',
            'vvip_unit' => 'required|integer',
        ]);

         

        if (auth()->attempt($request->only(['email', 'password']), $request->filled('remember')) && $data['event_reference']) {
           

        $usertype=Auth()->user()->usertype;
        $firstname=Auth()->user()->firstname;
        $lastname=Auth()->user()->lastname;

        if ($usertype == 'user') {
        // Clear previous session values
            $request->session()->forget([
                'event_reference',
                'regular_unit',
                'vip_unit',
                'vvip_unit',
            ]);

            $data['event_reference'] = $request->event_reference;
        $data['regular_unit'] = $data['regular_unit'] == 0 ? null : $data['regular_unit'];
        $data['vip_unit'] = $data['vip_unit'] == 0 ? null : $data['vip_unit'];
        $data['vvip_unit'] = $data['vvip_unit'] == 0 ? null : $data['vvip_unit'];

        $event = Event::where('event_reference', $data['event_reference'])->first();

            $request->session()->put('event_reference', $data['event_reference']);
        $request->session()->put('regular_unit', $data['regular_unit']);
        $request->session()->put('vip_unit', $data['vip_unit']);
        $request->session()->put('vvip_unit', $data['vvip_unit']);
        

             return redirect()->route('checkout.index', [
            'event' => $event,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'event_reference' => $data['event_reference'],
            'regular_unit' => $data['regular_unit'],
            'vip_unit' => $data['vip_unit'],
            'vvip_unit' => $data['vvip_unit'],
            ])->with('loginsuccess', 'Welcome back,');
        }

        elseif ($usertype == 'admin') {
            return redirect()->back('admin.index')->with('error', 'You are not allowed to access this page.');
        }

        else {
            return redirect()->back();
        }

      

        }   

        // Handle the case where authentication fails
        return back()->withInput()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);



        // authenticate user
        // store session order in cart
        // redirect back to checkout page
    }

    public function registerCheckout(Event $event, Request $request) {
        $data = $request->validate([
            'firstname'=> ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase',
            'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'string', 'max:255'],
            'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols() ]
            // 'confirm_password' => ['required']
        ]);

        // V9p4bGhKHg959vH3^

        $otp = rand(100000, 999999);

        EmailOtp::updateOrCreate(['email' => $request->email], [
            'email' => $request->email,
            'otp' => $otp,
            'expired_at' => Carbon::now()->addMinute(10)
        ]);

        Mail::to($request->email)->send(new EmailOtpMail($otp, $request->firstname));

        $request->session()->forget([
                'event_reference',
                'regular_unit',
                'vip_unit',
                'vvip_unit',
            ]);

            $data['firstname'] = $request->firstname;
            $data['lastname'] = $request->lastname;
            $data['address'] = $request->address;
            $data['email'] = $request->email;
            $data['phone'] = $request->phone;
            $data['password'] = Hash::make($request->password);
            $data['event_reference'] = $request->event_reference;
            $data['regular_unit'] = $data['regular_unit'] == 0 ? null : $data['regular_unit'];
             $data['vip_unit'] = $data['vip_unit'] == 0 ? null : $data['vip_unit'];
            $data['vvip_unit'] = $data['vvip_unit'] == 0 ? null : $data['vvip_unit'];

        $event = Event::where('event_reference', $data['event_reference'])->first();

        $request->session()->put('register_firstname', $request->firstname);
        $request->session()->put('register_lastname', $request->lastname);
        $request->session()->put('register_address', $request->address);
        $request->session()->put('register_email', $request->email);
        $request->session()->put('register_phone', $request->phone);
        $request->session()->put('register_password', Hash::make($request->password));

        return redirect()->route('register.verify.otp');
    }
}
