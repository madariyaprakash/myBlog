<!doctype html>
<html lang="en">

@include('partials._head') <!-- Here we are taking head file as partial view to organize this whole website better  -->

  <body>
     <!-- NAVBAR SECTION --> 
     @include('partials._nav')  <!-- PARTIAL VIEW FOR NAVIGATION BAR -->

<!-- JUMBOTRON SECTION -->
   {{-- @include('partials._social')  --}} <!-- this is for social link plugin -->

        <div class="container">

          @include('partials._message') <!-- here we are using partial/message view to display specific message  -->
            
           <!-- ( Auth::check() ? "Loggend in" : "Logged out") USE BANG BANG BRACKET HERE TO CHECK WHETHER USER IS LOGGED IN OR LOGGED OUT-->
          
            

           @yield('content')    <!--Here it will automatically read the main content of the every page .-->
    
         @include('partials._footer')   <!-- PARTIAL VIEW FOR FOOTER SECTION -->   
      
        </div>
        
         

     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    @include('partials._javascript')  <!-- PARTIAL VIEW FOR JAVASCRIPT SECTION -->

  </body>
</html>