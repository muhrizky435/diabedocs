<!-- partials/modalDelete.blade.php -->
@foreach($dokumens as $dokumen)
<div class="modal fade" id="deleteDokumenModal{{$dokumen->id}}" tabindex="-1" aria-labelledby="deleteModalLabel{{$dokumen->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{$dokumen->id}}">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data ini?</p>
                <form id="deleteForm{{$dokumen->id}}" action="{{route('deleteDokumen')}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="dokumenId" value="{{$dokumen->id}}">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
