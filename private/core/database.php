<?php 

class Database{ 
       

    private function connect()
	{
		$string = DBDRIVER . ":host=".DBHOST.";dbname=".DBNAME;
		if(!$con = new PDO($string,DBUSER,DBPASS)){
			die("could not connect to database");
		}

		return $con;
	}



    public function query($query , $data = array()){      
        $con = $this->connect();
		$stm = $con->prepare($query);

        // $stm->execute($data);

  if($stm){

     $check = $stm->execute($data);

     if($check){
        $result = $stm->fetchAll();
     }
 
 
     return $result;
    //  if(is_array($data) && count($data) > 0){
    //     return $result;
    //  }

  }
 
 
 
 
         
      



    }

    
   


        
    
     
 
     
      
}