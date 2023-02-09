<?php

class Test extends Model{


    public function validate($data){

        $this->errors = array();

        if(empty($data['test'])     ||  !preg_match("/^[a-z A-Z0-9]+$/",$data['test']) ){
            $this->errors['classroom_id'] = "Only Latters And Numbers Can Write In Test"; 
        }

        if(!preg_match("/^[a-z A-Z0-9]+$/",$data['description']) ){
            $this->errors['classroom_id'] = "Only Latters And Numbers Can Write In Description"; 
        }



        
        // Date
        if(  empty($data['dt'])   ||   !date('Y/m/d', strtotime($data['dt'])) ){
            $this->errors['dt'] = "Date Require"; 
        }

    // Classroom
        if(empty($data['classroom_id'])     ||  !preg_match("/^[a-z A-Z0-9]+$/",$data['classroom_id']) ){
            $this->errors['classroom_id'] = "Classroom Require"; 
        }

    //  Grade
        if(empty($data['grade_id'])){
            $this->errors['grade_id'] = "Grade Require"; 
        }
        
        if(count($this->errors) == 0){
            return true;
        }
         return false;

    }







}