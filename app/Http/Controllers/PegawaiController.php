<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        return view('pegawai');
    }
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gaji' => 'required',
            'pendidikan' => 'required',
            // tambahkan validasi lainnya jika diperlukan
        ]);

        // Redirect ke halaman index (atau halaman lainnya) setelah berhasil menyimpan data
        return redirect('/pegawai')->with('success', 'Data pegawai berhasil ditambahkan!');
    }
}

