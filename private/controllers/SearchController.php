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

    public function studentsinclassroom($id = null){

        if(!Auth::logged_in_admin())
        {
            $this->redirect('section');
        }
     
        $students = $this->load_model('student');


        if( isset( $_GET['find'] ) ){


            $search = $_GET['find'];

            $studentsinclass = $students->query("SELECT * FROM students WHERE name_student  LIKE '%$search%' AND classroom_id = $id");

            $classrooms = $this->load_model('Classroom');
            $rows = $classrooms->query("SELECT classrooms.id , classrooms.classroom ,classrooms.dt, grades.grade FROM classrooms INNER JOIN grades ON grades.id = classrooms.grade_id WHERE classrooms.id = $id");         
            return $this->view('classrooms/details',['studentsinclass'=>$studentsinclass ,'rows'=>$rows ]);
        }  

    }


}