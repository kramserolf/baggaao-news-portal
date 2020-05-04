@extends('layouts.master')
@section('content')

<section id="media">
	<div class="text-center">
		<h4 class="text-uppercase">it's more fun in baggao</h4>
		<hr class="small">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<video class="video" src="{{secure_asset('video/bag-video.mp4')}}" controls loop muted id="video"></video>
			</div>
			<div class="col-sm-5">
				<p class="text-justify"><br>We are downhearted and hospitable people. We are meek but we fight when we know we deserve better. We love to sing, to dance, and to live life to the fullest.<br><br>
				We are happy people and we love to smile. Yes, we smile a lot. In distressing times, we are there to help each other and build up. We won’t leave you when you are with us.<br><br>
				We love our environment. We love our place. And we have good spots to tour you when you visit us. You will surely enjoy your stay with us.<br><br>
				Lastly, we believe in God. We are comprised of different beliefs but we prefer to be united in order to safeguard peace and togetherness.
				</p>
			</div>
		</div>
	</div>
</section>	
<section id="news">
	<div class="text-center">
		<h4 class="text-uppercase">news  -  events</h4>
		<hr class="small">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				@foreach($news as $row)
				<div class="row border-bottom pb-4 mb-4">
				<div class="col-sm-5">
					<img src="{{secure_asset('img/news/')}}/{{$row->image}}">
				</div>
				<div class="col-sm-7">
					<span class="news-title">
						{{$row->title}}
					</span>
					<blockquote class="blockquote-footer">{{$row->created_at}}
					</blockquote>
					<span class="news-content">
						{{Str::limit($row->content, $limit = 100, $end = '...')}}
					</span><br>
					<a href="/baggao/{{$row->id}}" target="_blank" class="btn btn-primary btn-sm">Continue reading<i class="fa fa-arrow-right ml-1"></i></a>
				</div>
				</div>
				@endforeach
			<div class="d-flex align-self-end">
				<ul class="pagination pagination-sm ml-auto">
					{{$news->links()}}
				</ul>
			</div>
			</div> {{-- end of column 8--}}
			<div class="col-sm">
				@include('includes.events')
			</div>
		</div>
	</div>
</section>
@endsection