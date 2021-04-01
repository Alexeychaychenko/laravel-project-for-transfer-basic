<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

class SliderController extends Controller
{
    public function index()
    {
        $slide = Slide::all();
        return view('admin.slide')->with('slide', $slide);
    }

    public function changeSlide(Request $request)
    {
        $slide1 = Slide::find(1);
        $slide2 = Slide::find(2);
        $slide3 = Slide::find(3);
        if ($request['slide1'] != null){
            $fileName = time().rand(10000000, 99999999).'.'.$request['slide1']->getClientOriginalExtension();
            $request['slide1']->move(public_path('assets/upload/slider-images'), $fileName);
            $slide1->imagename = $fileName;
        }
        if ($request['slide2'] != null){
            $fileName = time().rand(10000000, 99999999).'.'.$request['slide2']->getClientOriginalExtension();
            $request['slide2']->move(public_path('assets/upload/slider-images'), $fileName);
            $slide2->imagename = $fileName;
        }
        if ($request['slide3'] != null){
            $fileName = time().rand(10000000, 99999999).'.'.$request['slide3']->getClientOriginalExtension();
            $request['slide3']->move(public_path('assets/upload/slider-images'), $fileName);
            $slide3->imagename = $fileName;
        }
        $slide1->save();
        $slide2->save();
        $slide3->save();
        return back();
    }
}
