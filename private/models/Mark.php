<?php


class Mark extends Model{
 
    public function validate($data){
       
        $this->errors = array();
        // "/^[0-9]+$/"
       if( empty( $data['mark'] ) || preg_match("/[^0-9]/",$data['mark'])){
              $this->errors['mark'] = "Please write number in mark";
       }
   

     if($data['mark'] == 0){
        return true;
      }
 

 

       if(strlen($data['mark']) > 3 ){
        $this->errors['mark'] = "Number Must Be Less Than 3 Number";
       }


       if(count($this->errors) == 0){
        return true;
       }
     return false;
    
    
    }
 

}