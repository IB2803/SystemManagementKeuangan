<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpendingsController extends Controller
{
    public function index()
    {
        return view('spendings');
    }

    public function calculate(Request $request)
    {
        $totalUang = $request->input('total_uang');
        $jumlahHari = $request->input('jumlah_hari');

        $uangPerHari = $totalUang / $jumlahHari;

        return view('spendings', [
            'uangPerHari' => $uangPerHari,
            'totalUang' => $totalUang,
            'jumlahHari' => $jumlahHari
        ]);
    }
}