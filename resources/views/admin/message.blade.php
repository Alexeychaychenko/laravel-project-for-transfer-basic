@extends('layouts.app')
   
@section('content')

<div class="container" style = "max-width: 1600px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h5 class="text-xs-center">Send Message</h5>
                </div>
                <div class="card-block text-xs-center">
                    <div class="layout-px-spacing">
                        
                        <div class="row layout-top-spacing" id="cancel-row">

                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    <div class="table-responsive mb-4 mt-4">
                                        <div class = "row">
                                            <div class = "col-md-3">
                                                <textarea type = "text" id = "message-content" style = "height: 120px;margin: 3px 0px;width:100%"></textarea>
                                            </div>
                                            <div class = "col-md-2">
                                            <input list="browsers" name="browser" id="browser-message" style = "margin: 3px 0px;width:100%" placeholder = "Select User Name">
                                            <datalist id="browsers" style = "margin: 3px 0px;width:100%">
                                                @foreach($username as $value)
                                                    <option value="{{$value->username}}">
                                                @endforeach
                                            </datalist>
                                            </div>
                                            <div class = "col-md-2">
                                                <button class="btn btn-success" style = "margin: 3px 0px;" onclick = "sendMessage()">New Message</button>
                                            </div>
                                        </div>
                                        <table class="multi-table table table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" width = "10%">Message Id</th>
                                                    <th class="text-center" width = "10%">To User</th>
                                                    <th class="text-center" width = "60%">Content</th>
                                                    <th class="text-center" width = "10%">Created Time</th>
                                                    <th class="text-center" width = "10%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id = "message-table">
                                                @foreach ($messages as $message)
                                                <tr id = {{"massage-cell-".$message->id}}>
                                                    <td class = "text-center">{{$message->id}}</td>
                                                    <td class = "text-center">@if($message->touser == 1){{"all"}}@else{{$message->username}}@endif</td>
                                                    <td class = "text-center">{{$message->content}}</td>
                                                    <td class = "text-center">{{$message->created_at}}</td>
                                                    <td class = "text-center">
                                                        <i class="fa fa-times" style = "color:red;font-size:19px;margin-right:10px" onclick = "deleteMessage({{$message->id}})"></i>
                                                    </td>
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

@endsection