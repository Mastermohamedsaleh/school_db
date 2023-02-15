<?php  $this->view('layouts/header')?>
<?php  $this->view('layouts/nav')?>
	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	
		<?php  if($teachers): ?>
	<?php	foreach($teachers as $teacher) : ?>
    
		<?php 
		   $image = $teacher['image'];
		   $gender = $teacher['gender']; 
		   $image = get_image($image,$gender);	
	   ?> 



		<div class="row">
			<div class="col-sm-4 col-md-3">
				<img src="<?php echo $image; ?>" class="border border-primary d-block mx-auto rounded-circle " style="width:150px;">
				<h3 class="text-center"><?php echo $teacher['name']  ?></h3>
				<div class="text-center">
				<button class="btn btn-danger">Edit Image</button>

				</div>

			</div>
			<div class="col-sm-8 col-md-9 bg-light p-2">
				<table class="table table-hover table-striped table-bordered">
				
					<tr><th>Name:</th><td><?php echo $teacher['name']; ?></td></tr>
					<tr><th>Gender:</th><td><?php echo $teacher['gender']; ?></td></tr>
					<tr><th>Email:</th><td><?php echo $teacher['email']; ?></td></tr>
					<tr><th>specialization:</th><td><?php echo $teacher['name_specialization']; ?></td></tr>
					<?php  if(Auth::logged_in_admin()): ?>
					<tr><th>Action:</th>



           

					<td>
					 <a href="<?=ROOT?>/teacher/edit/<?php echo $teacher['id'];?> " class="btn btn-info"> Edit </a> 
					
					<button type="button" data-bs-toggle="modal" data-bs-target="#delete<?=$teacher['id']?>"  class="btn btn btn-danger text-white">Delete</button>
				
				</td>
          <?php endif; ?>

			</tr>
				
				




<!-- Delete Modal -->
<div class="modal fade" id="delete<?php echo $teacher['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">Delete Teacher</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


<form action="<?=ROOT?>/teacher/delete/<?=$teacher['id']?>" method="post">

<h4 class="text-center">Are You Sure From Delete <?php echo $teacher['name']; ?></h4>



<input type="hidden" name="id" value="<?php echo $teacher['id']; ?>">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
</form>
    </div>
  </div>
</div>
























                     
               <?php endforeach; ?>
			    <?php  else : ?>
					 <tr><td >  <h1 class="text-danger"> No Taecher</h1> </td></tr>
                <?php  endif; ?>

				</table>
			</div>
		</div>
		<br>

	</div>

	<?php  $this->view('layouts/footer')?>