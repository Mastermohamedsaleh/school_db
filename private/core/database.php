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
        
        $stm  = $con->prepare($query);
     
        if($stm){
            $check = $stm->execute($data);
             
            $data = $stm->fetchAll();  
               
              if(is_array($data) && count($data) > 0){
                 return $data;
              }
        }
         
      



    }


        
    
     
 
     
      
}