<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

class IndexController extends Controller
{
    public function index()
    {
        $slide = Slide::all();
        return view('welcome')->with('slide', $slide);
    }
}
