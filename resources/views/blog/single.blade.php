@extends('main')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "| $titleTag") <!-- here "" quotation is using for interpolation. -->

@section('content')

		<div class="row content-top-spacing">
			<div class="col-md-10 offset-md-1">
				
            	
				<h1>{{ $post->title }}</h1>
				<p>{!! $post->body !!}</p>
                    <img src="/uploads/{{ $post->post_thumbnail }}" alt="{{ $post->title }}" />
				<hr>
				<div class="badge badge-success">
					Posted In : <span style="color:yellow;font-style:italic;">{{ $post->category->name }}</span>, {{ $post->category->created_at }}
				</div>
				<hr>
				<div class="row">
						<div class="col-md-4 ">
							<h3 class="comments-title">Comments <span class="badge badge-pill badge-dark">{{ $post->comments()->count() }}</span></h3>	
						</div>
						<div class="col-md-4 ml-auto">
							<div class="row">
								<div class="col-sm">
							      <a href="#" class="like"><img src="/images/like.svg"></img><span class="badge badge-pill badge-secondary">New</span></a>
							    </div>
							    <div class="col-sm">
							      <a href="#" class="like"><img src="/images/dislike.svg"></img><span class="badge badge-pill badge-secondary">New</span></a>
							    </div>
							    <div class="col-sm">
							      <a href="#"><img src="/images/wishlist.svg" height="30px" width="30px"></img></a>
							    </div>
							</div>	
						</div>

						<script src = "{{ asset('js/like.js') }}"></script>

						<script type="text/javascript">
							var token  = '{{ Session::token() }}';
							var urlLike = '{{ route('like') }}';
						</script>

						<div class="col-md-8">
							@foreach($post->comments as $comment)
							<div class="comment">
								<div class="author-info">
									<img src="{!! asset('images/usericon.svg') !!}" class="author-image"/>
									<div class="author-name">
										<h5>{{ $comment->name }}</h5>
										<p class="auther-time">{{ $comment->created_at }}</p>
									</div> 
								</div>
								<div class="comment-content">
									{{ $comment->comment }}
								</div>
							</div>
							@endforeach
						</div>	
				</div>
			</div>
		</div>
		<div class="row">
			<!-- We will have to implement where we could check the login users..if user is already registered and loged in then customer can write comment otherwise user has to register his email while entering the gmail.-->
			<div id="comment-form" class="col-md-10 offset-md-1 comment-form-top-spacing">
				{{ Form::open(['route' => ['comments.store', $post->id ], 'method' => 'POST']) }}
					
					<div class="row">
						<div class="col-md-6">
							{{-- {{ Form::label('name', 'Name:') }} --}}
							{{ Form::text('name', null, ['class' => 'form-control ', 'placeholder' => 'User Name'] )}}
						</div>
						<div class="col-md-6">
							{{-- {{ Form::label('email', 'Email:') }} --}}
							{{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
						</div>
						<div class="col-md-12">
							{{-- {{ Form::label('comment', 'Comment') }} --}}
							{{ Form::textarea('comment', null, ['class' => 'form-control top-spacing', 'rows' => '5', 'placeholder' => 'Comment here please..']) }}
							{{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block top-spacing']) }}
						</div>
		
					</div>
				{{ Form::close() }}
			</div>
		</div>

@endsection

