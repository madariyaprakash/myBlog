@extends('main')



@section('title', '| Login')

@section('content')
    <div class="row content-top-spacing">
            <div class="col-md-8 offset-md-2">
                <div class="row">
                    <div class="col-md-8">
                         <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                            alt="sign in img">
                            <div class="form-signin">
                                {!! Form::open() !!}

                                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}

                                    {{ Form::password('password', ['class' => 'form-control' , 'placeholder' => 'Password']) }}

                                    <br>
                                    {{ Form::checkbox('remeber') }}{{ Form::label('remeber' , '&nbsp;Remember Me') }}

                                    <br>
                                    {{ Form::submit('Sign in', array('class' => 'btn btn-lg signin-button btn-block top')) }}

                                    <br>
                                    <a href="{{ url('password/resetpage') }}" style="color:orange;">Trouble in log in?</a>

                                {!! Form::close() !!}
                            </div>
                    </div>
                    <div class="col-md-4 account-wall">
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
                </div>
            </div>          
    </div>
    <div class="row">
            <div class="col-md-4 offset-md-4"> 
                    <p></p>
            </div>
    </div>

    <div class="row">
        

    </div>


            


{{-- 
    <div class="card"> 
                    <div class="card-header card-header-design"> Login Page</div> 
                    <div class="card-body">
                        {!! Form::open() !!}

                            {{ Form::label('email', 'Email:') }}
                            {{ Form::email('email', null, ['class' => 'form-control']) }}

                            {{ Form::label('password', 'Password:') }}
                            {{ Form::password('password', ['class' => 'form-control']) }}

                            <br>
                            {{ Form::checkbox('remeber') }}{{ Form::label('remeber' , '&nbsp;Remember Me') }}

                            <br>
                            {{ Form::submit('Login', array('class' => 'btn btn-primary')) }}

                        {!! Form::close() !!}
                    </div>
                </div>     --}}
@endsection

