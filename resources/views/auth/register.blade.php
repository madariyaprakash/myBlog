@extends('main')


@section('title', '| Register')

@section('content')
<br>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="account-wall">
                 <img class="profile-img" src="/images/signupICon.png"
                            alt="sign up img">
                    <div class="form-signin ">
                        {!! Form::open() !!}

                            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) }}
    
                            {{ Form::email('email', null, ['class' => 'form-control','placeholder' => 'Email']) }}
                            
                            {{ Form::password('password', ['class' => 'form-control','placeholder' => 'Password']) }}
                            
                            {{ Form::label('password_confirmation', 'Please confirm the password', ['class' =>'signup-title' ]) }}
                            {{ Form::password('password_confirmation', ['class' => 'form-control','placeholder' => 'Confirm password']) }}
                            
                            <br>
                            {{ Form::submit('Sign up', array('class' => 'btn btn-lg signin-button btn-block top', 'style' => 'text-decoration:none;')) }}

                        {!! Form::close() !!}
                    </div>
            </div>
        </div>
    </div>
@endsection