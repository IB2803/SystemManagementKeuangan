<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita; // Import model Berita
use Illuminate\Support\Facades\Session; // Untuk cek login jika perlu

class BeritaUserController extends Controller
{
    /**
     * Menampilkan daftar berita untuk user.
     */
    public function index()
    {
        // Pastikan user sudah login untuk melihat berita (opsional, sesuaikan kebutuhan)
        if (!Session::has('user_id')) {
            return redirect()->route('login')->withErrors(['auth' => 'Anda harus login untuk melihat berita.']);
        }

        // Ambil semua berita dari database, urutkan berdasarkan tanggal terbaru
        // Jika ingin membatasi jumlah berita, gunakan ->paginate(jumlah_per_halaman)
        $daftar_berita = Berita::orderBy('tanggal', 'desc')->orderBy('created_at', 'desc')->get();

        // Kirim data berita ke view
        return view('berita', ['daftar_berita' => $daftar_berita]);
        
        // Kita akan buat view 'user.berita.index' ini nanti
    }
}