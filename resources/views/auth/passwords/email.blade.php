@extends('main')

@section('title', '| Forgot my password')

@section('content')

<div class="row">
    <div class="col-md-8 offset-md-3">
        <div class="row">
            <div class="col-md-8">
                <div class="card account-wall">
                {!! Form::open(['url' => 'password/email', 'method' => "POST"]) !!}
                    <div style="text-align:center; color:orange; font-weight: bold;">
                        <p>Reset password page <i class="fas fa-meh fa-2x"></i></p>
                     </div>
                    {{-- 
                      <img class="card-img-top profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="Card image cap"> --}}
                      <ul class="list-group list-group-flush">

                        <p class="list-block-item">{{ Form::email('email', null, ['class' => 'form-control','placeholder' => 'Enter your register email id']) }} </p>

                        <p class="list-block-item">{{ Form::submit('Reset Password', ['class' => 'btn btn-lg signin-button btn-block top', 'style' => 'text-decoration:none;']) }}</p>
                      </ul>
                      <div class="card-body">
                        <p style="color:orange">Wanna go back to <a href="{{ route('login') }}" style="color:darkblue;" class="card-link">login</a> page.</p>
                     </div>
                {!! Form::close() !!}
                </div>  
            </div>
        </div>         
    </div>
</div>


@endsection
           
       {{--  <div class="card"> 
                    <div class="card-header"> Reset password Page</div> 
                    <div class="card-body">
                        {!! Form::open(['url' => 'password/email', 'method' => "POST"]) !!}

                        {{ Form::label('email' , 'Email:') }}
                        {{ Form::email('email' ,null, ['class' => 'form-control']) }}
                        
                        <br>
                        {{ Form::submit('Reset Password', ['class' => 'btn btn-primary']) }}

                        {!! Form::close() !!}
                    </div>  
        </div> --}}

