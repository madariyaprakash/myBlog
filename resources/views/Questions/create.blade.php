@extends('main')

@section('title','| Ask question')

@section('stylesheets')
		{!! Html::style('css/parsley.css') !!}  <!-- USING PARSLEY VALIDATION OPTION TO VALIDATE THE PAGE FROM CLINT SIDE -->
@endsection

<!--- to show the todays date we are using this php code ---->
<?php 
  $thisDate = date("Y-m-d");
  $thisTime = date("h:ia");
  
  ?>

@section('content')
	<div class="row">
		<div class="col-md-8 top-spacing">
			{!! Form::open(['route' => ['questions.store', $user->id ], 'enctype'=> 'multipart/form-data', 'method' => 'POST']) !!}
			
			 {{ Form::label('title', 'Question title:') }}
			 {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255', 'autofocus'))}}
			 
			 {{ Form::label('body', 'Describe your question:', array('class' => 'top-spacing')) }}
			 {{ Form::textarea('body', null, array('class' => 'form-control', 'id' => 'body_askQuestion', 'placeholder' => 'Describe your question here')) }}
			 <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
			 <script>
		        CKEDITOR.replace( 'body_askQuestion' );
		    </script>
			 {{-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> --}}
  			{{-- <script>tinymce.init({ selector:'textarea' });</script> --}}

			 {{ Form::label('post_thumbnail', 'Attatch some file here', array('class' => '')) }}
		     {{ Form::file('post_thumbnail', ['class' => 'form-control text-top-spacing']) }}

  			 {{ Form::submit('Post Question', array('class' => 'btn btn-dark btn-lg btn-block', 'style' => 'margin-top:20px')) }}
		</div>
		<div class="col-md-4 top-spacing">
			<div class="card" style="width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-title"><i class="fas fa-user"></i>&nbsp;{{ $user->name}}</h5>
			    <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-calendar-alt "></i>&nbsp;{{ $thisDate .'&nbsp;|&nbsp;'. $thisTime}}</h6>
				  <div class="accordion" id="accordion">
				  <div class="card">
				    <div class="card-header" id="headingOne">
				      <h5 class="mb-0">
				        <button class="btn btn-link asked_ques_link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				          <i class="fas fa-list"></i>&nbsp;You asked questions&nbsp;<span class="badge badge-dark">{{ $question->count() }}</span>
				        </button>
				      </h5>
				    </div>

				    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
				      <div class="card-body">
				      	<?php 
				        $askquest_count = $question->count();
				        ?>
				        @foreach($question as $questions)
				        <!-- here we want to show the current user asked question with his user id. So, this block will retrieve the current user-->
				        		<div class="ask_box"><a href="{{ url('questions/ask_question/'.$user->id.'/'.$questions->id) }}" class="asked_question_list">{{ strip_tags($questions->title) }}</a></div><hr>
				        @endforeach
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingTwo">
				      <h5 class="mb-0">
				        <button class="btn btn-link asked_ques_link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          <i class="fas fa-list"></i>&nbsp;All asked questions&nbsp;<span class="badge badge-dark">{{ $totalquestionasked->count() }}</span>
				        </button>
				      </h5>
				    </div>
				    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				      <div class="card-body">
				      	@foreach($totalquestionasked as $allquestions)
				      	<!-- here we want to fetch the questions from the rendom users who asked the question with his user id that we we can get in the Question table and same id we are passing there so that we could fetch the user name from User table as well in singe question show page -->		
				        	<div class="ask_box"><a href="{{ url('questions/ask_question/'.$allquestions->user_id.'/'.$allquestions->id) }}" class="asked_question_list">{{ strip_tags($allquestions->title) }}</a></div><hr>
				        @endforeach
				        
				      </div>
				    </div>
				  </div>
				</div>
			  </div>
			</div>
		</div>
	</div>
@endsection
@section('script')
		{!! Html::script('js/parsley.mim.js') !!} <!-- using parsley.min.js for client side validation -->
	    <script>
	        CKEDITOR.replace( 'body_askQuestion' );
	    </script>	
@endsection