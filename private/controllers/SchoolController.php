<?php




class SchoolController extends Controller{

    public function index(){
      if(!Auth::logged_in())
      {
        $this->redirect('login');
      }
         
       $schools = $this->load_model("School");

        //  echo $schools;
        //  print_r($schools);
      // $rows  =  $schools->findAll();

    $rows =  $schools->query("SELECT schools.id , schools.school , schools.dt , users.firstname FROM schools INNER JOIN users ON schools.user_id = users.id");
         
        return $this->view("schools/index",['rows'=>$rows]);
    }


  public function add(){

    if(!Auth::logged_in())
		{
			$this->redirect('login');
		}


     
     $errors = array();
    if(count($_POST) > 0 ){
       
      $schools = $this->load_model("School");

      if($schools->validate($_POST)){
           
      }else{
        $errors = $schools->errors;
      }
 
   } 

    return $this->view("schools/create",['errors'=>$errors]);   
  }

   
   public function edit($id){
    if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
    $schools = $this->load_model("School");
    $rows = $schools->where('id',$id);
    $errors = array();
    $success = array();
    if(isset($rows)){ 
      if(count($_POST) > 0 ){
        if($schools->validate($_POST))
        {
          $schools->update($id,$_POST);
          $success = "Update Success";
        }else{
          $errors = $schools->errors;
        }
      }
    }
    return $this->view("schools/edit",['errors'=>$errors , 'rows' => $rows , 'success'=>$success]);    
   }  
     
   public function delete($id){
    if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
    $success = array();
    $schools = $this->load_model("School");

    if(count($_POST) > 0 ){
       $schools->delete($id);
       $success = "Delete Success";
    }

    $rows = $schools->where('id',$id);


    return $this->view("schools/delete",['rows'=>$rows , 'success'=>$success]); 
   }








   
}