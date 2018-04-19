@extends('admin_main')

@section('title',"|$tags->name Tags")

@section('content')

<div class="row content-top-spacing">
	<div class="col-md-8 top-spacing">
		<h1> {{ $tags->name }} Tags > <small> {{ $tags->posts()->count() }} Posts</small></h1>
	</div>
	<div class="col-md-2 top-spacing">
		<a href="{{ route('tags.edit', $tags->id )}}" class="btn btn-primary float-right">Edit</a>
	</div>
	<div class="col-md-2 top-spacing">
		{!! Form::open(['route' => ['tags.destroy', $tags->id] , 'method' => 'DELETE']) !!}
			
		{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

		{!! Form::close() !!}
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Tags</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($tags->posts as $post)
					<tr>
						<th>{{ $post->id }}</th>
						<td>{{ $post->title }}</td>
						<td>
							@foreach($post->tags as $tag)
								<span class="badge btn-primary">{{ $tag->name }}</span>
							@endforeach
						</td>
						<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary btn-sm"> View </a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection