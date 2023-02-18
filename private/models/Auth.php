<?php 



class Auth  extends Database{
    public static function authenticateADMIN($row){
        $_SESSION['ADMIN'] = $row;  
    }
    public static function authenticateteacher($row){
        $_SESSION['TEACHER'] = $row;  
    }
    public static function authenticatestudent($row){
        $_SESSION['STUDENT'] = $row;  
    }
    public static function authenticateuser($row){
        $_SESSION['PARENT'] = $row;  
    }

    public static function logout()
	{
		if(isset($_SESSION['USER']))
		{
			unset($_SESSION['USER']);
		}
	}

    public static function logoutteacher()
	{
		if(isset($_SESSION['TEACHER']))
		{
			unset($_SESSION['TEACHER']);
		}
	}

    public static function logoutstudent()
	{
		if(isset($_SESSION['STUDENT']))
		{
			unset($_SESSION['STUDENT']);
		}
	}

    public static function logoutadmin()
	{
		if(isset($_SESSION['ADMIN']))
		{
			unset($_SESSION['ADMIN']);
		}
	}

    // public static function logged_in()
	// {
	// 	if(isset($_SESSION['USER']))
	// 	{
	// 		return true;
	// 	}

	// 	return false;
	// }

    public static function logged_in_admin()
	{
		if(isset($_SESSION['ADMIN']))
		{
			return true;
		}

		return false;
	}

    public static function logged_in_teacher()
	{
		if(isset($_SESSION['TEACHER']))
		{
			return true;
		}

		return false;
	}



   public static function logged_in_student(){
	if(isset($_SESSION['STUDENT']))
	{
		return true;
	}

	return false;
   }


// All Item In Teacher
   public   static function  teacher($item){

	foreach ($_SESSION['TEACHER'] as $value    ){
     
		$row =  $value[$item];
	 }

     return $row;
	
   }

   public   static function  admin($item){

	foreach ($_SESSION['ADMIN'] as $value    ){
     
		$row =  $value[$item];
	 }

     return $row;
	
   }

   public   static function  Student($item){

	foreach ($_SESSION['STUDENT'] as $value    ){
     
		$row =  $value[$item];
	 }

     return $row;
	
   }









    public static function user(){
        if(isset($_SESSION['USER']))
		{
			 $row = $_SESSION['USER']; 

			 

			 return $row['lastname'];
		}

    }
       
     
     
}