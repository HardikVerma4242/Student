<?php

namespace App\Http\Controllers;

use App\Models\StudentData as ModelsStudentData;
use Illuminate\Http\Request;

class StudentData extends Controller
{
    
    public static function saveStudentData(Request $request){
        if(ModelsStudentData::saveStudentData(array('student_id'=> $request['student_id'],'student_name'=> $request['student_name'],'student_address'=> $request['student_address']))){
            return "SuccessFully Create";
        }
    }

    public static function login(Request $request){
     if($request['email']=='hvhardik0@gmail.com' && $request['password']='Hardik@321'){
         return view('dashboard');
     }
    }
}
