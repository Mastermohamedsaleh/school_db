<?php


class MarkController extends Controller{

     
  public function index($id){
    $id = explode('/',$id);
 
   $student_id =   $id[0] . "<br>";
   @$test_id =   $id[1];
     
   
    if(!isset( $test_id)  && empty(  $test_id)  ||   !isset( $student_id)  && empty( $student_id) ){
      return $this->view('404');
    }


  $answers = $this->load_model("answer");
  // $rows =  $answers->where("student_id", $student_id );
  
  
  $rows =  $answers->query("SELECT answers.id , answers.test_id , answers.answer , answers.student_id , questions.question  FROM answers INNER JOIN questions ON answers.question_id = questions.id    WHERE answers.student_id =  :student_id AND answers.test_id = :test_id  ", ['student_id' =>$student_id , 'test_id'=>$test_id ] );

  $errors = array();
  if(count($_POST) > 0){
    $mark = $this->load_model("mark");

      if($mark->validate($_POST)){
       echo "Success";
      }else{
        $errors = $mark->errors;
      }
            
 }


return $this->view("marks/index" , ['rows'=>$rows , 'errors' => $errors] );


  
 
 



   
  }





     
      
     
}