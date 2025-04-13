<?php

namespace App\Http\Controllers\Transactions\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Paystack as Paystack;

class PaymentController extends Controller
{
    //

   public function pay(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email',
        //     'amount' => 'required|numeric',
        // ]);

        $orderID = uniqid(); // Generate a unique order ID

        $paymentData = [
            'email' => 'me@u.com',
            'amount' => 100 * 100, // Paystack requires amount in kobo
            'orderID' => $orderID,
            'callback_url' => route('payment.callback'),
        ];

        $paystack = new \Unicodeveloper\Paystack\Paystack();

        return $paystack->getAuthorizationUrl($paymentData)->redirectNow();
    }

    public function callback(Request $request)
    {
        $paystack = new \Unicodeveloper\Paystack\Paystack();

        $paymentDetails = $paystack->getPaymentData();

        // Handle payment success or failure here
        return $paymentDetails;
    }
}

