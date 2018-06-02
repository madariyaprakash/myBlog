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
                                    <p></p>
                                    <a href="#">Not link yet</a>
                                  </div>

                            </div>
                    <!--  new trial register page here --->
                    </div>
                </div>
        </div>
    </div>
    

@endsection