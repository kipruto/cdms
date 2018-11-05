@extends('layouts.master')
@section('title', 'Roles')
@section('header')<h1 class="m-0 text-dark">User Roles</h1> @endsection();

@section('content')
    <div class="card">

        <div class="card-body" >
            @if ($roles->isEmpty())
                @include('roles.modify.new')
            @else
                @if (session()->has('message'))
                    <div class="alert alert-success fades">
                        {{ session('message') }}
                    </div>
                @endif
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                <table class="table table-borderless table-striped ">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role Name</th>
                        <th>Role Description</th>
                        <th>Modify</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $key => $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->display_name}}</td>
                            <td>{{$role->description}}</td>
                            <td>

                                <a class="btn btn-success" href="{!! action('RoleController@show', $role->id) !!}">Permissions</a>

                                @role('admin')
                                <button class="btn btn-indigo"
                                        data-id = "{{$role->id}}"
                                        data-name = "{{$role->name}}"
                                        data-display_name = "{{$role->display_name}}"
                                        data-description = "{{$role->description}}"
                                        data-toggle="modal" data-target="#edit_role">Update</button>
                                <button class="btn btn-warning" data-id = "{{$role->id}}" data-toggle="modal" data-target="#delete_role">Delete</button>
                                @endrole
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                @role('admin')
                @include('roles.modify.new')
                @endrole
                @include('roles.modify.edit')
                @role('admin')
                @include('roles.modify.delete')
                @endrole
            @endif
        </div>
    </div>
@endsection()


