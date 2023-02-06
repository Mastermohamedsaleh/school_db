<?php  $this->view('layouts/header')?>
<?php  $this->view('layouts/nav')?>
	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	
		<?php if($rows): ?>
	<?php	foreach($rows as $row) : ?>
    
		<?php 
		   $image = $row['image'];
		   $gender = $row['gender']; 
		   $image = get_image($image,$gender);	
	   ?> 



		<div class="row">
			<div class="col-sm-4 col-md-3">
				<img src="<?php echo $image; ?>" class="border border-primary d-block mx-auto rounded-circle " style="width:150px;">
				<h3 class="text-center"><?php echo $row['firstname'] . ' ' . $row['lastname']; ?></h3>
			</div>
			<div class="col-sm-8 col-md-9 bg-light p-2">
				<table class="table table-hover table-striped table-bordered">
				
					<tr><th>First Name:</th><td><?php echo $row['firstname']; ?></td></tr>
					<tr><th>Last Name:</th><td><?php echo $row['lastname']; ?></td></tr>
					<tr><th>Gender:</th><td><?php echo $row['gender']; ?></td></tr>
					<tr><th>Rank:</th><td><?php echo str_replace('_'," ", $row['rank']); ?></td></tr>
					<tr><th>Date Created:</th><td><?php echo $row['dt']; ?></td></tr>
               <?php endforeach; ?>
			    <?php else :  ?>
					 <tr><td class="text-danger">No User</td></tr>
                <?php endif;?>

				</table>
			</div>
		</div>
		<br>
		<div class="container-fluid">
			<ul class="nav nav-tabs">
			  <li class="nav-item">
			    <a class="nav-link active" href="#">Basic Info</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Classes</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Tests</a>
			  </li>
		 
			</ul>

			<nav class="navbar navbar-light bg-light">
			  <form class="form-inline">
			    <div class="input-group">
			      <div class="input-group-prepend">
			        <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i>&nbsp</span>
			      </div>
			      <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
			    </div>
			  </form>
			</nav>

		</div>
	</div>

	<?php  $this->view('layouts/footer')?>