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

    public function nilaiMahasiswa()
    {
        $s1 = ['nama' => 'Zainul', 'nilai' => 85];
        $s2 = ['nama' => 'Fuad', 'nilai' => 58];
        $s3 = ['nama' => 'Uswatun', 'nilai' => 95];
        $s4 = ['nama' => 'Hasanah', 'nilai' => 30];
        //array assocative
        $mhs = [$s1, $s2, $s3, $s4];

        return view(
            'nilai_mhs',
            compact('mhs')

        );
    }
}
