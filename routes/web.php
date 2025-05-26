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
// Route::get('/', function () {
//     return view('home');
// });
Route::get('/welcome', function () {
    return view('welcome');
});

use App\Http\Controllers\SpendingsController;
Route::post('/spendings',[SpendingsController::class ,'calculate'])->name('spendings.calculate');
Route::get('/spendings',[SpendingsController::class ,'index'])->name('spendings.index');

use App\Http\Controllers\SavingsController;
Route::post('/savings',[SavingsController::class ,'calculate'])->name('savings.calculate');
Route::get('/savings',[SavingsController::class ,'index'])->name('savings.index');

use App\Http\Controllers\BudgetingController;
Route::get('/budgeting', [BudgetingController::class, 'index'])->name('budgeting.index');
Route::post('/budgeting', [BudgetingController::class, 'store'])->name('budgeting.store');
 
use App\Http\Controllers\TransactionController;

Route::get('/', [TransactionController::class, 'index'])->name('home');
Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');
Route::post('/transaction', [TransactionController::class, 'store'])->name('transaction.store');
Route::delete('/transaction/{id}', [TransactionController::class, 'destroy'])->name('transaction.destroy');