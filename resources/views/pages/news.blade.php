<!DOCTYPE html>
<html>
<head>
	<meta property="og:url" content="https://baggaonewsportal.herokuapp.com/news/{{$news->id}}">
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{$news->title}}" >
	<meta property="og:description" content="{{$news->content}}" >
	<meta property="og:image" content="https://baggaonewsportal.herokuapp.com/img/news/{{$news->image}}" >
	<meta property="og:image:width" content="300px">
	<meta property="og:image:height" content="160px">
	@include('includes.css')
</head>
<body>
@include('includes.header')
<section id="view-news">
	<div class="container">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item active" aria-current="page">News</li>
		  </ol>
		</nav>
		<div class="row">
			<div class="col-sm-8 border-bottom">
				<span class="view-news-title">
					<strong>{{$news->title}}</strong>
				</span>
				<blockquote class="blockquote-footer">{{$news->created_at}}
				</blockquote>
				<img src="{{secure_asset('img/news/')}}/{{$news->image}}">
				<p class="news-content pt-3 pb-3">
					{{$news->content->format('d/m/Y')}}
				</p>
				<div class="fb-share-button border-bottom" data-href="https://baggaonewsportal.herokuapp.com/news/{{$news->id}}" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fbaggaonewsportal.herokuapp.com%2Fnews%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
			</div> {{-- end of column 8--}}
			<div class="col-sm">
				@widget('AnnouncementWidget')
				@widget('EventsWidget')
			</div>
		</div>
	</div>
	</section>
	@include('includes.footer')
	<div id="fb-root"></div>
	@include('includes.script')
	<script type="text/javascript" src="{{secure_asset('js/style.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			scrollToDown('#view-news');
		});
		function scrollToDown(aid){
		    var aTag = $("#view-news");
		    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
		}
	</script>
</body>
</html>
