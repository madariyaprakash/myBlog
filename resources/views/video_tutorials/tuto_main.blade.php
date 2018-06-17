@extends('main')

@section('title', '| Tutorials')

@section('content')
	<div class="row content-top-spacing">
		<div class="col-md-12">
			<div id="mySidenav" class="sidenav">
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			  <a href="#">Recent updates</a>
			  <a href="#">.Net</a>
			  <a href="#">SQLServer</a>
			  <a href="#">PHP</a>
			  <a href="#">MySQL</a>
			  <a href="#">Laravel</a>
			  <a href="#">Oracle</a>
			  <a href="#">Java basics</a>
			  <a href="#">HTML</a>
			  <a href="#">CSS3</a>
			  <a href="#">Javascript</a>  
			  <a href="#">jQuery</a>  
			  <a href="#">WEB API'S</a>
			  <a href="#">Android</a>
			  <a href="#">SQLite</a>			 
			  <a href="#">Python</a>
			</div>

			<h2>Video tutorials with explainations</h2>
			<p>This contents will help you to understand the basic concepts.</p>
			<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Open Modules</span>

			<script>
			function openNav() {
			    document.getElementById("mySidenav").style.width = "250px";
			}

			function closeNav() {
			    document.getElementById("mySidenav").style.width = "0";
			}
			</script>
		</div>
	{{-- 		<h1>Tutorial Videos</h1>
			<hr>
			<div class="tuto-tab">
			  <button class="tuto-tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
			  <button class="tuto-tablinks" onclick="openCity(event, 'Paris')">Paris</button>
			  <button class="tuto-tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
			</div>

			<div id="London" class="tuto-tabcontent">
			  <h3>London</h3>
			  <p>London is the capital city of England.</p>
			</div>

			<div id="Paris" class="tuto-tabcontent">
			  <h3>Paris</h3>
			  <p>Paris is the capital of France.</p> 
			</div>

			<div id="Tokyo" class="tuto-tabcontent">
			  <h3>Tokyo</h3>
			  <p>Tokyo is the capital of Japan.</p>
			</div>

		</div>

		<script>
			function openCity(evt, cityName) {
			    var i, tabcontent, tablinks;
			    tabcontent = document.getElementsByClassName("tuto-tabcontent");
			    for (i = 0; i < tabcontent.length; i++) {
			        tabcontent[i].style.display = "none";
			    }
			    tablinks = document.getElementsByClassName("tuto-tablinks");
			    for (i = 0; i < tablinks.length; i++) {
			        tablinks[i].className = tablinks[i].className.replace(" active", "");
			    }
			    document.getElementById(cityName).style.display = "block";
			    evt.currentTarget.className += " active";
			}

			// Get the element with id="defaultOpen" and click on it
			document.getElementById("defaultOpen").click();
			</script> --}}
		
	</div>	

			
@endsection