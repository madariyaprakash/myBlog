@extends('main')

@section('title', '| Blog')

@section('content')

		<div class="row content-top-spacing">
			<div class="col-md-12 md-offset-1">
				<h1>Blog</h1>
			</div>
		</div>

		<div class="container">
			<div class="row">
			
				@foreach($posts as $post)	
						{{-- <div class="col-md-6">
				          <div class="card flex-md-row mb-4 box-shadow h-md-250">
				            <div class="card-body d-flex flex-column align-items-start">
				              <strong class="d-inline-block mb-2 text-primary">{{ $post->category->name }}</strong>
				              <h3 class="mb-0">
				                <a class="text-dark" href="#">{{ $post->title }}</a>
				              </h3>
				              <div class="mb-1 text-muted">{{ date('M j, Y', strtotime($post->created_at)) }}</div>
				              <p class="card-text mb-auto">{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '...' : "" }}</p>
				              <a href="{{ route('blog.single', $post->slug) }}">Continue reading</a>
				            </div>
				            <img class="card-img-right flex-auto d-none d-lg-block" alt="Card image cap" src="/uploads/{{ $post->post_thumbnail }}">
				          </div>
				        </div>	 --}}

				        	<div class="col-md-4">
							<div class="card bg-light mb-3">
									<img class="card-img-top" src="images/post_background.jpeg" alt="{{ $post->title }}">
								<div class="card-body">
									<h5 class="card-title">{{ $post->title }}</h5>
									<p class="card-text">{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '...' : "" }}</p>
									<a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read more</a>
									<p class="card-text"><small class="text-muted">Posted at : {{ date('M j, Y', strtotime($post->created_at)) }}
									</small></p>
								</div>
							</div>
						</div> 

						  {{-- <div class="card" style="width: 25rem;">
						    <img class="card-img-top" src="/uploads/{{ $post->post_thumbnail }}" alt="Card image cap">
						    <div class="card-body">
						      <h5 class="card-title">{{ $post->title }}</h5>
						      <p class="card-text">{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '...' : "" }}</p>
						      <p class="card-text"><small class="text-muted">{{ date('M j, Y', strtotime($post->created_at)) }}</small></p>
						    </div>
						  </div> --}}


						  {{-- style="background-image: url('/uploads/{{ $post->post_thumbnail }}'); background-repeat: no-repeat;width: 100%;" --}}
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

		

{{-- 
		<div class="col-md-4">
							<div class="card bg-light mb-3">
									<img class="card-img-top" src="images/post_background.jpeg" alt="{{ $post->title }}">
								<div class="card-body">
									<h5 class="card-title">{{ $post->title }}</h5>
									<p class="card-text">{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '...' : "" }}</p>
									<a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read more</a>
									<p class="card-text"><small class="text-muted">Posted at : {{ date('M j, Y', strtotime($post->created_at)) }}
									</small></p>
								</div>
							</div>
						</div>  --}}

	

@endsection