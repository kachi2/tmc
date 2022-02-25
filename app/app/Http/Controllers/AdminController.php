<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
        $category = Category::get();
        return view('admin.create', compact('category', $category));
    }

    public function Store(Request $request){
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
        Image::make(request()->file('image'))->resize(170, 170)->save('frontend/images/blog/'.$fileName);
        Image::make(request()->file('image'))->resize(400, 200)->save('frontend/images/blog/'.$fileNam);
        $course->image = $fileName;
        }

        if($course->save()){
          Session::flash('alert', 'success');
          Session::flash('msg', 'Course Created Successfully');
          return back();
        }

    }

    public function Edit($id){
        $course = Course::where('id', decrypt($id))->first();
        $category = Category::get();
        return view('admin.edit', compact('course', $course, 'category', $category));
    }
    public function Update(Request $request, $id){

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
        Image::make(request()->file('image'))->resize(170, 170)->save('frontend/images/blog/'.$fileName);
        Image::make(request()->file('image'))->resize(400, 200)->save('frontend/images/blog/'.$fileNam);
        $course->image = $fileName;
        }
        if($course->save()){
          Session::flash('alert', 'success');
          Session::flash('msg', 'Course Updated Successfully');
          return back();
        }
    }

    public function Category($id = null){
        if(isset($id)){
            $courses = Course::where('category_id', decrypt($id))->get();
        }else{
            $courses = Course::get();
        }
        $category = Category::get();
        return view('admin.category', compact('courses', $courses, 'category', $category));
    }
}
