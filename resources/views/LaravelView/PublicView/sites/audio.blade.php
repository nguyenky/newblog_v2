@extends('LaravelView.PublicView.blocks.templete')
@section('main')
<div id="content" class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
	@foreach($news as $new)			
	<div class="row">
		<article class="tg-post tg-audio-post">
			<div class="audio">
				<div>{!! $new->preview !!}</div>
			</div>
			<div class="tg-post-content">
				<div class="post-meta category-name">
					<span><a href="">Audio</a></span>
				</div>
				<div  class="name-post">
					<h5><a href="" >{{$new->name}}</a></h5>
				</div>
				
				<div class="post-meta">
					<span class="date">Sep, 17 2015</span>
				</div>
				<div class="description" style="height: 100px;">
					{!! $new->detail !!}
				</div>
				<div class="tg-post-foot">
					<div class="post-meta pull-left">
						<span class="tg-post-author">Post By : <a href="">Ng Ký Lê</a></span>
					</div>
					<div class="post-meta pull-right">
						<span class="tg-post-author"><a href="">{{count($new->comments)}} comments</a></span>
					</div>
				</div>
			</div>
		</article>
	</div>
	@endforeach
	
	<hr />
	<div style=" clear:both;"></div>
	<div class=" col-md-12 row">
		@if($news->currentPage() > 1)
		<div class=" post-width site-post pull-left">
			<span class="older-post"><a href="{{$news->previousPageUrl()}}">newer post</a></span>
		</div>
		@endif
		@if($news->currentPage() < $news->total())
		<div class=" post-width site-post pull-right" >
			<span class="older-post"><a href="{{$news->nextPageUrl()}}">older post</a></span>
		</div>
		@endif
	</div>
</div>
@endsection