<?php

namespace App\Http\Controllers;

use App\SampleLocation;
use App\SampleTrack;
use Illuminate\Database\QueryException;
use App\Sample;
use Illuminate\Http\Request;
use App\PreliminaryStatus;
use App\PreliminaryResult;
use DB;

class SampleController extends Controller
{

    public function process(Request $request, $id)
    {

        function generateSampleId() {
            $token = "";
            $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $codeAlphabet.= "0123456789";
            $codeAlphabet.=time();
            $max = strlen($codeAlphabet); // edited

            for ($i=0; $i < 6; $i++) {
                try {
                    $token .= $codeAlphabet[random_int(0, $max - 1)];
                } catch (\Exception $e) {
                }
            }
            return $token;
        }

        $input = $request->only('sample_id', 'patient_id');
        $input['sample_id'] = generateSampleId();
        $input['patient_id'] = $id;
        try {
            $sample = Sample::create($input);
            $sample->save();
            $sample_locations = SampleLocation::pluck('sample_location_name', 'id')->toArray();
            $preliminary_statuses = PreliminaryStatus::pluck('preliminary_status_name', 'id')->toArray();
            $samples =DB::table('patients')
                ->join('samples', 'patients.id', '=', 'samples.patient_id')
                ->select("samples.sample_id", "samples.patient_id", "patients.first_name", "patients.last_name")
                ->get();
            return redirect()->route('samples.index', compact('samples', 'preliminary_statuses', 'sample_locations'))->with('message', 'You have successfully captured patient sample');
        } catch(QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
                return redirect()->route('samples.index')->with('error',"Sorry, we have already captured this patient's sample!");
            }
        }
    }

    public function index()
    {
        $sample_locations = SampleLocation::pluck('sample_location_name', 'id')->toArray();
        $preliminary_statuses = PreliminaryStatus::pluck('preliminary_status_name', 'id')->toArray();
        $samples =DB::table('patients')
            ->join('samples', 'patients.id', '=', 'samples.patient_id')
            ->select("samples.sample_id", "samples.patient_id", "patients.first_name", "patients.last_name")
            ->get();
        return view('samples.index', compact('samples', 'preliminary_statuses', 'sample_locations'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

       try {
            SampleTrack::create($request->only('patient_id', 'sample_location_id'));
            PreliminaryResult::create($request->only('patient_id', 'preliminary_status_id'));
            return redirect()->route('cases.index')->with('message', "Thanks, We have successfully captured this patient's sample");

        } catch(QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
                return redirect()->route('cases.index')->with('error',"Sorry, We have already submitted this patient's results!");
            }
        }

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

    public function destroy(Request $request)
    {
        Sample::where('sample_id', $request->sample_id)->delete();
        return back()->with('message','Sample Destroyed');
    }
}
