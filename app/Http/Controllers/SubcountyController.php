<?php

namespace App\Http\Controllers;

use App\Station;
use App\Subcounty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubcountyController extends Controller
{
    public function index()
    {
        $subcounties = Subcounty::all();
        return view('subcounties.index')->with('subcounties', $subcounties);
    }
    public function create()
    {

    }
    public function store(Request $request)
    {
        Subcounty::create($request->all());
        return back()->with('message', 'Subcounty successfully created!');
    }

    public function show($id)
    {

    }
    public function edit($id)
    {

    }
    public function update(Request $request)
    {
        $subcounty = Subcounty::findOrFail($request->id);
        $subcounty->update($request->all());
        return back()->with('message', 'Subcounty details successfully updated!');
    }
    public function destroy(Request $request)
    {
        $subcounty = Subcounty::findOrFail($request->id);
        $subcounty->delete();
        return back()->with('message', 'Subcounty details successfully deleted!');
    }
}
