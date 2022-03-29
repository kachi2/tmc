<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id', 'name', 'email', 'address', 'state', 'candidates', 'phone'
    ];

    public function course(){
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
