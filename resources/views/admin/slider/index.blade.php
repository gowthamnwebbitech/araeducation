@extends('admin.index')
@section('admin')

<style>
     thead th{
         font-family: 'Open Sans', sans-serif !important; 
    }
    .thead-success th{
        background-color:#956b61 !important;
    }
    table{
        margin-bottom:20px !important;
    }
</style>



<div class="card-header">
    <h4 class="card-title">Slider</h4>
</div>

@if(session('danger'))
<div id="successAlert" class="alert alert-danger">
    {{ session('danger') }}
</div>

<script>
    setTimeout(function () {
        $("#successAlert").fadeOut("fast");
    }, 5000);
</script>
@endif


@if(session('success'))
<div id="success" class="alert alert-success">
    {{ session('success') }}
</div>

<script>
    setTimeout(function () {
        $("#success").fadeOut("fast");
    }, 5000);
</script>
@endif

<div class="row gy-4">
    <div class="col-lg-8">
        <div class="outer-box">
            <div class="card-body">
                <div class="table-responsive" style="overflow-x: inherit;">
                    <table id="example4" class="display table table-bordered verticle-middle table-striped table-responsive-sm" style="min-width: 845px;">
                        <thead class="thead-success">
                            <tr>
                                <th>S.No</th>
                                <th>TITLE</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($slider as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    @if($item->status == 1)
                                        Active
                                    @else
                                        Inactive
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a class="btn btn-info shadow btn-xs sharp me-2" href="javascript:void(0);" onclick="image_modal('{{ route('slider.edit', encrypt($item->id) )}}')" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp confirm-delete" data-href="{{route('slider.destroy', $item->id)}}" title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="outer-box">
            <form method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row gy-1">
                        <div class=" col-md-12">
                           <h4 class="mb-3">Slider</h4><br>
                           <label for="status" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="" required />
                            <br>
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="" disabled selected>Select status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            <br>
                        </div>
                        
                        <div class="col-md-12">
                           <div class="text-end">
                                <button class="btn btn-primary btn-md  w-100" type="submit">Add</button>
                           </div>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>



@include('modals.create_edit_modal')
@include('modals.delete_modal')



<script>
 function image_modal(url){
      $.get(url, function(data){
          $('.create_edit_modal').modal('show');
          $('.create_edit_modal_content').html(data);
      });
  }
</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script>
  $(".confirm-delete").click(function (e) {
      e.preventDefault();
      var url = $(this).data("href");
      $("#delete-modal").modal("show");
      $("#delete-link").attr("href", url);
  });

  $(".confirm-cancel").click(function (e) {
      e.preventDefault();
      var url = $(this).data("href");
      $("#cancel-modal").modal("show");
      $("#cancel-link").attr("href", url);
  });

  $(".confirm-complete").click(function (e) {
      e.preventDefault();
      var url = $(this).data("href");
      $("#complete-modal").modal("show");
      $("#comfirm-link").attr("href", url);
  });

  $(".confirm-alert").click(function (e) {
      e.preventDefault();
      var url = $(this).data("href");
      var target = $(this).data("target");
      $(target).modal("show");
      $(target).find(".comfirm-link").attr("href", url);
      $("#comfirm-link").attr("href", url);
  });
</script>

  
  
@endsection