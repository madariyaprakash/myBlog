@extends('main')


@section('title', '| Register')

@section('content')
<br>
    <div class="row">
        <div class="col-md-8 offset-md-2">
               {{--   <img class="profile-img" src="/images/signupICon.png"
                            alt="sign up img"> --}}
                    <div class="form-signin ">
                        {!! Form::open() !!}

                            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) }}
    
                            {{ Form::email('email', null, ['class' => 'form-control','placeholder' => 'Email']) }}
                            
                            {{ Form::password('password', ['class' => 'form-control','placeholder' => 'Password']) }}
                            
                            {{ Form::label('message', 'Please confirm the password', ['class' =>'signup-title' ]) }}
                            {{ Form::password('password_confirmation', ['class' => 'form-control','placeholder' => 'Confirm password']) }}
                           {{--  <script>
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
                            </script> --}}
                            
                            <br>
                            {{ Form::submit('Sign up', array('class' => 'btn btn-lg signin-button btn-block top', 'style' => 'text-decoration:none;')) }}

                        {!! Form::close() !!}
                    </div>

        </div>
    </div>
@endsection


