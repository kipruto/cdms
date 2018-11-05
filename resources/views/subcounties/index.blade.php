@extends('layouts.master')
@section('title', 'Sub Counties')
@section('header')<h1 class="m-0 text-dark">Station Management</h1> @endsection();

@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{action('StationController@index')}}" class="btn btn-info ml-auto" role="button">View All Stations</a>
            @if ($subcounties->isEmpty())
                <div class="alert alert-danger fades">
                    <h3>Sorry, no Subcounty has been adopted into the CDMS program!</h3>
                </div>
                @include('subcounties.modify.new')
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
                        <th>Subcounty Name</th>
                        <th>Number of Facilities</th>
                        <th>Modify</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subcounties as $subcounty)
                        <tr>
                            <td>{{$subcounty->id}}</td>
                            <td>{{$subcounty->subcounty_name}}</td>
                            <td>{{$subcounty->number_of_stations}}</td>
                            <td>
                                <a href="{{action('StationController@show', $subcounty->id)}}" class="btn btn-info" role="button">View Stations</a>
                                @role('admin')
                                <button class="btn btn-indigo "
                                        data-id = "{{$subcounty->id}}"
                                        data-subcounty_name="{{$subcounty->subcounty_name}}"
                                        data-number_of_stations = "{{$subcounty->number_of_stations}}"
                                        data-toggle="modal" data-target="#edit_subcounty" >Update</button>
                                <button class="btn btn-warning " data-id = "{{$subcounty->id}}" data-toggle="modal" data-target="#delete_subcounty" >Delete</button>
                                @endrole
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                @role('admin')
                @include('subcounties.modify.new')
                @include('subcounties.modify.edit')
                @include('subcounties.modify.delete')
                @endrole
            @endif
        </div>
    </div>
@endsection()
