<?php
 

  
class QuestionController extends Controller {
     


      public function index($id = null){
     
        $questions = $this->load_model("question");

        $tests = $this->load_model("test");
  
         $tests = $tests->where('id',$id);
        
        
        $rows =   $questions->where("test_id",$id);
   

               
      return $this->view("questions/index",['rows' => $rows  , 'tests'=>$tests]);
      }

     public function create($id){

      $tests = $this->load_model("test");
  
      $tests = $tests->where('id',$id); 
 
      $questions = $this->load_model("question");

     $errors = array();
     $success = array();

   if(count($_POST) > 0){
      if($questions->validate($_POST)){
         $arr = [];
         $num =  0;
         $letters = ['A','B','C','D','F','G','H','I','J']; 
        foreach($_POST as $key => $value){
            
           if(strstr($key, 'choice')){
             $arr[$letters[$num]] = $value;
             unset($_POST[$key]);
             $num++;       
           } 
            
        }

         $_POST['choices']   =    json_encode($arr);
 
          $questions->insert($_POST);

           $success = "Add Success";
      }else{
        $errors = $questions->errors;
      }     
   }
   

        return $this->view("questions/create",['tests' =>     $tests  , 'errors' => $errors , 'success' => $success]);      
     } 



     public function edit($id = null){
     
      $tests = $this->load_model("test");
  
      $tests = $tests->findAll();
 

        return $this->view("questions/edit",['tests' => $tests ]);
 
        
       
     }









    //  Display Test To Student
    public function display($id){

    if(!Auth::logged_in_student()){
        echo "You Are Not Student";
    }

    $tests = $this->load_model("test");
  
    $tests = $tests->where('id',$id);



    if(count($_POST) > 0){
      $errors = array();
      $answers = $this->load_model("Answer");
  


   foreach($_POST as $key => $value){
     

    if(is_numeric($key)){
    $arr['student_id'] = Auth::Student('id');

    $arr['test_id'] = $id;
    
    $arr['question_id'] = $key;

     $arr['answer'] = $value; 
    }
 
    $query = "SELECT id FROM answers WHERE student_id = :student_id AND test_id = :test_id AND question_id = :question_id";

    $check = $answers->query($query,[
     
       "student_id" => Auth::Student('id'),
       'test_id' => $id,
       'question_id' =>    $arr['question_id']
     
    ]); 
 


  if(!$check){
    
  

  $answers->insert($arr);
   
  }else{
      return $this->view("endtest"); 
  }





  }




     }

    $questions = $this->load_model("question");

    $rows =   $questions->where("test_id",$id);

      return $this->view("questions/display",['rows'=>$rows , 'tests' => $tests  ]);
    }


     
}