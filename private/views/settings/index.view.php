<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>

	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	

			<h5>Setting</h5>

		<div class="card-group justify-content-center">
			<table class="table table-striped table-hover text-center">
				<tr><th>Facebook</th><th>Instegram</th><th>twitter</th><th>Action</th><th>Phone</th>
				
				</tr>
				<?php if($rows):?>
			 <?php  $i = 0;?>		 
			 <?php foreach ($rows as $row):?>
            
						<tr>
            
            <td><?php  echo $row['facebook']; ?></td>
            <td><?php  echo $row['instagram']; ?></td>
            <td><?php  echo $row['twitter']; ?></td>
            <td><?php  echo $row['phone']; ?></td>

			<td> 
			

            <a href="<?=ROOT?>/setting/edit/<?=$row['id']?>"  class="btn-sm btn btn-info text-white" >Edit</a>

			</td>














						</tr>
				

		 	<?php endforeach;?>
	 			<?php else:?>
	 				<h4>No Setting were found at this time</h4>
	 			<?php endif;?>

			</table>

		</div>

	
	 
	</div>
 













	<?php $this->view('layouts/footer')?>