<?php


class ProfileditController extends Controller{
  





  
  public function editadmin($id = null){


      if($id != Auth::admin('id') ){
   
        Auth::logoutadmin();
         
        $this->redirect('section');
      }    
    
 
 
 
 

 

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
                 $file =    file_exists($filename);
              
                 if(isset($file)){
                    unlink($filename);



                    $pname =  rand(1000,10000).'_'.$_FILES['newimage']['name'];


                    $tname = $_FILES['newimage']['tmp_name'];
                 
                    $uploads_dir = $_SERVER['DOCUMENT_ROOT'] ."/uploads";
                 
                    move_uploaded_file($tname , $uploads_dir . '/' . $pname);
            
                    $arr['name_admin'] = $_POST['name_admin'];
                    $arr['email'] = $_POST['email'];
                    $arr['password'] = $_POST['oldpassword']; 
                    $arr['image'] =    $pname;        
            
                 
                  $admins->update($id,$arr);
              
                  return $this->redirect("profile/adminprofile/".Auth::admin('id'));
                 }else{

                  return $this->redirect("profile/adminprofile/".Auth::admin('id'));

                

       
         

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




   public function editteacher($id = null){



    if($id != Auth::teacher('id') ){
   
      Auth::logoutteacher();
       
      $this->redirect('section');
    } 




    $teachers = $this->load_model('teacher');     
    $rows = $teachers->where('id',$id);

 



    $success = array();
    $errorsfile = array();
    $errors = array();
    if(count($_POST) > 0){


      if($teachers->validate($_POST)){


        if(count($_FILES) > 0){
          
          if($_FILES['newimage']['tmp_name'] != ""){

            if( $_FILES['newimage']['size'] < 10 * 1024 * 1024 ){ 
  
  
              $image_extension = pathinfo($_FILES["newimage"]["name"], PATHINFO_EXTENSION); 
          
              $type =  array('jpg', 'png');
        
              if ( in_array( $image_extension , $type ) ) {
                 
  
                 $filename = $_SERVER['DOCUMENT_ROOT']."/uploads"."/".$_POST['oldimage'];
  
      

                 $file =    file_exists($filename);
           
                 if(  isset( $file )  ){

                  
                    unlink($filename);

                    $pname =  rand(1000,10000).'_'.$_FILES['newimage']['name'];
              
                    $tname = $_FILES['newimage']['tmp_name'];
                 
                    $uploads_dir = $_SERVER['DOCUMENT_ROOT']."/uploads";
                 
                    move_uploaded_file($tname , $uploads_dir . '/' . $pname);
            
                    $arr['name'] = $_POST['name'];
                    $arr['email'] = $_POST['email'];
                    $arr['password'] = $_POST['oldpassword']; 
                    $arr['specialization_id'] = $_POST['specialization_id']; 
                    $arr['image'] =    $pname;        
            
                 
                  $teachers->update($id,$arr);
                      
             
  
                  return $this->redirect("profile/teacherprofile/".Auth::teacher('id'));


                 }else{
                  return $this->redirect("profile/teacherprofile/".Auth::teacher('id'));
                 }


               
             

                 
                
               
              }else{
                 $errorsfile = "Put jpg OR png";
              } 
           }else{
           $errorsfile = "Please Put Size Less";
         }
  

        }else{
          
             $arr['name'] = $_POST['name'];
             $arr['email'] = $_POST['email'];
             $arr['password'] = $_POST['oldpassword']; 
             $arr['image'] = $_POST['oldimage']; 
             $arr['specialization_id'] = $_POST['specialization_id']; 
           
             $teachers->update($id, $arr);
  
     
             $success = "Update Success"; 
  
        }      

        }


      }else{
        $errors = $teachers->errors;
      }
   
            
     }
    return $this->view("teachers/profile-edit",['rows'=>$rows  ,'errors'=>$errors  ,'errorsfile'=>$errorsfile]);
   


    }



    public function editstudent($id = null){




      if($id != Auth::student('id') ){
   
        Auth::logoutstudent();
         
        $this->redirect('section');
      }







      $students = $this->load_model('student');     
      $rows = $students->where('id',$id);


      $success = array();
      $errorsfile = array();
      $errors = array();
      if(count($_POST) > 0){
  
  
        if($students->validate($_POST)){
  
  
          if(count($_FILES) > 0){
            
            if($_FILES['newimage']['tmp_name'] != ""){
  
              if( $_FILES['newimage']['size'] < 10 * 1024 * 1024 ){ 
    
    
                $image_extension = pathinfo($_FILES["newimage"]["name"], PATHINFO_EXTENSION); 
            
                $type =  array('jpg', 'png');
          
                if ( in_array( $image_extension , $type ) ) {
                   
    
                   $filename = $_SERVER['DOCUMENT_ROOT']."/uploads"."/".$_POST['oldimage'];
    
        
  
                   $file =    file_exists($filename);
             
                   if(  isset( $file )  ){
  
                    
                      unlink($filename);
  
                      $pname =  rand(1000,10000).'_'.$_FILES['newimage']['name'];
                
                      $tname = $_FILES['newimage']['tmp_name'];
                   
                      $uploads_dir = $_SERVER['DOCUMENT_ROOT']."/uploads";
                   
                      move_uploaded_file($tname , $uploads_dir . '/' . $pname);
              
                      $arr['name_student'] = $_POST['name_student'];
                      $arr['email'] = $_POST['email'];
                      $arr['image'] =    $pname;        
              
                   
                    $students->update($id,$arr);
                        
               
    
                    return $this->redirect("profile/studentprofile/".Auth::student('id'));
  
  
                   }else{
                    echo "Bad";
                   }
  
  
                 
               
  
                   
                  
                 
                }else{
                   $errorsfile = "Put jpg OR png";
                } 
             }else{
             $errorsfile = "Please Put Size Less";
           }
    
  
          }else{
            
               $arr['name_student'] = $_POST['name_student'];
               $arr['email'] = $_POST['email'];
               $arr['image'] = $_POST['oldimage']; 
             
               $students->update($id, $arr);
    
       
               $success = "Update Success"; 
    
          }      
  
          }
  
  
        }else{
          $errors = $students->errors;
        }
     
              
       }


 

 
 
 

 




      return $this->view("students/profile-edit",['rows'=>$rows ,'success'=>$success ,'errors'=>$errors  ,'errorsfile'=>$errorsfile]);
    }






     
}