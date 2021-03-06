<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Mail\EnrollmentMail;
use App\Models\User;
use App\Mail\EnrollmentMails;
use App\Traits\CreateUsers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Course;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function __construct(){

      //  return $this->middleware('auth');
    }
    use CreateUsers;
    public function Index(){
        $course = Course::get();
        //dd($course[0]->category());
        $category = Category::get();
        return view('home', compact('course', $course, 'category', $category));
    }

    public function Courses(){
        $courses = Course::latest()->get();
        $category = Category::get();
        return view('courses', compact('courses', $courses, 'category', $category));
    }    //

    public function Category(Request $request){
        if(isset($request->id)){
            $courses = Course::where('category_id', decrypt($request->id))->get();
        }else{
            $courses = Course::get();
        }
        $category = Category::get();
        return view('courses', compact('courses', $courses, 'category', $category));
    }
    public function Categories($id){
        if(isset($id)){
            $courses = Course::where('category_id', decrypt($id))->get();
        }else{
            $courses = Course::get();
        }
        $category = Category::get();
        return view('courses', compact('courses', $courses, 'category', $category));
    }

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

        $check = User::where('email', $request->email)->first();
        if($check){
            Session::flash('alert', 'error');
            Session::flash('msg', 'The email is already Used');
            return redirect()->back();
        }
        $course = Course::where('id', decrypt($id))->first();
       // dd($course);
            $pass = substr($request->name, 0, 5).rand(111,888);
         $datas = [
             'name' => $request->name,
             'email' => $request->email,
            'password' => Hash::make($pass),
          ];
         $uu = User::create($datas);
         if($uu){
        sleep(2);
         $user = User::latest()->first();
        $enrol = new Enrollment;
        $enrol->user_id = $user->id;
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
            'pass' => $pass,
            'candidates' => $request->trainee,
        ];
    }
        Mail::to($request->email)->send(new EnrollmentMail($data));
        Mail::to('jesmikky@gmail.com')->send(new EnrollmentMails($data));
        Session::flash('alert', 'success');
        Session::flash('msg', 'Request sent Successfully, check your email for account details');
        return back();
    }

    public function About(){
        return view('about');
    }

    public function Contact(){
        return view('contact');
    }

    public function Contacts(Request $request){
        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
        ];
        Mail::to('jesmikky@gmail.com')->send(new ContactUs($data));
        Session::flash('alert', 'success');
        Session::flash('msg', 'Request sent Successfully');
        return back();
    }

    public function Snatika(){
        return view('snatika');
    }
}
