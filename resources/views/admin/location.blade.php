@extends('layouts.app')
   
@section('content')

<div class="container" style = "max-width: 1600px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h5 class="text-xs-center">Manage Locations Table</h5>
                </div>
                <div class="card-block text-xs-center">
                    <div class="layout-px-spacing">
                        
                        <div class="row layout-top-spacing" id="cancel-row">

                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    <div class="table-responsive mb-4 mt-4">
                                        <div>
                                            <a href = "{{route('admin.location.create')}}"><button class="btn btn-success" style = "margin: 5px 15px;">New Location</button></a>
                                        </div>
                                        <table class="multi-table table table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" width = "5%">Location ID</th>
                                                    <th class="text-center" width = "7%">Location Photo</th>
                                                    <th class="text-center" width = "8%">Location Name</th>
                                                    <th class="text-center" width = "8%">Short Name</th>
                                                    <th class="text-center" width = "10%">Comments</th>
                                                    <th class="text-center" width = "10%">Price</th>
                                                    <th class="text-center" width = "10%">Action Time</th>
                                                    <th class="text-center" width = "10%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($locations as $location)
                                                <tr id = {{"location_".$location->id."_table"}}>
                                                    <td>{{$location->id}}</td>
                                                    <td><img id = "idcard-image-style" src = "{{asset('assets/upload/images/location/'.$location->photo)}}" width = "90px" height = "65px"></td>
                                                    <td>{{$location->locationname}}</td>
                                                    <td>{{$location->shortname}}</td>
                                                    <td>{{$location->comments}}</td>
                                                    <td>{{$location->price}}</td>
                                                    <td>{{$location->created_at}}</td>
                                                    <td class = "text-center">
                                                        <a href = "{{url('admin/location/'.$location->id.'/edit')}}"><i class="fas fa-edit" style = "color:green;font-size:19px;margin-right:10px"></i></a>
                                                        <i class="fa fa-times" onclick = "deleteLocation({{$location->id}})" style = "color:red;font-size:19px;margin-right:10px"></i>
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

@endsection