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
        $query = "SELECT * FROM $this->table";
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




        //  We use array_keys To make Key => value
        //  $column = implode(',', $keys);

        //  $values = implode(',:', $keys);  

        $column = implode(',', $keys);

        $values = implode(',:', $keys);
          
        $query = "INSERT INTO $this->table ($column)  VLAUES (:$values)"; 

        // $con = $this->connect();
        
        // $stm  = $con->prepare($query);

        // $stm->bindValue(":data", $data['data']);

        return     $this->query($query,$data);
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


  




 
        
}