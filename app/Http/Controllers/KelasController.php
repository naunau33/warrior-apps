<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function create()
    {
        return view('siswas.create', [
            'kelases' => Kelas::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kelas_id' => 'required|exists:kelas_id'
        ]);

        Siswa::create([
            'nama' => $request->nama,
            'kelas_id' => $request->kelas_id
        ]);
    }
}
