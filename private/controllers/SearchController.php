<?php


class SearchController extends Controller {



 
    public function teachers(){
       
        if(!Auth::logged_in_admin())
        {
            $this->redirect('section');
        }
     
        $teacher = $this->load_model('Teacher');


        if( isset( $_GET['search'] ) ){


            $search = $_GET['search'];

            $teachers = $teacher->search('name',$search);

           
            return $this->view('teachers/index',['teachers'=>$teachers]);
        }
     
    
          
         
    }

    public function students(){

        if(!Auth::logged_in_admin())
        {
            $this->redirect('section');
        }
     
        $students = $this->load_model('student');


        if( isset( $_GET['find'] ) ){


            $search = $_GET['find'];

            $students = $students->search('name_student',$search);

           
            return $this->view('students/index',['students'=>$students]);
        }  

    }


}