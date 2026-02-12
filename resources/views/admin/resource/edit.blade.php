@extends('admin.index')
@section('admin')

@if(session('success'))
    <div id="successAlert" class="alert alert-success">
        {{ session('success') }}
    </div>

    <script>
        setTimeout(function() {
            $('#successAlert').fadeOut('fast');
        }, 3000); // 3000 milliseconds = 3 seconds
    </script>
@endif






<div class="outer-box">
    <div class="card-body">
        <div class="profile-tab">
            <div class="custom-tab-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#profile-settings" data-bs-toggle="tab" class="nav-link active show">Edit Resource</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="profile-settings" class="tab-pane fade active show">
                        <div class="pt-3">
                            <div class="settings-form">
                                <form method="POST" action="{{ route('resource.update', $resource->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                    <input type="hidden" name="resource_id" value="{{ $resource->id }}">

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Title</label>
                                            <input type="text" name="title" class="form-control" value="{{ $resource->title }}">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Thumbnail Image</label>
                                            <input type="file" name="file1" class="form-control image_input" id="file1" />
                                            <div id="imagePreview">
                                                @if($resource->image)
                                                <img src="{{ url('public/resource_images/'.$resource->image) }}" class="img-thumbnail" width="80" /> @endif
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Pdf File</label>
                                            <input type="file" name="file2" class="form-control image_input" id="file2" />
                                            <div id="imagePreview1">
                                                @if($resource->pdf_file)
                                                <a href="{{ url('public/resource_files/'.$resource->pdf_file) }}" style="margin-top: 10px;margin-left: 5px;font-weight: 700;text-decoration: underline;" download>Download PDF</a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Short Description</label>
                                            <textarea name="short_description" class="form-control" rows="3">{{ $resource->short_description }}</textarea>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" class="form-control" id="description">{{ $resource->description }}</textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Meta Title</label>
                                            <input type="text" name="meta_title" class="form-control" value="{{ $resource->meta_title }}">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Meta Description</label>
                                            <input type="text" name="meta_description" class="form-control" value="{{ $resource->meta_description }}">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Meta Keyword</label>
                                            <input type="text" name="meta_keyword" class="form-control" value="{{ $resource->meta_keyword }}">
                                        </div>
                                    </div>

                                    <br>
                                    <br>

                                    <button class="btn btn-primary" type="submit">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>













@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script>
    $(document).ready(function() {
        CKEDITOR.replace('description');
    });
</script>




<script>
    $(document).ready(function() {
        $(".image_input").change(function() {
            var input = this;
            if (input.id === 'file1') {
                readURL(input, $('#imagePreview'));
            } else if (input.id === 'file2') {
                readURL(input, $('#imagePreviews'));
            }
        });

        function readURL(input, previewContainer) {
            if (input.files && input.files.length > 0) {
                var totalFiles = input.files.length;

                previewContainer.empty();

                    for (var i = 0; i < totalFiles; i++) {
                        if (input.files[i]) {
                            var reader = new FileReader();

                            reader.onload = function(e) {
                                previewContainer.append('<img src="' + e.target.result + '" class="img-thumbnail" width="80"/>');
                            }

                            reader.readAsDataURL(input.files[i]);
                        }
                    }
               
            }
        }
    });
</script>





