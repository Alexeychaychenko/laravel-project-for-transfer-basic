<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Intake;
use App\Models\User;
use App\Models\SettingTable;
use Carbon\Carbon;

class IntakeController extends Controller
{
    public function index()
    {
        $intakes = Intake::all();
        $users = User::all();
        $setting = SettingTable::select('ecoprice', 'airmailprice', 'seafreightprice')->first()->toArray();
        return view('admin.intake')->with('intakes', $intakes)->with('users', $users)->with('setting', $setting);

    }

    public function create(Request $request)
    {
        $now = Carbon::now();
        // dd($request);
        $intake = new Intake;
        if($request['shippingmethod']==0)
        {
            $intake->shippingmethod = 'eco';
        }
        elseif($request['shippingmethod']==1)
        {
            $intake->shippingmethod = 'air';
        }
        elseif($request['shippingmethod']==2)
        {
            $intake->shippingmethod = 'sea';
        }
        $intake->customername = $request['customername'];
        $intake->barcode = $request['barcode'];
        $intake->description = $request['discription'];
        $intake->shippingweight = $request['shippingweight'];
        $intake->location = $request['location'];
        $intake->price = $request['price'];
        $intake->pickup = User::where('username', $request['customername'])->select('pickup')->first()->pickup;
        $intake->status = 'New';
        $intake->Box = 'Unknown';
        $intake->week = $now->weekOfYear;
        $intake->save();
        return back();

    }

    public function edit(Request $request)
    {
        $now = Carbon::now();
        $intake = Intake::find($request['intakeid']);
        if($request['shippingmethod']==0)
        {
            $intake->shippingmethod = 'eco';
        }
        elseif($request['shippingmethod']==1)
        {
            $intake->shippingmethod = 'air';
        }
        elseif($request['shippingmethod']==2)
        {
            $intake->shippingmethod = 'sea';
        }
        $intake->customername = $request['customername'];
        $intake->barcode = $request['barcode'];
        $intake->description = $request['discription'];
        $intake->shippingweight = $request['shippingweight'];
        $intake->location = $request['location'];
        $intake->price = $request['price'];
        $intake->pickup = User::where('username', $request['customername'])->select('pickup')->first()->pickup;
        $intake->status = 'New';
        $intake->Box = 'Unknown';
        $intake->week = $now->weekOfYear;
        $intake->save();
        return back();
    }

    public function delete(Request $request)
    {
        Intake::find($request['id'])->delete();
        echo "success";
    }
}
