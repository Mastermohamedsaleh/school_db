<?php  $this->view('layouts/header')?>
<?php  $this->view('layouts/nav')?>


<?php   if($rows): ?>


   <?php  foreach($rows as $row):  ?>





<div class="container-fluid">
		<form  method="post">
		<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
			<h2 class="text-center text-primary">My School</h2>
			<h3>Edit Test</h3>

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
			 
			
   <input type="hidden" name="id"  value="<?php echo $row['id'] ?>" >

			<input class="my-2 form-control" value="<?php echo $row['test'] ?>" type="text" name="test" placeholder="Test" >

            <textarea   name = "description"  placeholder="Description"  cols="30" rows="10" placeholder = "Description"><?php echo $row['description'] ?></textarea>
	  
             <input type="date" class="form-control" name="dt">


			<input type="hidden" value="<?php echo $row['id'] ?>">


			<select class="my-2 form-control" name="grade_id">
                  <?php  foreach($grades as $grade): ?>
                    <option value="<?php  if($grade['id'] == $row['grade_id']) {'selected';} echo $grade['id']  ?>" ><?php echo $grade['grade']?></option>
                <?php endforeach; ?>
			</select>







	<select class="my-2 form-control" name="classroom_id">
                  <?php  foreach($classrooms as $classroom): ?>
                    <option value="<?php  if($classroom['id'] == $row['classroom_id']) {'selected';} echo $classroom['id']  ?>" ><?php echo $classroom['classroom']?></option>
                <?php endforeach; ?>
	</select>






		
			
    <input class="btn btn-primary float-end" type="submit" value="Edit Test">


<!--  -->
		    <a   href="<?=ROOT?>/test/index/<?php echo Auth::teacher('id') ?>"  class="btn btn-danger ">Cancle</a>	
		

             
            
       
            <?php endforeach; ?>

		</div>
	</div>

			
	</form>
 <?php  else: ?>
 <h1 class="text-danger text-center">No Teats Here</h1>

 <a   href="<?=ROOT?>/test/index/<?php echo Auth::teacher('id') ?>"  class="btn btn-danger ">Cancle</a>	


<?php  endif;  ?>


<?php  $this->view('layouts/footer')?>