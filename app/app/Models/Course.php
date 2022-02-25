<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    protected $fillable = [

        'category_id', 'name', 'discount', 'price', 'description', 'outline', 'image', 'requirement'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function enrollment($id = null){
        return Enrollment::where('course_id', $id)->get();
    }

    public function studentsEnrol($id = null){
        return Enrollment::where('course_id', $id)->get();
    }
}
