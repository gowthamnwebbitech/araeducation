<form action="{{ route('videoGallery.update', $video_link->id) }}" method="POST">
    <input name="_method" type="hidden" value="PATCH">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title h6">Edit Video Gallery</h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal">
        </button>
    </div>
    <div class="modal-body">
        <div class="row gy-1">
            <div class=" col-md-12" style="padding: 16px 27px;">
                <label for="status" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $video_link->title }}" required />
                <br>
                <label for="status" class="form-label">Youtube Link</label>
                <input type="text" name="youtube_link" class="form-control" id="youtube_link" value="{{ $video_link->youtube_link }}" required />
                <br>
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="" disabled selected>Select status</option>
                    <option value="1" {{ $video_link->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $video_link->status == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
                <br>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
