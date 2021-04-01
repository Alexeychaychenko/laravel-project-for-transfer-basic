<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        $username = User::select('username')
        ->get();
        return view('admin.message')->with('messages', $messages)->with('username', $username);
    }

    public function save(Request $request)
    {
        $message = new Message;
        $message->content = $request['content'];
        if ($request['username']=='')
        {
            $message->touser = 1;
            $message->username = '';
        }else{
            $message->touser = 0;
            $message->username = $request['username'];
        }
        $message->save();
        return view('admin.message.ajax_message')->with('message', $message);

    }

    public function delete(Request $request)
    {
        $message = Message::find($request['id']);
        if ($message->touser == 1)
        {
            $users = User::all();
            foreach ($users as $user)
            {
                if ($user->readmessage > 0)
                {
                    $user->readmessage--;
                }
                
                $user->save();
            }
        }else{
            $user = User::where('username', $message->username)->first();
            if ($user->readmessage > 0)
            {
                $user->readmessage--;
            }
            $user->save();
        }
        echo 'success';
    }
}
