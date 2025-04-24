<?php

namespace App\Http\Controllers\Transactions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\PartyTicketTransaction;

class TransactionHistory extends Controller
{
    //
    public function index(Request $request, PartyTicketTransaction $partyTicketTransaction, $id)
    {
        // Retrieve the transaction history for the user
        $user = Auth::user();

        $transactionReceipt = $partyTicketTransaction->find($id);


        // dd($transactionReceipt);
        if ($transactionReceipt == null) {
            return redirect()->back()->with('error', 'Transaction not found.');
        }

        return view('pages.events.vieworder', [
            'transactionReceipt' => $transactionReceipt,
            'user' => $user,
        ]);
    }


    public function downloadPartyTicket () {
        return view('pages.events.e-ticket');
    }

    public function store(Request $request)
    {
        // Validate the request data


        // Store the transaction in the database
        // return response()->json(['message' => 'Transaction stored successfully']);
    }
}
