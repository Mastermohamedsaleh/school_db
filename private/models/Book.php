<?php


class Book extends Model{
    
    public function validate($data){

         
        $this->errors = array();

        if(empty($data['name_book']) || !preg_match("/^[a-z A-Z0-9]+$/",$data['name_book'])){
            $this->errors[] = "Only Letter Can Write In Name Book"; 
           } 

        // if(empty($data['file']) || !preg_match("/^%PDF-/",$data['file'])){
        //     $this->errors[] = "Book Must Be Pdf"; 
        //    } 
           

        if(empty($data['grade_id']) ){
            $this->errors[] = "Grade Require"; 
           } 

        if(empty($data['classroom_id']) ){
            $this->errors[] = "Classroom Require"; 
           } 

                   
        if(count($this->errors) == 0){
            return true;
          }
      
        return false;


         

    }






}