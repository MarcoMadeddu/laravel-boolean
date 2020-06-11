<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;
    public function __construct(){
        $this->students = config('students');
    }
    //DETAIL PAGE STUDENTS

    public function index(){
        $students = $this->students;
       
        return view('students.index' , compact('students'));
    }

    //STUDENT BY ID 
    public function show($id){
        $student = $this->searcStudent($id , $this->students);

        if(! $student){
            abort('404');
        }
        return view ('students.show', compact('student'));
    }

    //utilities

    private function searcStudent($id , $array){
        foreach ($array as $student){
            if($student['id'] == $id){
                return $student;
            }
        }
        return false;
    }
}
