<!-- resources/views/dashboardAdmin.blade.php -->
<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
    @include('partials.sidebar')

    <section id="content">
        @include('partials.navbar')

        <!-- MAIN CONTENT -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Halaman Peminjaman</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="peminjaman">Peminjaman</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="/">Home</a>
                        </li>
                    </ul>
                </div>
                <a class="btn-download" data-bs-toggle="modal" data-bs-target="#addPeminjamanModal">
                    <i class='bx bxs-add-to-queue'></i>
                    <span class="text">TAMBAHKAN</span>
                </a>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h5>Tabel Ekpedisi</h5>
                        <i class='bx bx-filter' ></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor RM</th>
                                <th>Nama Pasien</th>
                                <th>Petugas</th>
                                <th>Tanggal<br>Peminjaman</th>
                                <th>Tanggal<br>Pengembalian</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($peminjamans as $peminjaman)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $peminjaman->no_rekam_medis }}</td>
                                <td>{{ $peminjaman->nama_pasien }}</td>
                                <td>{{ $peminjaman->nama_petugas }}</td>
                                <td>{{ $peminjaman->tanggal_pinjam }}</td>
                                <td>
                                    @if($peminjaman->pengembalian)
                                        {{ $peminjaman->pengembalian->tanggal_pengembalian }}
                                    @else
                                        Belum Dikembalikan
                                    @endif
                                </td>
                                <td>{{ $peminjaman->pengembalian ? 'Dikembalikan' : 'Dipinjamkan' }}</td>
                                <td>
                                    <button class="btn btn-info btn-sm btn-edit" data-bs-toggle="modal" data-bs-target="#editPeminjamanModal{{$peminjaman->id}}">
                                        <i class='bx bxs-edit'></i>
                                    </button>
                                    <form  method="POST" action="{{route('deletePeminjaman')}}" class="d-inline">
                                        <!-- Delete Button -->
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="peminjamanId" value="{{$peminjaman->id}}">
                                        <button class="btn btn-danger btn-sm btn-delete" type="submit">
                                            <i class='bx bxs-trash'></i>
                                        </button>
                                    </form>
                                </td>                                    
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </section>

    @include('partials.modal.peminjaman.modalAddPeminjaman')
    @include('partials.modal.peminjaman.modalEditPeminjaman')
    @include('partials.footer')

</body>
</html>
