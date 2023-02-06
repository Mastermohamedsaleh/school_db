<?php 



class TeacherclassroomController extends Controller{

    public function index(){



    $teachers = $this->load_model('Teacher');
    
    $teachers = $teachers->findAll();

    $classrooms = $this->load_model('classroom');
    
    $classrooms = $classrooms->findAll();
       
     
         
       return $this->view('classrooms/teacher_class',['teachers'=>$teachers,'classrooms'=>$classrooms]);
    }



}