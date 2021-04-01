@extends('layouts.master')
@section('content')

<nav class="navbar navbar-default navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('assets/images/logo_klein.png')}}" style="margin-top:-4px" width="28px"/>
            </a>
        </div>


        <div class="navbar navbar-expand-sm"> 
            
            <ul class="navbar-nav ml-auto"> 
                <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline"><i class="fa fa-sign-in"></i> Login</a></li>
                <li><a href="{{ route('register') }}" class="text-sm text-gray-700 underline"><i class="fa fa-registered"></i> Sign up</a></li>
            </ul> 
        </div> 
    </div>
</nav>

<div class="content">

    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class = "slide" src="{{asset('assets/upload/slider-images/'.$slide[0]->imagename)}}" alt="First Slide" height = "600px">
            </div>
            <div class="carousel-item">
                <img class = "slide" src="{{asset('assets/upload/slider-images/'.$slide[1]->imagename)}}" alt="Second Slide" height = "600px">
            </div>
            <div class="carousel-item">
                <img class = "slide" src="{{asset('assets/upload/slider-images/'.$slide[2]->imagename)}}" alt="Third Slide" height = "600px">
                
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>

@endsection