@extends('layouts.app')

@section('title')
    Homepage
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
        <div class="panel-body">
            <h2 class="text-center">{{ ucwords(trans('cards.your_cards')) }}</h2>
            @if($card)
                {{ ucfirst(trans('cards.empty_cards')) }} <a href="{{ url('/subscription') }}">{{ trans('cards.subscribe') }}</a> ?
            @else
                @foreach($card as $c)
                    Subscribed at : {{ $c->subscription_start }}<br/>
                    End of the subscription : {{ $c->subscription_end }}<br/>
                    IS active ? {{ $c->is_active }}<br/>
                    <a href="/renew/{{ Security::encrypt('encrypt', $c->id) }}" class="btn btn-primary">Renew</a>
                @endforeach
            @endif
        </div>
    </div>
@endsection
