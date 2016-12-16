@extends('layouts.app')

@section('title')
    Homepage
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
        <div class="panel-body">

            <h2 class="text-center">{{ ucwords(trans('cards.your_cards')) }}</h2>
            @if(count($card) == 0)
                {{ ucfirst(trans('cards.empty_cards')) }} <a href="{{ url('/subscription') }}">{{ trans('cards.subscribe') }}</a> ?
            @else
                @foreach($card as $c)
                    <div class="col-xs-12 col-sm-4">
                        <div class="panel {{ $c->is_active ? 'panel-primary' : 'panel-danger' }}">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">{{ $c->id }}</h3>
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li>Subscribed at : {{ $c->subscription_start }}</li>
                                    <li>End of the subscription : {{ $c->subscription_end }}</li>
                                    <li class="text-center"><a href="/renew/{{ Security::encrypt('encrypt', $c->id) }}" class="btn btn-primary">Renew</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection