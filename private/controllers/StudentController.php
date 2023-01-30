<?php 



class StudentController extends Controller{
      

 
public function index(){


    $students =  $this->load_model('user');

   $rows  = $students->query("SELECT * FROM users WHERE rank in ('student')");
    
    return $this->view('students/index',['rows' => $rows ]); 
     

}


  
       
      
}