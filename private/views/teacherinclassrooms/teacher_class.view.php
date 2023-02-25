<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>







<div class="container shadow  p-5  mx-auto"  style="max-width: 1000px;">

<h4>Add Teacher Into Class</h4>










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




<form method="POST">
<div class="row">
    <div class="col">
    <select name="teacher_id" class="form-control">
<?php foreach($teachers as $teacher): ?>
<option value="<?php echo $teacher['id'] ?>"><?php echo $teacher['name'] ?></option>
<?php endforeach; ?>
</select>
    </div>
    <div class="col">
  
    <select name="classroom_id" class="form-control">
    <?php foreach($classrooms as $classroom): ?> 
<option value="<?php echo $classroom['id'] ?>"><?php echo $classroom['classroom']?></option>
<?php endforeach; ?>
</select>
    </div>

    <div class="col">
        <button class="btn btn-primary">Add</button>
    </div>
</div>

</form>






<?php   if($rows): ?>

   
 
    <h5 class="mt-3">Teacher in Classroom</h5>

<div class="card-group justify-content-center">
    <table class="table table-striped table-hover text-center">
        <th>#</th><th>Teacher</th><th>Classroom</th><th>Action</th>
      
        </tr>
 
   <?php  $i = 0 ?>
        <?php foreach($rows as $row): ?>
            <tr>
            <td><?php  echo ++$i ?></td>
            <td><?php  echo $row['name'] ?></td>
            <td><?php  echo $row['classroom'] ?></td>
            <td>  <a href="<?=ROOT?>/Teacherclassroom/edit/<?php  echo $row['id'] ?>/<?php echo $row['teacher_id'] ?>/<?php echo $row['classroom_id'] ?>" class="btn btn-info">Edit</a> </td>
   
            </tr>   
      <?php  endforeach; ?>



    <?php  else: ?>
<h1>No Teacher In Classroom</h1>

        <?php endif ?>



    </table>

























</div>


<?php $this->view('layouts/footer')?>