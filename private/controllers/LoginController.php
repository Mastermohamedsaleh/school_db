<?php 




class LoginController extends Controller{
     
    public  function index($id = null)
    {  
    

      if(Auth::logged_in_admin()){
        return $this->redirect("home");
      }


        $errors = array(); 

    if(count($_POST) > 0){

       $user = $this->load_model('user');

       if($row = $user->findUserByEmail($_POST['email'] , $_POST['password'])){  
                   
        Auth::authenticateadmin($row);

        $this->redirect('/home');

       }else{
          $errors['email'] = "Wrong email or passworrd"; 
       }
    }
      return $this->view('login',['errors'=>$errors]);
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

  public function admin(){

     return $this->view('login'); 

  }


  public function student(){

     return $this->view('login'); 

  }

  public function parent(){

     return $this->view('login'); 



  }





}