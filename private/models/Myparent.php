<?php

class Myparent extends Model{
 
    
    public function validate($data){
       
        $this->errors = array();

       //  Name
        if(empty($data['name_parent'])    ||  !preg_match("/^[a-z A-Z]+$/",$data['name_parent'])){
         $this->errors[] = "Only Letter Can Write In Name"; 
        }
         
      //  Phone    
      if(empty($data['phone'])    ||  !preg_match("/^[0-9]+$/",$data['phone'])){
        $this->errors[] = "Only Number Can Write In Phone"; 
       }
     //SSn
     if(empty($data['ssn'])   ||  !preg_match("/^[0-9]+$/",$data['ssn']) ){
        $this->errors[] = "Only Number Can Write In SSn"; 
       }
     
     if( strlen( $data['ssn'] ) < 13){
        $this->errors[] = "Snn Must Grater Than 13 Number"; 
       }
    // Student_id
       
    if( empty($data['student_id'])    ){
        $this->errors[] = "Student Require"; 
       } 
     
    


 

        if(count($this->errors) == 0){
          return true;
        }
    
      return false;

    }




}