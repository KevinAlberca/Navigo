@extends('layouts.app')

@section('title')
    {{ ucwords(trans('auth.reset_password')) }}
@endsection

<!-- Main Content -->
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">{{ ucwords(trans('auth.reset_password')) }}</div>
        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">{{ ucwords(trans('auth.email_adress')) }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            {{ ucwords(trans('auth.send_reset_link'))}}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
