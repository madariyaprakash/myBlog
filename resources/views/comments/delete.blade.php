@extends('main')

@section('title','| Delete comment?')

@section('content')

	<div class="row content-top-spacing">
		<div class="col-md-8 col-md-offset-2 top-spacing">
			<h1>DELETE THIS COMMENT??</h1>
			<p><strong>Name:</strong> {{ $comment->name }}<br>
				<strong>Email:</strong> {{ $comment->email }}<br>
				<strong>Comment:</strong> {{ $comment->comment }}<br>
			</p>

			{{ Form::open(['route' => ['comments.destroy' ,$comment->id], 'method' => 'DELETE']) }}
				{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) }}
			{{ Form::close() }}
			<a href="{{ route('posts.edit', $comment->id) }}" class="btn btn-xs btn-primary btn-block top-spacing">Cancel</a>
		</div> 
	</div>

@endsection