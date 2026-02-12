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
    <h4 class="card-title">Resource Detail</h4>
    <button type="button" class="btn btn-primary" onclick="window.location.href = '{{ route('resource.create') }}'">
      Add New
    </button>
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
    <div class="col-lg-12">
        <div class="outer-box">
            <div class="card-body">
                <div class="table-responsive" style="overflow-x: inherit;">
                    <table id="example4" class="display table table-bordered verticle-middle table-striped table-responsive-sm" style="min-width: 845px;">
                        <thead class="thead-success">
                            <tr>
                                <th>S.No</th>
                                <th>IMAGE</th>
                                <th>TITLE</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($resource as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>
                                    @if(!empty($item->image))
                                        <img src="{{ asset('public/resource_images/' . $item->image) }}" alt="Resource Image" style="max-width: 100px; max-height: 100px;">
                                    @else
                                        No Image Available
                                    @endif
                                </td>
                                <td>{{ $item->title }}</td>

                                <td>
                                    <div class="d-flex">
                                        <a class="btn btn-info shadow btn-xs sharp me-2" href="{{ route('resource.edit', encrypt($item->id) )}}" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp confirm-delete" data-href="{{route('resource.destroy', $item->id)}}" title="Delete">
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