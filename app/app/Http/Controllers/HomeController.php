<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function CourseDetails($id){
        $data['course'] = Course::where('id', decrypt($id))->first();
        $data['relate'] = Course::inRandomOrder()->take(4)->get();
        $data['categories'] = Category::get();
        return view('details', $data);
    }
}
