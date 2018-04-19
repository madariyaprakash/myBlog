@extends('admin_main')

@section('title','| Edit Post')

@section('content')

<!-- MODEL -FORM BINDING (posts/id/edit)-->
<!---##############################-->

	<div class="row content-top-spacing">
		<div class="col-md-8">
			<!-- HERE WE ARE USING FORM HELPER METHOD -->
				<!--- We can use PATCH instead of PUT in method both will work same-->
			{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method'=> 'PUT']) !!}	<!-- THIS COLUMN I HAVE TO MENTION INSIDE-->
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', null, ['class' => 'form-control']) }}

				{{ Form::label('slug', 'Slug:') }}
				{{ Form::text('slug', null, ['class' => 'form-control']) }}

				{{ Form::label('category_id','Category:') }}    
				{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

				{{ Form::label('tags', 'Tags :') }}
				{{ Form::select('tags[]', $tags, null, ['class' => 'select2-multi form-control', 'multiple' => 'multiple']) }}

				{{ Form::label('post_thumbnail','Upload Image:') }}
				{{ Form::file('post_thumbnail', array('class' => 'form-control-file')) }}

				{{ Form::label('body', 'Body:') }}
				{{ Form::textarea('body' , null , ['class' => 'form-control']) }}
				<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
				  <dt>Created at:</dt>
				  <dd>{{ date( 'M j, Y h:ia',strtotime($post->created_at)) }}</dd> <!-- CONVERTING STRING TO TIME using php date option-->
				  <!-- PHP CODE : date('format',converting method($post->date)) -->
				</dl>
				<dl class="dl-horizontal">
				  <dt>Updated at:</dt>
				  <dd>{{ date('M j, Y h:ia',strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{{ Html::linkRoute('posts.show','Cancel',array($post->id),array('class' => 'btn btn-danger btn-block')) }}
						<!-- instead of creating html ahref link, directly we can create php route link which will perform the same action -->
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save changes',['class' => 'btn btn-success btn-block'])}}
					</div>
				</div>
			</div>
		</div>
		{!! Form::Close() !!}
	</div>

@endsection