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
