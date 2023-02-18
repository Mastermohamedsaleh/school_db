<?php  $this->view('layouts/header')?>
<?php  $this->view('layouts/nav')?>
	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	<h4 class ="text-center">Edit Profile</h4>
		<?php if($rows):?>

 <?php  foreach($rows as $row): ?>

		<?php
 			$image = get_image($row['image'],$row['gender']);
 		?>

		<form method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-sm-4 col-md-3">
				<img src="<?=$image?>" class="border d-block mx-auto" style="width:150px;">
 				<br>
			
			


               <input type="hidden" name="oldimage" value="<?php echo $row['image'] ?>"  > 
			
			</div>
			<div class="col-sm-8 col-md-9 bg-light p-2">
					<div class="p-4 mx-auto mr-4 shadow rounded" >
					

						<input class="my-2 form-control" value="<?php echo $row['name_admin']?>" type="text" name="name" placeholder="Name" >
						<input class="my-2 form-control" value="<?php echo $row['email']?>" type="email" name="email" placeholder="Email" >

					<input type="hidden"   name="id" value="<?php  echo $row['id'] ?>" >
 
						<input class="my-2 form-control" value="<?=get_var('password')?>" type="text" name="password" placeholder="Password">
						<input class="my-2 form-control" value="<?=get_var('password2')?>" type="text" name="password2" placeholder="Retype Password">
                        <input type="file" name="newimage" class="form-control"> 

						<br>



						<button class="btn btn-primary float-end">Save Changes</button>

						<a href="<?=ROOT?>/profile/adminprofile/<?=$row['id']?>">
							<button type="button" class="btn btn-danger">Back to profile</button>
						</a>
						 
					</div>
			</div>
		</div>
		</form>
		<br>
 		 <?php endforeach; ?>
		<?php else:?>
			<center><h4>That profile was not found!</h4></center>
		<?php endif;?>

	</div>

<?php  $this->view('layouts/footer')?>
