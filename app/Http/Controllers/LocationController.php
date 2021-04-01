<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return view('admin.location')->with('locations', $locations);
    }

    // create new location
    public function create(){
        return view('admin.createlocation');
    }

    // save new location
    public function saveNewLocation(Request $request)
    {
        $location  = new Location;
        $location->locationname = $request['locationname'];
        $location->shortname = $request['shortname'];
        $location->comments = $request['comments'];
        $location->price = $request['price'];
        $fileName = time().rand(10000000, 99999999).'.'.$request['locationphoto']->getClientOriginalExtension();
        $request['locationphoto']->move(public_path('assets/upload/images/location'), $fileName);
        $location->photo = $fileName;
        $location->save();
        return redirect()->route('admin.location');
    }
    //edit location
    public function edit($id)
    {
        $location = Location::find($id);
        return view('admin.editlocation')->with('location', $location);
    }

    // save current location
    public function saveCurrentLocation(Request $request, $id){
        // dd($request);
        $location = Location::find($id);
        $location->locationname = $request['locationname'];
        $location->shortname = $request['shortname'];
        $location->comments = $request['comments'];
        $location->price = $request['price'];
        if ($request['locationphoto'] != null){
            $fileName = time().rand(10000000, 99999999).'.'.$request['locationphoto']->getClientOriginalExtension();
            $request['locationphoto']->move(public_path('assets/upload/images/location'), $fileName);
            $location->photo = $fileName;
        }
        $location->save();
        return redirect()->route('admin.location');
    }

    // delete current location
    public function deleteCurrentLocation(Request $request)
    {
        Location::find($request['id'])->delete();
        echo "success";
    }
}
