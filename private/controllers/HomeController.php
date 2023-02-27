<?php 




class HomeController extends Controller{
     
    public  function index($id = null)
    {  

      if(!Auth::logged_in_admin()  )
		{			 
			$this->redirect('section');
		}

      return $this->view('home');
    }

    public function teacher(){
      if(!Auth::logged_in_teacher())
		{

			 Auth::logoutteacher(); 

			$this->redirect('section');
		}


		$settings = $this->load_model('setting');

		$settings = $settings->findAll();
 
      return $this->view('home',['settings'=>$settings]);
    }


	public function student(){
		if(!Auth::logged_in_student())
		{
			$this->redirect('section');
		}
		$settings = $this->load_model('setting');

		$settings = $settings->findAll();
		return $this->view('home',['settings'=>$settings]);
	}
    
     
}