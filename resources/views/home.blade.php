@extends('layouts.app')

@section('title')
    Homepage
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
        <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    home
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    profile
                </div>
                <div role="tabpanel" class="tab-pane" id="messages">
                    messages
                </div>
            </div>
        </div>
    </div>
@endsection
