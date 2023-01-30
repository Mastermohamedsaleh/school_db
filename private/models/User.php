<?php



class User extends Model{
     
  protected $allowedColumns = [
    'firstname',
    'lastname',
    'email',
    'password',
    'gender',
    'rank',
    'dt',
];

     public function validate($data){
       
         $this->errors = array();

        //  Firstname
         if(empty($data['firstname'])    ||  !preg_match("/^[a-zA-Z]+$/",$data['firstname'])){
          $this->errors[] = "Only Letter Can Write Here"; 
         } 
          //  Lastname
         if(  empty($data['lastname']) || !preg_match("/^[a-zA-Z]+$/",$data['lastname'])){
          $this->errors[] = "Only Letter Can Write Here"; 
         } 
        //email 
         if(  empty($data['email']) || !filter_var($data['email'],FILTER_VALIDATE_EMAIL)  ){
          $this->errors[] = "Please Write Email"; 
         } 
        //  Email already exist
         if(  $this->where('email',$data['email'])  ){
          $this->errors[] = "Email already exist"; 
         } 
        //Gender
         $gender = ['Female','Male'];
        if(empty($data['gender'])   ||   !in_array($data['gender'] , $gender)  ){
          $this->errors[] = "Gender Require"; 
        }
        //Rank
        $rank = ['student','reception','lecturer','admin','super_admin'];
        if(empty($data['rank'])   ||   !in_array($data['rank'] , $rank)  ){
          $this->errors[] = "Rank Require"; 
        }




        //  Password
         if(empty($data['password']) || $data['password'] != $data['password2'] ){
            $this->errors[] = "The Password Not match"; 
         }  

         if(strlen($data['password']) <= 8){ 
          $this->errors[] = "The Password Must Be Greater Than 8 Charcter"; 
         }
          
         
         if(count($this->errors) == 0){
           return true;
         }
     
       return false;

     }


     public function findUserByEmail($email,$password){
      $query = "SELECT * FROM users WHERE email = :email  AND password = :password";
      $data['email'] = $email;
      $hpassword = $data['email'];
      $data['password'] = sha1($password);
      // if(count( $row )  == false ) return false ;  
      return $this->query($query,$data);
 }
     
      
     
}