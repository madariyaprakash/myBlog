@extends('main')

@section('title', '| Blog')

@section('content')

		<div class="row content-top-spacing">
			<div class="col-md-10 md-offset-1">
				<h1>Blog</h1>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				@foreach($posts as $post)	
						<div class="col-md-4">
							<div class="card bg-light mb-3">
									<img class="card-img-top" src="images/post_background.jpeg" alt="{{ $post->title }}">
								<div class="card-body">
									<h5 class="card-title">{{ $post->title }}</h5>
									<p class="card-text">{{ substr($post->body, 0, 250) }}{{ strlen($post->body) > 250 ? '...' : "" }}</p>
									<a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read more</a>
									<p class="card-text"><small class="text-muted">Posted at : {{ date('M j, Y', strtotime($post->created_at)) }}
									</small></p>
								</div>
							</div>
						</div>	
				@endforeach
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="text-center">
					{!! $posts->links() !!}
				</div>
			</div>
		</div>

	

@endsection