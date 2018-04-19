
<!DOCTYPE html>
<html>
<head>
    <title>admin|login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- BOOTSTRAP CSS --> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    {{ Html::style('css/styles.css') }}

</head>
<body>
    <div class="comtent">
            <br>
            <div class="row content-top-spacing">
                    <div class="col-md-4 offset-md-4">

                        <div class="card"> 
                            <div class="card-header"> Admin Login Page</div> 
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
           {{--  <div class="row">
                    <div class="col-md-4 offset-md-4"> 
                            <h6 style="color: red">New user ?? <a href="{{ route('admin.login.submit')}}">Register here..</a></h6>
                    </div>
            </div> --}}
            <div class="row">
                    <div class="col-md-4 offset-md-4"> 
                            <p><a href="{{ url('password/resetpage') }}">Forgot my password</a></p>
                    </div>
            </div>
    </div>
</body>
</html>

