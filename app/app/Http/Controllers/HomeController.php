<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
 
    
    public function Index(){
        $course = Course::get();
        return view('home', compact('course', $course));
    }
    //
}
