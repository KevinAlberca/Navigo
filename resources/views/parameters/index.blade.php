@extends('layouts.app')

@section('title')
    {{ ucfirst(trans('parameters.parameters')) }}
@endsection

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">{{ ucfirst(trans('parameters.parameters')) }}</div>
                <div class="panel-body">
                    <div class="col-xs-12 col-sm-6">
                        @include('parameters.upload_pictures')
                    </div>
                </div>
            </div>
@endsection