<?php 



class Auth{
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

    public static function logged_in()
	{
		if(isset($_SESSION['USER']))
		{
			return true;
		}

		return false;
	}

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

    public static function user(){
        if(isset($_SESSION['USER']))
		{
			 $row = $_SESSION['USER']; 

			 

			 return $row['lastname'];
		}

    }
       
     
     
}