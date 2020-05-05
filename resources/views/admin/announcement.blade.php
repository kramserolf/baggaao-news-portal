@extends('layouts.app')

@section('content')
<section>
<div class="d-flex" id="wrapper">
    <div class="border-right" id="sidebar-wrapper">
        @include('admin/sidebar')
    </div>
    <div id="page-content-wrapper">
        <div class="container">
            <div class="d-flex text-black pb-2">
              <div class="w-100">
                <h5>List of Announcement</h5>
              </div>
              <div class="flex-shrink-0">
                <button type="button" class="btn btn-primary btn-sm" id="add_announcement"><i class="fa fa-user-plus mr-1"></i>Add Announcement</button>
              </div>
            </div>
            <div class="table-responsive-sm">
               <table class="table table-bordered table-striped" id="announcement">
                   <thead>
                      <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Action</th>
                      </tr>
                   </thead>   
               </table>
               @include('admin.modals.announcement')
               @include('admin.modals.update_announcement')
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  {{-- render table announcement --}}
  $(document).ready(function(){
    $('#announcement').DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: "{{route('announcements.index')}}",
      },
      columns: [
        {data: 'title', name: 'title'},
        {data: 'content', name: 'content'},
        {data: 'action', name: 'action'},
      ],
      columnDefs: [
        {
          render: function(data, type, row){
            return data.length > 10 ?
                    data.substr( 0, 20 ) +'…' :
                    data;
          },
          targets: 1
        },
      ],
      pagingType: "first_last_numbers",
    });
  });

// show modal
$('#add_announcement').click(function(){
  $('#announcement_form')[0].reset(); 
  $('#announcementModal').modal('show');
});


// add announcement
$('#announcement_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
    url: "{{route('announcements.store')}}",
    method: "POST",
    data: new FormData(this),  
    contentType: false,  
    cache: false,          
    processData:false,  
    dataType: "json",
    success: function(data) {
      if (data.success) {
        $('#announcement').DataTable().ajax.reload();
        $('#announcement_form')[0].reset();
        alertify.set('notifier','position', 'top-right');
        alertify.success(data.success, 3); 
      }
    }
  });
});

// update announcement
$('#update_announcement_form').on('submit', function(event){
  event.preventDefault();
  var id = $(this).attr('id');
  $.ajax({
    url: "/admin/announcements/"+id,
    method: "POST",
    data: new FormData(this),  
    contentType: false,  
    cache: false,          
    processData:false,  
    dataType: "json",
    success: function(data) {
      if (data.success) {
        $('#announcement').DataTable().ajax.reload();
        $('#announcement_form')[0].reset();
        $('#updateAnnouncementModal').modal('hide');
        alertify.set('notifier','position', 'top-right');
        alertify.success(data.success, 3); 
      }
    }
  });
});

// edit announcement table
$(document).on('click', '.edit', function(){
  var id = $(this).attr('id');
  $.ajax({
    url :"/admin/announcements/"+id+"/edit",
    method: "GET",
    dataType:"json",
    success:function(data) {
      $('#updateAnnouncementModal').modal('show');
      $('#hidden_id').val(id);
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
      url: "/admin/announcements/"+id,
      success: function(data){
        $('#announcement').DataTable().ajax.reload();
        alertify.set('notifier','position', 'top-right');
        alertify.error(data.success, 3); 
      }
    });
  }
});
</script>
@endsection
