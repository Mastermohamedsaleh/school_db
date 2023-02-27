<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>

	

	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	

			<h5 class="text-primary">All Tests <span class="text-danger">(Success) :)</span>  </h5>

		<div class="card-group justify-content-center">
			<table class="table table-striped table-hover text-center">
				<tr><th></th><th>#</th> <th>Test</th>    <th>Active</th>  <th>Date</th>
                
				</tr>
				<?php if($rows):?>
			 <?php  $i = 0;  ?>		 
			 <?php foreach ($rows as $row):?>
            


				 
						<tr>

				<td>
				<a href="<?=ROOT?>/question/display/<?=$row['id']?>">
			 			<button class="btn btn-sm btn-primary"><i class="fa fa-arrow-up"></i></button>
			 		</a>
				</td>	
				
				
    <?php   $active = ($row['disable'] == 0) ?  "NO" : "Yes" ?>

            <td><?php  echo ++$i ?></td>
            <td><?php  echo $row['test']; ?></td>
            <td><?php  echo $active ?></td>
            <td><?php  echo $row['dt']; ?></td>

			

						</tr>
				

		 	<?php endforeach;?>
	 			<?php else:?>
	 				<h4>No Test were found at this time</h4>
	 			<?php endif;?>

			</table>

		</div>

		
	 
	</div>
 


















	<?php $this->view('layouts/footer')?>