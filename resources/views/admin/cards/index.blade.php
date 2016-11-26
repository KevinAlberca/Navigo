@extends("layouts.admin")

@section('body')
    <div class="container-fluid">
        <h1 class="text-center">Cards</h1>
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
                @foreach ($cards as $card)
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
        <a href="{{ $cards->firstItem() }}">1</a> - <a href="{{ $cards->previousPageUrl() }}">Previous</a> - <a href="{{ $cards->nextPageUrl() }}">Next</a> - <a href="{{ $cards->lastPage() }}"> {{ $cards->lastPage() }}</a>
    </div>
    <!-- /.container-fluid -->

@endsection
