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
				@foreach($news as $row)
				<div class="row border-bottom pb-4 mb-4">
				<div class="col-sm-5">
					<img src="{{asset('img/news/')}}/{{$row->image}}" width="240" height="150"> 
				</div>
				<div class="col-sm-7">
					<span class="news-title">
						{{$row->title}}
					</span>
					<blockquote class="blockquote-footer">{{$row->created_at}}
					</blockquote>
					<p class="news-content">
						{{Str::limit($row->content, $limit = 100, $end = '...')}}
					</p><br>
					<a href="/news/{{$row->id}}" target="_blank" class="btn btn-primary btn-sm">Continue reading<i class="fa fa-arrow-right ml-1"></i></a>
				</div>
				</div>
				@endforeach
			<div class="row justify-content-end">
				<ul class="pagination pagination-sm">
					{{$news->links()}}
				</ul>
			</div>
			</div> {{-- end of column 8--}}
			<div class="col-sm">
				@include('includes.events')
				@include('includes.upcoming')
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