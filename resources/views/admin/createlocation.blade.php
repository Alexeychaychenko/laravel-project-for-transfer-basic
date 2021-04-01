@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Location</div>
                <div class="card-body" id = "location-card-body">
                    <form method = "POST" action = "{{route('admin.location.save')}}" enctype="multipart/form-data">
                        @csrf
                        <div class = "row">
                            <div class = "col-md-12 text-center">
                                <h5>Photo Preview</h5>
                            </div>
                            <div class = "col-md-12 text-center">
                                <img id = "location-preview" required src = "{{asset('assets/upload/images/location/location_default.png')}}" style = "border-radius: 11px;" width = "200px" height = "120px">
                            </div>
                        </div>
                        <hr>
                        <div class = "row">
                            <div class = "col-md-6">
                                <h6>Photo</h6>
                            </div>
                            <div class = "col-md-6">
                                <input type="file" required id = "location-select-photo" name="locationphoto" placeholder="Choose image">
                            </div>
                        </div>
                        <hr>
                        <div class = "row">
                            <div class = "col-md-6">
                                <h6>Location Name</h6>
                            </div>
                            <div class = "col-md-6">
                                <input type = "text" required name = "locationname">
                            </div>
                        </div>
                        <hr>
                        <div class = "row">
                            <div class = "col-md-6">
                                <h6>Short Name</h6>
                            </div>
                            <div class = "col-md-6">
                                <input type = "text" required name = "shortname">
                            </div>
                        </div>
                        <hr>
                        <div class = "row">
                            <div class = "col-md-6">
                                <h6>Comments</h6>
                            </div>
                            <div class = "col-md-6">
                                <textarea type = "text" required name = "comments"></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class = "row">
                            <div class = "col-md-6">
                                <h6>Price</h6>
                            </div>
                            <div class = "col-md-6">
                                <input type = "text" required name = "price">
                            </div>
                        </div>
                        <hr>
                        
                        <button type="submit" name = "submit" class="btn btn-primary">&nbsp SAVE &nbsp </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection