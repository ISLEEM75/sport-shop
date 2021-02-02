@extends('admin.layout.admin')

@section('content')
    <div class="container">
        <h1>Admin</h1>
        <br>

        <h4>Control Panle</h4>
        <h6>List of Users</h6>
        <div>
            <table class="table table-hover table-striped tab">
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>User</th>
                    <th>Editor</th>
                    <th>Admin</th>
                </tr>
                @foreach($users as $user)
                    <form method="post" action="/add-role">
                        @csrf
                        <input type="hidden" name="email" value="{{$user->email}}">
                <tr>
                    <th>{{$user->id}}</th>
                    <th>{{$user->name}}</th>
                    <th>{{$user->email}}</th>
                    <th>
                        <input type="checkbox" name="role_user" onchange="this.form.submit()" {{$user ->hasRole('User')?'checked':'' }} >
                    </th>
                    <th>
                        <input type="checkbox" name="role_editor" onchange="this.form.submit()"  {{$user ->hasRole('Editor')?'checked':'' }} >
                    </th>
                    <th>
                        <input type="checkbox" name="role_admin" onchange="this.form.submit()" {{$user ->hasRole('Admin')?'checked':'' }} >
                    </th>
                </tr>
                    </form>
                    @endforeach
            </table>
        </div>
        </div>



@endsection
