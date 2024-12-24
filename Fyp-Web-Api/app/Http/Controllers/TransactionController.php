<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterTransactionsRequest;
use App\Services\TransactionService;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function displayTransaction()
    {
        $transactions = Transaction::all();
        return view('transactionmonitoring', ['transactions' => $transactions]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'reference' => 'required|string|max:255',
            // 'user_id' => 'required|integer', // Remove this line
            'account_id' => 'required|integer',
            'amount' => 'required|numeric',
            'balance' => 'nullable|numeric',
            'category' => 'required|string',
            'confirmed' => 'required|boolean',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'meta' => 'nullable|string',
        ]);

        // Set user_id from authenticated user or other logic
        $userId = Auth::id(); // Use authenticated user's ID
        // Or set user_id and account_id as required
        // $userId = 1; // Example static user ID
        // $accountId = 1; // Example static account ID

        $transaction = new Transaction([
            'reference' => $request->get('reference'),
            'user_id' => $userId,
            'account_id' => $request->get('account_id'), // Or use $accountId if set statically
            'amount' => $request->get('amount'),
            'balance' => $request->get('balance'),
            'category' => $request->get('category'),
            'confirmed' => $request->get('confirmed'),
            'description' => $request->get('description'),
            'date' => $request->get('date'),
            'meta' => $request->get('meta'),
        ]);

        $transaction->save();

        return redirect('/transactionmonitoring')->with('success', 'Transaction saved!');
    }

    public function deleteTransaction(Transaction $transaction){
        $transaction -> delete();
        return redirect('/transactionmonitoring')->with('success', 'Transaction deleted successfully');
    }

}
