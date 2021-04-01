<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StartDay;

class StartdayController extends Controller
{
    public function index()
    {
        $users = User::all();
        $startdays = StartDay::all();
        return view('admin.startday')->with('users', $users)->with('startdays', $startdays)->with('message', '');
    }

    public function create(Request $request)
    {
        $startday = new StartDay;
        $startday->username = $request['username'];
        $startday->amount = $request['amount'];
        $startday->comment = $request['comment'];
        $startday->save();
        $users = User::all();
        $startdays = StartDay::all();
        return view('admin.startday')->with('users', $users)->with('startdays', $startdays)->with('message', 'New Startday fun is created');
    }

    public function delete(Request $request)
    {
        StartDay::find($request['id'])->delete();
        echo "Selected Startday fun is deleted successful";
    }
}
