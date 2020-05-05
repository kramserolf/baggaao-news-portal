@extends('layouts.master')

@section('content')
<section id="brgy">
	<div class="text-center">
		<h4 class="text-uppercase">barangays</h4>
		<hr class="small">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="card-header text-uppercase font-weight-bold text-center">
					barangays of baggao
				</div>
				<div class="card-body">
				<div class="">
				<table class="table table-bordered">
					<thead class="thead-light text-uppercase">
						<tr>
							<th colspan="2">There are 28 Barangays</th>
						</tr>
					</thead>
					<tr>
						<td class="">
							<a href="#" class="text-decoration-none">Adaoag</a><br>
							Brgy. Captain: <strong>Mariano Uton</strong><br>
							Contact No. <strong>0926-171-8111</strong>
						</td>
						<td>
							<a href="#" class="text-decoration-none">Adaoag</a><br>
							Brgy. Captain: <strong>Mariano Uton</strong><br>
							Contact No. <strong>0926-171-8111</strong>
						</td>
					</tr>
					<tr>
						<td class="">
							<a href="#" class="text-decoration-none">Adaoag</a><br>
							Brgy. Captain: <strong>Mariano Uton</strong><br>
							Contact No. <strong>0926-171-8111</strong>
						</td>
						<td>
							<a href="#" class="text-decoration-none">Adaoag</a><br>
							Brgy. Captain: <strong>Mariano Uton</strong><br>
							Contact No. <strong>0926-171-8111</strong>
						</td>
					</tr>
					<tr>
						<td class="">
							<a href="#" class="text-decoration-none">Adaoag</a><br>
							Brgy. Captain: <strong>Mariano Uton</strong><br>
							Contact No. <strong>0926-171-8111</strong>
						</td>
						<td>
							<a href="#" class="text-decoration-none">Adaoag</a><br>
							Brgy. Captain: <strong>Mariano Uton</strong><br>
							Contact No. <strong>0926-171-8111</strong>
						</td>
					</tr>
					<tr>
						<td class="">
							<a href="#" class="text-decoration-none">Adaoag</a><br>
							Brgy. Captain: <strong>Mariano Uton</strong><br>
							Contact No. <strong>0926-171-8111</strong>
						</td>
						<td>
							<a href="#" class="text-decoration-none">Adaoag</a><br>
							Brgy. Captain: <strong>Mariano Uton</strong><br>
							Contact No. <strong>0926-171-8111</strong>
						</td>
					</tr>
				</table>
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
		scrollToDown('#brgy');
	});
	function scrollToDown(aid){
	    var aTag = $("#brgy");
	    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
	}
</script>
@endsection