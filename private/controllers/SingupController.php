<?php 




class SingupController extends Controller{
     
    public  function index($id = null)
    {  
     
           
    $errors = array();

    

      if(count($_POST) > 0){ 
         
      
       $user = $this->load_model('user');
  
       if($user->validate($_POST)){


        $arr['firstname'] = $_POST['firstname'];
        $arr['lastname'] = $_POST['lastname'];
        $arr['email'] = $_POST['email'];
        $arr['rank'] = $_POST['rank'];
        $arr['gender'] = $_POST['gender'];
        $arr['dt'] = date('Y-M_D');
        $arr['password'] = password_hash($_POST['password'] , PASSWORD_DEFAULT);

      $user->insert($arr);
          
          $this->redirect("Login"); 
  
       }else{
         
         $errors = $user->errors;    
       }
                
      } 
      $mode = isset($_GET['mode']) ? $_GET['mode'] : '';     
      return $this->view('singup',['errors'=>  $errors , 'mode'=>$mode ]);
   
    }
    



}