<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>




<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">


<h2 class="text-success text-center">Add Parent</h2>




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
<img src="<?=ROOT?>/logo.png"  class="shadow d-block mx-auto border border-primary  rounded-circle"   style="width:100px;margin-bottom:10px"> 


<form method="POST">

<h5>Name Parent:</h5>
<input type="text" name="name_parent" class="form-control mb-2" placeholder = "Name Parent"  >




<h5>Phone:</h5>
<input type="text" name="phone" class="form-control mb-2" placeholder = "Phone" >

<h5>Ssn:</h5>
<input type="text" name="ssn" class="form-control mb-2" placeholder = "SSN" >





<h5>Student:</h5>
<select name="student_id" class="form-control mb-2" >
<?php  foreach($students as $student): ?>
    <option value="<?php echo $student['id'] ?>"><?php echo $student['name_student'] ?></option>
    <?php  endforeach; ?>
</select> 



<button  type="submit" class="btn btn-outline-success">Add Parent</button>


</form>





</div>




<?php $this->view('layouts/footer')?>