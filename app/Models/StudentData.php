<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class StudentData extends Model
{
    use HasFactory;
    protected $fillable=['id','student_id','student_name','student_address'];
    public $timestamps = false;

    public static function saveStudentData($array){
     StudentData::updateorCreate($array);
    }
}
