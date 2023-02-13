<?php 





class LogoutController extends Controller 
{
  
  public function index($value){

  if($value == 'STUDENT'){
    Auth::logoutstudent();
    return $this->redirect('/section');
  }elseif($value == 'TEACHER'){
    Auth::logoutteacher();
    return $this->redirect('/section'); 
  }else{
    Auth::logoutadmin();
    return $this->redirect('/section'); 
  }

    // Auth::logout();
    // return $this->redirect('/login'); 
}


// public function logoutstudent(){
//   Auth::logoutstudent();
//   return $this->redirect('/section'); 

// }


// public function logoutteacher(){
//   Auth::logoutteacher();
//   return $this->redirect('/section'); 
// }


}