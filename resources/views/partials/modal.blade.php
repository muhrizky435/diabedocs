
<!-- partials/modal.blade.php -->
<div class="modal fade" id="addPeminjamanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Peminjaman</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="noRm" class="form-label">No. RM</label>
                        <input type="text" class="form-control" id="noRm" required>
                    </div>
                    <div class="mb-3">
                        <label for="namaPasien" class="form-label">Nama Pasien</label>
                        <input type="text" class="form-control" id="namaPasien" required>
                    </div>
                    <div class="mb-3">
                        <label for="petugas" class="form-label">Petugas</label>
                        <input type="text" class="form-control" id="petugas" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalPeminjaman" class="form-label">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" id="tanggalPeminjaman" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button><!-- Your form elements -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

