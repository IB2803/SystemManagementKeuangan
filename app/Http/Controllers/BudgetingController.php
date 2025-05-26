<?php

namespace App\Http\Controllers;
use App\Models\Transaction;

use Illuminate\Http\Request;

class BudgetingController extends Controller
{
    public function index()
    {
        $income = Transaction::where('type', 'income')->sum('amount');
        $expense = Transaction::where('type', 'expense')->sum('amount');
        $balance = $income - $expense;

        return view('budgeting', compact('balance'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'item_name.*' => 'required',
            'item_cost.*' => 'required|numeric|min:0',
        ]);

        $items = $request->input('item_name');
        $costs = $request->input('item_cost');
        $totalNeeds = array_sum($costs);
        $duration = 30; // detik untuk simulasi

        session([
            'items' => $items,
            'costs' => $costs,
            'totalNeeds' => $totalNeeds,
            'duration' => $duration,
        ]);

        // Hitung ulang balance
        $income = Transaction::where('type', 'income')->sum('amount');
        $expense = Transaction::where('type', 'expense')->sum('amount');
        $balance = $income - $expense;

        return view('budgeting', compact('balance'));
    }




}