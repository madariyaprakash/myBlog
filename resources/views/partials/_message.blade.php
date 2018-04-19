@if(Session::has('success'))
	
	<div class="alert alert-success" role="alert" style="margin-top: 20px">
  		
  		<strong>Success:</strong> {{Session::get('success')}} 
  		<!-- here we will use get() method and pass the parameter of session what we want to display.-->
  	</div>

@endif


<!-- this is the server side validation part if any field goes wrong means this msg will display. -->
<!--- To check whether is working or not for that we will have to remove parsley client side validation from view posts/create. -->
@if(Count($errors) > 0)
	
	<div class="alert alert-danger" role="alert" style="margin-top: 20px">

	  <strong>Errors:</strong>
	  	<ul>
		  	@foreach($errors->all() as $error) 
		  	<!-- here we are using all() method to display all the errors which encountered in this particular form submission. -->
		  		<li>{!! $error !!}</li>  <!-- here we are sending error, blade will do automatially if we mention $error in blade php.-->
		  	@endforeach
	  	</ul>
	</div>
	

@endif