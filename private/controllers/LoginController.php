<?php 




class LoginController extends Controller{
     
    public  function index($id = null)
    {  
    

      if(Auth::logged_in()){
        return $this->redirect("home");
      }


        $errors = array(); 

    if(count($_POST) > 0){

       $user = $this->load_model('user');

       if($row = $user->findUserByEmail($_POST['email'] , $_POST['password'])){  
                   
        Auth::authenticate($row);

        $this->redirect('/home');

       }else{
          $errors['email'] = "Wrong email or passworrd"; 
       }
    }
      return $this->view('login',['errors'=>$errors]);
    }  
}