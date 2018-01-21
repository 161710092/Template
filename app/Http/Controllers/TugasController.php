<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tugas;

class TugasController extends Controller
{
    public function rumah()
    {
        return view('rumah');
    }
    public function paragraph()
    {
    	return view('paragraph');
    }

    public function table()
    {
        $siswa = tugas::all();
    	return view('table', compact('siswa'));
    }

    public function foto()
    {
        return view('foto');
    }

    public function costum1()
    {
        return view('costum1');
    }
}
