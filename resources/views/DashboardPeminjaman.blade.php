@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Peminjaman</h1>
    <a href="{{ route('peminjaman.create') }}" class="btn btn-primary">Tambah Peminjaman</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor RM</th>
                <th>Nama Pasien</th>
                <th>Petugas</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($peminjaman as $index => $pinjaman)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $pinjaman->document->no_rekam_medis }}</td>
                <td>{{ $pinjaman->document->nama_pasien }}</td>
                <td>{{ $pinjaman->petugas }}</td>
                <td>{{ $pinjaman->tanggal_pinjam }}</td>
                <td>{{ $pinjaman->tanggal_kembali ?? '-' }}</td>
                <td>{{ $pinjaman->status }}</td>
                <td>
                    @if($pinjaman->status == 'Dipinjam')
                    <form action="{{ route('pengembalian.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="peminjaman_id" value="{{ $pinjaman->id }}">
                        <input type="date" name="tanggal_pengembalian" class="form-control" required>
                        <button type="submit" class="btn btn-success mt-2">Kembalikan</button>
                    </form>
                    @else
                    Dikembalikan
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
