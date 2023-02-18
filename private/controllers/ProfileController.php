<?php 




class ProfileController extends Controller{
     
public function adminprofile($id){
  $rows = $this->load_model('admin');     
  $rows = $rows->where('id',$id);
  
   
  return $this->view('admins/profile',['rows'=>$rows]);
 


}


    

  public function studentprofile($id){
   
      
  $rows = $this->load_model('Student');
  
  $rows = $rows->query("SELECT 
  students.id , students.name_student ,students.dt , students.email , students.gender , students.image , classrooms.classroom , grades.grade

   FROM students 
   
   INNER JOIN 
   classrooms
    ON
  students.classroom_id = classrooms.id 
  INNER JOIN 
  grades
   ON 
  students.grade_id = grades.id
  AND 
  students.id = $id
    ");    

  // $rows = $rows->where('id',$id);
 
     
    return $this->view('students/profile',['rows'=>$rows]);
  }
    
  
  public function teacherprofile($id = null){

        
      
    $rows = $this->load_model('Student');
  
    $teachers = $rows->query("SELECT 
    teachers.id , teachers.name  , teachers.email , teachers.gender , teachers.image , specializations.name_specialization
  
     FROM teachers 
     
     INNER JOIN 
     specializations
      ON
    teachers.specialization_id = specializations.id 

   WHERE teachers.id = :id
   
      " , ['id' => $id]); 
     
      
    return $this->view('teachers/profile',['teachers'=>$teachers]);
     
  }


      
}