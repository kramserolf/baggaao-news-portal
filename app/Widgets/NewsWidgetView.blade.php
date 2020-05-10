<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="{{route('all.news')}}"><i class="fa fa-bullhorn mr-1"></i>News</a></li>
				  <li class="breadcrumb-item active" aria-current="page">Latest</li>
				</ol>
			</nav>
			@foreach($data as $row)
			<div class="row border-bottom pb-4 mb-4 bg-white">
			<div class="col-sm-5">
				<img data-src="{{secure_asset('img/news/')}}/{{$row->image}}" width="240" height="150" class="lozad">
			</div>
			<div class="col-sm-7">
				<span class="news-title">
					{{$row->title}}
				</span>
				<blockquote class="blockquote-footer">{{$row->created_at->format('d/m/Y')}}
				</blockquote>
				<p class="news-content">
					{{Str::limit($row->content, $limit = 100, $end = '...')}}
				</p>
				<a href="/news/{{$row->id}}" target="_blank" class="btn btn-primary btn-sm">Continue reading<i class="fa fa-arrow-right ml-1"></i></a>
			</div>
			</div>
			@endforeach
		<div class="text-right see-all">
			<a href="{{route('all.news')}}" target="_blank" class="btn btn-primary btn-sm">See all <i class="fa fa-external-link"></i></a>
		</div>
		</div> {{-- end of column 8--}}
		<div class="col-sm">
			@widget('AnnouncementWidget')
			@widget('EventsWidget')
		</div>
	</div>
</div>