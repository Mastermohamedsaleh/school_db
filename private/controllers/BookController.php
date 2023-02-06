<?php


class BookController extends Controller{
     
     
   public function index(){
   
     $books = $this->load_model('book');

   $rows =  $books->query("SELECT books.id , books.name_book , grades.grade , classrooms.classroom , teachers.name FROM books INNER JOIN grades ON books.grade_id = grades.id INNER JOIN 

   classrooms ON books.classroom_id = classrooms.id INNER JOIN teachers
      
     ON   books.teacher_id = teachers.id ");



   return $this->view('books/index',['rows'=>$rows]);

   }

   public function create(){
  
     $grades = $this->load_model("grade");

     $grades = $grades->findAll();
      
     $classrooms = $this->load_model("classroom");
     $classrooms =  $classrooms->query("SELECT id,classroom FROM classrooms");

   
   $errors = array();
 
   if(count($_POST) > 0){
      $books = $this->load_model('book');
   
   if($books->validate($_POST)){
    
 

      if(count( $_FILES ) > 0 ){
       
         $title = $_POST['name_book'];

         $pname =  rand(1000,10000) . '_' . $_FILES['file']['name'];
      
         $tname = $_FILES['file']['tmp_name'];
      
         $uploads_dir = $_SERVER['DOCUMENT_ROOT'] ."/books" ;
      
         move_uploaded_file($tname , $uploads_dir . '/' . $pname);

         $_POST['file'] = $pname;  
          
         $books->insert($_POST);
          
      }

 
    
      // $classroom = $_POST['classroom_id'];
      // $grade = $_POST['grade_id'];

    

   } else{
    $errors  =  $books->errors;
   }    
 

   


       
        
       

   }














      return $this->view('books/create',['grades'=>$grades , 'classrooms'=>$classrooms , 'errors'=>$errors]);
   }

   public function edit($id = null){

   }

   public function delete($id = null){

   }
    
}