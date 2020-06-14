<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;
    private $genders;
    public function __construct(){
        $this->students = config('students.students');
        $this->genders = config('students.genders');
    }
    //DETAIL PAGE STUDENTS

    public function index(){
        $data = [
            'students' => $this->students,
            'genders' => $this->genders
        ];
       
       
        return view('students.index' , $data);
    }

    //STUDENT BY ID 
    public function show($slug){
        $student = $this->searcStudent($slug , $this->students);

        if(! $student){
            abort('404');
        }
        return view ('students.show', compact('student'));
    }

    //utilities

    private function searcStudent($slug , $array){
        foreach ($array as $student){
            if($student['slug'] == $slug){
                return $student;
            }
        }
        return false;
    }
}
