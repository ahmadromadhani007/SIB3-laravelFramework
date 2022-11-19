<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()

    {
        $ar_kekayaan = DB::table('pegawai')->select('nama', 'kekayaan')->get();
        $ar_gender = DB::table('pegawai')
            ->selectRaw('gender, count(gender) as jumlah')
            ->groupBy('gender')
            ->get();
        return view('dashboard.index', compact('ar_kekayaan', 'ar_gender'));
    }
}
