<?php



class Setting extends Model {

  
    public function validate($data){
        $this->errors = array();
   
        if(empty($data['facebook'])    ||   !filter_var($data['facebook'], FILTER_VALIDATE_URL)){
            $this->errors[] = "Please Enter Link facebook"; 
        }
        if(empty($data['instagram'])    ||   !filter_var($data['instagram'], FILTER_VALIDATE_URL)){
            $this->errors[] = "Please Enter Link instagram"; 
        }
        if(empty($data['twitter'])    ||   !filter_var($data['twitter'], FILTER_VALIDATE_URL)){
            $this->errors[] = "Please Enter Link twitter"; 
        }


     if(  strlen( $data['phone'] )  <  11 ){
        $this->errors[] = "Please Enter  Only 11 Number "; 
     } 


     if(!is_numeric($data['phone'])){
        $this->errors[] = "Please Enter your phone";
     }

        
        if(count($this->errors) == 0){
            return true;
        }
         return false;

    }
 
     
}