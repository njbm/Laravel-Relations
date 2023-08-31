<?php

namespace App\Http\Controllers\Backend\University\teacher;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teachers= Teacher::get();
        return view('Backend.University.teacher.index',compact('teachers'));
    }
    public function create(){
        return view('Backend.University.teacher.create');
    }
    public function store(Request $request){
        // return $request;
        $teacher= new Teacher();
        $teacher->name =$request->input('name');
        $teacher->department =$request->input('department');

        $image= $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('Backend/university/images');
        $image->move($location, $filename);
        $teacher->image= $filename;

        // if($request->file('image') != ''){}

        $teacher->save();

        return redirect('teacher');
    }
}
