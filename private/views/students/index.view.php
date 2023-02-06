<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>
	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
 

		<nav class="navbar navbar-light bg-light">
		  <form class="form-inline">
		    <div class="input-group">
		      <div class="input-group-prepend">
		        <button class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i>&nbsp</button>
		      </div>
		      <input name="find" value="<?=isset($_GET['find'])?$_GET['find']:'';?>" type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
		    </div>
		  </form>
 			<a href="<?=ROOT?>/Singup?mode=student">
				<button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add New</button>
			</a>
 		</nav>
		 <h1 class="text-primary text-center">All Student</h1>

		<div class="card-group justify-content-center">

			<?php if($rows):?>
				<?php foreach ($rows as $row):?>
				 

					<?php 
		   $image = $row['image'];
		   $gender = $row['gender']; 
		   $image = get_image($image,$gender);	
	   ?> 


					<div class="card m-2 shadow-sm" style="max-width: 12rem;min-width: 12rem;">
	  <img src="<?=$image?>" class=" rounded-circle card-img-top w-75 d-block mx-auto mt-1" alt="Card image cap">
  <div class="card-body">
    <center><h5 class="card-title"><?=$row['name_student']?> </h5></center>

    <a   href="<?=ROOT?>/profile/studentprofile/<?=$row['id']?>"   class="btn btn-primary">Profile</a>
    


  </div>
</div>

	 			<?php endforeach;?>
 			<?php else:?>
 				<h4>No Student were found at this time</h4>
 			<?php endif;?>
		</div>


	 
	</div>
 
 
	<?php $this->view('layouts/footer')?>