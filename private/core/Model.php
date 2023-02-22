<?php 



class Model extends Database{
     

    public $errors = array();

 


    public function __construct(){
         if(!property_exists($this , 'table' )){
              $this->table = strtolower($this::class) . 's';
         }
    }
       
    public function where($column , $value){
           
        $query = "SELECT * FROM $this->table WHERE $column = :value ";     
        
         
       return $this->query($query,[
         'value'=>$value
       ]);    
    }
   

    public function findAll(){
        $query = "SELECT * FROM $this->table ORDER BY id DESC";
        return $this->query($query); 
          
    }


    public function insert($data){


        if(property_exists($this , 'allowedColumns' )){
                  foreach($data as $key => $column){
                    if(!in_array($key , $this->allowedColumns )){
                      unset($data[$key]);
                    }  
                  } 
       }

     $keys = array_keys($data);
     $columns = implode(',', $keys);
     $values = implode(',:', $keys);

     $query = "insert into $this->table ($columns) values (:$values)";

     return $this->query($query,$data);

     //   $keys = array_keys($data);




        //  We use array_keys To make Key => value
        //  $column = implode(',', $keys);

        //  $values = implode(',:', $keys);  

     //    $column = implode(',', $keys);

     //    $values = implode(',:', $keys);
          
     //    $query = "INSERT INTO $this->table ($column)  VLAUES (:$values)"; 

        // $con = $this->connect();
        
        // $stm  = $con->prepare($query);

        // $stm->bindValue(":data", $data['data']);


     //    "INSERT INTO USERS('','','') VALUES('','','')";
     //     "INSERT INTO $this->table() VALUES('','','')"
         
    





     // $data = array_keys($data);
    
    
    
    
       
     //  $str = "";  
     //  $values = "";  
     //  foreach($data as $key => $value){
     //      $str .= $key .",";
     //      $values .= $value . ",";
     //  } 
    
     //  $str = trim($str,",");
     //  $values = trim($values,",");
    
     //  $query = "INSERT INTO $this->table($str) VALUES($values)";
    
     //  return  $this->query($query,$data);
    

    }
     




    public function update($id,$data){ 
         
         $str = "";  
         foreach($data as $key => $value ){
             $str .= $key ."=:" . $key . "," ;
         } 

         $str = trim($str,",");

         $data['id'] = $id;
         $query = "UPDATE $this->table SET $str WHERE id = :id";

         return  $this->query($query,$data);

    }

    public function delete($id){

         $data['id'] = $id;
         $query = "DELETE FROM $this->table WHERE id = :id";
       

         return  $this->query($query,$data);
    
    }

//     Search

    public function search($key , $search){
     $query =  "SELECT * FROM $this->table WHERE  $key LIKE '%$search%' ";

       

     return  $this->query($query);
    }







    
    public function findUserByEmail($email,$password){
      $query = "SELECT * FROM $this->table WHERE email = :email  AND password = :password";
      $data['email'] = $email;
      $hpassword = $data['email'];
      $data['password'] = sha1($password);
      // if(count( $row )  == false ) return false ;  
      return $this->query($query,$data);
 }
     




         
}