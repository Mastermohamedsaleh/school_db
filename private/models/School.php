<?php



class School extends Model{
     
  protected $allowedColumns = [
    'school',
    'school_id',
    'dt',
];

     public function validate($data){
       
         $this->errors = array();

        //  Firstname
         if(empty($data['school'])    ||  !preg_match("/^[a-zA-Z]+$/",$data['school'])){
          $this->errors[] = "Only Letter Can Write Here"; 
         }
          
         if(count($this->errors) == 0){
           return true;
         }
     
       return false;

     }

    //  $sql = "SELECT  * from student_address INNER JOIN student_marks on student_address.sid=student_marks.sid
     
}