<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function dataMahasiswa()
    {
        $m1 = ' Budi Santoso';
        $am1 = 'Bandoeng';
        $m2 = ' Siti Aminaah';
        $am2 = 'Djokdjakarta';

        return view(
            'daftar_mahasiswa',
            compact('m1', 'am1', 'm2', 'am2')
        );
    }
}
