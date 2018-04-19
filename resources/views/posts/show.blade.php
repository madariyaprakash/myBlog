@extends('admin_main')

@section('title', '|View Post')

@section('content')
	
	<div class="row content-top-spacing">
		<div class="col-md-8">
					<!-- HERE WE ARE RETRIVING THE $post DATA WHICH IS PASSED IN postdata VARIABLE. -->
			<img src="/uploads/{{ $postdata->post_thumbnail }}" alt="{{ $postdata->title }}" />
			<h1>{{ $postdata->title}}</h1> <!-- instead of writing { { } } we can write with beng beng pattern { !!   !! }  -->
			<p class="lead">{!! $postdata->body !!}</p>
			<hr>
			<div class="tags">
				@foreach($postdata->tags as $tag)
					<span class="badge badge-pill badge-secondary">{{ $tag->name }}</span>
				@endforeach
			</div>
			<div class="backend-comments" style="margin-top: 50px">
				<h3>Comments <small>{{ $postdata->comments()->count() }} total</small></h3>
				<table class="table">
					<caption>Here is all the comments</caption>
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Comment</th>
							<th width="120px"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($postdata->comments as $comment)
						<tr>
							<td>{{ $comment->name }}</td>
							<td>{{ $comment->email }}</td>
							<td>{{ $comment->comment }}</td>
							<td>
								<a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-xs btn-primary"><span class="fas fa-pencil-alt fa-xs"></span></a>
								<a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-xs btn-primary"><span class="fas fa-trash-alt fa-xs"></span></a>
							</td>
						@endforeach
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
				  <dt>Url:</dt>
				  <dd><a href="{{ route('blog.single',$postdata->slug) }}">{{ url($postdata->slug) }}</a></dd> 
				  <!--insted of using url('blog/'.$postdata->slug) we can use route('blog.single',$postdata->slug) -->
				  <!-- CONVERTING STRING TO TIME using php date option-->
				  <!-- PHP CODE : date('format',converting method($post->date)) -->
				</dl>
				<dl class="dl-horizontal">
				  <dt>Created at:</dt>
				  <dd>{{ date( 'M j, Y h:ia',strtotime($postdata->created_at)) }}</dd> <!-- CONVERTING STRING TO TIME using php date option-->
				  <!-- PHP CODE : date('format',converting method($post->date)) -->
				</dl>
				<dl class="dl-horizontal">
				  <dt>Updated at:</dt>
				  <dd>{{ date('M j, Y h:ia',strtotime($postdata->updated_at)) }}</dd>
				</dl>
				<dl class="dl-horizontal">
				  <dt>Category:</dt>
				  <dd>{{ $postdata->category->name }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{{ Html::linkRoute('posts.edit','Edit',array($postdata->id),array('class' => 'btn btn-primary btn-block')) }}
						<!-- instead of creating html ahref link, directly we can create php route link which will perform the same action -->
					</div>
					<div class="col-sm-6">
						<!-- Here we are performing direct delete action so we can not route for page and here we can sue either Form helper --> <!--method or AJAX method, but for simplicity we are using Form helper method -->
						{!! Form::open(['route' => ['posts.destroy', $postdata->id] , 'method' => 'DELETE']) !!}
			
						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}

					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						{{ Html::linkRoute('posts.index', '<<see all posts',[], ['class' => 'btn btn-secondary btn-block btn-h1-spacing']) }}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection