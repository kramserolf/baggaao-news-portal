@extends('layouts.master')

@section('content')
	<section id="topography">
	<div class="text-center">
		<h4 class="text-uppercase">topography - slope</h4>
		<hr class="small">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="card text-center">
				  <div class="card-header text-uppercase font-weight-bold">
				    Topography, Drainage and Physiography
				  </div>
				  <div class="card-body">
				    <p class="card-text"> The municipality of Baggao is composed of a mixed topography of plains and valley, hills and mountains. The lowland areas along the Pared, Paranan, Intal, Asinga, Taguntungan and Fulay Rivers are level and the surrounding landscapes are hilly and mountainous. These areas are dissected by rivers and numerous creeks and gullies. Accumulated run0off drains the western half portion through these waterways and the eastern half portion of the area by the rivers and tributaries of main streams that flows to the Pacific Ocean further east.</p>
				    <p>Other landscape features within the municipality are small elbow lakes or intermittent ponds sporadically found in the western and central portions of the municipality and which occupies a minimal .02 percent of the total land area of the municipality.</p>
				  </div>
				</div>

				<div class="card text-center">
				  <div class="card-header text-uppercase font-weight-bold">
				    Slope
				  </div>
				  <div class="card-body">
				    <p class="card-text">Baggao is generally a mountainous municipality. There are 7,927.56 hectares or 7.90 percent of the total land area of 100,294.70 hectares has a slope of 50 percent and above. Steep areas are sporadically scattered along the eastern, north central and south central portions of the municipality which occupies an aggregate area of approximately 8,494.20 hectares representing 8.47 percent of the total land area of the municipality. Rolling to moderately steep occupies 20,827.17 or 20.77 percent while undulating to rolling has an aggregate area of 25,999.12 or 25.92 percent. Gently sloping occupies 15,507.01 or 15.46 percent while plains or flat areas generally located at the central portion of the municipality occupies an area of 21,539.64 hectares or 21.48 percent to total land area.</p>
				  </div>
				</div>
			</div>
			<div class="col-sm">
				@include('includes.announcement')
				@include('includes.upcoming')
			</div>
		</div>
	</div>
	</section>
	<script type="text/javascript">
		$(document).ready(function(){
			scrollToDown('#topography');
		});
		function scrollToDown(aid){
		    var aTag = $("#topography");
		    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
		}
	</script>
@endsection

