<?php

namespace App\Services;

use App\Contracts\StudentContract;
use App\Repositories\StudentRepository;

 /**
  *
  *  StudentService Class have Model Part of Exercie
  *  All Business Logic we Have to Put Over her
  *
  */	

class StudentService implements StudentContract
{
    protected $studentRepoObj;
	
	/**
    *  StudentRepoObj refers to Database 
	*  We are use it to as Data
	*/
    public function __construct(StudentRepository $studentRepoObj)
    {
        $this->studentRepoObj = $studentRepoObj;
    }

    /*
     * Get Json Data from Repository
     *
     * @return response
     */
    private function loadData()
    {
        return $this->studentRepoObj->loadData();
    }
    
    /**
     *  Calculate Percentile
     */
    
    private function getPercentile($simpGPA, $gpa, $totalCount)
    {
     /* 
      * Apply Below Formula and Substitute value parameter as values
      *
      *  ((c + 0.5 * f)/n) * 100 
      *   
      */        
       
       $c = count(array_filter($simpGPA, function ($x) use ($gpa) { return $x < $gpa; }));
       $f = $simpGPA[$gpa];
       $n = $totalCount;
       
       return (( $c + (0.5 * $f) )/$n) * 100;
    } 
    
    /**
     *  Function which will Perform all Processing and Return to Controller
     */     
    public function getStudentData()
    {
      $studentArr = $this->loadData();
      $totalStudent = $this->studentRepoObj->totalStudentCount();
      
      // Calculate Similiar GPA Value
      $simpGPA = $this->calcSimGPA($studentArr);
      
      $newStudentArr = array();
      foreach($studentArr as $key=>$value) {
        // Calculate Percentile For Each Student
        $percentile = $this->getPercentile($simpGPA, $value['gpa'], $totalStudent);
        $newStudentArr[$key]['student_name'] = $value ['name']; 
        $newStudentArr[$key]['student_gpa'] = $value['gpa'];
        $newStudentArr[$key]['student_percentile_rank'] = $percentile;
      }
      // print_r($newStudentArr);exit;
      return $newStudentArr;
    }

    private function calcSimGPA($studentData)
    {
      return array_count_values(
								array_map(function($value) { 
									return $value['gpa']; 
								}, $studentData));
    }  
}
