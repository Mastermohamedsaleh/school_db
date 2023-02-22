<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>

	
<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">

			<h5>All Admin</h5>

		<div class="card-group justify-content-center">

		<table class="table table-striped table-hover text-center">
				</th><th>#</th><th>Name Admin</th><th>Email</th> <th>Gender</th>  <th>Date</th>
		
				<?php if($rows):?>
			 <?php  $i = 0;  ?>		 
			 <?php foreach ($rows as $row):?>
            
				<th>
				<?php if(Auth::admin('rank')  == 1  ){ ?>
					
					<a  href="<?=ROOT?>/admin/create" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add New</button>
										
										</th>

										<?php  
										} ?>
									</tr>

				 
						<tr>

					
            <td><?php  echo ++$i ?></td>
            <td><?php  echo  substr(  $row['name_admin']  , 0 ,  20 ) ?></td>
            <td><?php  echo $row['email']; ?></td>
            <td><?php  echo $row['gender']; ?></td>
            <td><?php  echo $row['dt']; ?></td>

			<td> 


	<?php if( Auth::admin('rank')  == 1 ): ?>
			   
	<a  href="<?=ROOT?>/admin/edit/<?=$row['id']?>"  class="btn-sm btn btn-info text-white">Edit</a>

     <a href="<?=ROOT?>/admin/delete/<?=$row['id']?>" class="btn-sm btn btn-danger" >DELETE</a>
 
	 <?php endif;  ?>

			</td>

						</tr>
				

		 	<?php endforeach;?>
	 			<?php else:?>
	 				<h4>No Admin were found at this time</h4>
	 			<?php endif;?>

			</table>

		</div>


        </div>








	<?php $this->view('layouts/footer')?>