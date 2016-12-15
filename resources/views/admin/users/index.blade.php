@extends("layouts.admin")

@section('body')
    <div class="container-fluid">
        <h1 class="text-center">Users</h1>
        @include('admin.users.search')
        <table class="table" id="cards_list">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Is Admin ?</th>
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
         <a href="{{ $users->firstItem() }}">1</a> - <a href="{{ $users->previousPageUrl() }}">Previous</a> - <a href="{{ $users->nextPageUrl() }}">Next</a> - <a href="{{ url('/admin/users?page='.$users->lastPage()) }}"> {{ $users->lastPage() }}</a>
    </div>
    <!-- /.container-fluid -->
@endsection