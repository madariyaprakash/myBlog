@extends('admin_main')

@section('title','|All posts')

@section('content')
	
	<div class="row content-top-spacing">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>
		<div class="col-md-2">
			<a href="{{route('posts.create')}}" class="btn btn-block btn-primary btn-h1-spacing">Create New Post</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div> <!-- this row ends here -->

	<div class="row">
		<div class="col-md-12 col-md-offset-2">
			<table class="table table-responsive">
				  <thead>
				      <th>#</th>
				      <th>Title</th>
				      <th>Body</th>
				      <th>Created At</th>
				      <th></th>
				  </thead>
				  <tbody>

					  	@foreach($posts as $post)
						  	<tr>
						      <th>{{ $post->id }}</th>
						      <td>{{ $post->title }}</td>
						      <td>{{ substr(strip_tags($post->body), 0, 50) }}{{ strlen($post->body)> 50 ? "..." : ""}}</td> <!-- here substr(para1, para2, para3) to reduce the body size with max 50 character.-->
						      <td>{{ date('M j-Y,h:m a',strtotime($post->created_at)) }}</td>
						      <td><a href="{{route('posts.show',$post->id)}}" class="btn btn-primary btn-sm">View</a> <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
						    </tr>
					    @endforeach
						{{ $posts->links() }} <!-- For PAGINATION WE HAVE GIVEN LINK FOR NEXT AND PREVIOUS BUTTON -->
				  </tbody>
			</table>
		</div>
	</div>
	

@stop <!-- we can close with 'stop' as well instead of 'endsection'-->