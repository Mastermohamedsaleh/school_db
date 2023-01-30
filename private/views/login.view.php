

<?php  include('layouts/header.view.php'); ?>



<form method="post">
<div class="container-fluid">
  
 <div class="p-4 mx-auto shadow rounded" style="margin-top:50px;width:100%;max-width:340px;">
 
   <h2 class="text-center text-success">
    My School   
  </h2>

  <img src="assets/logo.png"  class="shadow d-block mx-auto border border-primary  rounded-circle"   style="width:100px;margin-bottom:10px"> 



  <?php if(count($errors) > 0):?>
			<div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
			  <strong>Errors:</strong>
			   <?php foreach($errors as $error):?>
			  	<br><?=$error?>
			  <?php endforeach;?>
			  <span  type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </span>
			</div>
			<?php endif;?>




<input class="form-control" value="<?=get_var('email')?>" type="email" name="email" placeholder="Email" autofocus autocomplete="off">
			<br>
			<input class="form-control" value="<?=get_var('password')?>" type="password" name="password" placeholder="Password">
			<br>
			<button class="btn btn-primary">Login</button>

 
   
  
 </div>
   


</div>
         </form>

<?php  include('layouts/footer.view.php'); ?>