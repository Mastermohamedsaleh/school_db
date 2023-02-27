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
   $errorsfile = "";
 
   if(count($_POST) > 0){
      $books = $this->load_model('book');
   
   if($books->validate($_POST)){
    
      if(count( $_FILES ) > 0 ){
       
       
    if($_FILES['file']['size'] < 10 * 1024 * 1024 * 1024){
      
      $file_extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION); 
        
      $type =  array('txt', 'pdf', 'doc');

      if (   in_array(     $file_extension , $type  ) ) {
        


         $title = $_POST['name_book'];

         $pname =  rand(1000,100000) . '_' . $_FILES['file']['name'];
      
         $tname = $_FILES['file']['tmp_name'];
      

         $typefile = $_FILES['file']['type'];
         $uploads_dir = $_SERVER['DOCUMENT_ROOT'] ."/books" ;
      
         move_uploaded_file($tname , $uploads_dir . '/' . $pname);
 
     

       $data['name_book'] = $_POST['name_book'];        
       $data['pdf'] =  $pname;                
       $data['grade_id'] = $_POST['grade_id'];        
       $data['teacher_id'] = Auth::teacher('id');        
       $data['classroom_id'] = $_POST['classroom_id'];        
 
     
       $books->insert($data);


        
      return $this->redirect("mybook/index/".Auth::teacher('id'))  ; 
    
   
    
      } else {
         $errorsfile = "Put txt OR pdf OR doc";
     }
         

    }else{
      $errorsfile = "Please Put Size Less"; 
    }
 
   
      }
   } else{
    $errors  =  $books->errors;
   }    

   }

      return $this->view('books/create',['grades'=>$grades , 'classrooms'=>$classrooms , 'errors'=>$errors ,  'errorsfile'=>$errorsfile ]);
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
      $errorsfile = "";
  
    if(count($_POST) > 0){
    
    
    if($books->validate($_POST)){
     
       if(count( $_FILES ) > 0 ){
        
       if($_FILES['file']['tmp_name'] != ""){
           
            
         if( $_FILES['file']['size'] < 10 * 1024 * 1024 * 1024){ 


            $file_extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION); 
        
            $type =  array('txt', 'pdf', 'doc');
      
            if ( in_array(  $file_extension , $type  ) ) {
               

               $filename = $_SERVER['DOCUMENT_ROOT']."/books"."/".$_POST['oldfile'];

               if(file_exists($filename)){
                  unlink($filename);
               }


               $title = $_POST['name_book'];
 
               $pname =  rand(1000,10000) . '_' . $_FILES['file']['name'];
            
               $tname = $_FILES['file']['tmp_name'];
            
               $uploads_dir = $_SERVER['DOCUMENT_ROOT'] ."/books" ;
            
               move_uploaded_file($tname , $uploads_dir . '/' . $pname);
       
             $data['name_book'] = $_POST['name_book'];        
             $data['pdf'] =  $pname;                
             $data['grade_id'] = $_POST['grade_id'];        
             $data['teacher_id'] = Auth::teacher('id');        
             $data['classroom_id'] = $_POST['classroom_id'];        
       
             $books->update($id,$data);
             $success = "Update SUCCESS";   

             return $this->redirect('mybook/index/'.Auth::teacher('id'));



            }else{
               $errorsfile = "Put txt OR pdf OR doc";
            } 
         }else{
         $errorsfile = "Please Put Size Less";
       }
           }else{
            $data['name_book'] = $_POST['name_book'];        
            $data['pdf'] =  $_POST['oldfile'];                
            $data['grade_id'] = $_POST['grade_id'];        
            $data['teacher_id'] = Auth::teacher('id');        
            $data['classroom_id'] = $_POST['classroom_id'];

            $success = "Update SUCCESS";   
            $books->update($id,$data);

           }     
       }
    } else{
     $errors  =  $books->errors;
    }    
 
    }
 
       return $this->view('books/edit',['rows'=>$rows,'grades'=>$grades , 'classrooms'=>$classrooms , 'errors'=>$errors ,'errorsfile'=>$errorsfile , 'success'=>$success]);
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
 
}