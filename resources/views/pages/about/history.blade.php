@extends('layouts.master')

@section('content')
<section id="history">
	<div class="text-center">
			<h4 class="text-uppercase">history</h4>
			<hr class="small">
	</div>
	<div class="container">
		<div class="row">
			<div class="card text-center">
				<div class="card-header text-uppercase">
					history of baggao
			</div>
			<div class="col-sm-8">
					<div class="card-body text-justify">
						<p>Long before the issuance of the Royal Decree which officially detached BAGGAO as a barrio of Amulung on November 27, 1896, the place has already became famous as a hunting ground.</p>
						<p>Old folks recount that the IBANAGS who frequently hunted in the locale, used to wash their catch in a big mud hole before taking them home which they called “ABBAGAOAN”. This “abbaggaoan” an Ibanag word, meaning a place to wash, became a noted landmark for hunters from which the name of the municipality was eventually derived.</p>
						<p>With the formal creation of Baggao as a separate municipality, Rev. Fr. Pedro Vicandi, O.P. who was then the Parish Priest of the area, was designated officer-in-charge of the town. His chapel, and at the same time, the town hall consisted of a shack made of bamboo and cogon built atop a hill one kilometer southeast of the old municipal building. However, the old municipal building was razed by fire by lawless elements in 1985. On April 18, 1899, Fr. Vicandi fled the area when Col. Daniel Tirong, under Gen. Emilio E. Aguinaldo visited the town and put to flame the friar's shanty. However in September 1899, when civil order was finally restored, Don Rafael Catolico took over as the first mayor of the New “Pueblo Civil”.</p>
						<p> For more than 85 years since it was separated from its mother town of Amulung, the seat of the Municipal Government of Baggao has been at Centro or Poblacion. In 1899, when Don Rafael Catolico took over as the first mayor of the new “Pueblo Civil” there were 5,051 inhabitants living in sparce settlements. The communities given the official status as a barrio were those immediately surrounding the Poblacion. Most of the barangays, now established upstream were merely patches of forest clearings barely making the requirements of becoming a full-fledge barrio.</p>
						<p> However, with the continuous influx of immigrants from other towns and provinces, new communities sprouted continuously moving further northeastward to the more fertile expanse of this virgin municipality. As of today there are already 48 barangays settled by 85 percent of the more than 66,264 inhabitants along the north-eastern portion of Baggao.</p>
						<p>The Poblacion or Centro founded a century ago became snail-paced in terms of development. Basing on the context of “ripple effect” approach of development, the site of the municipal government of Baggao became misplaced and unstrategically located as its pivotal role of development. The townsite, in fact, has caused an upsurge of factionalism and a desire of the people to split the municipality into two.</p>
						<p>In so doing, the Municipal Development Council arrived at a general consensus of selecting SAN JOSE, the most progressive barangay of the town, as the next seat of the municipal government of Baggao.
						</p>
						<p>Hence in 1985, public hearings led by the late Mayor Virgilio G. Herrero were conducted throughout the different barangays of Baggao where 85 percent of the population expressed their support to the move. So, in a session conducted by the Sangguniang Bayan of Baggao, the members passed a resolution transferring the site of the seat of municipal government of Baggao from the old Poblacion to barangay San Jose.</p>
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
		scrollToDown('#history');
	});
	function scrollToDown(aid){
	    var aTag = $("#history");
	    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
	}
</script>
@endsection