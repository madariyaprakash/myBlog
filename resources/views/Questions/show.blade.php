@extends('main')

@section('title','| question')

@section('content')
	<div class="row">
		<div class="col-md-10 content-top-spacing">
			<div class="ques_title">
				{{ $userquestion->title }}
			</div>
			<div class="ques_body">
				{{ strip_tags($userquestion->body)}}
			</div>
		</div>
		<div class="col-md-2 content-top-spacing">
			<div class="ques_ask_user">
				<div class="ask_label">
					<span class="label_name"><i class="fa fa-user"></i></span> {{ $userdetails->name }}<br>
					<span class="label_name"><i class="fa fa-calendar-alt"></i></span> {{ $userquestion->created_at->format('d/m/Y')}}<br>
					<span class="label_name"><i class="fa fa-clock"></i></span> {{ $userquestion->created_at->format('H:ma')}}
				</div>
			</div>
		</div> 	
	</div>
	<div class="row">
		<div class="col-md-12 content-top-spacing">
			{{ Form::open() }}
				{{ Form::textarea('reply', null, ['class' => 'form-control top-spacing', 'rows' => '5', 'id' =>'reply_question', 'placeholder' => 'reply here please..']) }}
				<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
				 <script>
			        CKEDITOR.replace( 'reply_question' );
			    </script>
				{{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block top-spacing']) }}
			{{ Form::close() }}
		</div>
	</div>
@endsection
@section('script')
		{!! Html::script('js/parsley.mim.js') !!} <!-- using parsley.min.js for client side validation -->
	    <script>
	        CKEDITOR.replace( 'body_askQuestion' );
	    </script>	
@endsection