@extends('layouts.master')
@section('title', 'Stations')
@section('header')<h1 class="m-0 text-dark">Station Management</h1> @endsection();
@section('content')
    <div class="card">
        <div class="card-body">
            @if ($stations->isEmpty())
                <div class="alert alert-danger fades">
                    <h3>Sorry, no Station has been adopted into the CDMS program!</h3>
                </div>
                @include('stations.modify.new')
            @else
                @if (session()->has('message'))
                    <div class="alert alert-success fades">
                        {{ session('message') }}
                    </div>
                @endif
                <table class="table table-borderless table-striped ">
                    <thead>
                    <tr>
                        <th>Station Code</th>
                        <th>Subcounty Code</th>
                        <th>Station Name</th>
                        @role('admin')
                        <th>Modify</th>
                        @endrole
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($stations as $station)
                        <tr>
                            <td>{{$station->id}}</td>
                            <td>{{$station->subcounty_id}}</td>
                            <td>{{$station->station_name}}</td>
                            <td>
                                @role('admin')
                                <button class="btn btn-indigo"
                                        data-id = "{{$station->id}}"
                                        data-subcounty_id = "{{$station->subcounty_id}}"
                                        data-station_name="{{$station->station_name}}"
                                        data-toggle="modal" data-target="#edit_station" >Update
                                </button>

                                <button class="btn btn-warning " data-id = "{{$station->id}}" data-toggle="modal" data-target="#delete_station" >Delete</button>
                                @endrole
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                @role('admin')
                @include('stations.modify.new')
                @endrole
                @include('stations.modify.edit')
                @role('admin')
                @include('stations.modify.delete')
                @endrole
            @endif
        </div>
    </div>
@endsection()
