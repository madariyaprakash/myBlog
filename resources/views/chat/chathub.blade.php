@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row" id="app">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Chats</div>

                <div class="panel-body">
                    <chat-messages :messages="messages"></chat-messages>
                </div>
                <div class="panel-footer">
                     <div class="input-group">
                        <input id="btn-input" type="text" name="message" class="form-control input-sm" placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage">
                        
                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage">
                                Send
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection