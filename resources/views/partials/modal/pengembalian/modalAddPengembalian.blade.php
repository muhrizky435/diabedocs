
<!-- partials/modal.blade.php -->
<div class="modal fade" id="addPengembalianModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM PENGEMBALIAN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('addPengembalian') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="petugas" class="form-label">No RM</label>
                        <input type="text" class="form-control" name="no_rekam_medis" required>
                    </div>
                    <div class="mb-3">
                        <label for="petugas" class="form-label">Pasien</label>
                        <input type="text" class="form-control" name="nama_pasien" required>
                    </div>
                    <div class="mb-3">
                        <label for="petugas" class="form-label">Petugas</label>
                        <input type="text" class="form-control" name="nama_petugas" required>
                    </div>
                    <div class="mb-3">
                        <label for="petugas" class="form-label">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" name="tanggal_pinjam" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_kembali" class="form-label">Tanggal Pengembalian</label>
                        <input type="date" class="form-control" name="tanggal_kembali" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </form>                
            </div>
        </div>
    </div>
</div>

