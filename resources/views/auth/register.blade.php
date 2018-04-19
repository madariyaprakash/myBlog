@extends('main')


@section('title', '| Register')

@section('content')
<br>
    <div class="row content-top-spacing">
        <div class="col-md-4 offset-md-4">
            <div class="card"> 
                    <div class="card-header"> Registration Page</div> 
                    <div class="card-body">
                        {!! Form::open() !!}

                            {{ Form::label('name', "Name:") }}
                            {{ Form::text('name', null, ['class' => 'form-control']) }}

                            {{ Form::label('email', "Email:") }}
                            {{ Form::email('email', null, ['class' => 'form-control']) }}

                            {{ Form::label('password', "Password:") }}
                            {{ Form::password('password', ['class' => 'form-control']) }}

                            {{ Form::label('password_confirmation', "Confirm Password:") }}
                            {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                            
                            <br>
                            {{ Form::submit('Register', array('class' => 'btn btn-primary', 'style' => 'text-decoration:none;')) }}

                        {!! Form::close() !!}
                    </div>
            </div>
        </div>
    </div>
@endsection