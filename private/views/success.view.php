 



<?php  $this->view('layouts/header')?>
<?php  $this->view('layouts/nav')?>

			<?php  if($success): ?>
           <div class="alert alert-success alert-dismissible fade show p-5" role="alert">
				  <strong><?php  echo $success;  ?>:</strong>
                  <span  type="button" class="close float-end" data-bs-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </span>
				</div>
           <?php endif; ?>


           <?php  $this->view('layouts/footer')?>