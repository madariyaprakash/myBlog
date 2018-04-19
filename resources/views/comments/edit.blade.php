@extends('main')

@section('title','|Edit Comment')


@section('content')

<div class="row content-top-spacing">
	<div class="col-md-8 top-spacing">
		<h1> Edit Comments </h1>

		{{ Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT']) }}
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name', null, ['class' => 'form-control', 'readonly']) }}

			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email', null, ['class' => 'form-control', 'readonly']) }}

			{{ Form::label('comment', 'Comment:') }}
			{{ Form::textarea('comment', null, ['class' => 'form-control']) }}

			{{ Form::submit('Update Comment', ['class' => 'btn btn-block btn-success', 'style' => 'margin-top: 15px;']) }}
		{{ Form::close() }}

	</div>
</div>
	
@endsection