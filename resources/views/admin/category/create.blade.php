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
                    <li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab" class="nav-link active show">Add Category</a>
                    </li>
                </ul>
                <div class="tab-content">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div id="profile-settings" class="tab-pane fade active show">
                        <div class="pt-3">
                            <div class="settings-form">
                                <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Title</label>
                                            <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
                                        </div>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        {{-- <div class="col-md-6">
										    <div class="form-group">
											    <label class="form-label">Select Page</label>
												<select class="form-control select2 @error('category_id') is-invalid @enderror" name="page_name" id="category_id">
												    <option value="">Select Page</option>
													@if($pages)
													@foreach($pages as $key1 => $value1)
													    <option value="{{ $value1 }}" {{$value1 == old('page_name') ? 'selected' :''}}>{{ $value1 }}</option>
													@endforeach
													@endif
												</select>
											</div>
											@error('category_id')
			                                    <span class="invalid-feedback" role="alert">
			                                        <strong>{{ $message }}</strong>
			                                    </span>
			                                @enderror
										</div> --}}
									
                                    {{-- </div>
                                    <div class="row"> --}}
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Thumbnail Image</label>
                                            <input type="file" name="image" class="form-control image_input" id="file1" />
                                            <div id="imagePreview"></div>
                                        </div>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Status</label>
                                                <div class="input-group mb-3">
                                                    <select class="form-control @error('status') is-invalid @enderror" name="status">
                                                        <option value="Active">Active</option>
                                                        <option value="In Active">In Active</option>
                                                    </select>
                                                </div>
                                                @error('status')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ms-4">
                                                <button class="btn btn-primary mt-4 pt-3" type="submit">Add</button>
                                            </div>
                                        </div>
                                    </div>
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

