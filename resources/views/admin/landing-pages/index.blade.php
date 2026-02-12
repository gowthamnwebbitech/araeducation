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
    <h4 class="card-title">Landing Page Detail</h4>
    <button type="button" class="btn btn-primary" onclick="window.location.href = '{{ route('landing.create') }}'">
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
                    <div class="d-flex justify-content-end mb-3 gap-2">

                        <!-- Download Sitemap -->
                        <a href="{{ route('sitemap.download') }}" class="btn btn-success">
                            <i class="fas fa-sitemap me-1"></i> Download Sitemap
                        </a>

                        <!-- Upload Sitemap -->
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadSitemapModal">
                            <i class="fas fa-cloud-upload-alt me-1"></i> Upload Sitemap
                        </button>

                    </div>

                    <table id="example4" class="display table table-bordered verticle-middle table-striped table-responsive-sm" style="min-width: 845px;">
                        <thead class="thead-success">
                            <tr>
                                <th>S.No</th>
                                <th>TITLE</th>
                                <th>SLUG</th>
                                <th>PAGE NAME</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($values as $key => $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ $item->page_name }}</td>

                                <td>
                                    <div class="d-flex">
                                        <a class="btn btn-info shadow btn-xs sharp me-2" href="{{ route('landing.edit', $item->id )}}" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp confirm-delete" data-href="{{route('landing.destroy', $item->id)}}" title="Delete">
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
<div class="modal fade" id="uploadSitemapModal" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('sitemap.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Upload Sitemap</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <input type="file" name="sitemap" class="form-control" accept=".xml" required>
                    <small class="text-muted">Only sitemap.xml allowed</small>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </form>
    </div>
</div>


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