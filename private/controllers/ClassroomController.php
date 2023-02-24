<?php
 

 class ClassroomController  extends Controller{
     

public function index(){
          
    if(!Auth::logged_in_admin())
    {
        $this->redirect('section');
    }
    
     $classrooms = $this->load_model('Classroom');
     
     $rows = $classrooms->query("SELECT classrooms.id , classrooms.grade_id , classrooms.classroom ,classrooms.dt, grades.grade FROM classrooms INNER JOIN grades ON classrooms.grade_id = grades.id");



       
    return  $this->view('classrooms/index',['rows' => $rows]);

   
}

public function create(){
    if(!Auth::logged_in_admin())
    {
        $this->redirect('section');
    }
    $grades = $this->load_model('Grade');
    $grades = $grades->findAll();
  $errors = array();
  $success = array();
   if(count($_POST) > 0){
    $classrooms = $this->load_model('Classroom');
    if($classrooms->validate($_POST)){
    $classrooms->insert($_POST);
    $success = "Add Success";
    }else{
        $errors = $classrooms->errors;
    }
   }
   return $this->view('classrooms/create',['errors'=>$errors,'grades'=>$grades,'success'=>$success]);
}
 
public function edit($id = null){
    
    if(!Auth::logged_in_admin())
    {
        $this->redirect('section');
    }

    $classrooms = $this->load_model('Classroom');
    $grades = $this->load_model('Grade');
    $grades = $grades->findAll();
    $rows = $classrooms->where('id',$id);
    $errors = array();
    $success = array();
if(count($_POST) > 0){
   
    if($classrooms->validate($_POST)){
      
        $classrooms->update($id,$_POST);
        $success = "Update Success";
    }else{
        $errors = $classrooms->errors;
    }
      
}


    return $this->view('classrooms/edit',['rows' => $rows,'grades'=>$grades,'errors'=>$errors,'success'=>$success]);
}


public function delete($id = null){

    if(!Auth::logged_in_admin())
    {
        $this->redirect('section');
    }

    $classrooms = $this->load_model("classroom");

    $rows = $classrooms->where('id',$id); 
  if(count($_POST) > 0){

    $classrooms->delete($id);

  }

    return $this->view("classrooms/delete",['rows'=>$rows]);

}




public function details($id = null){

    if(!Auth::logged_in_admin())
    {
        $this->redirect('section');
    }

    $students = $this->load_model('student');

    $classrooms = $this->load_model('Classroom');
     
    $students =  $students->where('classroom_id',$id);

    $rows = $classrooms->query("SELECT classrooms.id , classrooms.classroom ,classrooms.dt, grades.grade FROM classrooms INNER JOIN grades ON grades.id = classrooms.grade_id WHERE classrooms.id = $id");
     


    return $this->view('classrooms/details',['rows'=>$rows , 'students'=>$students ]);
}






     
 }