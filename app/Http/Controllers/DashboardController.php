<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Meteran;
use App\Models\Pembacaan;
use App\Models\Tagihan;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_pelanggan = Pelanggan::count();
        $jumlah_meteran = Meteran::count();
        $jumlah_pembacaan = Pembacaan::count();
        $jumlah_tagihan = Tagihan::count();

        return view('dashboard.index', compact('jumlah_pelanggan', 'jumlah_meteran', 'jumlah_pembacaan', 'jumlah_tagihan'));
    }
}
