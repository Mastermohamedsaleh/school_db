<?php


class StudentClassController extends Controller {


  public function index($id = null){
    

//   echo $id;


 $id = explode('/',$id);
 
 $classroom_id =   $id[0];
 @$test_id =   $id[1];
  

 if(!isset( $test_id)  && empty(  $test_id)  ||   !isset( $classroom_id)  && empty( $classroom_id) ){
   return $this->view('404');
 }



    $students =  $this->load_model('Student');



    $rows  = $students->where('classroom_id',$classroom_id);
    


   return $this->view('students/studentclass',['rows' => $rows , 'test_id' => $test_id  ]); 


     
  }


}