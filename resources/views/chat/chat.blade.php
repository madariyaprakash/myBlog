<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>chat</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<style type="text/css">
		.list-group{
			overflow-y: scroll;
			height:200px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row top-spacing" id="app">
			<div class="offset-4 col-4">
				<li class="list-group-item active">Chat Room</li>
				<ul class="list-group" v-chat-scroll>
				  <message 
				  v-for="value in chat.message"
				  :key =value.index
				  color='success'
				  >@{{ value }}
				  </message>
				</ul>
				<input type="text" class="form-control" placeholder="Type your message.." v-model='message' @keyup.enter='send'>
			</div>		
		</div>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
{{-- @extends('main')

@section('title','| chat')

@section('stylesheets')
	{!! Html::style('css/app.cs') !!}
@endsection

@section('content')
		<div class="row" id="app">
			<div class="col-md-8">
				<ul class="list-group offset-4 col-4">
				  <li class="list-group-item active">Chat home</li>
				  <message v-for="value in chat.message">@{{ value }}</message>
				  <input type="text" class="form-control" placeholder="Type your message.." v-model='message' @keyup.enter='send'>
				</ul>
			
			</div>	
		</div>
@endsection
@section('script')
	{!! Html::script('js/app.js') !!}
@endsection
	 --}}



	
