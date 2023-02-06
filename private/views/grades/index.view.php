<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>

	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	

			<h5>Grade</h5>

      <?php  if(isset($success)): ?>
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




		<div class="card-group justify-content-center">
			<table class="table table-striped table-hover text-center">
				<tr><th>#</th><th>Grade</th><th>Date</th>
					<th>
					
							<button type="button" data-bs-toggle="modal" data-bs-target="#addgrade"  class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add New</button>
					
					</th>
				</tr>
				<?php if($rows):?>
			 <?php  $i = 0;  ?>		 
			 <?php foreach ($rows as $row):?>
            
						<tr>
            <td><?php  echo ++$i ?></td>
            <td><?php  echo $row['grade']; ?></td>
            <td><?php  echo $row['dt']; ?></td>

			<td> 
			    <?php $ee = "grade/edit/".$row['id']; ?>
			<button type="button" data-bs-toggle="modal" data-bs-target="#edit<?=$row['id']?>"  class="btn-sm btn btn-info text-white">Edit</button>

            <a href="grade/delete/<?=$row['id']?>" class="btn-sm btn btn-danger" >DELETE</a>
















			</td>










<!-- edit Modal -->
<div class="modal fade" id="edit<?=$row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">Update Grade</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


<form action="<?=ROOT?>/grade/edit/<?=$row['id']?>" method="post">

<h4 class="text-center">Update <?php echo $row['grade']; ?></h4>

<input type="text" name = "grade" value="<?php echo $row['grade'];?>"  class="form-control" placeholder="Name Grade">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Save</button>
      </div>
</form>
    </div>
  </div>
</div>





						</tr>
				

		 	<?php endforeach;?>
	 			<?php else:?>
	 				<h4>No Grade were found at this time</h4>
	 			<?php endif;?>

			</table>

		</div>

		
	 
	</div>
 











<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Add Modal -->
<div class="modal fade" id="addgrade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLabel">Add Grade</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


<form method="post">
    <input type="text" name = "grade"  class="form-control" placeholder="Name Grade">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>

    </div>
  </div>
</div>







	<?php $this->view('layouts/footer')?>