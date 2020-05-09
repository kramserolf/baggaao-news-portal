@extends('layouts.master')
@section('content')
<meta property="og:url"           content="https://baggaonewsportal.herokuapp.com/news/{{$news->id}}" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="{{$news->title}}" />
  <meta property="og:description"   content="{{$news->content}}" />
<section id="view-news">
<div class="container">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item active" aria-current="page">News</li>
	  </ol>
	</nav>
	<div class="row">
		<div class="col-sm-8">
			<span class="view-news-title">
				<strong>{{$news->title}}</strong>
			</span>
			<blockquote class="blockquote-footer">{{$news->created_at}}
			</blockquote>
			<img src="{{secure_asset('img/news/')}}/{{$news->image}}">
			<p class="news-content pt-3 pb-3">
				{{$news->content}}
			</p>
			<div class="fb-share-button" data-href="https://baggaonewsportal.herokuapp.com/news/{{$news->id}}" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fbaggaonewsportal.herokuapp.com%2Fnews%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
		</div> {{-- end of column 8--}}
		<div class="col-sm-4">
			@widget('AnnouncementWidget')
			@widget('EventsWidget')
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