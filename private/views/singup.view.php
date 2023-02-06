<?php include('layouts/header.view.php')?>
	
	<div class="container-fluid">
		<form  action="singup" method="post">
		<div class="p-4 mx-auto mr-4 shadow rounded" style="margin-top: 50px;width:100%;max-width: 340px;">
			<h2 class="text-center text-primary">My School</h2>
			<img src="assets/logo.png" alt="" class="border border-primary rounded-circle d-block mx-auto" style="width:100px">
			<h3>Add User</h3>

			<?php   if(count($errors) > 0): ?>
				<strong>Errors!</strong>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <?php foreach($errors as $error):   ?>          

  <br> <?php echo $error?> 
      <?php endforeach; ?>
	  <span  type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </span>
      </div>

        <?php  endif; ?>
			 
			
<input class="my-2 form-control" value="<?php  get_var("firstname") ?>" type="firstname" name="firstname" placeholder="Frist Name" >
  
			<input class="my-2 form-control" value="<?php  get_var("lastname") ?>" type="lastname" name="lastname" placeholder="Last Name" >
			<input class="my-2 form-control" value="<?php  get_var("email") ?>" type="email" name="email" placeholder="Email" >

			<select class="my-2 form-control" name="gender">
				<option>--Select a Gender--</option> 
				<option value="Male" <?=get_select('gender', 'Male') ?>>Male</option>
				<option value="Female"  <?=get_select('gender', 'Female') ?>>Female</option>
			</select>


             
<?php  if(isset($_GET['mode']) == 'student') : ?>
   <input    type="hidden" name = "rank" value="student" >
<?php  else: ?>
			<select class="my-2 form-control" name="rank">
				<option value="" <?=get_select('rank', '') ?>>--Select a Rank--</option>
				<option value="student"  <?=get_select('rank', 'student') ?>  >Student</option>
				<option value="reception"  <?=get_select('rank', 'reception') ?>>Reception</option>
				<option value="lecturer"  <?=get_select('rank', 'lecturer') ?>>Lecturer</option>
				<option value="admin"  <?=get_select('rank', 'admin') ?>>Admin</option>
				<option value="super_admin"  <?=get_select('rank','super_admin') ?>>Super Admin</option>
			</select>
<?php endif; ?>
			<input class="my-2 form-control" type="password" name="password" placeholder="Password">
			<input class="my-2 form-control" type="password" name="password2" placeholder="Retype Password">
			<br>
			<button type="submit"  class="btn btn-primary float-end">Add User</button>

            
           <?php   if(isset($_GET['mode']) == 'student'): ?>
			<a href="<?=ROOT?>/student" class="btn btn-danger">Cancel</a>
            <?php else: ?>
			<a href="<?=ROOT?>/user" class="btn btn-danger">Cancel</a>
				
			<?php endif; ?>


		</div>
	</div>
	</form>

<?php include('layouts/footer.view.php')?>


