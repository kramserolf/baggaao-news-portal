<section id="all-news">
	<div class="container">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item active" aria-current="page">Latest News</li>
		  </ol>
		</nav>
		<div class="row">
			<div class="col-sm-8">
				@foreach($data as $row)
				<div class="row border-bottom pb-4 mb-4">
				<div class="col-sm-5">
					<img data-src="{{asset('images/news/')}}/{{$row->image}}" width="240" height="150" class="lozad">
				</div>
				<div class="col-sm-7">
					<span class="news-title">
						{{$row->title}}
					</span>
					<blockquote class="blockquote-footer">{{$row->created_at->format('F d, Y g:i a')}}
					</blockquote>
					<p class="news-content">
						{{Str::limit($row->content, $limit = 100, $end = '...')}}
					</p>
					<a href="/news/{{$row->id}}" target="_blank" class="btn btn-primary btn-sm">Continue reading<i class="fa fa-arrow-right ml-1"></i></a>
				</div>
				</div>
				@endforeach
			<div class="row justify-content-center">
				<ul class="pagination pagination-sm">
					{{$data->links()}}
				</ul>
			</div>
			</div> {{-- end of column 8--}}
			<div class="col-sm">
			@widget('AnnouncementWidget')
			@widget('EventsWidget')
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		scrollToDown('#all-news');
	});
	function scrollToDown(aid){
	    var aTag = $("#all-news");
	    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
	}
</script>
