@extends('layouts.app')
   
@section('content')

<div class="container" style = "max-width: 1600px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h5 class="text-xs-center">All Intakes</h5>
                </div>
                <div class="card-block text-xs-center">
                    <div class="layout-px-spacing">
                        
                        <div class="row layout-top-spacing" id="cancel-row">

                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    <div class="table-responsive mb-4 mt-4">
                                        <div class = "row">
                                            <!-- <div class = "col-md-3">
                                                shipping Method
                                                <select class="browser-default custom-select" style = "width: 120px;">
                                                    <option value="1">eco</option>
                                                    <option value="2">air</option>
                                                    <option value="3">sea</option>
                                                </select>
                                            </div>
                                            <div class = "col-md-2">
                                                <input list="browsers" name="browser" id="browser-message" style = "" placeholder = "Select User Name">
                                                <datalist id="browsers" style = "">
                                                    @foreach($users as $value)
                                                        <option value="{{$value->username}}">
                                                    @endforeach
                                                </datalist>
                                            </div> -->
                                            <div class = "col-md-2">
                                                <button class="btn btn-success" style = " margin: 9px 10px;" data-toggle="modal" data-target="#newintakeModal">New Intake</button>
                                            </div>
                                        </div>
                                        <table class="multi-table table table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" width = "7%">Intake Id</th>
                                                    <th class="text-center" width = "7%">Shipping Method</th>
                                                    <th class="text-center" width = "10%">Customer Name</th>
                                                    <th class="text-center" width = "14%">Barcode</th>
                                                    <th class="text-center" width = "7%">Description</th>
                                                    <th class="text-center" width = "7%">Shipping Weight</th>
                                                    <th class="text-center" width = "7%">Pickup Location</th>
                                                    <th class="text-center" width = "7%">Price</th>
                                                    <th class="text-center" width = "7%">Week</th>
                                                    <th class="text-center" width = "7%">Box</th>
                                                    <th class="text-center" width = "7%">Status</th>
                                                    <th class="text-center" width = "7%">Last Edited</th>
                                                    <th class="text-center" width = "7%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id = "message-table">
                                                @foreach ($intakes as $intake)
                                                <tr id = {{"intake-table-".$intake->id}}>
                                                    <td class = "text-center">{{$intake->id}}</td>
                                                    <td class = "text-center">{{$intake->shippingmethod}}</td>
                                                    <td class = "text-center">{{$intake->customername}}</td>
                                                    <td class = "text-center">{{$intake->barcode}}</td>
                                                    <td class = "text-center">{{$intake->description}}</td>
                                                    <td class = "text-center">{{$intake->shippingweight}}</td>
                                                    <td class = "text-center">{{$intake->pickup}}</td>
                                                    <td class = "text-center">{{$intake->price}}</td>
                                                    <td class = "text-center">{{$intake->week}}</td>
                                                    <td class = "text-center">{{$intake->Box}}</td>
                                                    <td class = "text-center">{{$intake->status}}</td>
                                                    <td class = "text-center">{{$intake->updated_at}}</td>
                                                    
                                                    <td class = "text-center">
                                                        <i class="fas fa-edit" style = "color:green;font-size:19px;margin-right:10px" onclick = "editintake({{$intake}})"></i>
                                                        <i class="fa fa-times" style = "color:red;font-size:19px;margin-right:10px" onclick = "deleteintake({{$intake}})"></i>

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



