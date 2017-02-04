<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\StudentContract;

class StudentController extends Controller
{
	protected $studentObj;
	
    public function __construct(StudentContract $studentObj){	
	  $this->studentObj = $studentObj;		
    }
	
    public function index() { 
     $studentArr = array();
     
     // First We load the Data
	   $studentArr = $this->studentObj->getStudentData();
     
     
     // $studentArr = array(array('id'=>'1','student_name'=>'Kamal','student_gpa'=>'1.50', 'student_percentile_rank'=>'2')); 
     return view('student.student', ['students' => $studentArr]);
    }
}
