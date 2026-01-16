<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Hafalan;
use App\Models\Surat;
use Illuminate\Http\Request;

class HafalanController extends Controller
{
    public function index()
    {
        return view('hafalans.index', [
            'title' => 'Data Hafalan',
            'hafalans' => Hafalan::with(['siswa', 'surat'])->get()
        ]);
    }

    
    public function create()
    {
        return view('hafalans.create', [
            'title' => 'Tambah Data Hafalan',
            'siswas' => Siswa::all(),
            'surats' => Surat::all()
        ]);
    }

    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'surat_id' => 'required|exists:surats,id',
            'tanggal_penilaian' => 'required|date',
            'nilai_tajwid' => 'required|numeric|min:0|max:10',
            'nilai_makhroj' => 'required|numeric|min:0|max:10',
            'nilai_tartil' => 'required|numeric|min:0|max:10',
            'nilai_kelancaran' => 'required|numeric|min:0|max:10',
            'keterangan' => 'nullable|string|max:255'
        ]);

        //hitung rata-rata
        $rata2 = ($validated['nilai_tajwid'] + $validated['nilai_makhroj'] + $validated['nilai_tartil'] + $validated['nilai_kelancaran']) / 4;

        //tambah rata-rata
        $validated['nilai_total'] = round($rata2, 2);

        //insert data
        Hafalan::create($validated);
        return redirect('/hafalan')->with('success', 'Data hafalan berhasil ditambahkan.');
    }

    public function edit(Hafalan $hafalan)
    {
        return view('hafalans.edit', [
            'title' => 'Edit Data Hafalan',
            'hafalan' => $hafalan,
            'siswas' => Siswa::all(),
            'surats' => Surat::all()
        ]);
    }

    public function update(Request $request, Hafalan $hafalan)
    {
        //validasi
        $validated = $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'surat_id' => 'required|exists:surats,id',
            'tanggal_penilaian' => 'required|date',
            'nilai_tajwid' => 'required|numeric|min:0|max:10',
            'nilai_makhroj' => 'required|numeric|min:0|max:10',
            'nilai_tartil' => 'required|numeric|min:0|max:10',
            'nilai_kelancaran' => 'required|numeric|min:0|max:10',
            'keterangan' => 'nullable|string|max:255'
        ]);

        //updatedata
        Hafalan::find($hafalan->id)->update($validated);
        return redirect('/hafalan')->with('success', 'Data hafalan berhasil diubah.');
    }

    public function delete(Hafalan $hafalan) 
    {
        Hafalan::where('id', $hafalan->id)->delete(); 
        return redirect('/hafalan')->with('success', 'Data hafalan berhasil dihapus.');
    } 
}


