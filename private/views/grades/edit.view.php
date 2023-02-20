<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>






<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">


<h2 class="text-success text-center">Edit Grade</h2>

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



<?php  if( $success ): ?>
           <div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong><?php  echo $success;  ?>:</strong>
                  <span  type="button" class="close float-end" data-bs-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </span>
				</div>
           <?php endif; ?>


<?php if($rows):?>
<?php foreach ($rows as $row):?>
<form  method="post">

<h4 class="text-center">Update <?php echo $row['grade']; ?></h4>

<input type="text" name = "grade" value="<?php echo $row['grade'];?>"  class="form-control" placeholder="Name Grade">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">


<div class="mt-3">
    <button  type="submit" class="btn btn-outline-success  float-end">Update</button>
  <a  href="<?=ROOT?>/grade" class="btn btn-outline-danger">Cancle</a>
    </div>


</form>

<?php endforeach; ?>
<?php endif; ?>


</div>





<?php $this->view('layouts/footer')?>