<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class TransactionController extends Controller
{
    public function index()
    {
        // Ambil smua transaksi dalam tahun ini
        $transactions = DB::table('transactions')
            ->whereYear('date', date('Y'))
            ->get();

        $months = array_fill(0, 12,['income' => 0, 'expense' => 0]);

        // $transactions = Session::get('transactions', []);
        $transactions = Transaction::orderBy('created_at', 'desc')->get();
        // $transactions = array_reverse($transactions);
        $Balance = 0;
        $totalIncome = 0;
        $totalExpense = 0;
        foreach ($transactions as $t){
            $monthIndex = Carbon::parse($t->date)->format('n') - 1;

            if (strtolower($t['type'])=== 'income'){
                $months[$monthIndex]['income'] += $t['amount'];
                $totalIncome += $t['amount'];
                $Balance += $t['amount'];
            }
            else if (strtolower($t['type'])=== 'expense'){
                $months[$monthIndex]['expense'] += $t['amount'];
                $totalExpense += $t['amount'];
                $Balance -= $t['amount'];
            }
        }

            // Data untuk grafik per bulan
        $monthlyIncome = array_column($months, 'income');
        $monthlyExpense = array_column($months, 'expense');

        // Ambil semua transaksi untuk tabel
        $allTransactions = Transaction::orderBy('date', 'desc')->get();

        return view('transaction', compact(
            'transactions',
            'Balance',
            'totalIncome',
            'totalExpense',
            'monthlyIncome',
            'monthlyExpense'
        ));

        // return view('transaction', compact('transactions','Balance', 'totalIncome', 'totalExpense'));
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