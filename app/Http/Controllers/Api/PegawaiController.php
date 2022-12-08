<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PegawaiResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
//tambahan
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    //JoinTable Query
    public function index()
    {
        //menampilkan seluruh data
        //$pegawai = Pegawai::all();
        $pegawai = Pegawai::join('jabatan', 'jabatan.id', '=', 'pegawai.jabatan_id')
            ->join('divisi', 'divisi.id', '=', 'pegawai.divisi_id')
            ->select('pegawai.nip', 'pegawai.nama', 'pegawai.gender', 'jabatan.nama AS posisi', 'divisi.nama AS bagian', 'pegawai.tmp_lahir', 'pegawai.tgl_lahir', 'pegawai.alamat',)
            ->get();
        return new PegawaiResource(true, 'Data Pegawai', $pegawai);
    }

    public function show($id)
    {
        //menampilkan detail data seorang pegawai
        //$pegawai = Pegawai::find($id);
        $pegawai = Pegawai::join('jabatan', 'jabatan.id', '=', 'pegawai.jabatan_id')
            ->join('divisi', 'divisi.id', '=', 'pegawai.divisi_id')
            ->select('pegawai.nip', 'pegawai.nama', 'pegawai.gender', 'jabatan.nama AS posisi', 'divisi.nama AS bagian', 'pegawai.tmp_lahir', 'pegawai.tgl_lahir', 'pegawai.alamat',)
            ->where('pegawai.id', '=', $id)
            ->get();

        return new PegawaiResource(true, 'Detail Data Pegawai', $pegawai);
    }

    public function store(Request $request)
    {
        //proses input pegawai
        $validator = Validator::make(
            $request->all(),
            [
                'nip' => 'required|unique:pegawai|max:3',
                'nama' => 'required|max:45',
                'jabatan_id' => 'required|integer',
                'divisi_id' => 'required|integer',
                'gender' => 'required',
                'tmp_lahir' => 'required',
                'tgl_lahir' => 'required',
                'alamat' => 'nullable|string|min:10'
            ]
        );
        // cek error atau tidak
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        // proses menyimpan data yang di input

        $pegawai = Pegawai::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jabatan_id' => $request->jabatan_id,
            'divisi_id' => $request->divisi_id,
            'gender' => $request->gender,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat
        ]);

        return new PegawaiResource(true, 'Data Pegawai Success Input', $pegawai);
    }
}
