<?php



class Teacherclassroom extends Model{

    protected $allowedColumns = [
        'classroom_id',
        'teacher_id',
    ];


    public function validate($data){
        $this->errors = array();
    // classroom_id
        if(empty($data['classroom_id'])){
            $this->errors[] = "Classroom Require"; 
        }
        
        if(empty($data['teacher_id'])){
            $this->errors[] = "Teacher Require"; 
        }
        
        if(count($this->errors) == 0){
            return true;
        }
         return false;

    }



     
}