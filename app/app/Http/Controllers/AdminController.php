<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function Courses(){
        $courses = Course::get();
        return view('admin.index', compact('courses', $courses));

    }

    public function CourseDetails($id){
        $data['course'] = Course::where('id', decrypt($id))->first();
        return view('admin.details', $data);
    }

    public function Create(){
        return view('admin.create');
    }
}
