<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{

    public function index(Request $request)
    {
        $patients = Patient::orderBy('id','ASC')->paginate(10);
        return view('patients.index')->with('patients', $patients) ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'gender' => 'required|max:6',
            'dob' => 'required|max:10',
            'contact' => 'required|max:10|'
        ]);
        $input = $request->only('first_name','last_name','gender','dob', 'contact');
        $patient = Patient::create($input);
        $patient->save();
        return redirect()->route('patients.index')->with('success','User created successfully');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request)
    {
        $input = $request->only('first_name','last_name', 'gender','dob', 'contact');
        $patient = Patient::find($request->id);
        $patient->update($input);
        return redirect()->route('patients.index')
            ->with('success','Patient updated successfully');
    }

    public function destroy(Request $request)
    {
        Patient::find($request->id)->delete();
        return redirect()->route('patients.index')->with('success','User deleted successfully');
    }
}
