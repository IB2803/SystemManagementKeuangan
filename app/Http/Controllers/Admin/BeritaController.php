<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita; // Import model Berita
use Illuminate\Support\Facades\Session; // Untuk cek login jika perlu

class BeritaController extends Controller
{
    /**
     * Menampilkan form untuk membuat berita baru.
     */
    public function create()
    {
        // Pastikan hanya admin yang bisa akses (jika belum ditangani di route)
        if (!Session::has('user_id') || Session::get('user_role') !== 'admin') {
            return redirect()->route('login')->withErrors(['auth' => 'Hanya admin yang bisa menambah berita.']);
        }
        return view('admin.berita'); // Kita akan buat view ini
    }

    /**
     * Menyimpan berita baru ke database.
     */
    public function store(Request $request)
    {
        // Pastikan hanya admin yang bisa akses (jika belum ditangani di route)
        if (!Session::has('user_id') || Session::get('user_role') !== 'admin') {
            return redirect()->route('login')->withErrors(['auth' => 'Hanya admin yang bisa menambah berita.']);
        }

        // Validasi input
        $request->validate([
            'isi_berita' => 'required|string|min:10',
            'tanggal' => 'required|date',
        ]);

        // Simpan data menggunakan model
        Berita::create([
            'isi_berita' => $request->isi_berita,
            'tanggal' => $request->tanggal,
        ]);

        // Redirect kembali ke dashboard admin atau halaman daftar berita (jika ada) dengan pesan sukses
        return redirect()->route('admin.dashboard')->with('success', 'Berita berhasil ditambahkan!');
    }
    
}