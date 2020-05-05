$(document).ready(function(){
  $('#news').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
      url: newsUrl,
    },
    columns: [
      {data: 'title', name: 'title'},
      {data: 'content', content: 'name'},
      {data: 'image', name: 'image'},
    ],
    pagingType: "first_last_numbers",
    lengthChange : false, 
    ordering: false,
  });
});