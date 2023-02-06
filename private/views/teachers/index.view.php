<?php  $this->view('layouts/header')?>
<?php  $this->view('layouts/nav')?>
	
	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	
	










  <form action="" class="continer" style="width:200px">

<div class="row">


<div class="col">


<input type="text" name="search" class="form-control" placeholder="Search Teacher">
  <button class="btn btn-primary m-2">search</button>



</div>


<div class="col">
<button class="btn btn-primary m-2">Add Teacher</button>
</div>


</div>








  </form>


       


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
    <center><h5 class="card-title"><?=$row['name']?></h5></center>
   
    <a   href="<?=ROOT?>/teacher/profile/<?=$row['id']?>"   class="btn btn-primary">Profile</a>
  

  </div>
</div>

	 			<?php endforeach;?>
 			<?php else:?>
 				<h4>No staff members were found at this time</h4>
 			<?php endif;?>
		</div>










	</div>
	<?php  $this->view('layouts/footer')?>