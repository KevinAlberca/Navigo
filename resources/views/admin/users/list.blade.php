@extends("layouts.admin")

@section('body')
    <div class="container-fluid">
        <h1 class="text-center">You looked for : {{ $searched_value }}</h1>
        <table class="table table-striped table-bordered dataTable no-footer">
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
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->is_admin }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.container-fluid -->
@endsection