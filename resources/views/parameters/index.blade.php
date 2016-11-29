@extends('layouts.app')

@section('title')
    {{ ucfirst(trans('parameters.parameters')) }}
@endsection

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">{{ ucfirst(trans('parameters.parameters')) }}</div>
                <div class="panel-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#change_password" aria-controls="change_password" role="tab" data-toggle="tab">{{ trans('parameters.change_password') }}</a></li>
                        <li role="presentation"><a href="#change_email" aria-controls="change_email" role="tab" data-toggle="tab">{{ trans('parameters.change_email') }}</a></li>
                        <li role="presentation"><a href="#profile_picture" aria-controls="profile_picture" role="tab" data-toggle="tab">{{ trans('parameters.profile_picture') }}</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="change_password">
                            @include('parameters.change_email')
                        </div>
                        <div role="tabpanel" class="tab-pane" id="change_email">
                            messages
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile_picture">
                            <div class="col-xs-12 col-sm-6">
                                @include('parameters.upload_pictures')
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <img src="{{ url('/print/navigo_card') }}" alt="{{ ucfirst(trans('navigo.your_card')) }}" class="img-rounded img-responsive"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
