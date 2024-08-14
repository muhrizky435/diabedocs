<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjamans = Peminjaman::all();
        return view('peminjaman', compact('peminjamans'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'no_rekam_medis' => 'required',
            'nama_pasien' => 'required',
            'nama_petugas' => 'required',
            'tanggal_pinjam' => 'required|date',
            // 'tanggal_kembali' => 'required|date',
            // 'status' => 'required',
        ]);

        $peminjaman = new Peminjaman();
        $peminjaman->no_rekam_medis = $request->input('no_rekam_medis');
        $peminjaman->nama_pasien = $request->input('nama_pasien');
        $peminjaman->nama_petugas = $request->input('nama_petugas');
        $peminjaman->tanggal_pinjam = $request->input('tanggal_pinjam');
        $peminjaman->save();

        return redirect()->route('peminjaman')->with('success', 'Peminjaman berhasil ditambahkan.');
    }

    public function editPeminjaman(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required',
            'nama_petugas' => 'required',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'nullable|date',
            'status' => 'required',
        ]);

        $peminjaman = Peminjaman::findOrFail($request->input('id'));
        $peminjaman->nama_pasien = $request->input('nama_pasien');
        $peminjaman->nama_petugas = $request->input('nama_petugas');
        $peminjaman->tanggal_pinjam = $request->input('tanggal_pinjam');
        $peminjaman->tanggal_kembali = $request->input('tanggal_kembali');
        $peminjaman->status = $request->input('status');
        $peminjaman->save();

        return redirect()->route('peminjaman')->with('success', 'Peminjaman berhasil diedit.');
    }

    public function deletePeminjaman(Request $request)
    {
        $peminjamanId = $request->input('peminjamanId');
        Peminjaman::destroy($peminjamanId);

        return redirect()->route('peminjaman')->with('success', 'Peminjaman berhasil dihapus.');
    }

}
