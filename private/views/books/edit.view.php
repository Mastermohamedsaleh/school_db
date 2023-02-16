<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>





<div class="container-fluid shadow  p-4 mx-auto" style="max-width: 1000px;">


<?php  if($rows):  ?>

 <h2 class="text-success text-center">Update Book</h2>


 <img src="<?=ROOT?>/logo.png"  class="shadow d-block mx-auto border border-primary  rounded-circle"   style="width:100px;margin-bottom:10px" alt="Logo"> 





 <?php  if($success): ?>
           <div class="alert alert-success alert-dismissible fade show p-1" role="alert">
				  <strong><?php  echo $success;  ?>:</strong>
                  <span  type="button" class="close float-end" data-bs-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </span>
				</div>
<?php endif; ?>


<?php if( $errorsfile ): ?>
  <div class="alert alert-danger alert-dismissible fade show p-1" role="alert">
				  <strong><?php  echo $errorsfile;  ?>:</strong>
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

<form method = "POST"   enctype="multipart/form-data" >

<?php  foreach($rows as $row): ?>

<h5>Name Book:</h5>
<input type="text" name="name_book" class="form-control mb-2"  value="<?php echo $row['name_book'] ?>" placeholder = "Name Book"  >





<h5>Pdf:</h5>
<input type="file" name="file" class="form-control mb-2"  >


<input type="hidden" name="id" value="<?php echo $row['id']?>">

<input type="hidden" name="oldfile" value="<?php echo $row['pdf']?>">


<h5>Grade:</h5>
<select name="grade_id" class="form-control mb-2" >
<?php  foreach($grades as $grade): ?>
    <option value="<?php  echo $grade['id']  ?>"><?php echo $grade['grade'] ?></option>
    <?php  endforeach; ?>
</select> 


<!-- Selected No Work -->
<h5>Classroom:</h5>
<select name="classroom_id" class="form-control mb-2">
<?php  foreach($classrooms as $classroom): ?>
    <option value="<?php  echo $classroom['id'] ?>"><?php echo $classroom['classroom'] ?></option>
    <?php  endforeach; ?>
</select>


<?php endforeach; ?>

<div class="row">

<div class="col-6">
<button  type="submit" class="btn btn-outline-success">Update Book</button>
</div>


<div class="col-6">
<a href="<?=ROOT?>/book"  class="btn btn-outline-danger">Cancle</a>
</div>


</div>




</form>
<?php else: ?>
  <h1 class="text-danger">No Book Here</h1>
   <a href="<?=ROOT?>/book">Cancle</a>
<?php  endif; ?>
</div>



<?php $this->view('layouts/footer')?>