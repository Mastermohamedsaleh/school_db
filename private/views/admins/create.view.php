<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>




<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">


<h2 class="text-success text-center">Add Admin</h2>













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

<form method="POST">

<h5>Name Admin:</h5>
<input type="text" name="name_admin" class="form-control mb-2" placeholder = "Name Admin"  >




<h5>Email:</h5>
<input type="email" name="email" class="form-control mb-2" placeholder = "Email" >



<h5>Password:</h5>
<input type="password" name="password" class="form-control" placeholder = "Password" >

<h5>Gender:</h5>

<select name="gender"  class="form-control mb-3">
     <option value="Male">MaLe</option>
     <option value="Female">Female</option>
</select>


<input type="date"  name="dt" class="form-control">









<div class="mt-2">

<button  type="submit" class="btn btn-outline-success">Add Admin</button>
<a   href="<?=ROOT?>/admin" class="btn btn-outline-danger float-end">Cancle</a>


</div>




</form>





</div>




<?php $this->view('layouts/footer')?>