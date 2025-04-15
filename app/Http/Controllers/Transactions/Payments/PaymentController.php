<?php

namespace App\Http\Controllers\Transactions\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Paystack as Paystack;

class PaymentController extends Controller {
    //

    /*  public function pay(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'amount' => 'required|numeric',
        ]);

        $orderID = uniqid(); // Generate a unique order ID

        $paymentData = [
            'email' => 'me@u.com',
            'amount' => 100 * 100, // Paystack requires amount in kobo
            'orderID' => $orderID,
            'callback_url' => route('payment.callback'),
        ];

        $paystack = new \Unicodeveloper\Paystack\Paystack();

        return $paystack->getAuthorizationUrl($paymentData)->redirectNow();
    } */

    public function pay(Request $request) {
    // Validate the input data
    $data =  $request->validate([
        'email' => 'required|email',
        'user_id' => 'required|numeric',
        'phone' => 'required|string',
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'product_reference' => 'required|string',
        'product_name' => 'required|string',
        'product_price' => 'required|array',
        'product_quantity' => 'required|array',
        'taxed_order' => 'required|numeric',
        'product_purchase_cost' => 'required|numeric',
        'product_total_quantity' => 'required|numeric',
        'product_total_cost' => 'required|numeric',
        'product_order_date' => 'required'
    ]);

    // Generate a unique order ID
    $orderID = $data['product_reference']  . '/' . uniqid();
    $receipt = $data['product_reference'] . '-' . $data['user_id'] . '-' . uniqid() . '-' . now();

    // Prepare the payment data
    $paymentData = [
     
        'email' => $data['email'],
        'phone' => $data['phone'],
        'metadata' => [    
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],    
            'product_reference' => $orderID,
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_quantity' => $request->product_quantity,
            'taxed_order' => $request->taxed_order,
            'product_purchase_cost' => $request->product_purchase_cost,
            'product_total_quantity' => $request->product_total_quantity,
            'product_total_cost' => $request->product_total_cost,
            'product_order_date' => $request->product_order_date,
        ],
        'reference' => $receipt,
        'amount' => $data['product_total_cost'] * 100, // Paystack requires amount in kobo
        'orderID' =>  $orderID,
        'callback_url' => route('payment.callback'),
    ];

    // dd($paymentData);

     
    try {
        
       // Initialize Paystack
        $paystack = new \Unicodeveloper\Paystack\Paystack();

        $response = $paystack->getAuthorizationUrl($paymentData)->redirectNow();

        return $response;
        
    } catch (\Exception $e) {
        // Handle the exception
        return redirect()->back()->with('error', 'An error occurred while processing your payment. Please try again later.');
    }


   



    // Redirect to Paystack
    // return $paystack->getAuthorizationUrl($paymentData)->redirectNow();
}

    public function callback(Request $request)  {



        try {
            // Initialize Paystack
            $paystack = new \Unicodeveloper\Paystack\Paystack();

            // Verify the payment
            $response = $paystack->getPaymentData();

            // Check if the payment was successful
            if ($response['status']) {
                // Payment was successful
                // You can save the payment details to your database or perform any other actions
                return redirect()->route('dashboard')->with('success', 'Payment successful!');
            } else {
                // Payment failed
                return redirect()->back()->with('error', 'Payment failed. Please try again.');
            }
        } catch (\Exception $e) {
            // Handle the exception
            return redirect()->back()->with('error', 'An error occurred while processing your payment. Please try again later.');
        }
   
    }
}

