@extends('layouts.app')
   
@section('content')

<div class="container" style = "max-width: 1600px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h5 class="text-xs-center">End Day Funds</h5>
                </div>
                <div class="card-block text-xs-center">
                    <div class="layout-px-spacing">
                        
                        <div class="row layout-top-spacing" id="cancel-row">

                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    <div class="table-responsive mb-4 mt-4">
                                        <div>
                                            <div class = "row">
                                                <div class = "col-md-3">
                                                    <button class="btn btn-success" style = "margin: 5px 15px;" data-toggle="modal" data-target="#creatModal">New EndDay Fun</button>
                                                </div>
                                                <div class = "col-md-6 text-center">
                                                    @if($message != '')
                                                    <div class="alert alert-success alert-dismissible">
                                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                        {{$message}}
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class = "col-md-3"></div>
                                            </div>
                                        </div>
                                        <table class="multi-table table table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" width = "10%">ID</th>
                                                    <th class="text-center" width = "10%">User Name</th>
                                                    <th class="text-center" width = "10%">Amount</th>
                                                    <th class="text-center" width = "40%">Comment</th>
                                                    <th class="text-center" width = "20%">Created At</th>
                                                    <th class="text-center" width = "10%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id = "supplier-table">
                                                @foreach($enddays as $endday)
                                                <tr id = {{"table-endday-".$endday->id}}>
                                                    <td class="text-center">{{$endday->id}}</td>
                                                    <td class="text-center">{{$endday->username}}</td>
                                                    <td class="text-center">{{$endday->amount}}</td>
                                                    <td class="text-center">{{$endday->comment}}</td>
                                                    <td class="text-center">{{$endday->created_at}}</td>
                                                    <td class="text-center"><i class="fa fa-times" onclick = "deleteendday({{$endday->id}})" style = "color:red;font-size:19px;margin-right:10px"></i></td>
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



<div class="modal" id="creatModal">
    <div class="modal-dialog">
    <form method = "POST" action = "{{route('admin.endday.create')}}">
    @csrf
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"> Create New End Day funs</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" id = "startday-edit-madal-body">
            
                
                <div class = "row">
                    <div class = "col-md-1"></div>
                    <div class = "col-md-5">
                        Select User
                    </div>
                    <div class = "col-md-5">
                        <input list="browsers" name = "username" class = "modal-startday" required type = "text">
                        <datalist id="browsers" style =" height: 30px">
                            @foreach($users as $value)
                                <option value="{{$value->username}}">
                            @endforeach
                        </datalist>
                    </div>
                    <div class = "col-md-1"></div>
                </div>
                <div class = "row">
                    <div class = "col-md-1"></div>
                    <div class = "col-md-5">
                        Amount
                    </div>
                    <div class = "col-md-5">
                        <input class = "modal-startday" step="0.001" name = "amount" required type = "number">
                    </div>
                    <div class = "col-md-1"></div>
                </div>
                <div class = "row">
                    <div class = "col-md-1"></div>
                    <div class = "col-md-5">
                        Comment
                    </div>
                    <div class = "col-md-5">
                        <textarea class = "modal-startday" name = "comment" required></textarea>
                    </div>
                    <div class = "col-md-1"></div>
                </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="submilt" value = "submit" class="btn btn-success">Create</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </form>
    </div>
  </div>



<div class="modal" id="deleteEndday">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
            <h4>Delete</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-left" id = "deleteStartday-body">
            Selected Endday fun is deleted successfuly
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>



@endsection