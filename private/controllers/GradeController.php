<?php


class GradeController extends Controller{
      


    public function index(){

        
    if(!Auth::logged_in_admin())
    {
        $this->redirect('section');
    }
          
     $grades  =  $this->load_model('Grade');

     $rows =  $grades->findAll();

      $errors = array();
   
      if(count($_POST) > 0){
         
         if($grades->validate($_POST)){
            print_r($_POST);
            // Insert   
       }else{
        $errors = $grades->errors;
       }
      } 
         return $this->view('grades/index',['rows'=>$rows ,'errors'=>$errors]);
    }




  public function create(){

        
    if(!Auth::logged_in_admin())
    {
        $this->redirect('section');
    }
  
  
    $grades  =  $this->load_model('Grade');
  
     $errors = array();
     $success = array();
  
     if(count($_POST) > 0){
        
        if($grades->validate($_POST)){

        $arr['dt'] = date('Y-m-d');
        $arr['grade'] = $_POST['grade'];
            
           $grades->insert($arr);
           $success = "Add Success"; 

      }else{
       $errors = $grades->errors;
      }
     } 
  
    

  return $this->view("grades/add", ['errors'=>$errors ,'success'=>$success]);
 } 




    public function edit($id = null){

              
    if(!Auth::logged_in_admin())
    {
        $this->redirect('section');
    }
      
      $grades  =  $this->load_model('Grade');
      $errors = array();
      $success = array();
      $rows = $grades->where('id',$id); 
    
        
        if($grades->validate($_POST)){
 
             
           
           $grades->update($id,$_POST);  
  
           $success = "Update Success";
           
        }else{
          $errors = $grades->errors;
        }


       return $this->view('grades/edit' ,['errors'=>$errors , 'success'=>$success , 'rows' => $rows]);
     
    }









    public function delete($id = null){
              
    if(!Auth::logged_in_admin())
    {
        $this->redirect('section');
    }
      
    $grades = $this->load_model("Grade");

    $rows = $grades->where('id',$id); 
  if(count($_POST) > 0){

    $grades->delete($id);

  }
 


    // $students->delete($id);

    return $this->view("grades/delete",['rows'=>$rows]);
 
 

    }
 

     
}