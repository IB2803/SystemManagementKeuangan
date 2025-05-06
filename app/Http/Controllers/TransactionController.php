<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        // $transactions = Session::get('transactions', []);
        $transactions = Transaction::orderBy('created_at', 'desc')->get();
        // $transactions = array_reverse($transactions);
        $Balance = 0;
        $totalIncome = 0;
        $totalExpense = 0;
        foreach ($transactions as $t){
            if (strtolower($t['type'])=== 'income'){
                $totalIncome += $t['amount'];
                $Balance += $t['amount'];
            }
            else if (strtolower($t['type'])=== 'expense'){
                $totalExpense += $t['amount'];
                $Balance -= $t['amount'];
            }
        }

        return view('transaction', compact('transactions','Balance', 'totalIncome', 'totalExpense'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:income,expense',
            'amount' => 'required|numeric|min:0',
            'description' => 'required|string',
            'date' => 'required|date',

        ]);

        // $transactions = Session::get('transactions', []);

        Transaction::create ([
            'type' => $request->type,
            'amount' => $request->amount,
            'description' => $request->description,
            'date' => $request->date,

        ]);

        // Session::put('transactions', $transactions);

        return redirect()->route('transaction.index')->with('success', 'Transaction added!');
    }
    //
}
