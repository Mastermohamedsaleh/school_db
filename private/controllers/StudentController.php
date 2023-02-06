<?php 



class StudentController extends Controller{
      

 
public function index(){


    if(!Auth::logged_in_admin())
    {
        $this->redirect('section');
    }

    $students =  $this->load_model('Student');

    // $rows  = $students->query("SELECT * FROM users WHERE rank in ('student')");

    $rows  = $students->findAll();
    
    return $this->view('students/index',['rows' => $rows ]); 
     

}


public function create(){
    
}



public function edit($id = null){


    if(!Auth::logged_in_admin())
    {
        $this->redirect('section');
    }

$errors = array();
    
  $grades = $this->load_model("Grade");

  $grades =   $grades->findAll();

  $classrooms = $this->load_model("classroom");

  $classrooms =   $classrooms->findAll();



  $students = $this->load_model("Student");

  $rows =  $students->where('id',$id); 

  $success = array();

    if(count($_POST) > 0){
       

    if($students->validate($_POST)){

     $students->update($id,$_POST); 
     $success = "Update Success";



    }else{
      $errors =  $students->errors;
    }
 

       
    } 


    return $this->view('students/edit',['rows' => $rows , 'classrooms'=>$classrooms , 'grades' => $grades , 'errors'=>$errors , 'success'=>$success ]); 

 

}

public function delete($id = null){
   
    if(!Auth::logged_in_admin())
    {
        $this->redirect('section');
    }

    $students = $this->load_model("Student");

    $students->delete($id);

    return $this->redirect('student');
     
}


  
       
      
}