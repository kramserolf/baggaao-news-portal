<!DOCTYPE html>
<html>
<head>
	<meta property="og:url"           content="https://baggaonewsportal.herokuapp.com/news/{{$news->id}}">
	 <meta property="og:type"          content="website">
	 <meta property="og:title"         content="{{$news->title}}" >
	 <meta property="og:description"   content="{{$news->content}}" >
	 <meta property="og:image"         content="https://baggaonewsportal.herokuapp.com/img/news/{{$news->image}}" >
	 <meta property="og:image:width"         content="300px">
	 <meta property="og:image:height"         content="160px">
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <!-- CSRF Token -->
	 <meta name="csrf-token" content="{{ csrf_token() }}">
	 <!-- bootstrap css -->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	 <!-- font lato -->
	 <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
	 <!-- font-awesome -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	 <!-- smartmenu bootstrap css add on -->
	 <link rel="stylesheet" type="text/css" href="{{secure_asset('css/jquery.smartmenus.bootstrap-4.css')}}">
	 <!-- custom css -->
	 <link rel="stylesheet" type="text/css" href="{{secure_asset('css/style.css')}}">

</head>
<body>
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
<div id="fb-root"></div>
{{-- facebook script --}}
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
{{-- lazy load --}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<!-- smartmenu jquery -->
<script type="text/javascript" src="{{secure_asset('js/jquery.smartmenus.js')}}" defer></script>
<!-- smartmenu bootstrap add on -->
<script type="text/javascript" src="{{secure_asset('js/jquery.smartmenus.bootstrap-4.js')}}" defer></script>
<!-- bootstrap jquery -->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<!-- popper.js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!-- bootstrap js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
