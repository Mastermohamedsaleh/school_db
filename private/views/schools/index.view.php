<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>



	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	<?php $this->view('layouts/crumbs')?>

			<h5>Schools</h5>
		<div class="card-group justify-content-center">
			<table class="table table-striped table-hover text-center">
				<tr><th>School</th><th>Created by</th><th>Date</th>
					<th>
						<a href="school/add">
							<button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add New</button>
						</a>
					</th>
				</tr>
				<?php if($rows):?>
					 
			<?php foreach ($rows as $row):?>
						<tr>
            <td><?php  echo $row['school']; ?></td>
            <td><?php  echo $row['firstname']; ?></td>
            <td><?php  echo $row['dt']; ?></td>

			<td> 
			    
			<a href="school/edit/<?=$row['id']?>" class="btn-sm btn btn-info text-white">Edit</a>
		
            <a href="school/delete/<?=$row['id']?>" class="btn-sm btn btn-danger" >DELETE</a>

            <a href="school/delete/<?=$row['id']?>" class="btn-sm btn btn-success" >Switch To</a>

			</td>
						</tr>
				

		 	<?php endforeach;?>
	 			<?php else:?>
	 				<h4>No schools were found at this time</h4>
	 			<?php endif;?>

			</table>

		</div>

		
	 
	</div>
 

	<?php $this->view('layouts/footer')?>