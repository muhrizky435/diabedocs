<!-- partials/modalEdit.blade.php -->
@foreach($pengembalians as $pengembalian)
<div class="modal fade" id="editPengembalianModal{{$pengembalian->id}}" tabindex="-1" role="dialog"
aria-labelledby="editStudentModalLabel{{$pengembalian->id}}" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <form id="editForm{{$pengembalian->id}}" method="POST" action="{{ route('editPengembalian') }}">
            @csrf
            <input type="hidden" name="id" value="{{ $pengembalian->id }}">
            <div class="modal-header">
                <h5 class="modal-title" id="editDokumenModalLabel{{$pengembalian->id}}"><i class="fas fa-edit"></i> EDIT PENGEMBALIAN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="editNamaPasien{{ $pengembalian->id }}" class="form-label"><i class="fas fa-user"></i> Nama Pasien</label>
                    <input type="text" name="nama_pasien" value="{{ $pengembalian->nama_pasien }}" class="form-control" id="editNamaPasien{{ $pengembalian->id }}" required>
                </div>
                <div class="mb-3">
                    <label for="editPetugas{{ $pengembalian->id }}" class="form-label"><i class="fas fa-envelope"></i> Nama Petugas</label>
                    <input type="text" name="nama_petugas" value="{{ $pengembalian->nama_petugas }}" class="form-control" id="editPetugas{{ $pengembalian->id }}" required>
                </div>
                <div class="mb-3">
                    <label for="editTanggalPinjam{{ $pengembalian->id }}" class="form-label"><i class="fas fa-calendar"></i> Tanggal pengembalian</label>
                    <input type="date" name="tanggal_pinjam" value="{{ $pengembalian->tanggal_pinjam }}" class="form-control" id="editTanggalPinjam{{ $pengembalian->id }}" required>
                </div>
                <div class="mb-3">
                    {{-- <label for="editTanggalKembali{{ $pengembalian->id }}" class="form-label"><i class="fas fa-calendar-alt"></i> Tanggal Pengembalian</label> --}}
                    <input type="date" name="tanggal_kembali" value="{{ $pengembalian->tanggal_kembali }}" class="form-control" id="editTanggalKembali{{ $pengembalian->id }}" hidden>
                </div>
                <div class="mb-3">
                    <label for="editStatus{{ $pengembalian->id }}" class="form-label"><i class="fas fa-info-circle"></i> Status</label>
                    <input type="text" name="status" value="{{ $pengembalian->status }}" class="form-control" id="editStatus{{ $pengembalian->id }}" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Changes</button>
            </div>
        </form>        
    </div>
</div>
@endforeach
