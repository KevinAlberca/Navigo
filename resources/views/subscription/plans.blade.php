@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ url('/subscription/getCheckout') }}">
        {{ csrf_field() }}
        <input type="hidden" name="type" id="type" value="small" required />
        <input type="hidden" name="pay" id="pay" value="30" required />
	    <div class="db-pricing-eleven db-bk-color-one">
	        <div class="price">
	            <sup>$</sup>30
                <small>per quarter</small>
            </div>
            <div class="type">
                SMALL PLAN
            </div>
            <ul>
                <li><i class="glyphicon glyphicon-print"></i>30+ Accounts </li>
                <li><i class="glyphicon glyphicon-time"></i>150+ Projects </li>
                <li><i class="glyphicon glyphicon-trash"></i>Lead Required</li>
            </ul>
            <div class="pricing-footer">
                <button class="btn db-button-color-square btn-lg">BOOK ORDER</button>
            </div>
        </div>
    </form>
@endsection
