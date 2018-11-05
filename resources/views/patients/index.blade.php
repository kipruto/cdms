@extends('layouts.master')
@section('title', 'Patients')
@section('header')<h1 class="m-0 text-dark">Patient Management</h1> @endsection();

@section('content')
    <div class="card">
        <div class="card-body">
            @if ($patients->isEmpty())
                <div class="alert alert-danger fades">
                    <h3>Sorry, no Patient has been enrolled into the program!</h3>
                </div>
                @role('officer')
                @include('patients.modify.new')
                @endrole
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
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                        <th>Contact</th>
                        @role('officer')
                        <th>Modify</th>
                        @endrole
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($patients as $key => $patient)
                        <tr>
                            <td>{{$patient->id}}</td>
                            <td>{{$patient->first_name}}</td>
                            <td>{{$patient->last_name}}</td>
                            <td>{{$patient->gender}}</td>
                            <td>{{$patient->dob}}</td>
                            <td>{{$patient->contact}}</td>
                            @role('officer')
                            <td><a href="{!! action('SampleController@process', $patient->id )!!}" class="btn btn-success" data-id = "{{$patient->id}}">Take Patient Sample</a>
                                <button class="btn btn-primary"
                                        data-id = "{{$patient->id}}"
                                        data-first_name="{{$patient->first_name}}"
                                        data-last_name="{{$patient->last_name}}"
                                        data-gender="{{$patient->gender}}"
                                        data-dob="{{$patient->dob}}"
                                        data-contact="{{$patient->contact}}"
                                        data-toggle="modal"
                                        data-target="#edit_patient">Update Details</button>
                                <button class="btn btn-warning" data-id = "{{$patient->id}}" data-toggle="modal" data-target="#delete_patient">Delete Patient</button>
                            </td>
                            @endrole()
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <br>
                <div class="text-xs-center">
                    {{ $patients->links() }}
                </div>
                    @role('officer')
                @include('patients.modify.new')
                @include('patients.modify.edit')
                @include('patients.modify.delete')
                @endrole
            @endif
        </div>
    </div>
@endsection()
