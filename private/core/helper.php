<?php


function get_var($key){
    
    if(isset($_POST[$key])){
        echo $_POST[$key];
    }
   
}

function get_select($key,$value){
    
    if(isset($_POST[$key])){ 
        if($_POST[$key] == $value){
          echo 'selected';
        }
    }
     
}

function get_image($image , $gender = 'male'){
    if(!file_exists($image)){
        $image = ROOT.'/assets/user_male.jpg'; 

             if($gender == "female"){
                $image = ROOT.'/assets/user_female.jpg'; 
             }
     
       }
       return $image;
}



// function errors($errors){
    
//  if(  isset($errors)  && count($errors) > 0):
//   echo ' <div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
//       <strong>Errors:</strong>';
//      foreach($errors as $error):
//         $error;
//      endforeach;
//     echo  '<span  type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
//         <span aria-hidden="true">&times;</span>
//       </span>
//     </div>';
//      endif;

//  return $error;
  

// }