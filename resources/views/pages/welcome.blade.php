@extends('main') <!-- we are directly calling the same contents of the page using single template page -->

@section('title','| Home')

@section('content') <!-- this is the section part which defines the CONTAINER data. -->
            <div class="row content-top-spacing">
                <div class="col-md-12">
                    <div class="jumbotron">
                      <h1 class="display-3">Hello, This is ellipse of coders.</h1>
                      <p class="lead">This is a simple place to learn things, be expert on programming of your own.</p>
                      <hr class="my-4">
                      <p>Thanks for joining us!!</p>
                      <p class="lead">
                        <a class="blogButton blogButton-primary" href="#" role="button">About more</a>
                      </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    @foreach($posts as $post)
                        <div class="post">
                            <h3>{{$post->title }}</h3>
                            <!-- strip_tags() function we used here to not to show the body in html formate rather in plain text formate-->
                            <p>{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
                            <a href="{{ url('blog/'.$post->slug) }}" class="postButton postButton-primary">Read more</a>
                            <!--'blog/' is used to route for the specific slug -->
                            <!-- in url($post->slug) here it will check for the specific post which user will select that will send to the blogcontroller and that will send to the single view to show all the data which belong to the particular slug -->
                        </div>
                        <hr>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <div class="ask-block">
                          <p id="ask_alert_title">Got stuck somewhere or have any query?</p>
                          <p id="ask_alert_signin">Please <a href="{{route('login')}}">sign in</a> to ask question.</p>
                      @if(Auth::check())
                          <!-- here we are using script to hide the alert ask question sign in option para which has written above the authorization check -->
                          <script>
                            document.getElementById('ask_alert_title').style.visibility = "hidden";
                            document.getElementById('ask_alert_signin').style.visibility = "hidden";
                          </script> 
                          <a href="/questions/create/{{ Auth::user()->id }}" class="btn btn-primary btn-block">Ask Question</a>
                          <a href="#" class="asked-ques">Visit asked questions <i class="fas fa-arrow-alt-circle-right"></i></a>
                      @endif
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header">
                                 <div class="home-tab">
                                            <button class="tablinks active" onclick="openCity(event, 'London')" id="defaultOpen"><i class="fa fa-clock"></i> Recent</button>
                                            <button class="tablinks" onclick="openCity(event, 'Paris')"><i class="fa fa-heart"></i> Liked</button>
                                            <button class="tablinks" onclick="openCity(event, 'Tokyo')"><i class="fa fa-eye"></i> Viewed</button>
                                            <button class="tablinks" onclick="openCity(event, 'India')"><i class="fa fa-comment"></i> Commented</button>
                                  </div>
                        </div>
                        <div class="card-body">
                                    <div id="London" class="tabcontent">
                                      
                                      @foreach($posts as $post)
                                                <div class="row">
                                                  <div class="col-md-2">
                                                    <img class="rcnt-post" src="/uploads/{{ $post->post_thumbnail }}" alt="post-image"></img>
                                                  </div>
                                                  <div class="col-md-10">
                                                    <a href="{{ url('blog/'.$post->slug) }}"><h3 style="font-size: 15px">{{$post->title }}</h3></a>
                                                    <p style="font-size: 10px">{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
                                                  </div>
                                                   {{--  
                                                    <a href="{{ url('blog/'.$post->slug) }}" class="blogButton blogButton-primary"> <img src="images/read_more.png" alt="post-image"></img></a> --}}
                                                    <!--'blog/' is used to route for the specific slug -->
                                                    <!-- in url($post->slug) here it will check for the specific post which user will select that will send to the blogcontroller and that will send to the single view to show all the data which belong to the particular slug -->
                                  
                                                </div>
                                        <hr>
                                      @endforeach
                                   
                                    </div>

                            <div id="Paris" class="tabcontent">
                                <h3>Paris</h3>
                                <p>Paris is the capital of France.</p> 
                            </div>

                            <div id="Tokyo" class="tabcontent">
                                <h3>Tokyo</h3>
                                <p>Tokyo is the capital of Japan.</p>
                            </div>

                            <div id="India" class="tabcontent">
                                <h3>India</h3>
                                <p>India is the beautiful country.</p>
                            </div>

                        </div>
                    </div>
                  </div>
            </div>

                      <script>
                      function openCity(evt, cityName) {
                          var i, tabcontent, tablinks;
                          tabcontent = document.getElementsByClassName("tabcontent");
                          for (i = 0; i < tabcontent.length; i++) {
                              tabcontent[i].style.display = "none";
                          }
                          tablinks = document.getElementsByClassName("tablinks");
                          for (i = 0; i < tablinks.length; i++) {
                              tablinks[i].className = tablinks[i].className.replace(" active", "");
                          }
                          document.getElementById(cityName).style.display = "block";
                          evt.currentTarget.className += " active";
                      }

                      // Get the element with id="defaultOpen" and click on it
                      document.getElementById("defaultOpen").click();
                      </script>

                   <!-- Tab Exapmle ends here -->

                      <!-- TOOL TIP -->

                      <script type="text/javascript">

                        $(document).ready(function(){
                          $('[data-toggle="tooltip"]').tooltip();
                        });

                      </script>
@endsection
