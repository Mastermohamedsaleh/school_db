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
   $success = array();
 
   if(count($_POST) > 0){
      $books = $this->load_model('book');
   
   if($books->validate($_POST)){
    
      if(count( $_FILES ) > 0 ){
       
         $title = $_POST['name_book'];

         $pname =  rand(1000,10000) . '_' . $_FILES['file']['name'];
      
         $tname = $_FILES['file']['tmp_name'];
      
         $uploads_dir = $_SERVER['DOCUMENT_ROOT'] ."/books" ;
      
         move_uploaded_file($tname , $uploads_dir . '/' . $pname);
 
       $data['name_book'] = $_POST['name_book'];        
       $data['pdf'] =  $pname;                
       $data['grade_id'] = $_POST['grade_id'];        
       $data['teacher_id'] = $_POST['teacher_id'];        
       $data['classroom_id'] = $_POST['classroom_id'];        
 
       $success = "ADD SUCCESS";   
       $books->insert($data);
          
      }
   } else{
    $errors  =  $books->errors;
   }    

   }

      return $this->view('books/create',['grades'=>$grades , 'classrooms'=>$classrooms , 'errors'=>$errors , 'success'=>$success]);
   }


// Edit
   public function edit($id = null){
    

      $books = $this->load_model('book');
      $rows  = $books->where('id',$id);

      $grades = $this->load_model("grade");
      $grades = $grades->findAll();
       
      $classrooms = $this->load_model("classroom");
      $classrooms =  $classrooms->query("SELECT id,classroom FROM classrooms");

      $errors = array();
      $success = array();
  
    if(count($_POST) > 0){
    
    
    if($books->validate($_POST)){
     
       if(count( $_FILES ) > 0 ){
        
          $title = $_POST['name_book'];
 
          $pname =  rand(1000,10000) . '_' . $_FILES['file']['name'];
       
          $tname = $_FILES['file']['tmp_name'];
       
          $uploads_dir = $_SERVER['DOCUMENT_ROOT'] ."/books" ;
       
          move_uploaded_file($tname , $uploads_dir . '/' . $pname);
  
        $data['name_book'] = $_POST['name_book'];        
        $data['pdf'] =  $pname;                
        $data['grade_id'] = $_POST['grade_id'];        
        $data['teacher_id'] = $_POST['teacher_id'];        
        $data['classroom_id'] = $_POST['classroom_id'];        
  
        $success = "Update SUCCESS";   
        $books->update($id,$data);
           
       }
    } else{
     $errors  =  $books->errors;
    }    
 
    }
 
       return $this->view('books/edit',['rows'=>$rows,'grades'=>$grades , 'classrooms'=>$classrooms , 'errors'=>$errors , 'success'=>$success]);


 

  }








// Delete
   public function delete($id = null){
      $books = $this->load_model('book');
     $rows = $books->where('id',$id); 
      if(count($_POST) > 0){
        $filename = $_SERVER['DOCUMENT_ROOT']."/books"."/".$_POST['pdf'];
        if(file_exists($filename)){
           unlink($filename);
        }
        $books->delete($id); 
      return $this->redirect("book");
          }       
   return $this->view('books/delete',['rows'=>$rows]);
   }



//  Display

public function display($id = null){
   $books = $this->load_model('book');
   $rows = $books->where('id',$id);
   return $this->view('books/display',['rows'=>$rows]);
}




// Book One Teacher
   public function mybook($id = null){
    
   if($id !=  Auth::teacher('id')){
       echo "NO Book Here";
       die; 
   }
    
 

      $books = $this->load_model('book');
  
       $rows = $books->where('teacher_id',$id); 
       return $this->view("books/mybook",['rows'=> $rows]); 
       
   }


    
}