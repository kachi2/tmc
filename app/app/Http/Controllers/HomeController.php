<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
 
    
    public function Index(){
        $course = Course::get();
        //dd($course[0]->category());
        return view('home', compact('course', $course));
    }

    public function Courses(){
        $course = Course::latest()->get();
        return view('courses', compact('course', $course));
    }    //
}
