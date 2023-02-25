<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>






<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">






		<?php if($rows):?>
		<div class="card-group justify-content-center">
 

			 <form method="post">
			 	<h3>Are you sure you want to delete?!</h3>
                 <?php	 foreach($rows as $row) : ?>
			 	<input  class="form-control" value="<?php echo $row['name_book'] ?>" type="text" name="school" ><br><br>
			 	<input type="hidden" name="id"  value="<?php echo $row['id'] ?>">
			 	<input type="hidden" name="pdf"  value="<?php echo $row['pdf'] ?>">



                <?php  endforeach;   ?>
			 	<input class="btn btn-danger float-end" type="submit" value="Delete">

				 <a href="<?=ROOT?>/mybook/index/<?php echo Auth::teacher('id') ?>" class="btn btn-success">Cancle</a>

			 </form>

			
		</div>
		<?php else: ?>

			<div style="text-align: center;">
				<h3>No Book !</h3>
				<div class="clearfix"></div>
				<br><br>
				<a href="<?=ROOT?>/mybook/index/<?php echo Auth::teacher('id') ?>" class="btn btn-danger">Cancle</a>

		 	</div>
		<?php endif; ?>

		
	 
	</div>

<?php $this->view('layouts/footer')?>







