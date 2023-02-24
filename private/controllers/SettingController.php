<?php



class SettingController extends Controller {

     
     public function index(){
      
 
        
       $settings = $this->load_model('setting');

       $rows = $settings->findAll();
         return $this->view("settings/index",['rows'=>$rows]);
     }


     public function edit($id = null){
               
       $settings = $this->load_model('setting');

         $rows = $settings->where('id',$id);


$errors = array();
$success = array();

  if(count($_POST) > 0){
   
      if($settings->validate($_POST)){
           
      $settings->update($id,$_POST);
      $success = "Update Success";
         
      }else{
          $errors =  $settings->errors; 
      }
     
     
  }





         return $this->view("settings/edit",['rows'=>$rows , 'errors'=>$errors , 'success'=>$success]);
     }


      
}