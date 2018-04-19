@extends('main')

@section('title','| Create Post')

@section('stylesheets')
		{!! Html::style('css/parsley.css') !!}  <!-- USING PARSLEY VALIDATION OPTION TO VALIDATE THE PAGE FROM CLINT SIDE -->
		<link rel="stylesheet" type="text/css" href="css/select2.min.css">
	
@endsection

@section('content')
		
	<div class="row">
		<div class="col-md-12">
			<h1>Create New Post</h1>
			<hr>
				{!! Form::open(['route' => 'posts.store', 'enctype'=> 'multipart/form-data', 'method' => 'POST']) !!}
				    
				    {{ Form::label('title','Title:')}}
				    {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255', 'autofocus'))}} 
				    <!--passing parsley required class and set the max string size is 255 -->
				    {{ Form::label('slug','Slug:')}}
				    {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '','minlength' =>'5', 'maxlength' => '255'))}} 

				    {{ Form::label('category_id','Category:') }}
				    <select class="form-control" name="category_id">
						@foreach($categories as $category)
				    		<option value="{{ $category->id }}">{{ $category->name }}</option>
				    	@endforeach
				    </select>
					
					{{ Form::label('tags','Tags:') }}
				    <select class="form-control select2-multi" name="tags[]" multiple="multiple">
				    	@foreach($tags as $tag)
				    		<option value="{{ $tag->id }}">{{ $tag->name }}</option>
				    	@endforeach
				    </select>
					
					{{ Form::label('post_thumbnail','Upload Image:') }}
				    {{ Form::file('post_thumbnail', ['class' => 'form-control']) }}

					{{ Form::label('body','Post Body:') }}
					{{ Form::textarea('body', null, array('class' => 'form-control', 'id' => 'technig')) }} 
					<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

					<!--passing parsley required class -->
					
					{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px')) }}

				{!! Form::close() !!}				
		</div>
	</div>

@endsection

@section('script')
		{!! Html::script('js/parsley.mim.js') !!} <!-- using parsley.min.js for client side validation -->
		{!! Html::script('js/select2.mim.js') !!}
	
		<script type="text/javascript">
    		$('.select2-multi').select2();
		</script>

		<script type="text/javascript">
			 var options = {
			  debug: 'info',
			  modules: {
			    toolbar: '#technig'
			  },
			  placeholder: 'Compose an epic...',
			  readOnly: true,
			  theme: 'snow'
			};
			var editor = new Quill('#editor', options);
		</script>

		

@endsection













{{-- @extends('admin_main')

@section('title','| Create Post')

@section('stylesheets')
		{!! Html::style('css/parsley.css') !!}  <!-- USING PARSLEY VALIDATION OPTION TO VALIDATE THE PAGE FROM CLINT SIDE -->

	
@endsection

@section('content')


		
	<div class="row content-top-spacing">
		<div class="col-md-12">
			<h1>Create New Post</h1>
			<hr>
				{!! Form::open(['route' => 'posts.store', 'enctype'=> 'multipart/form-data', 'method' => 'POST']) !!}
				    	
				    {{ Form::label('title','Title:')}}
				    {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255', 'autofocus'))}} 
				    <!--passing parsley required class and set the max string size is 255 -->
				    {{ Form::label('slug','Slug:')}}
				    {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '','minlength' =>'5', 'maxlength' => '255'))}} 

				    {{ Form::label('category_id','Category:') }}
				    <select class="form-control" name="category_id">
						@foreach($categories as $category)
				    		<option value="{{ $category->id }}">{{ $category->name }}</option>
				    	@endforeach
				    </select>
					
					{{ Form::label('tags','Tags:') }}
				    <select class="form-control select2-multi" name="tags[]" multiple="multiple">
				    	@foreach($tags as $tag)
				    		<option value="{{ $tag->id }}">{{ $tag->name }}</option>
				    	@endforeach
				    </select>

				    {{ Form::label('post_thumbnail','Upload Image:') }}
				    {{ Form::file('post_thumbnail', ['class' => 'form-control']) }}

					{{ Form::label('body','Post Body:') }}
					{{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '', 'id' => 'technig')) }} 
					<!--passing parsley required class -->

						<!-- TINY MCE starts here -->
					 	<!-- TINY MCE ends here -->
					
					{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px')) }}

				{!! Form::close() !!}				
		</div>
	</div>
  


@endsection

@section('script')
		{!! Html::script('js/parsley.mim.js') !!} <!-- using parsley.min.js for client side validation -->
		{!! Html::script('js/select2.mim.js') !!}
	
		<script type="text/javascript">
    		$('.select2-multi').select2();
		</script>

		<script type="text/javascript">
			 var options = {
			  debug: 'info',
			  modules: {
			    toolbar: '#technig'
			  },
			  placeholder: 'Compose an epic...',
			  readOnly: true,
			  theme: 'snow'
			};
			var editor = new Quill('#editor', options);
		</script>

    <script>
       $(document).ready(function() {
            //initialize summernote
            $('.summernote').summernote();
 
            
        });
 
    </script>
		

@endsection --}}