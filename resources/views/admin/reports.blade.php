@extends('layouts.app')

@section('content')
<section>
<div class="d-flex" id="wrapper">
    <div class="border-right" id="sidebar-wrapper">
        @include('admin/sidebar')
    </div>
    <div id="page-content-wrapper">
        <div class="container">
          @include('layouts.login_navbar')
            <div class="d-flex text-black pb-2">
              <div class="w-100">
                <h5>List of Reports</h5>
              </div>
              <div class="flex-shrink-0">
                <button type="button" class="btn btn-primary btn-sm" id="add_reports"><i class="fa fa-user-plus mr-1"></i>Add Reports</button>
              </div>
            </div>
            <div class="table-responsive-sm">
               <table class="table table-bordered table-striped" id="reports">
                   <thead>
                      <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Action</th>
                      </tr>
                   </thead>   
               </table>
               @include('admin.modals.reports')
               @include('admin.modals.update_reports')
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  {{-- render table reports --}}
  $(document).ready(function(){
    $('#reports').DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: "{{route('reports.index')}}",
      },
      columns: [
        {data: 'image', name: 'image'},
        {data: 'title', name: 'title'},
        {data: 'content', name: 'content'},
        {data: 'action', name: 'action'},
      ],
      columnDefs: [
        {
          render: function(data, type, row){
            return data.length > 10 ?
                    data.substr( 0, 30 ) +'…' :
                    data;
          },
          targets: [1, 2]
        },
      ],
      pagingType: "first_last_numbers",
    });
  });

// render image
// read image
function addReadURL(input) {
 if (input.files && input.files[0]) {
   var reader = new FileReader();
   reader.onload = function(e) {
     $('#load_image').attr('src', e.target.result);
   }
   reader.readAsDataURL(input.files[0]);
 }
}
$("#image").change(function() {
 addReadURL(this);
});

function updateReadUrl(input) {
 if (input.files && input.files[0]) {
   var reader = new FileReader();
   reader.onload = function(e) {
     $('#update_load_image').attr('src', e.target.result);
   }
   reader.readAsDataURL(input.files[0]);
 }
}
$("#update_image").change(function() {
 updateReadUrl(this);
});

// show modal
$('#add_reports').click(function(){
  $('#reports_form')[0].reset(); 
  $('#load_image').attr('src', '{{secure_asset('img/default.jpg')}}');
  $('#reportsModal').modal('show');
});


// add reports
$('#reports_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
    url: "{{route('reports.store')}}",
    method: "POST",
    data: new FormData(this),  
    contentType: false,  
    cache: false,          
    processData:false,  
    dataType: "json",
    success: function(data) {
      if (data.success) {
        $('#reports').DataTable().ajax.reload();
        $('#reports_form')[0].reset();
        $('#load_image').attr('src', '{{secure_asset('storage/images/default.jpg')}}');
        alertify.set('notifier','position', 'top-right');
        alertify.success(data.success, 3); 
      }
    }
  });
});

// update reports
$('#update_reports_form').on('submit', function(event){
  event.preventDefault();
  var id = $(this).attr('id');
  $.ajax({
    url: "/admin/reports/"+id,
    method: "POST",
    data: new FormData(this),  
    contentType: false,  
    cache: false,          
    processData:false,  
    dataType: "json",
    success: function(data) {
      if (data.success) {
        $('#reports').DataTable().ajax.reload();
        $('#reports_form')[0].reset();
        $('#updateReportsModal').modal('hide');
        alertify.set('notifier','position', 'top-right');
        alertify.success(data.success, 3); 
      }
    }
  });
});

// edit reports table
$(document).on('click', '.edit', function(){
  var id = $(this).attr('id');
  $.ajax({
    url :"/admin/reports/"+id+"/edit",
    method: "GET",
    dataType:"json",
    success:function(data) {
      $('#updateReportsModal').modal('show');
      $('#hidden_id').val(id);
      $('#update_load_image').attr('src', '{{secure_asset('storage/images/reports/')}}/'+data.result.image);
      $('#update_title').val(data.result.title);
      $('#update_content').val(data.result.content);
   }
  })
 })


// delete
$(document).on('click', '.btn-delete', function(){
  let id = $(this).attr('id');
  let ok = confirm('Are you sure you want to delete?');
  if (ok == true) {
    $.ajax({
      url: "/admin/reports/"+id,
      success: function(data){
        $('#reports').DataTable().ajax.reload();
        alertify.set('notifier','position', 'top-right');
        alertify.error(data.success, 3); 
      }
    });
  }
});
</script>
@endsection
