<?php  $this->view('layouts/header')?>
<?php  $this->view('layouts/nav')?>



<?php if($rows):   ?>

	<div class="container-fluid">
		<form   method="post">
		<div class="p-4 mx-auto mr-4 shadow rounded" style="margin-top: 50px;width:100%;max-width: 340px;">
			<h2 class="text-center text-primary">My School</h2>
			<img src="<?=ROOT?>/assets/logo.png" alt="" class="border border-primary shadow rounded-circle d-block mx-auto" style="width:100px">
			<h3>Edit Parent</h3>

            <?php  if($success): ?>
           <div class="alert alert-success alert-dismissible fade show p-1" role="alert">
				  <strong><?php  echo $success;  ?>:</strong>
                  <span  type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
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
	
			 
		
    <?php   foreach($rows as $row): ?>

<input class="my-2 form-control" value="<?php echo $row['name_parent'] ?>" type="name" name="name_parent" placeholder="Name">
  
<input class="my-2 form-control" value="<?php echo $row['phone'] ?>" type="text" name="phone" placeholder="Phone" >
<input class="my-2 form-control" value="<?php echo $row['ssn'] ?>" type="text" name="ssn" placeholder="Ssn" >



<select name="student_id" class="form-control">
  <?php  foreach($students as $student):  ?>
    <option value="<?php    if( $student['id'] == $row['student_id'] ){'selected';}   echo $student['id']  ?>">  <?php   echo $student['name_student']; ?>  </option>
   <?php  endforeach ?>
</select>




             
<div class="mt-3">
<button type="submit"  class="btn btn-primary float-end">Edit Parent</button>

<a href="<?=ROOT?>/myparent" class="btn btn-danger">Cancel</a>
</div>
		
          
				
	


		</div>
	</div>
	</form>


<?php endforeach;  ?>


<?php else:  ?>
 
    <h1 class = 'text-danger text-center'>No Parent</h1>

    <?php endif; ?>



    <?php  $this->view('layouts/footer')?>


    