<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index()
    {
        return view('pendidikan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenjang' => 'required',
            'instansi' => 'required',
            'jurusan' => 'required',
        ]);


        return redirect()->route('pendidikan.index')->with('success', 'Pendidikan created successfully.');
    }
}
