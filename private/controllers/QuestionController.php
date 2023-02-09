<?php
 

  
class QuestionController extends Controller {
     


      public function index($id = null){
     
        $questions = $this->load_model("question");
        
        $rows =   $questions->where("test_id",$id);
               
      return $this->view("questions/index",['rows' => $rows]);
      }


     
}