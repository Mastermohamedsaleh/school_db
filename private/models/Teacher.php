<?php


class Teacher extends Model{
     




    public function validate($data){
       
        $this->errors = array();

   
         //  Lastname
        if(  empty($data['name']) || !preg_match("/^[a-z A-Z]+$/",$data['name'])){
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

    //    specialization_id

       if(empty($data[' specialization_id'])){
         $this->errors[] = " specialization Require"; 
       }

  

         
        
        if(count($this->errors) == 0){
          return true;
        }
    
      return false;

    }






}