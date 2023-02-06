<?php
 

 class ClassroomController  extends Controller{
     

public function index(){
          
    if(!Auth::logged_in_admin())
    {
        $this->redirect('section');
    }
    
     $classrooms = $this->load_model('Classroom');
     
     $rows = $classrooms->query("SELECT classrooms.id , classrooms.classroom ,classrooms.dt, grades.grade FROM classrooms INNER JOIN grades ON classrooms.grade_id = grades.id");



       
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
   if(count($_POST) > 0){
    $classrooms = $this->load_model('Classroom');
    if($classrooms->validate($_POST)){
    //    print_r($_POST);
    $classrooms->insert($_POST);
    }else{
        $errors = $classrooms->errors;
    }
   }
   return $this->view('classrooms/create',['errors'=>$errors,'grades'=>$grades]);
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
   


   print_r($_POST);

    if($classrooms->validate($_POST)){
      
        $classrooms->update($id,$_POST);
        $success = "Update Success";
    }else{
        $errors = $classrooms->errors;
    }
      
}


    return $this->view('classrooms/edit',['rows' => $rows,'grades'=>$grades,'errors'=>$errors,'success'=>$success]);
}


public function delete(){

    if(!Auth::logged_in_admin())
    {
        $this->redirect('section');
    }
}




public function details($id = null){

    if(!Auth::logged_in_admin())
    {
        $this->redirect('section');
    }




    $students = $this->load_model('student');

    $classrooms = $this->load_model('Classroom');
     
   $students =  $students->where('classroom_id',$id);

    $rows = $classrooms->query("SELECT classrooms.id , classrooms.classroom ,classrooms.dt, grades.grade FROM classrooms INNER JOIN grades ON classrooms.id = $id");
     


//     $teachers = $this->load_model('Teacherclassroom');

    // $teachers = $teachers->query("SELECT   teachers.id , teachers.name , classrooms.id  FROM teachers INNER JOIN classrooms ON    classrooms.id = $id     ORDER BY  teachers.id  DESC");

    // $teachers = $teachers->query("SELECT

    // teacherclassrooms.Id, teacherclassrooms.classroom_id, teachers.name

    // FROM teacherclassrooms

    // LEFT OUTER JOIN techers

    // ON teacherclassrooms.classroom_id = $id ");


    // print_r($teachers);
      

    return $this->view('classrooms/details',['rows'=>$rows , 'students' => $students ]);
}






     
 }