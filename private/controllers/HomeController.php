<?php 




class HomeController extends Controller{
     
    public  function index($id = null)
    {  

    //   if(!Auth::logged_in())
		// {
		// 	$this->redirect('login');
		// }

      if(!Auth::logged_in_admin())
		{
         
 

			 
			$this->redirect('section');
		}

      // if(!Auth::logged_in_teacher())
		// {
		// 	$this->redirect('section');
		// }
 
      return $this->view('home');
    }

    public function teacher(){
      if(!Auth::logged_in_teacher())
		{

			 Auth::logoutteacher(); 

			$this->redirect('section');
		}
 
      return $this->view('home');
    }


	public function student(){
		if(!Auth::logged_in_student())
		{
			$this->redirect('section');
		}
		
		return $this->view('home');
	}
    
     
}