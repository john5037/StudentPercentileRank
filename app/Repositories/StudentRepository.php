<?php
namespace App\Repositories;

/**
 *  Student Repository Used for DataBase Operation
 *
 */ 
class StudentRepository
{
  /**
   *  This Function Used for Load Data From Json
   *  
   *  @param 
   *  @response json
   */
   
   public function loadData()
   {
      // here we load give Data and Form it in Json
      $jsonData = array(
                    array("id"=>"471908US","name"=>"Randy Perez","gpa"=>"1.60"),
                    array("id"=>"957625US","name"=>"Alice Brown","gpa"=>"3.50"),
                    array("id"=>"909401US","name"=>"Maria Russel","gpa"=>"3.90"),
                    array("id"=>"342575US","name"=>"Shirley Evans","gpa"=>"3.5"),
                    array("id"=>"780367US","name"=>"Daniel Bell","gpa"=>"2.20"),
                    array("id"=>"841786US","name"=>"Willie Richardson","gpa"=>"3.60"),
                    array("id"=>"881365US","name"=>"Ruby Lee","gpa"=>"2.70"),
                    array("id"=>"848124US","name"=>"Peter Powell","gpa"=>"2.30"),
                    array("id"=>"497579US","name"=>"Bruce Nelson","gpa"=>"3.70"),
                    array("id"=>"756454US","name"=>"Bonnie Murphy","gpa"=>"3.50"),
                    array("id"=>"551871US","name"=>"Chris Mac Cooper","gpa"=>"2.70"),
                    array("id"=>"734476US","name"=>"Christine Walker","gpa"=>"2.70"),
                    array("id"=>"138197US","name"=>"Alan Robinson","gpa"=>"1.80"),
                    array("id"=>"755435US","name"=>"Philip Allen","gpa"=>"2.90"),
                    array("id"=>"744270US","name"=>"Justin Scott","gpa"=>"3.80"),
                    array("id"=>"140419US","name"=>"James Edwards","gpa"=>"2.40"),
                    array("id"=>"263737US","name"=>"Ann Mitchell","gpa"=>"3.60"),
                    array("id"=>"522471US","name"=>"Eugene Rivera","gpa"=>"3.50"),
                    array("id"=>"022169US","name"=>"Irene Simmons", "gpa"=>"2.20"),
                    array("id"=>"690697US","name"=>"Joshua Über","gpa"=>"3.60"),
                    array("id"=>"094778US","name"=>"Jonathan Reed","gpa"=>"3.50"),
                    array("id"=>"73780US","name"=>"Johnny Ross","gpa"=>"2.20"),
                    array("id"=>"256090US","name"=>"Jessica Howard","gpa"=>"3.60"),
                    array("id"=>"775011US","name"=>"Frank Kelly","gpa"=>"2.20"),
                    array("id"=>"333218US","name"=>"Kathy Patterson","gpa"=>"3.7")
                    );              
      return $jsonData;            
   }
   /**
    *  Function Used For TotalCount Of Data
    */
   public function totalStudentCount()
   {
     return count($this->loadData());
   } 
}
