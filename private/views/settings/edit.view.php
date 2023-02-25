<?php  $this->view('layouts/header')?>
<?php  $this->view('layouts/nav')?>





<div class="container-fluid">
		<form  method="post">
		<div class="p-4 mx-auto mr-4 shadow rounded" style="margin-top: 50px;width:100%;max-width: 340px;">

        <h4 class="text-center text-primary">Setting</h4>




        <?php  if($success): ?>
           <div class="alert alert-success alert-dismissible fade show p-1" role="alert">
				  <strong><?php  echo $success;  ?>:</strong>
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
				  <span  type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </span>
				</div>
				<?php endif;?>



<?php  if($rows): ?>
<?php  foreach($rows as $row): ?>
    <input type="text" name="facebook"   placeholder="facebook" value="<?php echo $row['facebook'] ?>" class="form-control mb-2">
    <input type="text" name="instagram"   placeholder="instagram" value="<?php echo $row['instagram'] ?>" class="form-control mb-2">
    <input type="text" name="twitter"   placeholder="twitter" value="<?php echo $row['twitter'] ?>" class="form-control mb-2">
    <input type="text" name="phone"   placeholder="Phone" value="<?php echo $row['phone'] ?>" class="form-control mb-2">
 <?php  endforeach; ?>

 <a href="<?=ROOT?>/setting" class="btn btn-danger" >Cancle</a>
    <button  class="btn btn-primary float-end" >Update</button>


<?php  else: ?>

     <h1>No Settings</h1>
     <a href="<?=ROOT?>/setting" class="btn btn-danger">Cancle</a>
    <?php endif; ?>

  
        </div>

      </form>

</div>       





<?php  $this->view('layouts/footer')?>