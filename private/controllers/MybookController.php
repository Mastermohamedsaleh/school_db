<?php


class MybookController extends Controller {


// Book One Teacher
public function index($id = null){
    
    if($id !=  Auth::teacher('id')){
        echo "NO Book Here";
        die; 
    }
     
  
 
       $books = $this->load_model('book');
   
       $rows =  $books->query("SELECT books.id , books.name_book ,books.teacher_id , grades.grade , classrooms.classroom  FROM books INNER JOIN grades ON books.grade_id = grades.id INNER JOIN 

       classrooms ON books.classroom_id = classrooms.id    WHERE books.teacher_id = :id ", ['id'=>$id]  );
        return $this->view("books/mybook",['rows'=> $rows]); 
        
    }
     

}