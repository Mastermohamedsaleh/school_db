<?php 



class Grade  extends Model{
     
    protected $allowedColumns = [
        'grade',
        'dt',
    ];


    public function validate($data){
        $this->errors = array();
    // Grade
        if(empty($data['grade'])    ||  !preg_match("/^[a-z A-Z0-9]+$/",$data['grade'])){
            $this->errors[] = "Only Letter and Number Can Write Here"; 
        }


        if(isset($data['id'])){
            return true;
          }else{
           if($this->where('grade', $data['grade'])){
             $this->errors['grade'] = "Grade Unique"; 
            }
          }

        
        if(count($this->errors) == 0){
            return true;
        }
         return false;

    }
     

}