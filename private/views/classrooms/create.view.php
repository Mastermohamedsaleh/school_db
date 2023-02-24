<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>
	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">


		<div class="card-group justify-content-center">
 
			 <form method="post">
			 	<h3>Add New Classroom</h3>



				 <?php  if( $success ): ?>
           <div class="alert alert-success alert-dismissible fade show" role="alert">
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
			
			 	<input autofocus class="form-control" value="<?=get_var('classroom')?>" type="text" name="classroom" placeholder="Classroom Name"><br><br>

                 <select class="my-2 form-control" name="grade_id">
				<option>--Select a Gender--</option> 
                <?php  foreach($grades as $grade): ?>
				<option value="<?php echo $grade['id'] ?>"  ><?php echo $grade['grade'] ?></option>
                <?php endforeach; ?>
			</select>
                 
			 	<input class="btn btn-primary float-end" type="submit" value="Create">

			 	<a href="<?=ROOT?>/classroom">
			 		<input class="btn btn-danger" type="button" value="Cancel">
			 	</a>
			 </form>
		</div>

		
	 
	</div>
 
<?php $this->view('layouts/footer')?>