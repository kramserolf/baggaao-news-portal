@extends('layouts.master')
@section('content')
<section id="view-news">
<div class="container">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item active" aria-current="page">News</li>
	  </ol>
	</nav>
	<div class="row">
		<div class="col-sm-9">
			<span class="view-news-title">
				<strong>{{$news->title}}</strong>
			</span>
			<blockquote class="blockquote-footer">{{$news->created_at}}
			</blockquote>
			<img src="{{asset('img/news/')}}/{{$news->image}}">
			<p class="news-content pt-3 pb-3">
				{{$news->content}}
			</p>
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
		scrollToDown('#view-news');
	});
	function scrollToDown(aid){
	    var aTag = $("#view-news");
	    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
	}
</script>
@endsection