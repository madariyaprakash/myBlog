@extends('main')

@section('title', '| Contact')

@section('content')
            <div class="row content-top-spacing">
                <div class="col-md-12">
                    <h1>Contact Me </h1>
                    <hr>
                    <form action="{{ url('contact') }}" method="POST" accept-charset="utf-8">  <!-- create register form -->
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label name="email">Email:</label>
                            <input id="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label name="subject">Subject:</label>
                            <input id="subject" name="subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label name="message">Message:</label>
                            <textarea id="message" name="message" placeholder="Enter your text here.." class="form-control"></textarea> 
                        </div>

                        <input type="submit" value="Send message" class="btn btn-outline-success">
                    </form>                                                                <!--End register form -->
                </div>
            </div>
@endsection