@extends('layouts.master')
@section('content')
{{-- highlights --}}
<section id="highlights" class="bg-light">
	<div class="container">
		<div class="text-center">
			<h4 class="text-uppercase">highlights</h4>
			<hr class="small">
		</div>
		@include('includes.carousel')
	</div>
</section>
{{-- welcome media --}}
<section id="media" class="bg-white">
	<div class="text-center">
		<h4 class="text-uppercase">it's more fun in baggao</h4>
		<hr class="small">
	</div>
	@include('includes.media')
</section>	
{{-- news --}}
<section id="news" class="bg-light">
	<div class="text-center">
		<h4 class="text-uppercase">news  -  events</h4>
		<hr class="small">
	</div>
	@include('pages.home')
</section>
{{-- reports --}}
<section id="reports" class="bg-white">
	<div class="text-center">
		<h4 class="text-uppercase">Reports</h4>
		<hr class="small">
	</div>
	@include('pages.reports')
</section>
{{-- summary --}}
<section id="summary" class="bg-light">
	<div class="text-center">
		<h4 class="text-uppercase">summary</h4>
		<hr class="small">
	</div>
	<div class="container">
	@include('includes.summary')	
	</div>
</section>
<section id="facebook">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				
			</div>
			<div class="col-sm-4 border-left">
				<p class="badge badge-info">Follow us on <i class="fa fa-facebook-official"></i></p>
				<div class="fb-page" data-href="https://www.facebook.com/pg/baggaoinformationoffice" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/pg/baggaoinformationoffice" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/pg/baggaoinformationoffice">Baggao Information Office</a></blockquote></div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				
			</div>
			<div class="col-sm-4 border-left">
				<p class="badge badge-info">Our location <i class="fa fa-map-marker"></i></p>
				<div>
				<iframe data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d485892.1284289827!2d121.68512927375025!3d17.930649535176656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3385d9ec64a74eff%3A0x78c4e5cb3b0f2eb2!2sBaggao%2C%20Cagayan!5e0!3m2!1sen!2sph!4v1588496901358!5m2!1sen!2sph" width="auto" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="lozad"></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
  <div id="fb-root"></div>
  @endsection