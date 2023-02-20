<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>








<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">


<h4 class="text-center text-success">Edit Password</h4>



<?php if( $errorpassword ): ?>
  <div class="alert alert-danger alert-dismissible fade show p-1" role="alert">
				  <strong><?php  echo $errorpassword;  ?>:</strong>
                  <span  type="button" class="close float-end" data-bs-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </span>
				</div>
<?php endif; ?>


<?php if(count($errors) > 0):?>
				<div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
				  <strong>Errors:</strong>
				   <?php foreach($errors as $error):?>
				  	<br><?=$error?>
				  <?php endforeach;?>
				  <span  type="button" class="close float-end" data-bs-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </span>
				</div>
				<?php endif;?>

            
			<?php  if($success): ?>
           <div class="alert alert-success alert-dismissible fade show p-1" role="alert">
				  <strong><?php  echo $success;  ?>:</strong>
                  <span  type="button" class="close float-end" data-bs-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </span>
				</div>
           <?php endif; ?>

<div class="row">
<?php  foreach($rows as $row): ?>
<?php
 			$image = get_image($row['image'],$row['gender']);
 		?>



<div class=" col-sm-12 col-lg-4">

<img src="<?php  echo $image ?>" class="	 border d-block mx-auto " style="width:150px;">


</div>


<div class="col-sm-12 col-lg-8">


<form method="POST">

<input class="my-2 form-control"  value="<?=get_var('password')?>"  type="password" name="oldpassword" placeholder="Password">
<input class="my-2 form-control"  value="<?=get_var('password2')?>" type="password" name="password" placeholder="Retype Password">

<a  href = "<?=ROOT?>/profile/adminprofile/<?php echo $row['id'] ?>" class="btn-sm  btn btn-outline-danger " >Cancle</a>

<button type="submit" class="btn-sm btn  btn-outline-success float-end" >Change</button>


</form>
<?php endforeach; ?>


</div>



</div>




</div>






<?php $this->view('layouts/footer')?>