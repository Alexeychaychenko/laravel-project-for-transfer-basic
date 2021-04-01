@extends('layouts.app')
   
@section('content')

<div class="container" style = "max-width: 1600px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h5 class="text-xs-center">Manage Supplier Table</h5>
                </div>
                <div class="card-block text-xs-center">
                    <div class="layout-px-spacing">
                        
                        <div class="row layout-top-spacing" id="cancel-row">

                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    <div class="table-responsive mb-4 mt-4">
                                        <div>
                                            <input type = "text" id = "new-cupplier-name">
                                            <button class="btn btn-success" style = "margin: 5px 15px;" onclick = "createSupplier()">New Supplier</button>
                                        </div>
                                        <table class="multi-table table table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" width = "5%">Supplier ID</th>
                                                    <th class="text-center" width = "7%">Supplier Name</th>
                                                    <th class="text-center" width = "10%">Created Time</th>
                                                    <th class="text-center" width = "10%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id = "supplier-table">
                                                @foreach ($suppliers as $supplier)
                                                <tr id = {{"supplier_".$supplier->id."_table"}}>
                                                    <td class = "text-center">{{$supplier->id}}</td>
                                                    <td class = "text-center" id = {{"supplier_name_".$supplier->id}} contenteditable="false">{{$supplier->name}}</td>
                                                    <td class = "text-center">{{$supplier->created_at}}</td>
                                                    <td class = "text-center" id = {{"supplier_action_".$supplier->id}}>
                                                        <i class="fas fa-edit" id = {{"supplier_edit_".$supplier->id}} style = "color:green;font-size:19px;margin-right:10px" onclick = "editSupplier({{$supplier->id}})"></i>
                                                        <i class="fas fa-save" id = {{"supplier_save_".$supplier->id}} style = "color:green;font-size:19px;margin-right:10px;display: none" onclick = "saveSupplier({{$supplier->id}})"></i>
                                                        <i class="fas fa-cancel" id = {{"supplier_cancel_".$supplier->id}} style = "color:red;font-size:19px;margin-right:10px;display: none" onclick = "cancelSupplier({{$supplier->id}})"></i>
                                                        <i class="fa fa-times" id = {{"supplier_delete_".$supplier->id}} onclick = "deleteSupplier({{$supplier->id}})" style = "color:red;font-size:19px;margin-right:10px"></i>
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