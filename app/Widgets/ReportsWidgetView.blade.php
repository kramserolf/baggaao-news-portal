<div class="container">
	<div class="row">
		@foreach($data as $row)
		<div class="col-sm-3">
			<img data-src="{{asset('images/reports/')}}/{{$row->image}}" width="220" height="150" class="lozad">
			<blockquote class="blockquote-footer">{{$row->created_at->format('F d, Y g:i a')}}
			</blockquote>
			<a href="{{$row->content}}" class="news-content" data-toggle="tooltip" title="view on facebook">
				<p class="news-content">{{$row->title}}</p>
			</a>
		<blockquote class="blockquote-footer">
			click to view on facebook
		</blockquote>
		</div>
		@endforeach
	</div>
	<div class="text-right">
		<a href="{{route('all.reports')}}" target="_blank" class="btn btn-primary btn-sm text-white">See all <i class="fa fa-external-link"></i></a>
	</div>
</div>