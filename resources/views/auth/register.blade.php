@extends('main')


@section('title', '| Register')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-3">
            <div class="row">
                 <div class="col-md-8">
                     <!-- new trial register page starts here --->
                            <div class="card account-wall">
                                {!! Form::open() !!}{{-- 
                                  <img class="card-img-top profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="Card image cap"> --}}
                                  <div style="text-align:center; color:orange; font-weight: bold;">
                                    <p>Welcome to codellipse <i class="fas fa-smile fa-2x"></i></p>
                                 </div>
                                  <ul class="list-group list-group-flush">
                                    <p class="list-block-item">{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) }} </p>
                                    <p class="list-block-item">{{ Form::email('email', null, ['class' => 'form-control','placeholder' => 'Email']) }}</p>
                                    <p class="list-block-item">{{ Form::password('password', ['class' => 'form-control','placeholder' => 'Password']) }}</p>
                                    <p class="list-block-item">{{ Form::label('message', 'Please confirm the password', ['class' =>'signup-title' ]) }} &nbsp; {{ Form::password('password_confirmation', ['class' => 'form-control','placeholder' => 'Confirm password']) }}</p>
                                    <p class="list-block-item"> {{ Form::submit('Sign up', array('class' => 'btn btn-lg signin-button btn-block top', 'style' => 'text-decoration:none;')) }}</p>
                                  </ul>
                                  <div class="card-body">
                                    <p>Wanna go back to <a href="{{ route('login') }}" style="color:orange;" class="card-link">login</a> page?</p>
                                 </div>
                                {!! Form::close() !!}
                            </div>
                    <!--  new trial register page here --->
                    </div>
                </div>
        </div>
    </div>
@endsection
                    {{--  <div class="col-md-4">
                            <div class="account-wall">
                                    <div class="row">
                                        <p class="signup-title"> Don't you have an account?<span><a href="{{ route('register')}}"> Sign up</a></span></p>    
                                    </div>
                                    <div class="row">
                                        <p class="signup-separator">OR</p>    
                                    </div>
                                    <div class="row">
                                        <p class="signup-title">Sign up with your social accounts</p>    
                                    </div>
                                    <div class="row">
                                        <a href ="{{ url('/login/google') }}" class="btn signup-btn signup-btn-google">G+</a>    
                                    </div>
                                    <div class="row">
                                        <a href ="#" class="btn signup-btn signup-btn-facebook">f</a>    
                                    </div>
                                    <div class="row">
                                        <a href ="#" class="btn signup-btn signup-btn-twitter">t</a>    
                                    </div>
                                    
                            </div>

                        </div> --}}
            
               {{--   <img class="profile-img" src="/images/signupICon.png"
                            alt="sign up img"> --}}
               {{--      <div class="form-signin ">
                        {!! Form::open() !!}

                            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) }}
    
                            {{ Form::email('email', null, ['class' => 'form-control','placeholder' => 'Email']) }}
                            
                            {{ Form::password('password', ['class' => 'form-control','placeholder' => 'Password']) }}
                            
                            {{ Form::label('message', 'Please confirm the password', ['class' =>'signup-title' ]) }}
                            {{ Form::password('password_confirmation', ['class' => 'form-control','placeholder' => 'Confirm password']) }}
                            <script>
                                var check = function() {
                                  if (document.getElementById('password').value ==
                                    document.getElementById('password_confirmation').value) {
                                    document.getElementById('message').style.color = 'green';
                                    document.getElementById('message').innerHTML = 'matching';
                                  } else {
                                    document.getElementById('message').style.color = 'red';
                                    document.getElementById('message').innerHTML = 'not matching';
                                  }
                                }
                            </script>
                            
                            <br>
                            {{ Form::submit('Sign up', array('class' => 'btn btn-lg signin-button btn-block top', 'style' => 'text-decoration:none;')) }}

                        {!! Form::close() !!}
                    </div> --}}

      


