@extends('layouts.admtema')
@section('content')
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="users-table" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>About</th>
                    <th>Admin</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>About</th>
                    <th>Admin</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td> {{$user->id}} </td>
                        <td> {{$user->name}} </td>
                        <td> {{$user->email}} </td>
                        <td> {{$user->about}} </td>
                        <td> {{$user->admin}} </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
@endsection
