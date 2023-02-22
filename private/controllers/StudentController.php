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



  $success = array();

    if(count($_POST) > 0){
       

    if($students->validate($_POST)){




        $arr['name_student'] = $_POST['name_student'];
        $arr['email'] = $_POST['email'];
        $arr['gender'] = $_POST['gender'];
        $arr['password'] = sha1($_POST['password']);
        $arr['classroom_id'] = $_POST['classroom_id'];
        $arr['grade_id'] = $_POST['grade_id'];

     $students->insert($arr); 
     $success = "Add Success";



    }else{
      $errors =  $students->errors;
    }
 

       
    } 


    return $this->view('students/create',[ 'classrooms'=>$classrooms , 'grades' => $grades , 'errors'=>$errors , 'success'=>$success ]); 





    
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