@extends('layouts.admin')

@section('body')
    <table class="table table-bordered table-hover table-striped">
        <thead>
        <tr>
            <th>Order #</th>
            <th>Users Id</th>
            <th>Cards ID</th>
            <th>Payment Mode</th>
            <th>Order Date</th>
            <th>Paiment ID</th>
            <th colspan="2">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bills as $bill)
            <tr>
                <td>{{ $bill->id }}</td>
                <td>{{ $bill->users_id }}</td>
                <td>{{ $bill->cards_id }}</td>
                <td>{{ $bill->payment_mode }}</td>
                <td>{{ $bill->made_at }}</td>
                <td>{{ $bill->payment_id }}</td>
                <td><a href="{{ url('/admin/bill/'.$bill->id) }}">View</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection