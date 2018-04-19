@extends('admin_main')

@section('title', '| Edit Tags')

@section('content')

	<div class="row content-top-spacing">
		<div class="col-md-8">
			<br>
			<!-- here we need to take form as model because we need to binding the data-->
			{!! Form::model($tags, ['route' => ['tags.update', $tags->id], 'method' => "PUT"]) !!}
				
				{{ Form::label('name', 'Name :') }}
				{{ Form::text('name', null, ['class' => 'form-control']) }}

				{{ Form::submit('Save Changes', ['class' => 'btn btn-success', 'style' => 'margin-top:20px']) }}

			{!! Form::close() !!}
		</div>
	</div>

@endsection