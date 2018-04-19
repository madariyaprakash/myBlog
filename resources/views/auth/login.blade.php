@extends('main')



@section('title', '| Login')

@section('content')
<br>
    <div class="row content-top-spacing">
            <div class="col-md-4 offset-md-4">

                <div class="card"> 
                    <div class="card-header"> Login Page</div> 
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
                </div>    
            </div>    
    </div>
    <div class="row">
            <div class="col-md-4 offset-md-4"> 
                    <h6 style="color: red">New user ?? <a href="{{ route('register')}}">Register here..</a></h6>
            </div>
    </div>
    <div class="row">
            <div class="col-md-4 offset-md-4"> 
                    <p><a href="{{ url('password/resetpage') }}">Forgot my password</a></p>
            </div>
    </div>
@endsection

