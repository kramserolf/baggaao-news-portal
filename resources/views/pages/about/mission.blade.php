<!DOCTYPE html>
<html>
<head>
	<meta property="og:url" content="https://baggaonewsportal.herokuapp.com/about/mission&vision">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Mission and Vision of Baggao" >
	<meta property="og:description" content="To uplift the general well-being of the people through the development of its agro-industrial and tourism potentials managed by an empowered and globally competitive community.">
	<meta property="og:image" content="https://baggaonewsportal.herokuapp.com/img/lgu-logo.png" >
	<meta property="og:image:width" content="300px">
	<meta property="og:image:height" content="160px">
	@include('includes.css')
</head>
<body>
	@include('includes.header')
	<section id="mission">
	<div class="text-center">
		<h4 class="text-uppercase">mission - vision</h4>
		<hr class="small">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="card text-center">
				  <div class="card-header text-uppercase font-weight-bold">
				    Mission
				  </div>
				  <div class="card-body">
				    <p class="card-text">To uplift the general well-being of the people through the development of its agro-industrial and tourism potentials managed by an empowered and globally competitive community.</p>
				  </div>
				</div>

				<div class="card text-center">
				  <div class="card-header text-uppercase font-weight-bold">
				    Vision
				  </div>
				  <div class="card-body">
				    <p class="card-text">Baggao an agro-industry-based, progressive and globally competitive municipality “known as Tourist Haven of the North” driven by empowered, God-loving people living harmoniously with nature governed by service oriented leaders.</p>
				  </div>
				</div>
				<div class="fb-share-button" data-href="https://baggaonewsportal.herokuapp.com/about/mission&amp;vision" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fbaggaonewsportal.herokuapp.com%2Fabout%2Fmission%26vision&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
			</div>
			<div class="col-sm">
				@widget('AnnouncementWidget')
				@widget('EventsWidget')
			</div>
		</div>
	</div>
	</section>
	@include('includes.footer')
	<div id="fb-root"></div>
	<script type="text/javascript" src="{{secure_asset('js/style.js')}}"></script>
	@include('includes.script')
	<script type="text/javascript">
		$(document).ready(function(){
			scrollToDown('#mission');
		});
		function scrollToDown(aid){
		    var aTag = $("#mission");
		    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
		}
	</script>
</body>
</html>