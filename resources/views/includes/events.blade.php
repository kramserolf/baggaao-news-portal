<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="#"><i class="fa fa-bullhorn mr-1"></i>Announcements</a></li>
	  <li class="breadcrumb-item active" aria-current="page">Latest</li>
	</ol>
</nav>
@foreach($events as $event)
	<div class="pb-3 mb-3 border-bottom">
		<span class="news-title">
			{{$event->title}}
		</span>
		<blockquote class="blockquote-footer">{{$event->created_at}}
		</blockquote>
		<p class="news-content">
			{{$event->content}}
		</p>
	</div>
@endforeach