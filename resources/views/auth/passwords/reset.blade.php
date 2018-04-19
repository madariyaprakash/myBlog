@extends('main')

@section('title', '| Reset password')

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
       <br>
        <div class="card"> 
                    <div class="card-header"> Reset password Page</div> 
                    <div class="card-body">
        
                    {!! Form::open(['url' => 'password/reset', 'method' => "POST"]) !!}

                    {{ Form::hidden('token', $token) }}

                    {{ Form::label('email' , 'Email:') }}
                    {{ Form::email('email' ,$email, ['class' => 'form-control']) }}

                    {{ Form::label('password', 'New Password:') }}
                    {{ Form::password('password', ['class' => 'form-control']) }}

                    {{ Form::label('password_confirmation', 'Confirm Password:') }}
                    {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                    
                    <br>
                    {{ Form::submit('Reset Password', ['class' => 'btn btn-primary']) }}

                    {!! Form::close() !!}

                </div>
            </div>
    </div>
</div>

@endsection


