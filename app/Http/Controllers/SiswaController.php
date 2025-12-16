<?php

namespace App\Http\Controllers;

use App\Models\Hafalan;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('siswas.index', [
            'title' => 'Data Siswa',
            'siswas' => Siswa::with('kelas')->get(),
        ]);
    }

    public function show(Hafalan $hafalan, Siswa $siswa)
    {
        return view('siswas.rapor', [
            'title' => 'Rapor Siswa',
            'siswas' => $siswa,
            'hafalans' => $hafalan
        ]);
    }
    
    public function create()
    {
        return view('siswas.create', [
            'title' => 'Tambah Data Siswa',
            'kelases' => Kelas::all()
        ]);
    }


    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'nis' => 'required',
            'nama_lengkap' => 'required',
            'kelas_id' => 'required',
        ]);


        //insert data
        Siswa::create($validated);
        return redirect('/siswa')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function edit(Siswa $siswa)
    {
        return view('siswas.edit', [
            'title' => 'Edit Data Siswa',
            'siswa' => $siswa,
            'kelases' =>Kelas::all()
        ]);
    }

    public function update(Request $request, Siswa $siswa)
    {
        //validasi
        $validated = $request->validate([
            'nis' => 'required',
            'nama_lengkap' => 'required',
            'kelas_id' => 'required',
        ]);

        //updatedata
        Siswa::find($siswa->id)->update($validated);
        return redirect('/siswa')->with('success', 'Data siswa berhasil diubah.');
    }

    public function delete(Siswa $siswa) 
    {
        Siswa::where('id', $siswa->id)->delete(); 
        return redirect('/siswa')->with('success', 'Data siswa berhasil dihapus.');
    } 
}
