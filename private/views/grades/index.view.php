<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>

	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	

			<h5>Grade</h5>

		<div class="card-group justify-content-center">
			<table class="table table-striped table-hover text-center">
				<tr><th>#</th><th>Grade</th><th>Date</th>
					<th>
					
					
<a href="<?=ROOT?>/grade/create" class="btn-sm btn btn-primary"><i class="fa fa-plus"></i>Add New</a>

					</th>
				</tr>
				<?php if($rows):?>
			 <?php  $i = 0;?>		 
			 <?php foreach ($rows as $row):?>
            
						<tr>
            <td><?php  echo ++$i ?></td>
            <td><?php  echo $row['grade']; ?></td>
            <td><?php  echo $row['dt']; ?></td>

			<td> 
			

            <a href="<?=ROOT?>/grade/edit/<?=$row['id']?>"  class="btn-sm btn btn-info text-white" >Edit</a>
            <a href="<?=ROOT?>/grade/delete/<?=$row['id']?>" class="btn-sm btn btn-danger" >DELETE</a>



			</td>












						</tr>
				

		 	<?php endforeach;?>
	 			<?php else:?>
	 				<h4>No Grade were found at this time</h4>
	 			<?php endif;?>

			</table>

		</div>

		
	 
	</div>
 










	<?php $this->view('layouts/footer')?>