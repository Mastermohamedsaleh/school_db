<?php


class Teacher extends Model{
     




    public function validate($data){
       
        $this->errors = array();

   
         //  name
        if(  empty($data['name']) || !preg_match("/^[a-z A-Z]+$/",$data['name'])){
         $this->errors['name'] = "Only Letter Can Write In Name"; 
        } 
         //  name
        if(strlen( $data['name'])  < 20){
         $this->errors['name'] = "Name Must Be Greater Than 30"; 
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

       if(empty($data['specialization_id'])){
         $this->errors[] = "specialization Require"; 
       }

  

       if(strlen($data['password']) < 8){ 
        $this->errors[] = "The Password Must Be Greater Than 8 Charcter"; 
       }
         
        
        if(count($this->errors) == 0){
          return true;
        }
    
      return false;

    }






}