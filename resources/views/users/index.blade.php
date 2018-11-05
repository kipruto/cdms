@extends('layouts.master')
@section('title', 'Users')
@section('header')<h1 class="m-0 text-dark">User Management</h1> @endsection();

@section('content')
    <div class="card">
        <div class="card-body">
            @if ($users->isEmpty())
                <div class="alert alert-danger fades">
                    <h3>Sorry, no Subcounty has been adopted into the CDMS program!</h3>
                </div>
                @include('users.modify.new')
            @else

            @if (session()->has('message'))
                <div class="alert alert-success fades">
                    {{ session('message') }}
                </div>
            @endif
            <table class="table table-borderless table-striped ">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Role</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    @role('admin')
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Email Address</th>
                    <th>Modify</th>
                    @endrole
                </tr>
                </thead>
                <tbody>
                @foreach($users as $key => $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>
                            @if(!empty($user->roles))
                                @foreach($user->roles as $role)
                                    <label class="label label-success" style="float: left; margin-right: 10px; border-radius: 5px; font-size: smaller">{{ $role->display_name }}</label>
                                @endforeach
                            @endif
                        </td>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->last_name}}</td>
                        @role('admin')
                        <td>{{$user->gender}}</td>
                        <td>{{$user->dob}}</td>
                        <td>{{$user->email_address}}</td>
                        <td><button class="btn btn-indigo "
                                    data-id = "{{$user->id}}"
                                    data-first_name="{{$user->first_name}}"
                                    data-last_name="{{$user->last_name}}"
                                    data-gender="{{$user->gender}}"
                                    data-dob="{{$user->dob}}"
                                    data-email_address="{{$user->email_address}}"
                                    data-password="{{$user->password}}"
                                    data-toggle="modal" data-target="#edit_user">Update</button>
                            <button class="btn btn-warning" data-id = "{{$user->id}}" data-toggle="modal" data-target="#delete_user">Delete</button>
                        </td>
                        @endrole
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            <div class="text-xs-center">
                {{ $users->links() }}
            </div>

            @role('admin')
            @include('users.modify.new')
            @include('users.modify.edit')
            @include('users.modify.delete')
            @endrole
            @endif
        </div>
    </div>
@endsection()
