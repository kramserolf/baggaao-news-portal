@extends('layouts.master')
<meta property="og:url"           content="https://baggaonewsportal.herokuapp.com" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Baggao News Information and News Portal" />
  <meta property="og:description"   content="Seal Description" />
  <meta property="og:image"         content="https://baggaonewsportal.herokuapp.com/img/logo.png" />
@section('content')
<section id="seal">
	<div class="text-center">
		<h4 class="text-uppercase">seal symbolism</h4>
		<hr class="small">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="card-header text-uppercase font-weight-bold text-center">
					logo of the municipality of baggao
				</div>
				<div class="card-body">
					<div class="text-center">
						<img data-src="{{secure_asset('img/lgu-logo.png')}}" alt="Logo of Baggao" class="lozad">
					</div>
				<div class="text-center mt-4">
				<table class="table table-bordered">
					<thead class="thead-light text-uppercase">
						<tr>
							<th colspan="2">seal symbolism</th>
						</tr>
					</thead>
					<tr>
						<td class="font-weight-bold">
							Outer Circle
						</td>
						<td>
							Municipal Boundery
						</td>
					</tr>
					<tr>
						<td class="font-weight-bold">
							Inner Circle
						</td>
						<td>
							Barangay Boundery
						</td>
					</tr>
					<tr>
						<td class="font-weight-bold">
							Shield
						</td>
						<td>
							Resilient Shield
						</td>
					</tr>
					<tr>
						<td class="font-weight-bold">
							Sun
						</td>
						<td>
							Sign of Progress
						</td>
					</tr>
					<tr>
						<td class="font-weight-bold">
							Mountain
						</td>
						<td>
							Sierra Madre
						</td>
					</tr>
					<tr>
						<td class="font-weight-bold">
							3 River
						</td>
						<td>
							Paranan River<br>
							Pared River<br>
							Fulay River<br>	
						</td>
					</tr>
					<tr>
						<td class="font-weight-bold">
							Wood
						</td>
						<td>
							Wood Industry
						</td>
					</tr>
					<tr>
						<td class="font-weight-bold">
							Plant
						</td>
						<td>
							Agriculture Industry
						</td>
					</tr>
				</table>
				</div>
				</div>
				<div class="fb-share-button" data-href="https://baggaonewsportal.herokuapp.com/about/seal" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fbaggaonewsportal.herokuapp.com%2Fabout%2Fseal&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
			</div>
			<div class="col-sm">
				@widget('AnnouncementWidget')
				@widget('EventsWidget')
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		scrollToDown('#seal');
	});
	function scrollToDown(aid){
	    var aTag = $("#seal");
	    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
	}
</script>
@endsection