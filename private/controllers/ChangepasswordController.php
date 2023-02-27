<?php


class ChangepasswordController extends Controller{


  public function adminpass($id = null){
     
    if($id != Auth::admin('id') ){
   
      Auth::logoutadmin();
       
      $this->redirect('section');
    }

     $admins = $this->load_model("admin");

     $rows  = $admins->where('id' , $id);

     $success = array();
     $errors = array();
     $errorpassword = "";

     foreach($rows as $row){
      $password = $row['password'];
    }
  
  
    if(count($_POST) > 0){
  
    if($password == sha1($_POST['oldpassword'])){
    
  
     if(empty($_POST['password'])  ||    strlen( $_POST['password'] ) < 8 ){
      $errors =  "Please write password Grater than 8";
     }else{

     $arr['password'] = sha1($_POST['password']);
  
      $admins->update($id, $arr);

      $success = "Update Success";
  
     }
     
    }else{
      $errorpassword = "Please Write Your Old Password";
    }
     
   }

    return $this->view("admins/chengepass",['rows'=>$rows,'errorpassword'=>$errorpassword,'errors'=>$errors,'success'=>$success]);
  }



 public function teacherpass($id = null){


  if($id != Auth::teacher('id') ){
   
    Auth::logoutteacher();
     
    $this->redirect('section');
  }

  $success = array();

   $errors = array();
   $errorpassword = "";

  $teachers = $this->load_model("teacher");

  $rows  = $teachers->where('id' , $id);


  foreach($rows as $row){
    $password = $row['password'];
 }


  if(count($_POST) > 0){

  if($password == sha1($_POST['oldpassword'])){
  

   if( empty( $_POST['password'] )  ||   strlen( $_POST['password'] ) > 8 ){
    $errors =  "Please write password Grater than 8";
   }else{
   


  $arr['password'] = sha1($_POST['password']);

    $teachers->update($id, $arr);



  
     
    $success = "Update Success";


   }
   
  }else{
    $errorpassword = "Please Write Your Old Password";
  }
   
 }

  return $this->view("teachers/chengepass",['rows'=>$rows , 'errorpassword'=>$errorpassword  , 'errors'=>$errors , 'success'=>$success]);
 }
 
 
 
 


} 