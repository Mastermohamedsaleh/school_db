<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>

	

	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	

			<h5>Tests</h5>

		<div class="card-group justify-content-center">
			<table class="table table-striped table-hover text-center">
				<tr><th></th><th>#</th> <th>Test</th> <th>Teacher</th>  <th>Grade</th> <th>Classroom</th> <th>Active</th>  <th>Date</th>
                
          
					<th>
					
<a  href="<?=ROOT?>/test/create" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add New</button>
					
					</th>
				</tr>
				<?php if($rows):?>
			 <?php  $i = 0;  ?>		 
			 <?php foreach ($rows as $row):?>
            


				 
						<tr>

				<td>
				<a href="<?=ROOT?>/question/index/<?=$row['id']?>">
			 			<button class="btn btn-sm btn-primary"><i class="fa-solid fa-house"></i></button>
			 		</a>
				</td>	
				
				
    <?php    $active   = ($row['disable'] == 0) ?  "NO" : "Yes"   ?>

            <td><?php  echo ++$i ?></td>
            <td><?php  echo $row['test']; ?></td>
            <td><?php  echo substr( $row['name'] , 0 , 25) ; ?></td>
            <td><?php  echo $row['grade']; ?></td>
            <td><?php  echo $row['classroom']; ?></td>
            <td><?php  echo $active ?></td>
            <td><?php  echo $row['dt']; ?></td>

			<td> 
			   
	        <a href="<?=ROOT?>/test/edit/<?=$row['id']?>"  class="btn-sm btn btn-info text-white">Edit</a>

            <a href="<?=ROOT?>/test/delete/<?=$row['id']?>" class="btn-sm btn btn-danger" >DELETE</a>

            
	
	  <a href="<?=ROOT?>/studentclass/index/<?=$row['classroom_id']?>/<?=$row['id']?>" class="btn-sm btn btn-warning text-white" >Student</a>
			


			</td>

						</tr>
				

		 	<?php endforeach;?>
	 			<?php else:?>
	 				<h4>No Test were found at this time</h4>
	 			<?php endif;?>

			</table>

		</div>

		
	 
	</div>
 


















	<?php $this->view('layouts/footer')?>