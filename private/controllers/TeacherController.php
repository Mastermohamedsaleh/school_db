<?php



class  TeacherController   extends Controller 
{ 
    
 public function index(){


   if(!Auth::logged_in_admin())
   {
       $this->redirect('section');
   }

   $teacher = $this->load_model('Teacher');

   $rows = $teacher->findAll();
      
      return $this->view('teachers/index',['rows'=>$rows]);
 }   
 

 public function profile($id = null){


   if(!Auth::logged_in_admin())
   {
       $this->redirect('section');
   }

   $teacher = $this->load_model('Teacher');




   $teachers = $teacher->query("SELECT teachers.id , teachers.name , teachers.email , teachers.gender , specializations.name_specialization ,teachers.image   FROM teachers  INNER JOIN specializations ON teachers.specialization_id =  specializations.id AND teachers.id = $id ");



   return $this->view('teachers/profile',['teachers' => $teachers]);

 }



 public function create(){

  if(!Auth::logged_in_admin())
   {
       $this->redirect('section');
   }

   $specializations = $this->load_model("Specialization");

   $specializations =   $specializations->findAll();

   $teacher = $this->load_model("Teacher");


   $errors = array();
   $success = array();
   if(count($_POST) > 0){
       
    if($teacher->validate($_POST)){

      $arr['name'] = $_POST['name'];
      $arr['email'] = $_POST['email'];
      $arr['gender'] = $_POST['gender'];
      $arr['password'] = sha1($_POST['password']);
      $arr['specialization_id'] = $_POST['specialization_id'];

      $teacher->insert($arr); 
     $success = "Add Success";


    }else{
      $errors =  $teacher->errors;
    }
 

       
    } 

   return $this->view('teachers/create',['specializations' => $specializations , 'errors'=>$errors , 'success'=>$success]);
 }



 public function edit($id = null){
   
  $errors = array();
  $success = array();
  $specializations = $this->load_model("Specialization");

  $specializations =   $specializations->findAll();


  $teacher = $this->load_model("Teacher");

  $rows =  $teacher->where('id',$id); 

  

    if(count($_POST) > 0){
       



    if($teacher->validate($_POST)){




      $teacher->update($id,$_POST); 
     $success = "Update Success";


    }else{
      $errors =  $teacher->errors;
    }
 

       
    } 




  return  $this->view('teachers/edit',['specializations' =>$specializations, 'rows'=>$rows ,'errors'=>$errors , 'success' => $success]);
     
      
 }




 public function delete($id = null){
    

if(count($_POST) > 0){

   $teacher = $this->load_model("Teacher");

   $teacher->delete($id); 
     
}
$rows =  $teacher->where('id',$id);

return $this->view('teachers/edit',['rows'=>$rows] );
    

 }
 
 



}
