@extends("layouts.admin")

@section('body')
    <div class="container-fluid">
        <h1 class="text-center">You looked for : {{ $searched_value }}</h1>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Start</th>
                <th>End</th>
                <th>Is Active ?</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($result as $card)
                <tr>
                    <td>{{ $card->id }}</td>
                    <td>{{ $card->users_id }}</td>
                    <td>{{ $card->subscription_start }}</td>
                    <td>{{ $card->subscription_end }}</td>
                    <td>{{ $card->is_active }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.container-fluid -->

@endsection
