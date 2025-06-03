<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Untuk "select biasa"
use Illuminate\Support\Facades\Session; // Untuk manajemen session

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login'); // Kita akan buat view ini nanti
    }

    // Memproses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        // Metode "select biasa" ke MySQL
        // PENTING: Ini rentan SQL Injection jika tidak hati-hati dengan input.
        // Menggunakan query builder lebih aman daripada raw SQL.
        $user = DB::table('users')
                    ->where('email', $email)
                    ->first();

        if ($user) {
            // Memeriksa password (plain text comparison - TIDAK AMAN!)
            if ($password === $user->password) {
                // Simpan informasi user di session
                Session::put('user_id', $user->id);
                Session::put('user_name', $user->name);
                Session::put('user_email', $user->email);
                Session::put('user_role', $user->role);

                // Arahkan berdasarkan role
                if ($user->role === 'admin') {
                    return redirect()->intended('/admin/dashboard'); // Buat route dan view ini nanti
                } elseif ($user->role === 'user') {
                    return redirect()->intended('/transaction');
                } else {
                    // Role tidak dikenal, default ke halaman utama atau login lagi
                    return redirect('/');
                }
            }
        }

        // Jika email tidak ditemukan atau password salah
        return back()->withErrors([
            'email' => 'Kredensial yang diberikan tidak cocok dengan catatan kami.',
        ])->onlyInput('email');
    }

    // Proses Logout
    public function logout(Request $request)
    {
        Session::flush(); // Hapus semua data session
        return redirect('/login');
    }
}
