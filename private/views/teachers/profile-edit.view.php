<?php  $this->view('layouts/header')?>
<?php  $this->view('layouts/nav')?>
	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	<h4 class ="text-center">Edit Profile</h4>
		<?php if($rows):?>



		
            <?php if( $errorsfile ): ?>
  <div class="alert alert-danger alert-dismissible fade show p-1" role="alert">
				  <strong><?php  echo $errorsfile;  ?>:</strong>
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


 <?php  foreach($rows as $row): ?>

		<?php
 			$image = get_image($row['image'],$row['gender']);
 		?>

		<form method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-sm-4 col-md-3">
			<img src="<?php  echo $image ?>" class="	 border d-block mx-auto " style="width:150px;">

 				<br>
			
			


               <input type="hidden" name="oldimage" value="<?php echo $row['image'] ?>"  > 
			
			</div>
			<div class="col-sm-8 col-md-9 bg-light p-2">
					<div class="p-4 mx-auto mr-4 shadow rounded" >
					

						<input class="my-2 form-control" value="<?php echo $row['name']?>" type="text" name="name" placeholder="Name" >
						<input class="my-2 form-control" value="<?php echo $row['email']?>" type="email" name="email" placeholder="Email" >

					<input type="hidden"   name="id" value="<?php  echo $row['id'] ?>" >
 

                     <input type="hidden"  name="oldpassword"  value="<?php echo $row['password'] ?>">
                     <input type="hidden"  name="specialization_id"  value="<?php echo $row['specialization_id'] ?>">
                

                        <input type="file" name="newimage" class="form-control"> 

						<br>



						<button class="btn btn-primary float-end">Save Changes</button>

						<a href="<?=ROOT?>/profile/teacherprofile/<?=$row['id']?>">
							<button type="button" class="btn btn-danger">Back to profile</button>
						</a>
						 
					</div>
			</div>
		</div>
		</form>
		<br>
 		 <?php endforeach; ?>
		<?php else:?>
		<h4 class="test-center">That profile was not found!</h4>
		<?php endif;?>

	</div>

<?php  $this->view('layouts/footer')?>
