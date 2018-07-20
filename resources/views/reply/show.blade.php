@extends('admin_main')

@section('title','| reply')

@section('content')
<div class="row">
		<div class="col-md-12 ">
			<table class="table">
				  <thead>
				      <th>#</th>
				      <th>Body</th>
				      <th>Created At</th>
				  </thead>
				  <tbody>
					  	@foreach($replydata as $replies)
						  	<tr>
						      <th>{{ $replies->id }}</th>
						      <td>{{ substr(strip_tags($replies->body), 0, 50) }}{{ strlen($replies->body)> 50 ? "..." : ""}}</td> <!-- here substr(para1, para2, para3) to reduce the body size with max 50 character.-->
						      <td>{{ date('M j-Y,h:m a',strtotime($replies->created_at)) }}</td>
						    </tr>
					    @endforeach
						<!-- For PAGINATION WE HAVE GIVEN LINK FOR NEXT AND PREVIOUS BUTTON -->
				  </tbody>
			</table>
		</div>
	</div>
@endsection