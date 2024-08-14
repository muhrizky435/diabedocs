<!-- partials/modalEdit.blade.php -->
@foreach($dokumens as $dokumen)
<div class="modal fade" id="editDokumenModal{{$dokumen->id}}" tabindex="-1" role="dialog" aria-labelledby="editDokumenModalLabel{{$dokumen->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editForm{{$dokumen->id}}" method="POST" action="{{ route('editDokumen') }}">
                @csrf
                <input type="hidden" name="id" value="{{ $dokumen->id }}">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDokumenModalLabel{{$dokumen->id}}">Edit Dokumen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="editNamaPasien{{ $dokumen->id }}" class="form-label"><i class="fas fa-user"></i> Nama Pasien</label>
                        <input type="text" name="nama_pasien" value="{{ $dokumen->nama_pasien }}" class="form-control" id="editNamaPasien{{ $dokumen->id }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="editPetugas{{ $dokumen->id }}" class="form-label"><i class="fas fa-envelope"></i> Nama Petugas</label>
                        <input type="text" name="nama_petugas" value="{{ $dokumen->nama_petugas }}" class="form-control" id="editPetugas{{ $dokumen->id }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="editTanggalPinjam{{ $dokumen->id }}" class="form-label"><i class="fas fa-calendar"></i> Tanggal Peminjaman</label>
                        <input type="date" name="tanggal_pinjam" value="{{ $dokumen->tanggal_pinjam }}" class="form-control" id="editTanggalPinjam{{ $dokumen->id }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="editTanggalKembali{{ $dokumen->id }}" class="form-label"><i class="fas fa-calendar-alt"></i> Tanggal Pengembalian</label>
                        <input type="date" name="tanggal_kembali" value="{{ $dokumen->pengembalian ? $dokumen->pengembalian->tanggal_kembali : '' }}" class="form-control" id="editTanggalKembali{{ $dokumen->id }}">
                    </div>
                    <div class="mb-3">
                        <label for="editStatus{{ $dokumen->id }}" class="form-label"><i class="fas fa-info-circle"></i> Status</label>
                        <input type="text" name="status" value="{{ $dokumen->pengembalian ? 'Dikembalikan' : 'Dipinjamkan' }}" class="form-control" id="editStatus{{ $dokumen->id }}" required>
                    </div>
                </div>                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
