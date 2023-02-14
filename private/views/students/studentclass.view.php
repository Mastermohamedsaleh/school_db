<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>

	

	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	

			<h5>Student</h5>

		<div class="card-group justify-content-center">
			<table class="table table-striped table-hover text-center">
		      </th><th>#</th><th>Name</th><th>Action</th>
					
				</tr>
				<?php if($rows):?>
			 <?php  $i = 0;  ?>		 
			 <?php foreach ($rows as $row):?>
            
						<tr>
		
            <td><?php  echo ++$i ?></td>
            <td><?php  echo $row['name_student']; ?></td>
        

			<td> 
			   
	<a  href="<?=ROOT?>/mark/index/<?=$row['id']?>/<?php echo $test_id ?>"  class="btn-sm btn btn-info text-white">Put Mark</a>



			</td>

						</tr>
				

		 	<?php endforeach;?>
	 			<?php else:?>
	 				<h4>No Student were found at this time</h4>
	 			<?php endif;?>

			</table>

		</div>

		
	 
	</div>
 


















	<?php $this->view('layouts/footer')?>