@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">{{ trans('bill.bill') }}</div>
        <div class="panel-body">
             <table class="table">
                 <thead>
                    <tr>
                        <th>id</th>
                        <th>payment_id</th>
                        <th>cards_id</th>
                        <th>payment_mode</th>
                        <th>made_at</th>
                    </tr>
                 </thead>
                 @foreach($bill as $b)
                     <tr>
                         <th>{{ $b->id }}</th>
                         <th>{{ $b->payment_id }}</th>
                         <th>{{ $b->cards_id }}</th>
                         <th>{{ $b->payment_mode }}</th>
                         <th>{{ $b->made_at }}</th>
                     </tr>
                 @endforeach
             </table>
        </div>
    </div>
@endsection
