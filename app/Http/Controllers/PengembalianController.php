<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\peminjaman;
use \App\Models\pengembalian;

class PengembalianController extends Controller
{
    // Menampilkan semua data pengembalian
    public function index()
    {
        $pengembalians = Pengembalian::all();
        return view('pengembalian', compact('pengembalians'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'no_rekam_medis' => 'required',
            'nama_pasien' => 'required',
            'nama_petugas' => 'required',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
            // 'status' => 'required',
        ]);

        $pengembalian = new Pengembalian();
        $pengembalian->no_rekam_medis = $request->input('no_rekam_medis');
        $pengembalian->nama_pasien = $request->input('nama_pasien');
        $pengembalian->nama_petugas = $request->input('nama_petugas');
        $pengembalian->tanggal_pinjam = $request->input('tanggal_pinjam');
        $pengembalian->tanggal_kembali = $request->input('tanggal_kembali');
        $pengembalian->save();

        return redirect()->route('pengembalian')->with('success', 'Pengembalian berhasil ditambahkan.');
    }

    public function editPengembalian(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required',
            'nama_petugas' => 'required',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'nullable|date',
            'status' => 'required',
        ]);

        $pengembalian = Pengembalian::findOrFail($request->input('id'));
        $pengembalian->nama_pasien = $request->input('nama_pasien');
        $pengembalian->nama_petugas = $request->input('nama_petugas');
        $pengembalian->tanggal_pinjam = $request->input('tanggal_pinjam');
        $pengembalian->tanggal_kembali = $request->input('tanggal_kembali');
        $pengembalian->status = $request->input('status');
        $pengembalian->save();

        return redirect()->route('pengembalian')->with('success', 'pengembalian berhasil diedit.');
    }

    public function deletePengembalian(Request $request)
    {
        $pengembalianId = $request->input('pengembalianId');
        Pengembalian::destroy($pengembalianId);

        return redirect()->route('pengembalian')->with('success', 'pengembalian berhasil dihapus.');
    }
}