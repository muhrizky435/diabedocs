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
                    <h1>Dashboard Admin</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="/">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="/">Home</a>
                        </li>
                    </ul>
                </div>
                {{-- <a class="btn-download" data-bs-toggle="modal" data-bs-target="#addPeminjamanModal">
                    <i class='bx bxs-add-to-queue'></i>
                    <span class="text">TAMBAHKAN</span>
                </a> --}}
            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bx-export'></i>
                    <span class="text">
                        <h3>00</h3>
                        <p>Dipinjamkan</p>
                    </span>
                </li>
                <li>
                    <i class='bx bx-import'></i>
                    <span class="text">
                        <h3>00</h3>
                        <p>Dikembalikan</p>
                    </span>
                </li>
                <li>
                    <i class='bx bx-archive'></i>
                    <span class="text">
                        <h3>00</h3>
                        <p>Total Documents</p>
                    </span>
                </li>
            </ul>

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
                            @foreach($dokumens as $dokumen)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $dokumen->no_rekam_medis }}</td>
                                    <td>{{ $dokumen->nama_pasien }}</td>
                                    <td>{{ $dokumen->nama_petugas }}</td>
                                    <td>{{ $dokumen->tanggal_pinjam }}</td>
                                    <td>
                                        @if($dokumen->pengembalian)
                                            {{ $dokumen->pengembalian->tanggal_kembali }}
                                        @else
                                            Belum Dikembalikan
                                        @endif
                                    </td>
                                    <td>{{ $dokumen->pengembalian ? 'Dikembalikan' : 'Dipinjamkan' }}</td>
                                    <td>
                                        <!-- Edit Button -->
                                        <button class="btn btn-info btn-sm btn-edit" data-bs-toggle="modal" data-bs-target="#editDokumenModal{{ $dokumen->id }}">
                                            <i class='bx bxs-edit'></i>
                                        </button>
                                        <form  method="POST" action="{{route('deleteDokumen')}}" class="d-inline">
                                            <!-- Delete Button -->
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="dokumenId" value="{{$dokumen->id}}">
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
    {{-- @include('partials.modal.modalAdd') --}}
    @include('partials.modal.modalEdit')
    {{-- @include('partials.modal.modalDelete') --}}

</body>
</html>
