<?php


class ProfileditController extends Controller{
  

      public function editadmin($id){
      
         
        $rows = $this->load_model('admin');     
        $rows = $rows->where('id',$id);




     if(count($_POST) > 0){
   
      if(count($_FILES) > 0){
          
        if($_FILES['newimage']['tmp_name'] != ""){
         print_r($_POST);
      } else{
        echo "Not Found";
      }      
 
         
         
  
      }else{
         echo "bad";   
      }
      


  
       
     }










        return $this->view("admins/profile-edit",['rows'=>$rows]);
      }
     
}