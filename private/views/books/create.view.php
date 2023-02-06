<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>





<div class="container-fluid shadow  p-4 mx-auto" style="max-width: 1000px;">

 <h2 class="text-success text-center">Add Book</h2>


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



<h5>Name Book:</h5>
<input type="text" name="name_book" class="form-control mb-2" placeholder = "Name Book"  >


<!-- I will Remove Teacher id -->
<input type="text" name="teacher_id" value="1">


<h5>Pdf:</h5>
<input type="file" name="file" class="form-control mb-2" placeholder = "Pdf" >



<h5>Grade:</h5>
<select name="grade_id" class="form-control mb-2" >
<?php  foreach($grades as $grade): ?>
    <option value="<?php echo $grade['id'] ?>"><?php echo $grade['grade'] ?></option>
    <?php  endforeach; ?>
</select> 


<h5>Classroom:</h5>
<select name="classroom_id" class="form-control mb-2">
<?php  foreach($classrooms as $classroom): ?>
    <option value="<?php echo $classroom['id'] ?>"><?php echo $classroom['classroom'] ?></option>
    <?php  endforeach; ?>
</select>




<div class="row">

<div class="col-6">
<button  type="submit" class="btn btn-outline-success">Add Book</button>

</div>


<div class="col-6">
<a href=""  class="btn btn-outline-danger"> Cancle</a>

</div>




</div>




</form>


</div>










<?php $this->view('layouts/footer')?>