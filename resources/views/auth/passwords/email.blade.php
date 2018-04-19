@extends('main')

@section('title', '| Forgot my password')

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <br>
        <div class="card"> 
                    <div class="card-header"> Reset password Page</div> 
                    <div class="card-body">
                        {!! Form::open(['url' => 'password/email', 'method' => "POST"]) !!}

                        {{ Form::label('email' , 'Email:') }}
                        {{ Form::email('email' ,null, ['class' => 'form-control']) }}
                        
                        <br>
                        {{ Form::submit('Reset Password', ['class' => 'btn btn-primary']) }}

                        {!! Form::close() !!}
                    </div>  
        </div>
    </div>
</div>


@endsection
