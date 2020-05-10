<!DOCTYPE html>
<html>
<head>
	<meta property="og:url" content="https://baggaonewsportal.herokuapp.com/about/land">
	<meta property="og:type" content="website">
	<meta property="og:title" content="=Land Area & Municipal Boundaries" >
	<meta property="og:description" content="The determination of the extent of local municipal jurisdiction is at present an issue which is a cause of conflict between its neighboring municipalities of Peñablanca and Gattaran.">
	<meta property="og:image" content="https://baggaonewsportal.herokuapp.com/img/lgu-logo.png">
	<meta property="og:image:width" content="300px">
	<meta property="og:image:height" content="160px">
	@include('includes.css')
</head>
<body>
	@include('includes.header')
	<section id="land">
		<div class="text-center">
				<h4 class="text-uppercase">Land area</h4>
				<hr class="small">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="card text-center">
						<div class="card-header text-uppercase">
							land area & municipal boundaries
						</div>
						<div class="card-body text-justify">
							<p> The determination of the extent of local municipal jurisdiction is at present an issue which is a cause of conflict between its neighboring municipalities of Peñablanca and Gattaran. Based from existing records, the municipality has a total land area of approximately 92,060 hectares or about 11 percent of the total 900, 270 hectares land area of the province of Cagayan. This total land area is divided among the 48 barangays. Where and how this figure was generated is unclear although this is already the basis for the computation of the Internal Revenue Allotment (IRA) of the municipality.</p>
							<p> What is critical at present is the determination of the municipal boundary at Peñablanca. Some areas of Baggao is being claimed by Peñablanca - particularly Sitio Bayan. Based from the Atlas of the Philippines printed in July 16, 1959 and the Administrative Map of NAMRIA, Barangay Bayan is within the municipal jurisdiction of Baggao. In fact this was reflected in the 1988 Town Plan of Baggao. In 1998, when the Forest Land Use Plan was prepared through the assistance of DENR, the area at Bayan was no longer reflected in the base map of Baggao, which was also carried when the Comprehensive Land Use Plan was prepared in 1999. When the updating of the CLUP was done in 2007, the same areas of Sitio Bayan in Peñablanca and some areas in Gattaran, which are the subject of boundary conflicts, were included in the map for planning purposes, pending resolution of the dispute. Using GIS software, the area derived was 100, 294.70 hectares.</p>
							<p>It may usefully be noted that in response to the need to seek authorities ruling on the issue of political boundaries, the MPDC office made representations with DENR during the updating of this Comprehensive Land Use Plan. In September 2004, the CENRO-DENR personnel based in Alcala, Cagayan assisted the MPDO staff in the preparation of a new base map of Baggao reflecting the actual municipal boundaries of Gattaran and Peñablanca. While the plotted municipal boundary is “not official”, the planning team was forced to adopt this new base map for planning purposes pending resolution of this case. It should be noted that while the actual measurement of municipal land area and boundaries is a technical task, boundary disputes is essentially a political and legal matter. The Local Government Code of 1991 recognizes this thorny issue and proposed ways of settling such controversy. Resolution of this boundary dispute however is deemed critical.</p>
						</div>
					</div>
					<div class="fb-share-button" data-href="https://baggaonewsportal.herokuapp.com/about/land" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fbaggaonewsportal.herokuapp.com%2Fabout%2Fland&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
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
	@include('includes.script')
	<script type="text/javascript">
		$(document).ready(function(){
			scrollToDown('#land');
		});
		function scrollToDown(aid){
		    var aTag = $("#land");
		    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
		}
	</script>
</body>
</html>