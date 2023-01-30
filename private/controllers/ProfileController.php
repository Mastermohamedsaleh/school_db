<?php 




class ProfileController extends Controller{
     
    public  function index($id = null)
    {  
          
      $user =  $this->load_model('User');  
       
       $rows =  $user->where('id',$id);

      return $this->view('profile',['rows'=>$rows]);
    }
    
     
}