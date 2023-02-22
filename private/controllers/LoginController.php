<?php 




class LoginController extends Controller{
     
    public  function index($id = null)
    {  
    

      if(Auth::logged_in_admin()){
        return $this->redirect("home");
      }


        $errors = array(); 

    if(count($_POST) > 0){

       $admin = $this->load_model('admin');



       if($row = $admin->findUserByEmail($_POST['email'] , $_POST['password'])){  
                   
        Auth::authenticateadmin($row);

        $this->redirect('/home');

       }else{
          $errors['email'] = "Wrong email or passworrd"; 
       }
    }
      return $this->view('logins/loginadmin',['errors'=>$errors]);
    }  


    public function teacher(){

      $errors = array();
  
      if(count($_POST) > 0){

        $teacher = $this->load_model('teacher');
 
        if($row = $teacher->findUserByEmail($_POST['email'] , $_POST['password'])){  
                    
         Auth::authenticateteacher($row);
 
         $this->redirect('/home/teacher');
 
        }else{
           $errors['email'] = "Wrong email or passworrd"; 
        }
     }



      return $this->view('logins/loginteachers',['errors'=>$errors]); 
 
   }




  public function student(){

   $errors = array();
  
   if(count($_POST) > 0){

     $students = $this->load_model('student');

     if($row = $students->findUserByEmail($_POST['email'] , $_POST['password'])){  
                 
      Auth::authenticatestudent($row);

      $this->redirect('/home/student');

     }else{
        $errors['email'] = "Wrong email or passworrd"; 
     }
  }









     return $this->view('logins/loginstudent',['errors'=>$errors]); 

  }

  public function parent(){

     return $this->view('login'); 



  }





}