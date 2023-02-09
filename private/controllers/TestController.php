<?php


class TestController extends Controller {


 public function index(){
  
 $tests = $this->load_model("test");

 $rows = $tests->query("SELECT tests.id , tests.test , tests.dt , tests.disable ,tests.description , teachers.name ,classrooms.classroom , grades.grade FROM tests INNER JOIN   teachers ON tests.teacher_id = teachers.id INNER JOIN classrooms  ON classrooms.id = tests.classroom_id INNER JOIN grades ON tests.grade_id = grades.id ");
  

  return $this->view("tests/index",['rows'=>$rows]);

 }




 public function create(){
    
    if(!Auth::logged_in_admin())
    {
        $this->redirect('section');
    }

    $grades = $this->load_model('Grade');
    $grades = $grades->findAll();

    $classrooms = $this->load_model('Classroom');
    $classrooms = $classrooms->findAll();

  $errors = array();
  $success = array();
   if(count($_POST) > 0){
    $tests = $this->load_model('Test');
    if($tests->validate($_POST)){
     
    $arr['test'] = $_POST['test'];
    $arr['classroom_id'] = $_POST['classroom_id'];
    $arr['grade_id'] = $_POST['grade_id'];
    $arr['description'] = $_POST['description'];
    $arr['teacher_id'] = $_POST['teacher_id'];
    $arr['dt'] =    date("Y-m-d") ;

    $tests->insert($arr);
    $success = "Add Success";
     
     
    }else{
        $errors = $tests->errors;
    }
   }
   return $this->view('tests/create',['errors'=>$errors, 'success'=>$success ,'grades'=>$grades , 'classrooms'=>$classrooms ]);
 } 





  public function edit($id){
       



    $classrooms = $this->load_model('Classroom');
    $classrooms = $classrooms->findAll();
    $grades = $this->load_model('Grade');
    $grades = $grades->findAll();
        
    $tests =  $this->load_model('test'); 
    $rows  =  $tests->where('id',$id);

    $errors = array();
    $success = array();

if(count($_POST) > 0){

    if($tests->validate($_POST)){
      
        $tests->update($id,$_POST);
        $success = "Update Success";
    }else{
        $errors = $tests->errors;
    }
      
}


    return $this->view('tests/edit',['rows' => $rows,'grades'=>$grades, 'classrooms'=>$classrooms ,'errors'=>$errors,'success'=>$success]);
        
     

     
  }





  public function delete($id){
  
    $tests = $this->load_model('test');
    $rows = $tests->where('id',$id); 
     if(count($_POST) > 0){
   
       $tests->delete($id); 
     return $this->redirect("test");
         }       
  return $this->view('tests/delete',['rows'=>$rows]);
      
     
      
      
     
  }

  

}