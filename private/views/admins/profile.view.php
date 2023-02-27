<?php  $this->view('layouts/header')?>
<?php  $this->view('layouts/nav')?>
	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	
		<?php  if($rows): ?>
	<?php	foreach($rows as $row) : ?>
    
		<?php 
		   $image = $row['image'];
		   $gender = $row['gender']; 
		   $image = get_image($image,$gender);	
	   ?> 



		<div class="row">
			<div class="col-sm-4 col-md-3">
				<img src="<?php  echo $image ?>" class="border d-block mx-auto  " style="width:100px;">
				<h3 class="text-center"><?php echo  substr( $row['name_admin'] ,0 , 14 ) ?></h3>
				<div class="text-center">

       
			
			<a href="<?=ROOT?>/Changepassword/adminpass/<?php  echo $row['id']?>" class="btn-sm btn btn-success" >Change Password</a>
			<a href="<?=ROOT?>/Profiledit/editadmin/<?php echo $row['id'] ?>">
               <button class="btn-sm btn btn-danger">Edit Profile</button>
            </a>

				</div>

			</div>
			<div class="col-sm-8 col-md-9 bg-light p-2">
				<table class="table table-hover table-striped table-bordered">
				
					<tr><th>Name:</th><td><?php echo $row['name_admin']; ?></td></tr>
					<tr><th>Gender:</th><td><?php echo $row['gender']; ?></td></tr>
					<tr><th>Email:</th><td><?php echo $row['email']; ?></td></tr>
					
					

			</tr>
				
				
                     
               <?php endforeach; ?>
			    <?php  else : ?>
					 <tr><td >  <h1 class="text-danger"> No Admin</h1> </td></tr>
                <?php  endif; ?>

				</table>
			</div>
		</div>
		<br>

	</div>

	<?php  $this->view('layouts/footer')?>