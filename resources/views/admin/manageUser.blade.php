@extends('layouts.app')
   
@section('content')
<div class="container" style = "max-width: 1600px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h5 class="text-xs-center">Manage Users Table</h5>
                </div>
                <div class="card-block text-xs-center">
                    <div class="layout-px-spacing">

                        <div class="row layout-top-spacing" id="cancel-row">
                        
                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    <div class="table-responsive mb-4 mt-4">
                                        <table class="multi-table table table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" width = "5%">User ID</th>
                                                    <th class="text-center" width = "6%">ID Card</th>
                                                    <th class="text-center" width = "8%">ID Card Number</th>
                                                    <th class="text-center" width = "8%">User Name</th>
                                                    <th class="text-center" width = "8%">Full Name</th>
                                                    <th class="text-center" width = "9%">Phone Number</th>
                                                    <th class="text-center" width = "8%">Email</th>
                                                    <th class="text-center" width = "9%">Address</th>
                                                    <th class="text-center" width = "6%">Role</th>
                                                    <th class="text-center" width = "7%">Location</th>
                                                    <th class="text-center" width = "5%">Pick Up</th>
                                                    <th class="text-center" width = "9%">Created Date</th>
                                                    <th class="text-center" width = "12%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                <tr id = {{"user_".$user->id."_table"}}>
                                                    <td>{{$user->id}}</td>
                                                    <td><img id = "idcard-image-style" src = "{{asset('assets/upload/images/'.$user->idcard)}}" width = "100%" height = "45px"></td>
                                                    <td>{{$user->idcardnumber}}</td>
                                                    <td>{{$user->username}}</td>
                                                    <td>{{$user->firstname." ".$user->lastname}}</td>
                                                    <td>{{$user->phonenumber}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->address}}</td>
                                                    <td>
                                                        @if ($user->role == 1) {{"Admin"}}
                                                        @elseif ($user->role == 2) {{"Client"}}
                                                        @elseif ($user->role == 3) {{"Employer"}}
                                                        @elseif ($user->role == 4) {{"Location Manager"}}
                                                        @elseif ($user->role == 5) {{"Warehouse"}}
                                                        @endif
                                                    </td>
                                                    <td>{{$user->location}}</td>
                                                    <td>{{$user->pickup}}</td>
                                                    <td>{{$user->created_at}}</td>
                                                    <td>
                                                        @if ($user->status == 1)
                                                        <i class="fas fa-stop" style = "color:green;font-size:19px;margin-right:10px" id = {{"user_fa_".$user->id}} onclick = "changeStatus({{$user->id}})"></i>
                                                        <i class="fas fa-edit" style = "color:green;font-size:19px;margin-right:10px" id = {{"user_fa_edit_".$user->id}} onclick = "editOpenModal({{$user}})" data-toggle="modal" data-target="#userEditModal"></i>
                                                        <i class="fas fa-user-times" style = "color:red;font-size:19px;margin-right:10px" onclick = "deleteUser({{$user->id}})"></i>
                                                        @else
                                                        <i class="fas fa-play" style = "color:red;font-size:19px;margin-right:10px" id = {{"user_fa_".$user->id}} onclick = "changeStatus({{$user->id}})"></i>
                                                        <i class="fas fa-edit" style = "color:red;font-size:19px;margin-right:10px" id = {{"user_fa_edit_".$user->id}} onclick = "editOpenModal({{$user}})" data-toggle="modal" data-target="#userEditModal"></i>
                                                        <i class="fas fa-user-times" style = "color:red;font-size:19px;margin-right:10px" onclick = "deleteUser({{$user->id}})"></i>
                                                        @endif
                                                        
                                                    </td>
                                                    <!-- <td>
                                                        <div class="t-dot bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Normal"></div>
                                                    </td>
                                                    <td class="text-center"> <button class="btn btn-outline-primary">view</button> </td> -->
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="userEditModal">
    <div class="modal-dialog">
    <form method = "POST" action = "{{route('admin.manageUser.updateuser')}}" enctype="multipart/form-data">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">User Edit Modal</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" id = "user-edit-madal-body">
            
                @csrf
                <div class = "row">
                    <div class = "col-md-3"></div>
                    <div class = "col-md-6 text-center">
                        <img id = "modal-idcardimage" width = "155px" height = "110px" style = "border-radius: 7px;" src = "">
                        <h6> ID Card Image Preview</h6>
                    </div>
                    <div class = "col-md-3"></div>
                </div>
                <hr></hr>
                <div class = "row">
                    <div class = "col-md-5">
                        Upload ID Card
                    </div>
                    <div class = "col-md-5">
                        <input type="file" name="idcardimage" placeholder="Choose image" id="image-modal-open">
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-5">
                        ID Card Number
                    </div>
                    <div class = "col-md-5">
                        <input id = "modal-idcardnumber" name = "idcardnumber" type = "text">
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-5">
                        User Role
                    </div>
                    <div class = "col-md-5">
                        <input list="browsers"  id ="modal-role-edit" name = "userrole" class = "mdb" type = "text">
                        <datalist id="browsers" style =" height: 30px">
                            <option value="Admin">
                            <option value="Client">
                            <option value="Employer">
                            <option value="Location Manager">
                            <option value="Warehouse">
                        </datalist>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-5">
                        User Name
                    </div>
                    <div class = "col-md-5">
                        <input name = "username" id = "modal-username" type = "text">
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-5">
                        Email
                    </div>
                    <div class = "col-md-5">
                        <input name = "email" id = "modal-email" type = "Email" require>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-5">
                        First Name
                    </div>
                    <div class = "col-md-5">
                        <input name = "firstname" id = "modal-firstname" type = "text">
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-5">
                        Last Name
                    </div>
                    <div class = "col-md-5">
                        <input name = "lastname" id = "modal-lastname" type = "text">
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-5">
                        Phone
                    </div>
                    <div class = "col-md-5">
                        <input name = "phone" id = "modal-phone" type = "text">
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-5">
                        Address
                    </div>
                    <div class = "col-md-5">
                        <input name = "address" id = "modal-address" type = "text">
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-5">
                        Pick Up
                    </div>
                    <div class = "col-md-5">
                        
                        <input list="browsers-pick"  id ="madal-pickup" name = "pickup" class = "mdb" type = "text">
                        <datalist id="browsers-pick" style =" height: 30px">
                            <option value="KerKplein">
                            <option value="Highway">
                            <option value="Noord">
                            <option value="Nickerie">
                            <option value="Newmont">
                            <option value="Moengo">
                        </datalist>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-5">
                        Password
                    </div>
                    <div class = "col-md-5">
                        <input name  = "password" type = "text">
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-5">
                        Location
                    </div>
                    <div class = "col-md-5">
                        <input name = "location" id = "modal-location" type = "text">
                        <input name = "userid" id = "modal-userid" type = "text" style = "visibility: hidden;">
                    </div>
                </div>
            
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="submilt" value = "submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </form>
    </div>
  </div>
@endsection