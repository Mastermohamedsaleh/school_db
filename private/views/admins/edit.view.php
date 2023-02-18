<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>




<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">


<h2 class="text-success text-center">Edit Admin</h2>













<img src="<?=ROOT?>/logo.png"  class="shadow d-block mx-auto border border-primary  rounded-circle"   style="width:100px;margin-bottom:10px"> 







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







            
 <?php  if($success): ?>
           <div class="alert alert-success alert-dismissible fade show p-1" role="alert">
				  <strong><?php  echo $success;  ?>:</strong>
                  <span  type="button" class="close float-end" data-bs-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </span>
				</div>
           <?php endif; ?>




<form method="POST">

 <?php if($rows): ?>

<?php  foreach($rows as $row): ?>
<h5>Name Admin:</h5>
<input type="text" name="name_admin" class="form-control mb-2"  value="<?php  echo $row['name_admin'] ?>" placeholder = "Name Admin"  >




<h5>Email:</h5>
<input type="email" name="email" class="form-control mb-2"  value="<?php  echo $row['email'] ?>" placeholder = "Email" >




<h5>Gender:</h5>

<select name="gender"  class="form-control mb-3">
     <option value="Male">MaLe</option>
     <option value="Female">Female</option>
</select>

<input type="date"  name="dt" value="<?php echo $row['dt'] ?>" class="form-control mb-2">

<input type="hidden"   name="id" value="<?php  echo $row['id'] ?>">


<?php  endforeach; ?>








<button  type="submit" class="btn btn-outline-success">Update Admin</button>
<a  href="<?=ROOT?>/admin" class="btn btn-outline-danger float-end">Cancle</a>





</form>


<?php else: ?>
 
 <h3>No Admin</h3>
 <a  href="<?=ROOT?>/admin" class="btn btn-outline-danger">Cancle</a>

<?php endif; ?>


</div>




<?php $this->view('layouts/footer')?>