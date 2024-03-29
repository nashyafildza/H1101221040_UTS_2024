<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        return view('jabatan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'job_title' => 'required',
            'job_departmen' => 'required',
        ]);


        return redirect()->route('jabatan.index')->with('success', 'Jabatan created successfully.');
    }
}
