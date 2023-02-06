<?php
 
 class MyparentController extends Controller{
     
     
  public function index(){

     
    if(!Auth::logged_in_admin())
    {
        $this->redirect('section');
    }

 
     
   $myparent = $this->load_model('Myparent');

   $rows = $myparent->query("SELECT myparents.id , myparents.name_parent ,myparents.phone , myparents.ssn , students.name_student FROM myparents INNER JOIN students ON myparents.student_id = students.id ");


   return $this->view('myparents/index' , ['rows'=>$rows] );


        
  
     
  }



public function create(){

 
  $students =  $this->load_model('Student');


  $students  = $students->findAll();




  $errors = array();
  $success = array();
  $myparent = $this->load_model('Myparent');

  
if(count($_POST) > 0){
   
if($myparent->validate($_POST)){


  $myparent->insert($_POST);  
          
  $success = "Add Success";

}else{
  $errors = $myparent->errors;
}


} 







   
 return $this->view("myparents/create",['students' => $students , 'errors'=>$errors , 'success'=>$success]);
 
}



public function edit($id = null){
    if(!Auth::logged_in_admin())
    {
        $this->redirect('section');
    }

    $errors = array();
    $success = array();
    $students = $this->load_model('student');
 
    $students = $students->findAll();

    $myparent = $this->load_model('Myparent');

    $rows = $myparent->where('id',$id);

    
if(count($_POST) > 0){
     
  if($myparent->validate($_POST)){


    $myparent->update($id,$_POST);  
            
    $success = "Update Success";

  }else{
    $errors = $myparent->errors;
  }


} 







   return $this->view('myparents/edit',['rows' => $rows , 'students'=>$students , 'errors' =>$errors , 'success'=>$success]);   

}





public function delete($id){
 


  $success = array();


      
  $parents = $this->load_model("Myparent");
  if(count($_POST) > 0){
         
  
   $parents->delete($id); 
 
   $success = "Delete Success";
     }


     $rows = $parents->where('id',$id);

     return $this->view("myparents/delete",['rows' => $rows]);

}


 }