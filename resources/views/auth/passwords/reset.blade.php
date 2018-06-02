@extends('main')

@section('title', '| Reset password')

@section('content')

<div class="row">
    <div class="col-md-8 offset-md-3">
        <div class="row">
            <div class="col-md-8"> 
                   <div class="card account-wall">
                            {!! Form::open(['url' => 'password/reset', 'method' => "POST"]) !!}
                            {{ Form::hidden('token', $token) }}{{-- 
                              <img class="card-img-top profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="Card image cap"> --}}
                              <ul class="list-group list-group-flush">

                                <p class="list-block-item">{{ Form::email('email' ,$email, ['class' => 'form-control']) }} </p>

                                <p class="list-block-item">{{ Form::password('password', ['class' => 'form-control','placeholder' => 'New Password']) }}</p>

                                <p class="list-block-item">{{ Form::password('password_confirmation', ['class' => 'form-control' ,'placeholder' => 'Confirm Password']) }}</p>

                                <p class="list-block-item">{{ Form::submit('Reset Password', ['class' => 'btn btn-lg signin-button btn-block top', 'style' => 'text-decoration:none;']) }}</p>
                              </ul>
                              <div class="card-body">
                                <p>Let's go back to <a href="{{ route('login') }}" style="color:orange;" class="card-link">login</a> page.</p>
                             </div>
                            {!! Form::close() !!}
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
        {{-- <div class="card"> 
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
        </div> --}}



   




