<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EndDay;
use App\Models\User;

class EnddayController extends Controller
{
    public function index()
    {
        $users = User::all();
        $enddays = EndDay::all();
        return view('admin.endday')->with('users', $users)->with('enddays', $enddays)->with('message', '');
    }

    public function create(Request $request)
    {
        $endday = new EndDay;
        $endday->username = $request['username'];
        $endday->amount = $request['amount'];
        $endday->comment = $request['comment'];
        $endday->save();
        $users = User::all();
        $enddays = EndDay::all();
        return view('admin.endday')->with('users', $users)->with('enddays', $enddays)->with('message', 'New Endday fun is created');
    }

    public function delete(Request $request)
    {
        EndDay::find($request['id'])->delete();
        echo "Selected Endday fun is deleted successful";
    }
}
