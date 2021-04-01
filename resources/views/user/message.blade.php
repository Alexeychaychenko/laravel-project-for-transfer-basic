@extends('layouts.app')
   
@section('content')

<div class="container" style = "max-width: 1600px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h5 class="text-xs-center">View Message</h5>
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
                                                    <th class="text-center" width = "10%">Message Id</th>
                                                    <th class="text-center" width = "10%">To User</th>
                                                    <th class="text-center" width = "60%">Content</th>
                                                    <th class="text-center" width = "10%">Send Time</th>
                                                </tr>
                                            </thead>
                                            <tbody id = "message-table">
                                                @foreach ($messages as $message)
                                                <tr id = {{"massage-cell-".$message->id}}>
                                                    <td class = "text-center">{{$message->id}}</td>
                                                    <td class = "text-center">@if($message->touser == 1){{"all"}}@else{{$message->username}}@endif</td>
                                                    <td class = "text-center">{{$message->content}}</td>
                                                    <td class = "text-center">{{$message->created_at}}</td>
                                                    
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