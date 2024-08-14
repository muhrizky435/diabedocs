@foreach($peminjamans as $peminjaman)
<div class="modal fade" id="editPeminjamanModal{{ $peminjaman->id }}" tabindex="-1" role="dialog"
    aria-labelledby="editPeminjamanModalLabel{{ $peminjaman->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editForm{{$peminjaman->id}}" method="POST" action="{{ route('editPeminjaman')}}">
                @csrf
                {{-- Hidden Input to Ensure ID is Passed --}}
                <input type="hidden" name="id" value="{{ $peminjaman->id }}">
                <div class="modal-header">
                    <h5 class="modal-title" id="editPeminjamanModalLabel{{ $peminjaman->id }}"><i class="fas fa-edit"></i> EDIT PEMINJAMAN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="editNamaPasien{{ $peminjaman->id }}" class="form-label"><i class="fas fa-user"></i> Nama Pasien</label>
                        <input type="text" name="nama_pasien" value="{{ $peminjaman->nama_pasien }}" class="form-control" id="editNamaPasien{{ $peminjaman->id }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="editPetugas{{ $peminjaman->id }}" class="form-label"><i class="fas fa-envelope"></i> Nama Petugas</label>
                        <input type="text" name="nama_petugas" value="{{ $peminjaman->nama_petugas }}" class="form-control" id="editPetugas{{ $peminjaman->id }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="editTanggalPinjam{{ $peminjaman->id }}" class="form-label"><i class="fas fa-calendar"></i> Tanggal Peminjaman</label>
                        <input type="date" name="tanggal_pinjam" value="{{ $peminjaman->tanggal_pinjam }}" class="form-control" id="editTanggalPinjam{{ $peminjaman->id }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="editTanggalKembali{{ $peminjaman->id }}" class="form-label"><i class="fas fa-calendar-alt"></i> Tanggal Pengembalian</label>
                        <input type="date" name="tanggal_kembali" value="{{ $peminjaman->tanggal_kembali }}" class="form-control" id="editTanggalKembali{{ $peminjaman->id }}">
                    </div>
                    <div class="mb-3">
                        <label for="editStatus{{ $peminjaman->id }}" class="form-label"><i class="fas fa-info-circle"></i> Status</label>
                        <input type="text" name="status" value="{{ $peminjaman->status }}" class="form-control" id="editStatus{{ $peminjaman->id }}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
