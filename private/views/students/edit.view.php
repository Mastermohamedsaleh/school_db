<?php  $this->view('layouts/header')?>
<?php  $this->view('layouts/nav')?>


<?php   if($rows): ?>


   <?php  foreach($rows as $row):  ?>
<div class="container-fluid">
		<form  method="post">
		<div class="p-4 mx-auto mr-4 shadow rounded" style="margin-top: 50px;width:100%;max-width: 340px;">
			<h2 class="text-center text-primary">My School</h2>
			<img src="<?=ROOT?>/assets/logo.png" alt="" class="border shadow border-primary rounded-circle d-block mx-auto" style="width:100px">
			<h3>Edit Student</h3>

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
			<input class="my-2 form-control" value="<?php echo $row['name_student'] ?>" type="text" name="name_student" placeholder="Name" >
			<input class="my-2 form-control" value="<?php echo $row['email'] ?>" type="email" name="email" placeholder="Email" >

			<select class="my-2 form-control" name="gender"> 
				<option value="<?php if($row['gender'] == "Male"){"selected";} ?>">Male</option>
				<option value="<?php if($row['gender'] == "Female"){"selected";}  ?>" >Female</option>
			</select>


			<input type="hidden" value="<?php echo $row['id'] ?>">


			<select class="my-2 form-control" name="grade_id">
                  <?php  foreach($grades as $grade): ?>
                    <option value="<?php  if($grade['id'] == $row['grade_id']) {'selected';} echo $grade['id']  ?>" ><?php echo $grade['grade']?></option>
                <?php endforeach; ?>
			</select>







			<select class="my-2 form-control" name="classroom_id">
                  <?php  foreach($classrooms as $classroom): ?>
                    <option value="<?php  if($classroom['id'] == $row['classroom_id']) {'selected';}echo $classroom['id']  ?>" ><?php echo $classroom['classroom']?></option>
                <?php endforeach; ?>
			</select>






		
			
			<button type="submit"  class="btn btn-primary float-end">Edit Student</button>



			<a  href="<?=ROOT?>/profile/studentprofile/<?php echo $row['id'] ?>" >
		<button type="button"  class="btn btn-danger float-start">Cancle</button>	
		
		</a>
             
            
       
            <?php endforeach; ?>

		</div>
	</div>

			
	</form>
 <?php  else: ?>
 <h1 class="text-danger text-center">No Student Here</h1>



<?php  endif;  ?>























<?php  $this->view('layouts/footer')?>