@extends('admin_main')

@section('title','| reply')
@section('content')
		
	<div class="row">
		<div class="col-md-12">
			<h1>Reply page</h1>
			<hr>
				{!! Form::open(['route' => 'reply.store', 'method' => 'POST']) !!}

					{{ Form::label('body','Post Body:') }}
					{{ Form::textarea('body', null, array('class' => 'form-control')) }} 

					<!--passing parsley required class -->
					
					{{ Form::submit('Enter Reply', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px')) }}

				{!! Form::close() !!}				
		</div>
	</div>

@endsection