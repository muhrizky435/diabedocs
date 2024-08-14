<!-- resources/views/pengembalian.blade.php -->
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
                    <h1>Halaman Pengembalian</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="pengembalian">Pengembalian</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="/">Home</a>
                        </li>
                    </ul>
                </div>
                <a class="btn-download" data-bs-toggle="modal" data-bs-target="#addPengembalianModal">
                    <i class='bx bxs-add-to-queue'></i>
                    <span class="text">TAMBAHKAN</span>
                </a>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h5>Tabel Pengembalian</h5>
                        <i class='bx bx-filter'></i>
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
                            @foreach($pengembalians as $pengembalian)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pengembalian->no_rekam_medis }}</td>
                                <td>{{ $pengembalian->nama_pasien }}</td>
                                <td>{{ $pengembalian->nama_petugas }}</td>
                                <td>{{ $pengembalian->tanggal_pinjam }}</td>
                                <td>{{ $pengembalian->tanggal_kembali }}</td>
                                <td>{{ $pengembalian->status ? 'Dikembalikan' : 'Dipinjamkan' }}</td>
                                <td>
                                    <button class="btn btn-info btn-sm btn-edit" data-bs-toggle="modal" data-bs-target="#editPengembalianModal{{$pengembalian->id}}">
                                        <i class='bx bxs-edit'></i>
                                    </button>
                                    <form  method="POST" action="{{route('deletePengembalian')}}" class="d-inline">
                                        <!-- Delete Button -->
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="pengembalianId" value="{{$pengembalian->id}}">
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

    @include('partials.footer')
    @include('partials.modal.pengembalian.modalAddPengembalian')
    @include('partials.modal.pengembalian.modalEditPengembalian')
    {{-- @include('partials.modal.peminjaman.modalDeletePeminjaman') --}}

</body>
</html>
