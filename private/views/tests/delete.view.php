<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>






<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">






		<?php if($rows):?>
		<div class="card-group justify-content-center">
 

			 <form method="post">
			 	<h3>Are you sure you want to delete?!</h3>
                 <?php	 foreach($rows as $row) : ?>
			 	<input  class="form-control" value="<?php echo $row['test'] ?>" type="text" name="test" ><br><br>
			 	<input type="hidden" name="id"  value="<?php echo $row['id'] ?>">
			



                <?php  endforeach;   ?>
			 	<input class="btn btn-danger float-end" type="submit" value="Delete">

			 	<a href="<?=ROOT?>/test/index/<?php echo Auth::teacher('id') ?>">
			 		<input class="btn btn-success" type="button" value="Cancel">
			 	</a>
			 </form>

			
		</div>
		<?php else: ?>

			<div style="text-align: center;">
				<h3>No Test !</h3>
				<div class="clearfix"></div>
				<br><br>
				<a href="<?=ROOT?>/test/index/<?php echo Auth::teacher('id') ?>">
			 		<input class="btn btn-danger" type="button" value="Cancel">
			 	</a>
		 	</div>
		<?php endif; ?>

		
	 
	</div>

<?php $this->view('layouts/footer')?>







