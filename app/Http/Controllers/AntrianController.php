<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Pasiens;
use App\Models\Poli;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AntrianController extends Controller
{

    function index()
    {
        $data = Poli::get();

        view()->share([
            'polis' => $data
        ]);

        return view('home');
    }

    function login($ID_Poli)
    {

        $data = Poli::findOrFail($ID_Poli);

        return view('login', compact('data'));
    }

    function verified(Request $request)
    {
        $nik = $request->NIK;

        $find = Pasiens::where('NIK', $nik)->exists();

        return response()->json([
            'found' => $find
        ]);
    }
    function create()
    {


        // $poli = Poli::findOrFail($ID_Poli);
         
        
        return view('daftar');
    }

    function store(Request $request)
    {

        $data = new Pasiens();
        $data->Nama_Pasien = $request->nama;
        $data->Tanggal_Lahir = $request->tglLahir;
        $data->NIK = $request->nik;
        $data->Jenis_Kelamin = $request->jk;
        $data->Alamat = $request->alamat;
        $data->Nomor_Telepon = $request->noHp;
        $data->save();

        return redirect()->route('index')->with('succes', 'Pendaftaran Berhasil');
    }

    function getAntrian(Request $request){
        $nik = $request->Nik;
        $id_poli = $request->idPoli;
        // Ambil ID_Pasien sebagai integer tunggal
        $pasien = Pasiens::where('NIK', $nik)->first();


        $id_pasien = $pasien->ID_Pasien;

        // Ambil Nomor_Antrian terakhir sebagai integer
        $noAntrianAkhir = Antrian::where('ID_Poli', $id_poli)->orderBy('Nomor_Antrian', 'DESC')->value('Nomor_antrian');

        if ($noAntrianAkhir) {
            $noAntrian = $noAntrianAkhir + 1;
        } else {
            $noAntrian = 1;
        }

        $data = new Antrian();
        $data->ID_Pasien = $id_pasien;
        $data->ID_Poli = $id_poli;
        $data->Nomor_Antrian = $noAntrian;
        $data->save();

        return response()->json();
    }
}