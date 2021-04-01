@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">SLIDE SETTING</div>
                <div class="card-body">
                    <form method = "POST" action = "{{route('admin.changeslide')}}" enctype="multipart/form-data">
                        @csrf
                        <div class = "row" style = "margin-top: 28px;">
                            <div class = "col-md-4">
                                <h6>First Image</h6>
                            </div>
                            <div class = "col-md-4">
                                <input type="file" id = "select-slide1" name="slide1" placeholder="Choose image">
                            </div>
                            <div class = "col-md-4 text-center">
                                <img id = "slide-preview1" src = "{{asset('assets/upload/slider-images/'.$slide[0]->imagename)}}" style = "border-radius: 6px;" width = "150px" height = "70px">
                            </div>
                        </div>
                        <hr>
                        <div class = "row" style = "margin-top: 28px;">
                            <div class = "col-md-4">
                                <h6>Second Image</h6>
                            </div>
                            <div class = "col-md-4">
                                <input type="file" id = "select-slide2" name="slide2" placeholder="Choose image">
                            </div>
                            <div class = "col-md-4 text-center">
                                <img id = "slide-preview2" src = "{{asset('assets/upload/slider-images/'.$slide[1]->imagename)}}" style = "border-radius: 6px;" width = "150px" height = "70px">
                            </div>
                        </div>
                        <hr>
                        <div class = "row" style = "margin-top: 28px;">
                            <div class = "col-md-4">
                                <h6>Third Image</h6>
                            </div>
                            <div class = "col-md-4">
                                <input type="file" id = "select-slide3" name="slide3" placeholder="Choose image">
                            </div>
                            <div class = "col-md-4 text-center">
                                <img id = "slide-preview3" src = "{{asset('assets/upload/slider-images/'.$slide[2]->imagename)}}" style = "border-radius: 6px;" width = "150px" height = "70px">
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