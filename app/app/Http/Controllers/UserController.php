<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use App\Models\Course;
class UserController extends Controller
{
    //


    public function Courses(){
        $enrollment = Enrollment::where('user_id', auth()->user()->id)->get();
        return view('account.account', compact('enrollment', $enrollment));
    }

    public function Account(){

    
    }

    public function makePayment($id){
        $course = Enrollment::where('id', decrypt($id))->first();
    }
}
