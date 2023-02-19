


<?php 

 
  if( isset($_GET['name']) ){
   $name = $_GET['name'];
    $cp = curl_init();
   curl_setopt_array($cp,[
   CURLOPT_URL =>"https://api.agify.io?name={$name}",
   CURLOPT_RETURNTRANSFER =>true
   ]);
     
   $response = curl_exec($cp);
   $response = json_encode($response , true);

   var_dump($response);
  }










?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    

  <form  action= "" method = "GET">

  <input type="text"  name="name" placeholder = "Name">
      
   <button type="submit">Send</button>
  </form>
 


</body>
</html>