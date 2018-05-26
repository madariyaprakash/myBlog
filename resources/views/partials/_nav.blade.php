  <nav class="navbar navbar-expand-lg navbar-light bd-navbar">
        <nav class="navbar navbar-light">
  <a class="navbar-brand" href="#">
    <img src="/images/codellipse4.png" width="140px" height="25px" alt="codellipse">
  </a>
</nav>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <!-- Here we are using highlighting the specific navigation menu afer clicking using REQUEST method using ternary operator-->
            <li class="nav-item {{Request::is('/') ? "active" : ""}}"> 
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{Request::is('about') ? "active" : ""}}">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item {{Request::is('blog') ? "active" : ""}}">
              <a class="nav-link" href="/blog">Blog</a>
            </li>
            <li class="nav-item {{Request::is('video-tutorials') ? "active" : ""}}">
              <a class="nav-link" href="/video-tutorials">Video Tutorials</a>
            </li>
            <li class="nav-item {{Request::is('projects') ? "active" : ""}}">
              <a class="nav-link" href="/projects">Projects</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Technologies {{-- 
                  <svg class="navbar-nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 416.32" focusable="false"><path d="M160.83 416.32c193.2 0 298.92-160.22 298.92-298.92 0-4.51 0-9-.2-13.52A214 214 0 0 0 512 49.38a212.93 212.93 0 0 1-60.44 16.6 105.7 105.7 0 0 0 46.3-58.19 209 209 0 0 1-66.79 25.37 105.09 105.09 0 0 0-181.73 71.91 116.12 116.12 0 0 0 2.66 24c-87.28-4.3-164.73-46.3-216.56-109.82A105.48 105.48 0 0 0 68 159.6a106.27 106.27 0 0 1-47.53-13.11v1.43a105.28 105.28 0 0 0 84.21 103.06 105.67 105.67 0 0 1-47.33 1.84 105.06 105.06 0 0 0 98.14 72.94A210.72 210.72 0 0 1 25 370.84a202.17 202.17 0 0 1-25-1.43 298.85 298.85 0 0 0 160.83 46.92" fill="currentColor"></path></svg> --}}

                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Web Frameworks</a>
                    <a class="dropdown-item" href="#">API'S</a>
                    <a class="dropdown-item" href="#">Prog. Languages</a>
                    <div class="dropdown-divider">Database Server</div>
                    <a class="dropdown-item" href="#">CDN</a>
                </div>
            </li>
            <li class="nav-item {{Request::is('contact') ? "active" : ""}}">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
          
          <!--<li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li> -->
          </ul>
        <ul class="nav navbar-nav navbar-right">
          @if(Auth::check())    
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hello! <span class="text text-primary">{{ Auth::user()->name }}</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                {{-- <div class="card" style="width: 15rem;">
                  <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
                  <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div> --}}
                       <a class="dropdown-item" href="/user-details">Account settings</a>
                    <a class="dropdown-item" href="#">Change password</a>
                    <a class="dropdown-item" href="#"></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                </div> 
               
            @else

                <a href="{{route('login')}}" class="lgnbtn lgnbtn-primary">Login</a>
            @endif
            </div>
        </ul>
        
        <!--<form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>

  </nav>
  <!-- Externam contents STARTS here-->
    <div class="pos-f-t">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            {{-- <form>
              <input type="text" name="search" placeholder="Search..">
            </form> --}}
            <form class="example" action="#" accept-charset="utf-8">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="icon-search"></i></button>
              <button type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="icon-collapse"></i><span class="search-more-text"> Search with tags</span></button>
            </form>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                  <div class="row">
                    <a href="#">A1</a>
                    <a href="#">A2</a>
                    <a href="#">A3</a>
                    <a href="#">A4</a>
                    <a href="#">A5</a>
                    <a href="#">A6</a>
                    <a href="#">A7</a>
                    <a href="#">A8</a>
                  </div>
                </div>
              </div>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="icon-search"></i>
        </button>
      </nav>
          <!--START- JQUERY SCRIPT TO CAHNGE THE TOGGLE ICON IN NAV TOGGLER -->
            <script>
              $(".navbar-toggler").on('click',function(){
                  $(this).children('.icon-remove, .icon-search').toggleClass("icon-remove icon-search");
              });
            </script>

            <!--END - JQUERY SCRIPT TO CAHNGE THE TOGGLE ICON IN NAV TOGGLER -->

    </div>
    <!-- Externam contents ENDS here-->

