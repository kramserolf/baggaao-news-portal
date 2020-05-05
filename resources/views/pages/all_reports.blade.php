@extends('layouts.master')
@section('content')

<section id="all-reports">
	<div class="text-center">
		<h4 class="text-uppercase">reports</h4>
		<hr class="small">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				@foreach($reports as $row)
				<div class="row border-bottom pb-4 mb-4">
				<div class="col-sm-5">
					<img data-src="{{secure_asset('img/reports/')}}/{{$row->image}}" width="240" height="150" class="lozad">
				</div>
				<div class="col-sm-7">
					<blockquote class="blockquote-footer">{{$row->created_at}}
					</blockquote>
					<p class="news-content">
						{{$row->title}}
					</p>
					<a href="{{$row->content}}" target="_blank" >View on<i class="fa fa-facebook-official ml-1"></i></a>
				</div>
				</div>
				@endforeach
			<div class="row justify-content-end">
				<ul class="pagination pagination-sm">
					{{$reports->links()}}
				</ul>
			</div>
			</div> {{-- end of column 8--}}
			<div class="col-sm">
				@include('includes.announcement')
				@include('includes.upcoming')
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		scrollToDown('#all-reports');
	});
	function scrollToDown(aid){
	    var aTag = $("#all-reports");
	    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
	}
</script>
@endsection