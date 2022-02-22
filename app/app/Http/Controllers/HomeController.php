<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Mail\EnrollmentMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Models\Course;

class HomeController extends Controller
{
    public function Index(){
        $course = Course::get();
        //dd($course[0]->category());
        $category = Category::get();
        return view('home', compact('course', $course, 'category', $category));
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

    public function CourseCategories(Request $request){
       // dd($request->id);
        $id = decrypt($request->id);
        $course = Course::where('category_id', $id)->get();
        if($course){
            return view('courses', compact('course', $course));
        }else{
            $course = Course::get();
        return view('courses', compact('course', $course));
        }
    }

    public function TraineeEnrollment(Request $request, $id){
        $course = Course::where('id', decrypt($id))->first();

        //dd($course);
        $enrol = new Enrollment;
        $enrol->name = $request->name;
        $enrol->phone = $request->phone;
        $enrol->state = $request->state;
        $enrol->address = $request->address;
        $enrol->course_id = $course->id;
        $enrol->email = $request->email;
        $enrol->candidates = $request->trainee;
        $enrol->save();
        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'state' => $request->state,
            'address' => $request->address,
            'course' => $course->name,
            'email' => $request->email,
            'candidates' => $request->trainee,
        ];
        Mail::to($request->email)->send(new EnrollmentMail($data));
        Session::flash('alert', 'success');
        Session::flash('msg', 'Request sent Successfully');
        return back();
    }
}
