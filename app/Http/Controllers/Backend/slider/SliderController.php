<?php

namespace App\Http\Controllers\Backend\slider;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $sliders= Slider::all();
        return view('Backend.slider.index', compact('sliders'));
    }
    public function create(){
        return view('Backend.slider.create');
    }
    public function store(Request $request){
        dd($request->all());

    }
}
