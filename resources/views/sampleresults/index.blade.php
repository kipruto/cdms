@extends('layouts.master')
@section('title', 'Samples')
@section('header')<h1 class="m-0 text-dark">Sample Result</h1> @endsection();

@section('content')
    <div class="card">
        <div class="card-body">
            @if ($samples->isEmpty())
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
                        <th>Sample ID</th>
                        <th>Patient ID</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($samples as $key => $sample)
                        <tr>
                            <td>{{$sample->sample_id}}</td>
                            <td>{{$sample->patient_id}}</td>
                            <td><button class="btn btn-success ">Record Preliminary Results</button>
                                <button class="btn btn-warning" data-id = "{{$sample->sample_id}}" data-toggle="modal" data-target="#delete_sample">Destroy Sample</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @include('samples.modify.delete')
            @endif
        </div>
    </div>
@endsection()
