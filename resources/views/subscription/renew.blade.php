@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">{{ ucfirst(trans('parameters.parameters')) }}</div>
        <div class="panel-body">
            <div class="col-xs-12">
                @foreach($plans as $plan)
                    <div class="col-xs-12 col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">{{ $plan->name }}</h3>
                            </div>
                            <div class="panel-body">
                                {{ $plan->id }}
                                {{ $plan->description }}
                                {{ $plan->target }}
                                {{ $plan->price }} for {{ $plan->duration }}
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buyModal{{ $plan->id }}">
                                  Buy
                                </button>
                            </div>
                        </div>
                    </div>
                    @include('subscription.modal_plan')
                @endforeach
            </div>
        </div>
    </div>
@endsection
