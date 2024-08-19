<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    // Menampilkan semua dokumen dengan data pengembalian
    public function index()
    {
        // Mengambil semua data peminjaman beserta data pengembalian yang terkait
        $dokumens = Peminjaman::with('pengembalian')->get();
        // $dokumens = Pengembalian::with('peminjaman')->get();

        // Mengirim data dokumen ke view dashboardAdmin
        return view('dashboardAdmin', compact('dokumens'));
    }

    // Method untuk menambah dokumen baru
    public function add(Request $request)
    {
        $request->validate([
            'no_rekam_medis' => 'required',
            'nama_pasien' => 'required',
            'nama_petugas' => 'required',
            'tanggal_pinjam' => 'required|date',
        ]);

        // Membuat instance baru atau kolom dari model Peminjaman
        $peminjaman = new Peminjaman();
        $peminjaman->no_rekam_medis = $request->input('no_rekam_medis');
        $peminjaman->nama_pasien = $request->input('nama_pasien');
        $peminjaman->nama_petugas = $request->input('nama_petugas');
        $peminjaman->tanggal_pinjam = $request->input('tanggal_pinjam');
        $peminjaman->save();

        // Redirect menuju ke halaman dashboardAdmin dengan pesan sukses
        return redirect()->route('dashboardAdmin')->with('success', 'Dokumen berhasil ditambahkan.');
    }

    // Method untuk mengedit dokumen peminjaman 
    public function editDokumen(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required',
            'nama_petugas' => 'required',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'nullable|date',
            'status' => 'required',
        ]);

        // Mencari dokumen berdasarkan ID
        $peminjaman = Peminjaman::findOrFail($request->input('id'));
        $peminjaman->nama_pasien = $request->input('nama_pasien');
        $peminjaman->nama_petugas = $request->input('nama_petugas');
        $peminjaman->tanggal_pinjam = $request->input('tanggal_pinjam');

        // Jika ada tanggal pengembalian, simpan data pengembalian
        if ($request->input('tanggal_kembali')) {
            $pengembalian = $peminjaman->pengembalian ?? new Pengembalian();
            $pengembalian->tanggal_kembali = $request->input('tanggal_kembali');
            $peminjaman->pengembalian()->save($pengembalian);
        }

        $peminjaman->status = $request->input('status');
        $peminjaman->save();

        // Redirect ke halaman dashboardAdmin dengan pesan sukses
        return redirect()->route('dashboardAdmin')->with('success', 'Dokumen berhasil diedit.');
    }

    // Method untuk menghapus dokumen
    public function deleteDokumen(Request $request)
    {
        $dokumenId = $request->input('dokumenId');
        Peminjaman::destroy($dokumenId);

        return redirect()->route('dashboardAdmin')->with('success', 'Dokumen berhasil dihapus.');
    }
}