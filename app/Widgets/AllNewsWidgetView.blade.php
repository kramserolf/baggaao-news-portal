@extends('layouts.master')
@section('content')

<section id="all-news">
	<div class="text-center">
		<h4 class="text-uppercase">news</h4>
		<hr class="small">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				@foreach($data as $row)
				<div class="row border-bottom pb-4 mb-4">
				<div class="col-sm-5">
					<img data-src="{{secure_asset('img/news/')}}/{{$row->image}}" width="240" height="150" class="lozad">
				</div>
				<div class="col-sm-7">
					<span class="news-title">
						{{$row->title}}
					</span>
					<blockquote class="blockquote-footer">{{$row->created_at}}
					</blockquote>
					<p class="news-content">
						{{Str::limit($row->content, $limit = 100, $end = '...')}}
					</p>
					<a href="/news/{{$row->id}}" target="_blank" class="btn btn-primary btn-sm">Continue reading<i class="fa fa-arrow-right ml-1"></i></a>
				</div>
				</div>
				@endforeach
			<div class="row justify-content-center">
				<ul class="pagination pagination-sm">
					{{$data->links()}}
				</ul>
			</div>
			</div> {{-- end of column 8--}}
			<div class="col-sm">
			@widget('AnnouncementWidget')
			@widget('EventsWidget')
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		scrollToDown('#all-news');
	});
	function scrollToDown(aid){
	    var aTag = $("#all-news");
	    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
	}
</script>
@endsection