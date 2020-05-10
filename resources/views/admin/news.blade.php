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
                <h5>List of News</h5>
              </div>
              <div class="flex-shrink-0">
                <button type="button" class="btn btn-primary btn-sm" id="add_news"><i class="fa fa-user-plus mr-1"></i>Add News</button>
              </div>
            </div>
            <div class="table-responsive-sm">
               <table class="table table-bordered table-striped" id="news">
                   <thead>
                      <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Action</th>
                      </tr>
                   </thead>   
               </table>
               @include('admin.modals.news')
               @include('admin.modals.update_news')
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  {{-- render table news --}}
  $(document).ready(function(){
    $('#news').DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: "{{route('news.index')}}",
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
                    data.substr( 0, 20 ) +'…' :
                    data;
          },
          targets: [0, 1, 2]
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
$('#add_news').click(function(){
  $('#news_form')[0].reset(); 
  $('#load_image').attr('src', '{{secure_asset('img/default.jpg')}}');
  $('#newsModal').modal('show');
});


// add news
$('#news_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
    url: "{{route('news.store')}}",
    method: "POST",
    data: new FormData(this),  
    contentType: false,  
    cache: false,          
    processData:false,  
    dataType: "json",
    success: function(data) {
      if (data.success) {
        $('#news').DataTable().ajax.reload();
        $('#news_form')[0].reset();
        $('#load_image').attr('src', '{{secure_asset('storage/images/default.jpg')}}');
        alertify.set('notifier','position', 'top-right');
        alertify.success(data.success, 3); 
      }
    }
  });
});

// update news
$('#update_news_form').on('submit', function(event){
  event.preventDefault();
  var id = $(this).attr('id');
  $.ajax({
    url: "/admin/news/"+id,
    method: "POST",
    data: new FormData(this),  
    contentType: false,  
    cache: false,          
    processData:false,  
    dataType: "json",
    success: function(data) {
      if (data.success) {
        $('#news').DataTable().ajax.reload();
        $('#news_form')[0].reset();
        $('#updateNewsModal').modal('hide');
        alertify.set('notifier','position', 'top-right');
        alertify.success(data.success, 3); 
      }
    }
  });
});

// edit news table
$(document).on('click', '.edit', function(){
  var id = $(this).attr('id');
  $.ajax({
    url :"/admin/news/"+id+"/edit",
    method: "GET",
    dataType:"json",
    success:function(data) {
      $('#updateNewsModal').modal('show');
      $('#hidden_id').val(id);
      $('#update_load_image').attr('src', '{{secure_asset('storage/images/news/')}}/'+data.result.image);
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
      url: "/admin/news/"+id,
      success: function(data){
        $('#news').DataTable().ajax.reload();
        alertify.set('notifier','position', 'top-right');
        alertify.error(data.success, 3); 
      }
    });
  }
});
</script>
@endsection
