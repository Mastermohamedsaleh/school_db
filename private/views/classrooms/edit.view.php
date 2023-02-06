<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>
	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">


		<div class="card-group justify-content-center">
 

			 <form method="post">
			 	<h3>Edit classroom</h3>


           
                

               <?php   if($rows): ?>
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
	    	<?php	 foreach($rows as $row) : ?>
			 	<input autofocus class="form-control" value="<?php echo $row['classroom'];  ?>" type="text" name="classroom" placeholder="classroom Name"><br><br>
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <?php  endforeach ; ?>
     

            <select class="my-2 form-control" name="grade_id">
				<option>--Select a Gender--</option> 
                <?php  foreach($grades as $grade): ?>
				<option value="<?php echo $grade['id'] ?>" <?php  if($grade['id'] == $row['grade_id']){echo 'selected';} ?>><?php echo $grade['grade'] ?></option>
                <?php endforeach; ?>
			</select>

			 	<input class="btn btn-primary float-end" type="submit" value="Save">


		
			 	<a href="<?=ROOT?>/classroom">
			 		<input class="btn btn-danger" type="button" value="Cancel">
			 	</a>
	   

			 </form>
			
		</div>
		
         <?php else : ?>
			<div style="text-align: center;">
				<h3>That classroom was not found!</h3>
				<div class="clearfix"></div>
				<br><br>
				<a href="<?=ROOT?>/classroom">
			 		<input class="btn btn-danger" type="button" value="Cancel">
			 	</a>
		 	</div>
		
<?php endif ; ?>
		
	 
	</div>
 
<?php $this->view('layouts/footer')?>