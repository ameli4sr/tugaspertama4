<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Andi',
            'nim' => '20231234'
        ];

        return view('mahasiswa.index', compact('data'));
    }
}
