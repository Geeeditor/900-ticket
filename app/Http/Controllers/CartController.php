<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PartyTicketCart;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePartyTicket(Request $request, Cart $cart) {
        if (!Auth::check()) {
            return redirect()->back()->with('warning', 'Oops! You need to create an account to continue.');
            } elseif (Auth::user()->usertype === 'user') {
            $data = $request->validate([
                'event_reference' => ['required', 'max:225'],
                'regular_unit' => ['required', 'integer', 'max:224'],
                'vip_unit' => ['required', 'integer', 'max:224'],
                'vvip_unit' => ['required', 'integer', 'max:224'],
            ]);

            $data['regular_unit'] = $data['regular_unit'] == 0 ? null : $data['regular_unit'];
            $data['vip_unit'] = $data['vip_unit'] == 0 ? null : $data['vip_unit'];
            $data['vvip_unit'] = $data['vvip_unit'] == 0 ? null : $data['vvip_unit'];

            $user = Auth::user();
            $cart = $user->cart;

            if (!$cart) {
                $cart = new Cart();
                $user->cart()->save($cart);
            }

            $partyTicketCart = new PartyTicketCart([
                'event_reference' => $data['event_reference'],
                'regular_unit' => $data['regular_unit'],
                'vip_unit' => $data['vip_unit'],
                'vvip_unit' => $data['vvip_unit'],
            ]);

            $cart->partyTicketCart()->save($partyTicketCart);

            return redirect()->back()->with('success', 'Nice! You successfully added this ticket to your cart, remember to check out to secure your space.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
