<?php  $this->view('layouts/header')?>
<?php  $this->view('layouts/nav')?>
	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	
		<?php if($rows): ?>
	<?php	foreach($rows as $row) : ?>
    
		<?php 
		   $image = $row['image'];
		   $gender = $row['gender']; 
		   $image = get_image($image,$gender);	
	   ?> 



		<div class="row">
			<div class="col-sm-4 col-md-3">
				<img src="<?php echo $image; ?>" class="border border-primary d-block mx-auto rounded-circle " style="width:150px;">
				<h3 class="text-center"><?php echo $row['name_student']  ?></h3>
				<div class="text-center">
				<?php  if(Auth::logged_in_student()): ?>
				<button class="btn btn-danger">Edit Image</button>
                <?php  endif; ?>
				</div>

			</div>

			<div class="col-sm-8 col-md-9 bg-light p-2">
				<table class="table table-hover table-striped table-bordered">
				
					<tr><th>Name:</th><td><?php echo $row['name_student']; ?></td></tr>

					<tr><th>Gender:</th><td><?php echo $row['gender']; ?></td></tr>

					<tr><th>Grade:</th><td><?php echo $row['grade']; ?></td></tr>

					<tr><th>Classroom:</th><td><?php echo $row['classroom']; ?></td></tr>
			
					<tr><th>Date Created:</th><td><?php echo $row['dt']; ?></td></tr>

					<?php  if(Auth::logged_in_admin()): ?>	<tr>    <th>Action:</th>  <td><?php endif; ?> 

        <?php  if(Auth::logged_in_admin()): ?>
					<a href="<?=ROOT?>/student/edit/<?php echo $row['id'];?> " class="btn btn-info"> Edit </a> 
					
					<button type="button" data-bs-toggle="modal" data-bs-target="#delete<?=$row['id']?>"  class="btn btn btn-danger text-white">Delete</button>
       <?php  endif; ?>

<!-- Delete Modal -->
<div class="modal fade" id="delete<?php echo $row['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">Delete Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


<form action="<?=ROOT?>/student/delete/<?=$row['id']?>" method="post">

<h4 class="text-center">Are You Sure From Delete <?php echo $row['name_student']; ?></h4>



<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
</form>
    </div>
  </div>
</div>














					</td></tr>
               <?php endforeach; ?>
			    <?php else :  ?>
					 <tr><td ><h3 class="text-danger" >No Student</h3> </td></tr>
                <?php endif;?>

				</table>
			</div>
		</div>
		<br>

	</div>

	<?php  $this->view('layouts/footer')?>