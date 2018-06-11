@extends('main')

@section('title','| About')

@section('content')
  <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                 <div class="col-md-12">
                     <!-- new trial register page starts here --->
                            <div class="card abtme-wall">
                                    <img class="profile-img" src="/images/mypic.jpg"
                            alt="sign in img">
                                  <ul class="list-group list-group-flush">
                                    <p class="list-block-item font-style"><i class="fas fa-smile fa-2x"></i> Hi guys, This is <strong>{{ $fullname }}</strong></p>
                                    <p class="list-block-item font-style" id="demo">I have one and half years of experience on website and mobile application development profession. I am very keen on learning technologies. I have learned .Net, PHP, iOS and Android and other styling programming languages. I am very glad to make this website for those beginners who are going to start their journey with this field. I hope, I would provide you guys best of best stuffs so, It could make easier your programming and debugging skills to develop applications. Please, Always stay touch so that, I could provide you guys better stuffs. Thank you.!!!</p>
                                    <p class="list-block-item"></p>

{{-- 
                                 <script>
                                    var i = 0;
                                    var txt = 'I have one and half years of experience on website and mobile application development profession. I am very keen on learning technologies. I have learned .Net, PHP, iOS and Android and other styling programming languages. I am very glad to make this website for those beginners who are going to start their journey with this field. I hope, I would provide you guys best of best stuffs so, It could make easier your programming and debugging skills to develop applications. Please, Always stay touch so that, I could provide you guys better stuffs. Thank you.!!!';
                                    var speed = 30;

                                    function typeWriter() {
                                      if (i < txt.length) {
                                        document.getElementById("demo").innerHTML += txt.charAt(i);
                                        i++;
                                        setTimeout(typeWriter, speed);
                                      }
                                    }
                                    window.onload = typeWriter;
                                 </script> --}}


                                  </ul>
                                  <div class="card-body">
                                    <button class="collapsible-more">Wanna know more about me.</button>
                                    <div class="coll-content">
                                       <div class="row">
                                          <div class="abt-tab">
                                            <button class="tablinks" onclick="openCity(event, 'London')"><i class="fa fa-gamepad"></i> Hobbies</button>
                                            <button class="tablinks" onclick="openCity(event, 'Paris')"><i class="fa fa-image"></i> Gallery</button>
                                            <button class="tablinks" onclick="openCity(event, 'Tokyo')"><i class="fa fa-caret-square-down"></i> More</button>
                                          </div>
                                       </div>
                                        

                                       <div id="London" class="tabcontent">
                                         <h3>London</h3>
                                         <p>London is the capital city of England.</p>
                                       </div>

                                       <div id="Paris" class="tabcontent">
                                         <h3>Paris</h3>
                                         <p>Paris is the capital of France.</p> 
                                       </div>

                                       <div id="Tokyo" class="tabcontent">
                                         <h3>Tokyo</h3>
                                         <p>Tokyo is the capital of Japan.</p>
                                       </div>
                                    </div>

                                    <!-- Collapse activity JS starts here--->
                                    <script>
                                       var coll = document.getElementsByClassName("collapsible-more");
                                       var i;

                                       for (i = 0; i < coll.length; i++) {
                                           coll[i].addEventListener("click", function() {
                                               this.classList.toggle("active");
                                               var content = this.nextElementSibling;
                                               if (content.style.display === "block") {
                                                   content.style.display = "none";
                                               } else {
                                                   content.style.display = "block";
                                               }
                                           });
                                       }
                                    </script>
                                    <!-- Collapse activity JS ends here--->

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
                                       </script>

                            </div>
                    <!--  new trial register page here --->
                    </div>
                </div>
        </div>
    </div>
    

@endsection