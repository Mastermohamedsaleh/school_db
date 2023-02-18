<?php



class Admin extends Model{
     
  protected $allowedColumns = [
    'name_admin',
    'email',
    'password',
    'gender',
     'rank',
     'dt',
];

     public function validate($data){
       
         $this->errors = array();

        //  name
         if(empty($data['name_admin'])    ||  !preg_match("/^[a-z A-Z]+$/",$data['name_admin'])){
          $this->errors[] = "Only Letter Can Write  in Name Admin "; 
         } 

         if( strlen( $data['name_admin'] )  <   25  ||   strlen( $data['name_admin'] )  >   40    ){
          $this->errors[] = "Name Must Be Grather Than 25 Charcter And Name Must Be Less Than 40 Charecher"; 
         } 



        
        //email 
         if(  empty($data['email']) || !filter_var($data['email'],FILTER_VALIDATE_EMAIL)  ){
          $this->errors[] = "Please Write Email"; 
         } 
        //  Email already exist


        if( isset($data['id']) ){
          return true;
        }else{
         if($this->where('email',$data['email'])  ){
           $this->errors[] = "Email already exist"; 
          }
        }

        //Gender
         $gender = ['Female','Male'];
        if(empty($data['gender'])   ||   !in_array($data['gender'] , $gender)  ){
          $this->errors[] = "Gender Require"; 
        }
     


         if(strlen($data['password']) < 8){ 
          $this->errors[] = "The Password Must Be Greater Than 8 Charcter"; 
         }
          
         
         if(count($this->errors) == 0){
           return true;
         }
     
       return false;

     }


      
     
}