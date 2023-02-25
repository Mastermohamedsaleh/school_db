<?php 



class TeacherclassroomController extends Controller{

    public function index(){



    $teachers = $this->load_model('Teacher');
    
    $teachers = $teachers->findAll();

    $classrooms = $this->load_model('classroom');
    
    $classrooms = $classrooms->findAll();
      
    $teacherclassrooms = $this->load_model('teacherclassroom');

$errors = array();
$success = array();

    if(count($_POST) > 0){
        if($teacherclassrooms->validate($_POST)){
           
          $teacherclassrooms->insert($_POST);
          $success = 'Add Success';
        }else{ 
            $errors = $teacherclassrooms->errors;
        } 
    }
  

   $rows = $teacherclassrooms->query('SELECT  teacherclassrooms.id , teacherclassrooms.classroom_id ,teacherclassrooms.teacher_id ,teachers.name , classrooms.classroom FROM teacherclassrooms INNER JOIN teachers ON teacherclassrooms.teacher_id = teachers.id INNER JOIN classrooms ON teacherclassrooms.classroom_id = classrooms.id ');
 

     
         
       return $this->view('teacherinclassrooms/teacher_class',['teachers'=>$teachers,'classrooms'=>$classrooms , 'errors'=>$errors , 'success'=>$success , 'rows'=>$rows]);
    }


    public function edit($id = null){
        
     $id =  explode("/", trim( $id )); 
   
      if(isset($id[0])){
            $teacherclassroom = $id[0];
        } 
      if( isset( $id[1]) ){
        $teacher_id = $id[1];
        } 
      if(isset( $id[2]) ){  
         $classroom_id = $id[2];
        } 




 if(empty($teacherclassroom) || empty($teacher_id) || empty($classroom_id)  ){
            return  $this->redirect('Teacherclassroom');
 }



 $teachers = $this->load_model('Teacher');
    
 $teachers = $teachers->findAll();

 $classrooms = $this->load_model('classroom');
 
 $classrooms = $classrooms->findAll();



 $teacherclassrooms = $this->load_model('teacherclassroom');

     $rows = $teacherclassrooms->where('id',$classroom_id);
return $this->view('teacherinclassrooms/edit' ,['classrooms'=>$classrooms , 'classroom_id'=>$classroom_id , 'teacher_id'=>$teacher_id ,'teachers'=>$teachers , 'rows'=>$rows]);  
    }



}