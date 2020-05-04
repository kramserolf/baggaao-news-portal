@extends('layouts.master')

@section('content')
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
			scrollToDown('#mission');
		});
		function scrollToDown(aid){
		    var aTag = $("#mission");
		    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
		}
	</script>
@endsection

