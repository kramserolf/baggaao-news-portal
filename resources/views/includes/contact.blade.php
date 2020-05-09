@extends('layouts.master')

@section('content')
@include('sweetalert::alert')
<section id="contact">
	<div class="text-center">
			<h4 class="text-uppercase">Contact Us</h4>
			<hr class="small">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
				  </ol>
				</nav>
				<div class="container">
					<p class="news-content">Your comments and suggestions are important to us and we invite you to share them below. We will respond to your message as quickly as we can.</p>
					<div class="row">
						<div class="col-sm-3
						">
							<span class="text-uppercase pl-2"><i class="fa fa-map-marker mr-1"></i>Address:</span>
						</div>		
						<div class="col-sm-9 contacts">
							<p class="font-weight-bold">
							2nd Floor Municipal Executive Building <br>
							San Jose, Baggao, Cagayan, Philippines
							</p>
						</div>
						<div class="col-sm-3
						">
							<span class="text-uppercase pl-2"><i class="fa fa-phone mr-1"></i>Hotlines:</span>
						</div>		
						<div class="col-sm-9 contacts">
							<p class="font-weight-bold">
							<i class="fa fa-building-o mr-1"></i>Mayor: 0917-253-5050<br>
							<i class="fa fa-medkit"></i>MHO: 0995-262-1452
							<br>
							<i class="fa fa-ambulance mr-1"></i>Baggao Rescue: 0905-751-1141
							<br>
							<i class="fa fa-car mr-1"></i>Baggao PNP: 0935-986-9494
							</p>
						</div>
						<div class="col-sm-3
						">
							<span class="text-uppercase pl-2"><i class="fa fa-envelope mr-1"></i>Email:</span>
						</div>		
						<div class="col-sm-9 contacts">
							<p class="font-weight-bold">
							baggao2020@ baggaonewsportal.info<br>
							baggaocagayan@ gmail.com
							</p>
						</div>
					</div>
				</div>	
				<div class="col-sm">
					<div class="card">
					<div class="card-header text-uppercase">
						Send us a message
					</div>
					<div class="card-body">
					<form method="POST" action="{{route('send.message')}}">
						@csrf
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" class="form-control" placeholder="Enter your email"value="{{old('email')}}"  required>	
						</div>
						<div class="form-group">
							<label>Subject</label>
							<input type="text" name="subject" class="form-control" placeholder="Enter your subject"  value="{{old('subject')}}" required>	
						</div>
						<div class="form-group">
							<label>Your message</label>
							<textarea class="form-control" name="message" required   
							placeholder="Enter your message" style="min-height: 170px;">{{old('message')}}</textarea>	
						</div>
						<input type="submit" name="submit" class="btn btn-info btn-block" value="Send Message">
					</form>	
					</div>	
					</div>
				</div>	
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
		scrollToDown('#contact');
	});
	function scrollToDown(aid){
	    var aTag = $("#contact");
	    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
	}
</script>
@endsection