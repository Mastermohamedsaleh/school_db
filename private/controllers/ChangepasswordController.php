<?php


class ChangepasswordController extends Controller{


  public function adminpass($id = null){
     

     $admins = $this->load_model("admin");

     $rows  = $admins->where('id' , $id);

     $success = array();
   
      $errors = array();

     $errorpassword = "";

  if(count($_POST)  > 0){
     
  

  foreach($rows as $row){


    if(  $row['password']   == sha1($_POST['oldpassword']) ){
    if($admins->validate($_POST['password'])){
        
      $admins->update($id, sha1( $_POST['password'] ));
      $success = "Update Success";
       
    }else{
     $errors = $admins->errors;
    }  

    }else{
      $errorpassword = "Write old Password";
    }


  }
    


  }



    return $this->view("admins/chengepass",['rows'=>$rows , 'errorpassword'=>$errorpassword  ,'errors'=>$errors , 'success'=>$success]);
  }

} 