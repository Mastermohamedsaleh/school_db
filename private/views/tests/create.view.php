<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>
	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	

		<div class="card-group justify-content-center">
 
			 <form method="post">
			 	<h3>Add New Test</h3>

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
			
<?php  if($success): ?>
           <div class="alert alert-success alert-dismissible fade show p-1" role="alert">
				  <strong><?php  echo $success;  ?>:</strong>
                  <span  type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </span>
				</div>
           <?php endif; ?>
			
<!-- I will Remove This when do teacher -->
  <input type="hidden"   name="teacher_id" value="1">  

	 <input autofocus class="form-control" value="<?=get_var('test')?>" type="text" name="test" placeholder="Test"><br><br>
 
	 <textarea   name = "description" cols="30" rows="10" placeholder = "Description"></textarea>


	 <input type="date" class="form-control" name="dt">
             <select class="my-2 form-control" name="grade_id">
				<option>--Select a Gender--</option> 
                <?php  foreach($grades as $grade): ?>
				<option value="<?php echo $grade['id'] ?>"  ><?php echo $grade['grade'] ?></option>
                <?php endforeach; ?>
		    </select>

                 <select class="my-2 form-control" name="classroom_id">
				<option>--Select a Gender--</option> 
                <?php  foreach($classrooms as $classroom): ?>
				<option value="<?php echo $classroom['id'] ?>"  ><?php echo $classroom['classroom'] ?></option>
                <?php endforeach; ?>
			</select>
                 
			 	<input class="btn btn-primary float-end" type="submit" value="Create">

			 	<a href="<?=ROOT?>/test/index/<?php echo Auth::teacher('id') ?>">
			 		<input class="btn btn-danger" type="button" value="Cancel">
			 	</a>
				
			 </form>
		</div>

		
	 
	</div>
 
<?php $this->view('layouts/footer')?>