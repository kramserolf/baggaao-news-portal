@extends('layouts.master')
@section('content')
<section id="view-galleries">
<div class="container">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item active" aria-current="page">Galleries</li>
	  </ol>
	</nav>
	<div class="row">
		<div class="col-sm-9">
		
		</div> {{-- end of column 8--}}
		<div class="col-sm">
			@include('includes.events')
		</div>
	</div>		
</div>
</section>
{{-- <script type="text/javascript">
	$(document).ready(function(){
		scrollToDown('#view-news');
	});
	function scrollToDown(aid){
	    var aTag = $("#view-news");
	    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
	}
</script> --}}
@endsection