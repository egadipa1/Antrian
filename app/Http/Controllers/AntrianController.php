<?php

namespace App\Http\Controllers;

use App\Models\Pasiens;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    function create()
    {
        return view('daftar');
    }

    function store(Request $request) {

        $data = new Pasiens();
        $data->Nama_Pasien = $request->nama;
        $data->Tanggal_Lahir = $request->tglLahir;
        $data->NIK=$request->nik;
        $data->Jenis_Kelamin = $request->jk;
        $data->Alamat=$request->alamat;
        $data->Nomor_Telepon=$request->noHp;

        $data->save();
    }
}