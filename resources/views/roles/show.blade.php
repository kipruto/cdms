@extends('layouts.master')
@section('title', 'Roles')
@section('header')<h1 class="m-0 text-dark">Role Permissions</h1> @endsection();

@section('content')
    <div class="card">

        <div class="card-body" >
            <div class="form-group">
                <label for="display_name" class="col-md-2 control-label">Name</label>
                {{ $role->display_name }}
            </div>

            <div class="form-group">
                <label for="description" class="col-md-2 control-label">Description</label>
                {{ $role->description }}
            </div>

            <div class="form-group">
                <label for="name" class="col-md-4 control-label">Permissions</label>
                @if(!empty($permissions))
                    <div class="col-md-12 control-label">
                        @foreach($permissions as $permission)
                            <label class="label label-success" style="float: left; margin-right: 10px; border-radius: 5px; font-size: smaller">{{ $permission->display_name }}</label>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection()
