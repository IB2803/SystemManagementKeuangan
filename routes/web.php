<?php

use Illuminate\Support\Facades\Route;

Route::get('/penjumlahan', function(){
    return view('penjumlahan');
});

Route::post('penjumlahan', function(){
    $angka1 = request('angka1');
    $angka2 = request('angka2');
    $operation = request('operation');
    if ($operation == 'tambah'){
        $hasiltambah = $angka1 + $angka2;
        return view('penjumlahan' , ['tambah' => $hasiltambah, 'angka1'=> $angka1, 'angka2' => $angka2]);
    }
    else if($operation == 'kurang'){
        $hasilkurang = $angka1 - $angka2 ;
        return view('penjumlahan' , ['kurang'=> $hasilkurang, 'angka1'=> $angka1, 'angka2' => $angka2]);
    }

});

Route::get('/transactions', function(){
    return view('transactions');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/welcome', function () {
    return view('welcome');
});
use App\Http\Controllers\TransactionController;

Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');
Route::post('/transaction', [TransactionController::class, 'store'])->name('transaction.store');