<div class="modal" id="newintakeModal">
    <div class="modal-dialog">
    <form method = "POST" action = "{{route('admin.intake.create')}}" onsubmit="printbarcode();return true">
    @csrf
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"> Create New Intake </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" id = "intake-create-madal-body">
            
                
                <div class = "row">
                    <div class = "col-md-1"></div>
                    <div class = "col-md-5">
                        shipping Method                    
                    </div>
                    <div class = "col-md-5">
                        <select required name = "shippingmethod" class="browser-default custom-select" id = "set-shipping-method" style = "width: 120px;">
                            <option selected value="0">eco</option>
                            <option value="1">air</option>
                            <option value="2">sea</option>
                        </select>
                    </div>
                    <div class = "col-md-1"></div>
                </div>
                <div class = "row">
                    <div class = "col-md-1"></div>
                    <div class = "col-md-5">
                        Customer Name
                    </div>
                    <div class = "col-md-5">
                        <input required list="browsers" name="customername" id="customername-intake" style = "" placeholder = "Select Customer Name">
                        <datalist id="browsers" style = "">
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
                        Bar Code
                    </div>
                    <div class = "col-md-5">
                        <input required name = "barcode" type = "text">
                    </div>
                    <div class = "col-md-1"></div>
                </div>
                <div class = "row">
                    <div class = "col-md-1"></div>
                    <div class = "col-md-5">
                        Discription
                    </div>
                    <div class = "col-md-5">
                        <input required name = "discription" type = "text">
                    </div>
                    <div class = "col-md-1"></div>
                </div>
                <div class = "row">
                    <div class = "col-md-1"></div>
                    <div class = "col-md-5">
                        Shipping Weight
                    </div>
                    <div class = "col-md-5">
                        <input required type = "number" name = "shippingweight" step = "0.001" id = "shipping-weight" value = 0.4>
                    </div>
                    <div class = "col-md-1"></div>
                </div>
                <div class = "row">
                    <div class = "col-md-1"></div>
                    <div class = "col-md-5">
                        Location 
                    </div>
                    <div class = "col-md-5">
                        <input required name = "location" id = "intake-location" type = "text">
                    </div>
                    <div class = "col-md-1"></div>
                </div>
                <div class = "row">
                    <div class = "col-md-1"></div>
                    <div class = "col-md-5">
                        Price
                    </div>
                    <div class = "col-md-5">
                        <input name = "price" required type = "number" value = "{{$setting['ecoprice'] * 0.4}}" step = "0.001" id = "shipping-price">
                    </div>
                    <div class = "col-md-1"></div>
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



<div class="modal" id="editintakeModal">
    <div class="modal-dialog">
    <form method = "POST" action = "{{route('admin.intake.edit')}}">
    @csrf
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"> Edit New Intake </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" id = "intake-create-madal-body">
                <div class = "row">
                    <div class = "col-md-1"></div>
                    <div class = "col-md-5">
                        shipping Method                    
                    </div>
                    <div class = "col-md-5">
                        <select required name = "shippingmethod" class="browser-default custom-select" id = "edit-shipping-method" style = "width: 120px;">
                            <option selected value="0">eco</option>
                            <option value="1">air</option>
                            <option value="2">sea</option>
                        </select>
                    </div>
                    <div class = "col-md-1"></div>
                </div>
                <div class = "row">
                    <div class = "col-md-1"></div>
                    <div class = "col-md-5">
                        Customer Name
                    </div>
                    <div class = "col-md-5">
                        <input required list="browsers" name="customername" id="customername-intake-edit" style = "" placeholder = "Select Customer Name">
                        <datalist id="browsers" style = "">
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
                        Bar Code
                    </div>
                    <div class = "col-md-5">
                        <input required name = "barcode" id = "edit-intake-barcode" type = "text">
                    </div>
                    <div class = "col-md-1"></div>
                </div>
                <div class = "row">
                    <div class = "col-md-1"></div>
                    <div class = "col-md-5">
                        Discription
                    </div>
                    <div class = "col-md-5">
                        <input required name = "discription" id = "edit-intake-discription" type = "text">
                    </div>
                    <div class = "col-md-1"></div>
                </div>
                <div class = "row">
                    <div class = "col-md-1"></div>
                    <div class = "col-md-5">
                        Shipping Weight
                    </div>
                    <div class = "col-md-5">
                        <input required type = "number" name = "shippingweight" id = "edit-intake-shippingweight" step = "0.001" id = "shipping-weight" value = 0.4>
                    </div>
                    <div class = "col-md-1"></div>
                </div>
                <div class = "row">
                    <div class = "col-md-1"></div>
                    <div class = "col-md-5">
                        Location 
                    </div>
                    <div class = "col-md-5">
                        <input required name = "location" id = "edit-intake-location" type = "text">
                    </div>
                    <div class = "col-md-1"></div>
                </div>
                <div class = "row">
                    <div class = "col-md-1"></div>
                    <div class = "col-md-5">
                        Price
                    </div>
                    <div class = "col-md-5">
                        <input name = "price" required type = "number" value = "{{$setting['ecoprice'] * 0.4}}" step = "0.001" id = "edit-shipping-price">
                    </div>
                    <div class = "col-md-1"></div>
                </div>
                <input name = "intakeid" id = "edit-intake-id" style = "visibility: hidden">
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


<div class="modal" id="delete-intake">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
        <h4>Delete</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-left" id = "deleteStartday-body">
            Selected Intake is deleted successfuly
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


@endsection