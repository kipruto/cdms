@extends('layouts.master')
@section('title', 'Stations per Subcounty')
@section('header')<h1 class="m-0 text-dark">Stations per Subcounty</h1> @endsection();
@section('content')
    <div class="card">
        <div class="card-body">
            @if ($stations->isEmpty())
                <div class="alert alert-danger fades">
                    <h3>Sorry, no Station has been adopted in this Subcounty into the CDMS program!</h3>
                </div>
                @include('stations.modify.show.new')
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
                        <th>Station Name</th>
                        @role('admin')
                        <th>Date Adopted</th>
                        <th>Date Updated</th>
                        <th>Modify</th>
                        @endrole
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($stations as $station)
                        <tr>
                            <td>{{$station->id}}</td>
                            <td>{{$station->station_name}}</td>
                            @role('admin')
                            <td>{{$station->created_at}}</td>
                            <td>{{$station->updated_at}}</td>
                            @endrole

                            @role('admin')
                            <td>
                                <button class="btn btn-indigo"
                                        data-id = "{{$station->id}}"
                                        data-subcounty_id = "{{$station->subcounty_id}}"
                                        data-station_name="{{$station->station_name}}"
                                        data-toggle="modal" data-target="#edit_station" >Update
                                </button>
                                <button class="btn btn-warning " data-id = "{{$station->id}}" data-toggle="modal" data-target="#delete_station" >Delete</button>
                            </td>
                            @endrole
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                @role('admin')
                @include('stations.modify.show.new')
                @endrole
                @include('stations.modify.show.edit')
                @role('admin')
                @include('stations.modify.delete')
                @endrole
            @endif
        </div>
    </div>
@endsection()
