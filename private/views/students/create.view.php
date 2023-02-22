<?php  $this->view('layouts/header')?>
<?php  $this->view('layouts/nav')?>



<div class="container-fluid">
		<form  method="post">
		<div class="p-4 mx-auto mr-4 shadow rounded" style="margin-top: 50px;width:100%;max-width: 340px;">
			<h2 class="text-center text-primary">My School</h2>
			<img src="<?=ROOT?>/logo.png" alt="" class="border shadow border-primary rounded-circle d-block mx-auto" style="width:100px">
			<h3>Add Student</h3>
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
       
			 
			
   
			<input class="my-2 form-control" name="name_student" type="text" name="name_student" placeholder="Name" >
			<input class="my-2 form-control" name="email"  type="email" name="email" placeholder="Email" >
			<input class="my-2 form-control" name="password"  type="password" name="password" placeholder="Password" >

			<select class="my-2 form-control" name="gender"> 
				<option value="Male">Male</option>
				<option value="Female" >Female</option>
			</select>





			<select class="my-2 form-control" name="grade_id">
                  <?php  foreach($grades as $grade): ?>
                    <option value="<?php   echo $grade['id']  ?>" ><?php echo $grade['grade']?></option>
                <?php endforeach; ?>
			</select>







			<select class="my-2 form-control" name="classroom_id">
                  <?php  foreach($classrooms as $classroom): ?>
                    <option value="<?php echo $classroom['id']  ?>" ><?php echo $classroom['classroom']?></option>
                <?php endforeach; ?>
			</select>






		
			
			<button type="submit"  class="btn btn-primary">Add Student</button>



	
		<a href="<?=ROOT?>/student"  class="btn btn-danger float-end ">Cancle</a>	

             
            
       


		</div>
	</div>

			
	</form>
 























<?php  $this->view('layouts/footer')?>