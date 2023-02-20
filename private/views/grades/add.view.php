<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>



<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">


<h2 class="text-success text-center">Add Grade</h2>





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

<div class="row">

<div class="col">



<form   method="post">


    <input type="text" name = "grade"  class="form-control" placeholder="Name Grade">
     

    <div class="mt-3">
    <button  type="submit" class="btn btn-outline-success  float-end">Add</button>
  <a  href="<?=ROOT?>/grade" class="btn btn-outline-danger">Cancle</a>
    </div>
 

</form>

</div>


</div>





</div>

<?php $this->view('layouts/footer')?>