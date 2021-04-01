<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __constru8t()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    //when user is admin....
    public function adminHome()
    {
        return view('adminHome');
    }
    //redirect to client home
    public function clientHome()
    {
        return view('clientHome');
    }

    public function employerHome()
    {
        return view('employerHome');
    }

    public function locationmanagerHome()
    {
        return view('locationmanagerHome');
    }
    
    public function warehouseHome()
    {
        return view('warehouseHome');
    }

    // get message for all user
    public function getMessage(Request $request)
    {
        $count_own = Message::where('username', auth()->user()->username)->count();
        $count_all = Message::where('touser', 1)->count();
        $user = User::find(auth()->user()->id);
        $count = $count_all + $count_own - $user->readmessage;
        echo $count;
    }

    
    // view all message for user
    public function viewMessage()
    {
        $messages = Message::where('username', auth()->user()->username)->orWhere('touser', 1)->get();
        $user = User::find(auth()->user()->id);
        $user->readmessage = $messages->count();
        $user->save();
        return view('user.message')->with('messages', $messages);
    }
}
