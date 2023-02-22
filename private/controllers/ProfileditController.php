<?php


class ProfileditController extends Controller{
  

      public function editadmin($id = null){
      

  
         
        $admins = $this->load_model('admin');     
        $rows = $admins->where('id',$id);



    $success = array();
    $errorsfile = array();
    $errors = array();

     if(count($_POST) > 0){


      if($admins->validate($_POST)){


        if(count($_FILES) > 0){
          
          if($_FILES['newimage']['tmp_name'] != ""){

            if( $_FILES['newimage']['size'] < 10 * 1024 * 1024 ){ 
  
  
              $image_extension = pathinfo($_FILES["newimage"]["name"], PATHINFO_EXTENSION); 
          
              $type =  array('jpg', 'png');
        
              if ( in_array(  $image_extension , $type  ) ) {
                 
  
                 $filename = $_SERVER['DOCUMENT_ROOT']."/uploads"."/".$_POST['oldimage'];
  
              
                 if(file_exists($filename)){
                    unlink($filename);
                 }else{


                  $pname =  $_FILES['newimage']['name'];
              
                  $tname = $_FILES['newimage']['tmp_name'];
               
                  $uploads_dir = $_SERVER['DOCUMENT_ROOT'] ."/uploads";
               
                  move_uploaded_file($tname , $uploads_dir . '/' . $pname);
          
                  $arr['name_admin'] = $_POST['name_admin'];
                  $arr['email'] = $_POST['email'];
                  $arr['password'] = $_POST['oldpassword']; 
                  $arr['image'] =    $pname   ;        
          
               
                $admins->update($id,$arr);
                    
                $success = "Update Success";
                $success = "Update Success"; 

                 }
               
  
  
                
   
  
              }else{
                 $errorsfile = "Put jpg OR png";
              } 
           }else{
           $errorsfile = "Please Put Size Less";
         }
  
        
          
             
        }else{
          
             $arr['name_admin'] = $_POST['name_admin'];
             $arr['email'] = $_POST['email'];
             $arr['password'] = $_POST['oldpassword']; 
             $arr['image'] = $_POST['oldimage']; 
           
             $admins->update($id, $arr);
  
     
             $success = "Update Success"; 
  
        }      
   
           
           
    
        }


      }else{
        $errors = $admins->errors;
      }
   
     
      


  
       
     }










        return $this->view("admins/profile-edit",['rows'=>$rows , 'success'=>$success ,'errors'=>$errors  ,'errorsfile'=>$errorsfile ]);
      }
     
}