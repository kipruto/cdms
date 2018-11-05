@extends('layouts.master')
@section('title', 'Cases')
@section('header')<h1 class="m-0 text-dark">Case Management</h1> @endsection();

@section('content')
    <div class="card">
        <div class="card-body">
            @if ($incidents->isEmpty())
                <div class="alert alert-danger fades">
                    <h3>No patient sample yet!</h3>
                </div>
            @else
                @if (session()->has('message'))
                    <div class="alert alert-success fades">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger fades">
                        {{ session('error') }}
                    </div>
                @endif
                <table class="table table-borderless table-striped ">
                    <thead>
                    <tr>
                        <th>Patient ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Sample ID</th>
                        <th>Preliminary Result</th>
                        <th>Sample Location</th>
                        <th>Final Result</th>
                        @role('admin')
                        <th>Officer</th>
                        <th>Station</th>
                        <th>Action</th>
                        @endrole
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($incidents as $key => $incident)
                        <tr>
                            <td>{{$incident->patient_id}}</td>
                            <td>{{$incident->first_name}}</td>
                            <td>{{$incident->last_name}}</td>
                            <td>{{$incident->sample_id}}</td>
                            <td>
                                @if($incident->preliminary_status_name == 'Preliminary Positive')
                                    <label class="label label-danger" style="float: left; margin-right: 10px; border-radius: 5px; font-size: smaller">{{ $incident->preliminary_status_name }}</label>
                                @else
                                    <label class="label label-warning" style="float: left; margin-right: 10px; border-radius: 5px; font-size: smaller">{{ $incident->preliminary_status_name }}</label>
                                @endif
                            </td>
                            <td>
                                @if($incident->sample_location_name == 'On Site')
                                    <label class="label label-onsite" style="float: left; margin-right: 10px; border-radius: 5px; font-size: smaller">{{ $incident->sample_location_name }}</label>
                                @elseif($incident->sample_location_name == 'Dispatched')
                                    <label class="label label-dispatched" style="float: left; margin-right: 10px; border-radius: 5px; font-size: smaller">{{ $incident->sample_location_name }}</label>
                                @elseif($incident->sample_location_name == 'Received')
                                    <label class="label label-received" style="float: left; margin-right: 10px; border-radius: 5px; font-size: smaller">{{ $incident->sample_location_name }}</label>
                                @elseif($incident->sample_location_name == 'Processed')
                                    <label class="label label-processed" style="float: left; margin-right: 10px; border-radius: 5px; font-size: smaller">{{ $incident->sample_location_name }}</label>
                                @endif
                            </td>
                            <td></td>
                            @role('admin')
                            <td>{!! Auth::user()->first_name !!}</td>
                            <td></td>
                            @endrole

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection()
