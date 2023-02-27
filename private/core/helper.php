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
    if(  empty($image) ){
        $image = ROOT.'/assets/user_male.jpg'; 

             if($gender == "female"){
                $image = ROOT.'/assets/user_female.jpg'; 
             }
     
       }else{
          $image =  "/uploads"."/".$image;
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



// function edit( $th,$type , $id , $typeprofile ,$oldimage = "" , $post = array()  , $file){



//     $types = $th->load_model($type);     
//     $rows = $types->where('id',$id);


//     $success = array();
//     $errorsfile = array();
//     $errors = array();
//     // $arr = array();
//     if(count($_POST) > 0){


//       if($types->validate($_POST)){


//         if(count($_FILES) > 0){
          
//           if($_FILES['newimage']['tmp_name'] != ""){

//             if( $_FILES['newimage']['size'] < 10 * 1024 * 1024 ){ 
  
  
//               $image_extension = pathinfo($_FILES["newimage"]["name"], PATHINFO_EXTENSION); 
          
//               $type =  array('jpg', 'png');
        
//               if ( in_array( $image_extension , $type ) ) {
                 
  
//                  $filename = $_SERVER['DOCUMENT_ROOT']."/uploads"."/".$oldimage;
  
      

//                  $file =    file_exists($filename);
           
//                  if(  isset( $file )  ){ 

                  
//                     unlink($filename);

//                     $pname =  rand(1000,10000).'_'.$_FILES['newimage']['name'];
              
//                     $tname = $_FILES['newimage']['tmp_name'];
                 
//                     $uploads_dir = $_SERVER['DOCUMENT_ROOT']."/uploads";
                 
//                     move_uploaded_file($tname , $uploads_dir . '/' . $pname);
            
//                     // $arr['name'] = $_POST['name'];
       
//                     $arr['image'] =    $pname;        
            
                 
//                   $types->update($id,$arr);
                      
             
  
//                   return $th->redirect("profile/".$typeprofile."/".Auth::$type('id'));


//                  }else{
//                   echo "Bad";
//                  }
                
               
//               }else{
//                  $errorsfile = "Put jpg OR png";
//               } 
//            }else{
//            $errorsfile = "Please Put Size Less";
//          }
  

//         }else{
          
//           print_r(  $post  );
          
//              $arr['image'] = $_POST['oldimage']; 
           
           
//              $types->update($id, $arr);
  
     
//              $success = "Update Success"; 
  
//         }      

//         }


//       }else{
//         $errors = $types->errors;
//       }
   
            
//      }
//     return $th->view($file."/profile-edit",['rows'=>$rows  ,'errors'=>$errors ,'success'=>$success ,'errorsfile'=>$errorsfile]);


// }

