<?php

namespace App\Http\Controllers;

use App\Station;
use App\Subcounty;
use Illuminate\Http\Request;
use DB;

class StationController extends Controller
{

    public function index()
    {
        $stations = Station::all();
        $subcounties = Subcounty::pluck('subcounty_name', 'id')->all();
        return view('stations.index', compact('stations', 'subcounties'));
        //return compact('stations', 'subcounties');
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        Station::create($request->all());
        return back()->with('message', 'Station successfully created!');
    }

    public function show($id)
    {
        //$subcounty=Subcounty::where('id', $id)->pluck('subcounty_name', 'id');
        $subcounty = DB::table('subcounties')->select('*')->where('id', '=', $id)->pluck('subcounty_name', 'id');
        $stations = DB::table('stations')->select('*')->where('subcounty_id', '=', $id)->get();
        return view('stations.show')->with('stations', $stations)->with('subcounty', $subcounty);


    }

    public function edit($id)
    {

    }

    public function update(Request $request)
    {
        $station = Station::findOrFail($request->id);
        $station->update($request->all());
        return back()->with('message', 'Station details successfully updated!');
    }

    public function destroy(Request $request)
    {
        $station = Station::findOrFail($request->id);
        $station->delete();
        return back()->with('message', 'Station details successfully deleted!');
    }
}
