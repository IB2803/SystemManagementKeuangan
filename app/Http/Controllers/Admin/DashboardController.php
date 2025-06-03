<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        // Pengecekan sesi dan role bisa juga ditaruh di constructor
        // atau menggunakan middleware jika kamu berubah pikiran nanti

        $adminName = Session::get('user_name');
        return view('admin.dashboard', ['adminName' => $adminName]);
    }
}
