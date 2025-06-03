<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\BeritaUserController;
use App\Models\Berita;

// == RUTE LOGIN & LOGOUT ==
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// == RUTE ADMIN DASHBOARD ==
Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('admin.dashboard');

Route::get('/admin/dashboard', function () {
    // 1. Cek apakah sudah login
    if (!Session::has('user_id')) {
        return redirect()->route('login')->withErrors(['auth' => 'Anda harus login untuk mengakses halaman ini.']);
    }
    // 2. Cek apakah rolenya admin
    if (Session::get('user_role') !== 'admin') {
        if (Session::get('user_role') === 'user') {
             return redirect()->route('transaction.index')->withErrors(['akses' => 'Halaman dashboard hanya untuk Admin.']);
        }
        return redirect()->route('login')->withErrors(['akses' => 'Anda tidak memiliki izin untuk mengakses halaman ini.']);
    }

    // Ambil nama admin dari session
    $adminName = Session::get('user_name');

    // AMBIL DATA BERITA UNTUK DITAMPILKAN DI DASHBOARD ADMIN
    $daftar_berita_dashboard = Berita::orderBy('tanggal', 'desc') // Urutkan berdasarkan tanggal terbaru
                                      ->orderBy('created_at', 'desc') // Urutan sekunder
                                      ->take(5) // Ambil misalnya 5 berita terbaru saja untuk dashboard
                                      ->get();

    // Tampilkan view admin dashboard dan kirim data nama admin serta daftar berita
    return view('admin.dashboard', [
        'adminName' => $adminName,
        'daftar_berita' => $daftar_berita_dashboard // KIRIM DATA BERITA KE VIEW
    ]);
})->name('admin.dashboard');
// == RUTE UNTUK FITUR BERITA (ADMIN) ==
Route::get('/admin/berita/tambah', [BeritaController::class, 'create'])->name('admin.berita.create');
Route::post('/admin/berita', [BeritaController::class, 'store'])->name('admin.berita.store');

// == RUTE UTAMA & REDIRECT BERDASARKAN ROLE ==
Route::get('/', function () {
    if (Session::has('user_id')) {
        if (Session::get('user_role') === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif (Session::get('user_role') === 'user') {
            // Pastikan mengarah ke nama rute yang benar untuk halaman transaksi utama user
            return redirect()->route('transaction.index'); // Sesuai dengan namamu: transaction.index
        }
        // Jika role tidak dikenali (seharusnya tidak terjadi jika login benar)
        Session::flush(); // Hapus sesi yang aneh
        return redirect()->route('login')->withErrors(['auth' => 'Role tidak dikenali, silakan login ulang.']);
    }
    // Jika belum login, arahkan ke halaman login
    return redirect()->route('login');
});

// == RUTE UNTUK HALAMAN BERITA USER ==
Route::get('/berita', [BeritaUserController::class, 'index'])->name('berita.index');

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

// Route::get('/', [TransactionController::class, 'index'])->name('home');
Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');
Route::post('/transaction', [TransactionController::class, 'store'])->name('transaction.store');
Route::delete('/transaction/{id}', [TransactionController::class, 'destroy'])->name('transaction.destroy');
