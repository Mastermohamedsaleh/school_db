<?php 





class LogoutController extends Controller 
{
  
  public function index(){
    Auth::logout();
    return $this->redirect('/login'); 

}
}