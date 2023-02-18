<?php
 
/*
********   Display all Users
********
*/ 

class AdminController extends Controller {


    public function index(){
    
         $admin = $this->load_model('admin');  

         $rows =  $admin->query("SELECT * FROM admins WHERE rank  = 0  ");
         
        return $this->view('admins/index', ['rows'=>$rows]);
      
    }



    public function create(){
           


 $admins = $this->load_model("Admin"); 

 $errors = array();
     if( count($_POST) > 0 ){
        

         if($admins->validate($_POST)){
            
            $arr['name_admin'] = $_POST['name_admin']; 
            $arr['email'] = $_POST['email']; 
            $arr['gender'] = $_POST['gender']; 
            $arr['dt'] = $_POST['dt']; 
            $arr['password'] =  sha1( $_POST['password'] );
            
            $admins->insert($arr);

            return $this->redirect("admin"); 
              

         }else{
        $errors = $admins->errors;
         } 
         

     }
     

          
 
 
 


     return $this->view('admins/create' ,['errors' => $errors] );
         
    }


    public function edit($id = null){


        if(!Auth::logged_in_admin())
        {
            $this->redirect('section');
        }

        $errors = array();
        $success = array();
 
              
        $admins = $this->load_model("admin");
         
        $rows = $admins->where('id' , $id);
      
        if( count($_POST) > 0 ){
           
   
            if($admins->validate($_POST)){
        
           
               
               $admins->update($id,$_POST);
   
               $success = "Update Success";
         
                 
   
            }else{
           $errors = $admins->errors;
            } 
            
   
        }
  
             
    
    
    
   
   
        return $this->view('admins/edit' ,['errors' => $errors ,'success'=>$success,'rows'=>$rows]);
    }





 public function delete($id = null){
    $success = array();


      
    $admins = $this->load_model("admin");
    if(count($_POST) > 0){
           
    
     $admins->delete($id); 
   
     $success = "Delete Success";
       }
  
  
       $rows = $admins->where('id',$id);
  
       return $this->view("admins/delete",['rows' => $rows]);
 }
 


} 