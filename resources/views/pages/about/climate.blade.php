@extends('layouts.master')

@section('content')
<section id="climate">
	<div class="text-center">
			<h4 class="text-uppercase">Climate</h4>
			<hr class="small">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="card text-center">
					<div class="card-header text-uppercase">
						climate
					</div>
					<div class="card-body text-justify">
						<h6 class="text-uppercase font-weight-bold">Rainfall</h6>
						<p> The climate of Baggao falls under the radii of the third type of climate according to CORONAS classification. Climate is defined to be not very pronounced. It is relatively dry from January to April and wet during the rest of the year. The maximum rain period are not very pronounced with the short dry season lasting only from one to three months. Rainfalls are mostly brought in by the occurrence of typhoons and the rest by monsoon rains. Highest average rainfall as gleaned from PAGASA climatological data for five years (1999 – 2003) was in the month of September with 291.630mm water. Lowest rainfall was in the month of April with 38.06mm water.</p>
						<h6 class="text-uppercase font-weight-bold">temperature</h6>
						<p> According to PAGASA, the highest mean temperature for Baggao is 29.10 °C with the highest temperature prevailing during the month of June. The month of December registered the lowest mean temperature of 24.60 °C. This indicates that Baggao experiences the hottest weather during the month of April to May while the coolest months of the year are usually from December to February.</p>
						<h6 class="text-uppercase font-weight-bold">humidity</h6>
						<p>The month of December registered the highest percentage of mean relative to humidity while the lowest mean relative humidity occurred during the month of February as observed by the Aparri PAGASA station.</p>
					</div>
				</div>
			</div>
			<div class="col-sm">
				@include('includes.events')
				@include('includes.upcoming')
			</div>
		</div>
	</div>	
</section>
<script type="text/javascript">
	$(document).ready(function(){
		scrollToDown('#climate');
	});
	function scrollToDown(aid){
	    var aTag = $("#climate");
	    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
	}
</script>
@endsection