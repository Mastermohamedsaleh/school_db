<?php
 
/*
********   Display all Users
********
*/ 

class UserController extends Controller {


    public function index(){
    
         $user = $this->load_model('user');  

         $rows =  $user->query("SELECT * FROM users WHERE rank not in ('student') ");
         
        return $this->view('users', ['rows'=>$rows]);
      

    }
 
 


} 