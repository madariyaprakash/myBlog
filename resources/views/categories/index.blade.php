@extends('admin_main')

@section('title','| all categories')

@section('content')

	<div class="row content-top-spacing">
		<div class="col-md-8">
			<br>
			<h1>Categories</h1>
			<table class="table">
				<caption>All categories list are here</caption>
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Created at</th>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
					<tr>
						<th>{{ $category->id }}</th>
						<td>{{ $category->name }}</td>
						<td>{{ $category->created_at }}</td>
					</tr>
					@endforeach
					{{ $categories->links() }}
				</tbody>
			</table>
		</div>
		<div class="col-md-3">
			<br>
			<div class="card", style="width: 20rem">
				<div class="card-body"> 
				{!! Form::open(['route' => 'categories.store' ,'method' => 'POST']) !!}
					<h2>New Category</h2>
					{{ Form::label('name', 'Enter category name:') }}
					{{ Form::text('name', null, ['class' => 'form-control']) }}
					<br>
					{{ Form::submit('Create New Category', ['class' => 'btn btn-primary']) }}
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

@endsection