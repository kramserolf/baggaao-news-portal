@extends('layouts.app')

@section('content')
<section>
<div class="d-flex" id="wrapper">
    <div class="border-right" id="sidebar-wrapper">
        @include('admin/sidebar')
    </div>
    <div id="page-content-wrapper">
        <div class="container">
          @include('layouts.login_navbar.blade.php')
            <div class="d-flex text-black pb-2">
              <div class="w-100">
                <h5>List of Events</h5>
              </div>
              <div class="flex-shrink-0">
                <button type="button" class="btn btn-primary btn-sm" id="add_events"><i class="fa fa-user-plus mr-1"></i>Add Events</button>
              </div>
            </div>
            <div class="table-responsive-sm">
               <table class="table table-bordered table-striped" id="events">
                   <thead>
                      <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Action</th>
                      </tr>
                   </thead>   
               </table>
               @include('admin.modals.events')
               @include('admin.modals.update_events')
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  {{-- render table events --}}
  $(document).ready(function(){
    $('#events').DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: "{{route('events.index')}}",
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
          targets: [1, 2]
        },
      ],
      pagingType: "first_last_numbers",
    });
  });

// show modal
$('#add_events').click(function(){
  $('#events')[0].reset(); 
  $('#eventsModal').modal('show');
});


// add events
$('#events_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
    url: "{{route('events.store')}}",
    method: "POST",
    data: new FormData(this),  
    contentType: false,  
    cache: false,          
    processData:false,  
    dataType: "json",
    success: function(data) {
      if (data.success) {
        $('#events').DataTable().ajax.reload();
        $('#events_form')[0].reset();
        alertify.set('notifier','position', 'top-right');
        alertify.success(data.success, 3); 
      }
    }
  });
});

// update events
$('#update_events_form').on('submit', function(event){
  event.preventDefault();
  var id = $(this).attr('id');
  $.ajax({
    url: "/admin/events/"+id,
    method: "POST",
    data: new FormData(this),  
    contentType: false,  
    cache: false,          
    processData:false,  
    dataType: "json",
    success: function(data) {
      if (data.success) {
        $('#events').DataTable().ajax.reload();
        $('#events_form')[0].reset();
        $('#updateEventsModal').modal('hide');
        alertify.set('notifier','position', 'top-right');
        alertify.success(data.success, 3); 
      }
    }
  });
});

// edit events table
$(document).on('click', '.edit', function(){
  var id = $(this).attr('id');
  $.ajax({
    url :"/admin/events/"+id+"/edit",
    method: "GET",
    dataType:"json",
    success:function(data) {
      $('#updateEventsModal').modal('show');
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
      url: "/admin/events/"+id,
      success: function(data){
        $('#events').DataTable().ajax.reload();
        alertify.set('notifier','position', 'top-right');
        alertify.error(data.success, 3); 
      }
    });
  }
});
</script>
@endsection
