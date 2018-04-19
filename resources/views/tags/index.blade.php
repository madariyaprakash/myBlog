@extends('admin_main')

@section('title','| all Tags')

@section('content')

	<div class="row content-top-spacing">
		<div class="col-md-8">
			<br>
			<h1>Tags</h1>
			<table class="table">
				<caption>All tags list are here</caption>
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
					@foreach($tags as $tag)
					<tr>
						<th>{{ $tag->id }}</th>
						<td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="col-md-3">
			<br>
			<div class="card", style="width: 20rem">
				<div class="card-body"> 
				{!! Form::open(['route' => 'tags.store' ,'method' => 'POST']) !!}
					<h2>New Tag</h2>
					{{ Form::label('name', 'Enter tag name:') }}
					{{ Form::text('name', null, ['class' => 'form-control']) }}
					<br>
					{{ Form::submit('Create New Tag', ['class' => 'btn btn-primary']) }}
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

@endsection