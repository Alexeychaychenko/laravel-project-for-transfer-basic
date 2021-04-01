<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\SettingTable;
use App\Models\User;

class AdminController extends Controller
{
    public function adminSetting()
    {
        $data = SettingTable::find(1);        
        return view('admin.setting')->with('data', $data);
    }

    // defult setting value save
    public function SaveSetting(Request $request)
    {
        $data = SettingTable::find(1);
        $data-> airmailprice = $request['airmail'];
        $data-> ecoprice = $request['eco'];
        $data-> seafreightfactor = $request['seafreightfactor'];
        $data-> seafreightprice = $request['seafreightprice'];
        $data-> srdrate = $request['srdrate'];
        $data-> eurorate = $request['eurorate'];
        $data-> giftcardrate = $request['giftcard'];
        $data-> orderrate = $request['orderrate'];
        $data-> seafreightrate = $request['seafreightrate'];
        $data->save() ;
        return redirect()->route('admin.setting')->with('data', $data);
        
    }

    // user manage function
    public function adminManageUser()
    {
        $users = User::all();
        // dd($users);
        return view('admin.manageUser')->with('users', $users);
    }

    // Approve or suspend for user
    public function changeStatus(Request $request)
    {
        $user = User::find($request['id']);
        if ($user->status == 1)
        {
            $user->status = 0;
        }else
        {
            $user->status = 1;
        }
        $user->save();
        
        echo $user->status;
        
    }

    // delete user function
    public function deleteuser(Request $request)
    {
        $user = User::find($request['id'])->delete();
        echo "success";
    }

    // update user function
    public function updateUser(Request $request)
    {
        
        $user = User::find($request['userid']);
        if($request['idcardnumber'] != null){
            $user->idcardnumber = $request['idcardnumber'];
        }
        if ($request['userrole'] == "Admin")
            $user->role = '1';
        elseif ($request['userrole'] == "Client")
            $user->role = '2';
        elseif ($request['userrole'] == "Employer")
            $user->role = '3';
        elseif ($request['userrole'] == "Location Manager")
            $user->role = '4';
        elseif ($request['userrole'] == "Warehouse")
            $user->role = '5';
        if($request['username'] != null){
            $user->username = $request['username'];
        }
        if($request['email'] != null){
            $user->email = $request['email'];
        }
        if($request['firstname'] != null){
            $user->firstname = $request['firstname'];
        }
        if($request['lastname'] != null){
            $user->lastname = $request['lastname'];
        }
        if($request['phone'] != null){
            $user->phonenumber = $request['phone'];
        }
        if($request['address'] != null){
            $user->address = $request['address'];
        }
        if($request['pickup'] != null){
            $user->pickup = $request['pickup'];
        }
        if($request['password'] != null){
            $user->password = Hash::make($request['password']);
        }
        if($request['location'] != null){
            $user->location = $request['location'];
        }
        if($request['idcardimage'] != null){
            $fileName = time().rand(10000000, 99999999).'.'.$request['idcardimage']->getClientOriginalExtension();
            $request['idcardimage']->move(public_path('assets/upload/images'), $fileName);
            $user->idcard = $fileName;
        }
        $user->save();
        return back();
        
    }
}
