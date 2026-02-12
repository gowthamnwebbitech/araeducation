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
    <h4 class="card-title">Contact Us Queries</h4>
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
                <div class="table-responsive" style="overflow-x: auto;">
                    <table id="example4" class="display table table-bordered verticle-middle table-striped table-responsive-sm" style="min-width: 845px;">
                        <thead class="thead-success">
                            <tr>
                                <th width="5%">S.NO</th>
                                <th width="15%">NAME</th>
                                <th width="20%">EMAIL/PHONE</th>
                                <th width="15%">COURSE</th>
                                <th width="35%">MESSAGE</th>
                                <th width="10%">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $contact = App\Models\Contact::latest()->get(); @endphp
                            @foreach($contact as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}<br>({{ $item->phone }})</td>
                                <td>{{ $item->course_id ?? '' }}</td>
                                <td>{{ $item->message }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp confirm-delete" data-href="{{route('message.destroy', $item->id)}}" title="Delete">
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