<?php

namespace App\Http\Controllers;

use App\PreliminaryStatus;
use App\SampleLocation;
use Illuminate\Http\Request;
use DB;

class IncidentController extends Controller
{
    public function index()
    {
        $preliminary_statuses = PreliminaryStatus::pluck('preliminary_status_name','id');
        $sample_locations = SampleLocation::pluck('sample_location_name','id');
        $incidents = DB::table('patients')
            ->join('samples', 'patients.id', '=', 'samples.patient_id')
            ->join('preliminary_results', 'patients.id', '=', 'preliminary_results.patient_id')
            ->join('preliminary_statuses','preliminary_status_id', '=', 'preliminary_statuses.id')
            ->join('sample_tracks', 'patients.id', '=', 'sample_tracks.patient_id')
            ->join('sample_locations','sample_location_id', '=','sample_locations.id')
            ->select("samples.patient_id", "patients.first_name", "patients.last_name", "samples.sample_id", 'preliminary_statuses.preliminary_status_name', 'sample_locations.sample_location_name' )->get();
        return view('cases.index', compact('incidents','sample_locations','preliminary_statuses'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
