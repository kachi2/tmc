<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\User;

class AdminController extends Controller
{
    //
    
    private $user;
    
    public function check(){
         if(auth()->user()->is_admin != 1){
            return redirect()->route('users.index');
        }
    }

    public function Courses(){
         if(auth()->user()->is_admin != 1){
            return redirect()->route('users.index');
        }
        $courses = Course::latest()->get();
        return view('admin.index', compact('courses', $courses));

    }

    public function CourseDetails($id){
          $this->check();
        $data['course'] = Course::where('id', decrypt($id))->first();
        return view('admin.details', $data);
    }

    public function Create(){
          $this->check();
        $category = Category::get();
        return view('admin.create', compact('category', $category));
    }

    public function Store(Request $request){
          $this->check();
        //dd($request->all());
        $course = new Course;
        $course->name = $request->name;
        $course->category_id = $request->category;
        $course->outline = $request->outline;
        $course->description = $request->description;
        $course->duration = $request->duration;
        $course->price = $request->price;
        $course->discount = $request->discount;
        if($request->has('image')){
        $file = request()->file('image');
        $name = $file->getClientOriginalName();
        $FileName = \pathinfo($name, PATHINFO_FILENAME);
        $ext = $file->getClientOriginalExtension();
        $time = time().$FileName;
        $fileName = $time.'.'.$ext;
        $fileNam = "cover".$time.'.'.$ext;
        Image::make(request()->file('image'))->resize(350, 170)->save('frontend/images/blog/'.$fileName);
        Image::make(request()->file('image'))->resize(400, 200)->save('frontend/images/blog/'.$fileNam);
        $course->image = $fileName;
        $course->cover_image = $fileNam;
        }

        if($course->save()){
          Session::flash('alert', 'success');
          Session::flash('msg', 'Course Created Successfully');
          return back();
        }

    }

    public function Edit($id){
          $this->check();
        $course = Course::where('id', decrypt($id))->first();
        $category = Category::get();
        return view('admin.edit', compact('course', $course, 'category', $category));
    }
    public function Update(Request $request, $id){
  $this->check();
       // dd($request->all());
        $course = Course::where('id', decrypt($id))->first();
        $course->name = $request->name;
        $course->category_id = $request->category;
        $course->outline = $request->outline;
        $course->description = $request->description;
        $course->duration = $request->duration;
        $course->price = $request->price;
        $course->discount = $request->discount;
        if($request->has('image')){
        $file = request()->file('image');
        $name = $file->getClientOriginalName();
        $FileName = \pathinfo($name, PATHINFO_FILENAME);
        $ext = $file->getClientOriginalExtension();
        $time = time().$FileName;
        $fileName = $time.'.'.$ext;
        $fileNam = "cover".$time.'.'.$ext;
        Image::make(request()->file('image'))->resize(350, 200)->save('frontend/images/blog/'.$fileName);
        Image::make(request()->file('image'))->resize(400, 200)->save('frontend/images/blog/'.$fileNam);
        $course->image = $fileName;
        $course->cover_image = $fileNam;
        }
        if($course->save()){
          Session::flash('alert', 'success');
          Session::flash('msg', 'Course Updated Successfully');
          return back();
        }
        Session::flash('alert', 'failed');
        Session::flash('msg', 'Something went wrong, try again');
        return back();
    }

    public function Category($id = null){
          $this->check();
        if(isset($id)){
            $courses = Course::where('category_id', decrypt($id))->get();
        }else{
            $courses = Course::get();
        }
        $category = Category::get();
        return view('admin.category', compact('courses', $courses, 'category', $category));
    }

    public function Enrollment(){
          $this->check();
        $enrollment =  Enrollment::latest()->get();
        return view('admin.enrollment', compact('enrollment',$enrollment));   
    }

    public function Profile(){
          $this->check();
        $profile = User::where('id', 1)->first();
        return view('admin.account', compact('profile', $profile));
    }
}
