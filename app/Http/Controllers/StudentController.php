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

    /* 
        Main page students
    */
    public function index() {
        $data = [
            'students' => $this->students,
            'genders' => $this->genders,
        ];
        
        return view('students.index', $data);
    }


    /* 
        Show deteils page students
    */
    public function show($slug) {

        $student = $this->searchStudents($slug, $this->students);

        if (!$student) {
            abort(404);
        }

        return view('students.show', compact('student'));
    }

    /* 
        Utilities
    */
    //check if student exists by id
    private function searchStudents($slug, $array) {
        foreach ($array as $student){
            if ($student['slug'] == $slug) {
                return $student;
            }
        }

        return false;
    }

}
