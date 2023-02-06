<?php


class Student extends Model{
    

    public function validate($data){
       
        $this->errors = array();

   
         //  Name
        if(  empty($data['name_student']) || !preg_match("/^[a-z A-Z]+$/",$data['name_student'])){
         $this->errors[] = "Only Letter Can Write In Name"; 
        } 
       //email 
        if(  empty($data['email']) || !filter_var($data['email'],FILTER_VALIDATE_EMAIL)  ){
         $this->errors[] = "Please Write Email"; 
        }

       //  Email already exist


     if( isset($data['id']) ){
       return true;
     }else{
      if($this->where('email',$data['email'])  ){
        $this->errors[] = "Email already exist"; 
       }
     }

      


       //Gender
        $gender = ['Female','Male'];
       if(empty($data['gender'])   ||   !in_array($data['gender'] , $gender)  ){
         $this->errors[] = "Gender Require"; 
       }

    //   

       if(empty($data['grade_id'])){
         $this->errors[] = "grade Require"; 
       }

       if(empty($data['classroom_id'])){
         $this->errors[] = "classroom Require"; 
       }
   




         
        
        if(count($this->errors) == 0){
          return true;
        }
    
      return false;

    }






}