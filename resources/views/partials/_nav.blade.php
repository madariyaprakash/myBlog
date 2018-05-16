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
            <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item {{Request::is('about') ? "active" : ""}}">
            <a class="nav-link" href="/about">ABOUT</a>
          </li>
          <li class="nav-item {{Request::is('blog') ? "active" : ""}}">
            <a class="nav-link" href="/blog">BLOG</a>
          </li>
          <li class="nav-item {{Request::is('blog') ? "active" : ""}}">
            <a class="nav-link" href="/video-tutorials">VIDEO TUTORIALS</a>
          </li>
          <li class="nav-item {{Request::is('blog') ? "active" : ""}}">
            <a class="nav-link" href="/projects">PROJECTS</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TECHNOLOGIES
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="#">WEB FRAMEWORK</a>
              <a class="dropdown-item" href="#">API'S</a>
              <a class="dropdown-item" href="#">PROG. LANGUAGES</a>
              <div class="dropdown-divider">DATABASE SERVERS</div>
              <a class="dropdown-item" href="#">CDN</a>
            </div>
          </li>
          <li class="nav-item {{Request::is('contact') ? "active" : ""}}">
            <a class="nav-link" href="/contact">CONTACT</a>
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
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Change password</a>
              <a class="dropdown-item" href="#"></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
          @else

              <a href="{{route('login')}}" class="lgnbtn lgnbtn-primary">Login</a>
          @endif
        </ul>
        </div>
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
          <h4 class="text-white">Collapsed content</h4>
          <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
    </div>
    <!-- Externam contents ENDS here-->

