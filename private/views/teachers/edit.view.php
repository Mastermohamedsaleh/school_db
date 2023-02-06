<?php  $this->view('layouts/header')?>
<?php  $this->view('layouts/nav')?>


<?php   if($rows): ?>


   <?php  foreach($rows as $row):  ?>
<div class="container-fluid">
		<form  method="post">
		<div class="p-4 mx-auto mr-4 shadow rounded" style="margin-top: 50px;width:100%;max-width: 340px;">
			<h2 class="text-center text-primary">My School</h2>
			<img src="<?=ROOT?>/assets/logo.png" alt="" class="border shadow border-primary rounded-circle d-block mx-auto" style="width:100px">
			<h3>Edit Teacher</h3>

            <?php  if($success): ?>
           <div class="alert alert-success alert-dismissible fade show p-1" role="alert">
				  <strong><?php  echo $success;  ?>:</strong>
                  <span  type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </span>
				</div>
           <?php endif; ?>

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
			 
			
   <input type="hidden" name="id">
			<input class="my-2 form-control" value="<?php echo $row['name'] ?>" type="text" name="name" placeholder="Name" >
			<input class="my-2 form-control" value="<?php echo $row['email'] ?>" type="email" name="email" placeholder="Email" >

			<select class="my-2 form-control" name="gender"> 
				<option value="Male"  >Male</option>
				<option value="Female" >Female</option>
			</select>


			<select class="my-2 form-control" name="specialization_id">
                  <?php  foreach($specializations as $specialization): ?>
                    <option value="<?php  if($specialization['id'] == $row['specialization_id']) {'selected';}echo $specialization['id']  ?>" ><?php echo $specialization['name_specialization']?></option>
                <?php endforeach; ?>
			</select>






		
			<br>
			<button type="submit"  class="btn btn-primary float-end">Edit Teacher</button>
			<a  href="<?=ROOT?>/teacher/profile/<?php echo $row['id'] ?>" type="button"  class="btn btn-danger float-start">Cancle</a>
             
            
       
            <?php endforeach; ?>

		</div>
	</div>
	</form>
 <?php  else: ?>
 <h1 class="text-danger text-center">No Teacher Here</h1>



<?php  endif;  ?>























<?php  $this->view('layouts/footer')?>