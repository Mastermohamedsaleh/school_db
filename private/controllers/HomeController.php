<?php 




class HomeController extends Controller{
     
    public  function index($id = null)
    {  

      if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
   
      return $this->view('home');
    }
    
     
}