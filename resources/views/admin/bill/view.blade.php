@extends('layouts.admin')

@section('body')


<div class="col-xs-12 col-sm-6 col-sm-offset-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Bill number {{ $bill->id }}</h3>
        </div>
        <div class="panel-body">
            <div>
                <h4 class="title">Payment informations</h4>
                <ul>
                    <li>Card Number : {{ $bill->cards_id }}</li>
                    <li>Payment mode : {{ $bill->payment_mode }}</li>
                    <li>Paid at : {{ $bill->made_at }}</li>
                    <li>Payment id : {{ $bill->payment_id }}</li>
                </ul>
            </div>

            <div>
                <h4 class="title">User informations</h4>
                <ul>
                    <li>Firstname : {{ $user->firstname }}</li>
                    <li>Lastname : {{ $user->lastname }}</li>
                    <li>User e-mail : {{ $user->email }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <div class="clearfix"></div>


@endsection