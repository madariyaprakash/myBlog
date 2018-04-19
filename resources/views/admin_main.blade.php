<!DOCTYPE html>
<html lang="en">

@include('partials_admin._head')

<body>

	@include('partials_admin._nav')
	
	<div class="container">
		
		@include('partials_admin._message')

		@yield('content')

		@include('partials_admin._footer')
	</div>

	@include('partials_admin._javascript')

</body>

</html>