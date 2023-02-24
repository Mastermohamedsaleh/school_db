<?php 



class Classroom extends Model{
     
     
    protected $allowedColumns = [
        'classroom',
        'grade_id',
        'dt',
    ];



    
    public function validate($data){
        $this->errors = array();
    // Classroom   , "/^[a-z A-Z0-9]+$/"    "/[א-ת]/"  Can write Arabic
        if(empty($data['classroom'])     ||  !preg_match("/^[a-z A-Z0-9]+$/",$data['classroom'])   ){
            $this->errors['classroom'] = "Only Letter and Number Can Write Here"; 
        }
    //  Grade
        if(empty($data['grade_id'])){
            $this->errors['grade_id'] = "Grade Require"; 
        }

        if($data['grade_id'] == '--Select a Gender--'){
            $this->errors['grade_id'] = "Grade Require"; 
        }
        
        if(count($this->errors) == 0){
            return true;
        }
         return false;

    }
      
     
     
}