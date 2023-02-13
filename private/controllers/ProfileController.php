<?php 




class ProfileController extends Controller{
     
    public  function index($id = null)
    {  
    
       echo $id; 
        
       
      // $user =  $this->load_model('User');  
       
      //  $rows =  $user->where('id',$id);

      // return $this->view('profile',['rows'=>$rows]);
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

  }


      
}