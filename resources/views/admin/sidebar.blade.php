{{-- <!Sidebar>
   <div id="sidebar-wrapper">
     <div class="d-flex flex-column pt-3">
     	<div class="p-3 border-bottom"><a href="{{route('home')}}">Admins</a></div>
       <div class="p-3 border-bottom"><a href="{{route('admin.news')}}">News</a></div>
       <div class="p-3 border-bottom"><a href="{{route('admin.events')}}">Announcement</a></div>
       <div class="p-3 border-bottom"><a href="{{route('admin.reports')}}">Photo Reports</a></div>
       <div class="p-3 border-bottom"><a href="">Events</a></div>
       <div class="p-3 border-bottom"><a href="">Feedbacks</a></div>
     </div>
   </div> --}}
   <div class="list-group list-group-flush">
     <a href="{{route('home')}}" class="list-group-item list-group-item-action"><i class="fa fa-home"></i>Admins</a>
     <a href="{{route('news.index')}}" class="list-group-item list-group-item-action"><i class="fa fa-github-square"></i>News</a>
     <a href="{{route('announcements.index')}}" class="list-group-item list-group-item-action"><i class="fa fa-github-square"></i>Announcement</a>
     <a href="{{route('reports.index')}}" class="list-group-item list-group-item-action"><i class="fa fa-github-square"></i>Photo Reports</a>
     <a href="{{route('events.index')}}" class="list-group-item list-group-item-action"><i class="fa fa-github-square"></i>Events</a>
     <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-github-square"></i>Feedbacks</a>
   </div>