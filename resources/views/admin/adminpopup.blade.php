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
<div class="profile-tab">
    <div class="custom-tab-1">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a href="#about-me" data-bs-toggle="tab" class="nav-link active show">Image</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="profile-settings" class="tab-pane fade active show">
                <div class="pt-3">
                    <div class="settings-form">
                            <form method="POST" action="{{ route('admin.popup.update') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                
                                <div class="mb-3">
                                    <label for="image" class="form-label">Pop-up Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    @if ($popup->image_name)
                                        <img src="{{ asset('/public/images/'.$popup->image_name) }}" alt="Pop-up Image" class="mt-2" style="max-width: 200px;">
                                    @else
                                        <p>No image uploaded</p>
                                    @endif
                                </div>
                            
                                <button class="btn btn-primary" type="submit">Update</button>
                                    @if ($popup->image_name)
                                        <a href="{{route('admin.popup.delete')}}" class="btn btn-danger" type="submit">Delete</a>
                                    @endif
                            </form>

                    </div>
                </div>
            </div> <br><br><br>
        </div>
    </div>

</div>

@endsection