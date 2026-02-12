<form action="{{ route('imageGallery.update', $imageGallery->id) }}" method="POST" enctype="multipart/form-data">
    <input name="_method" type="hidden" value="PATCH">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title h6">Edit Image Gallery Details</h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal">
        </button>
    </div>
    <div class="modal-body">
        <div class="row gy-1">
            <div class="col-md-12" style="padding: 16px 27px;">
                
                <!-- Image Upload Field -->
                <input type="file" name="image" class="form-control" id="gallery-image-upload" accept="image/*" />
                <br>
                
                <label for="order_number" class="form-label">Order By</label>
                <input type="text" name="order_number" class="form-control" id="order_number" value="{{ $imageGallery->order_number }}" placeholder="" required />
                <br>
                
                <!-- Display Existing Image if Available -->
                @if(!empty($imageGallery->image))
                    <img id="current-gallery-image" src="{{ asset('public/gallery_images/' . $imageGallery->image) }}" alt="Current Image" style="max-width: 100%; height: 115px; margin-bottom: 17px;" />
                @endif
                
                <!-- Image Preview for New Upload -->
                <img id="new-gallery-image-preview" src="" alt="New Image Preview" style="display: none; max-width: 100%; height: 115px; margin-bottom: 17px;" />
                
                <!-- jQuery (Make sure it’s not loaded multiple times) -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                
                <!-- Script to Show Image Preview and Hide Current Image -->
                <script>
                    $(document).ready(function () {
                        $('#gallery-image-upload').on('change', function(event) {
                            var imagePreview = $('#new-gallery-image-preview');
                            var currentImage = $('#current-gallery-image');
                            var file = event.target.files[0];
                
                            if (file) {
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    imagePreview.attr('src', e.target.result);
                                    imagePreview.show();
                                    currentImage.hide(); // Hide the current image
                                }
                                reader.readAsDataURL(file);
                            } else {
                                imagePreview.hide();
                                currentImage.show(); // Show the current image if no new file is selected
                            }
                        });
                    });
                </script>
                <!-- Status Field -->
                <select name="status" class="form-control" id="status" required>
                    <option value="1" {{ $imageGallery->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $imageGallery->status == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
                <br><br><br>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
