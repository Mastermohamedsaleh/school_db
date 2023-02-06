<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>
	




<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">

<div class="row">
<table class="table table-hover table-striped table-bordered">
    <?php  if($rows): ?>
	<?php  foreach($rows as $row) : ?>
        <h3>Details <?php echo $row['classroom']?></h3>
                    <tr><th>Classroom:</th><td><?php echo $row['classroom'];?></td></tr>
			
					<tr><th>Grade:</th><td><?php echo $row['grade']; ?></td></tr>

                    <tr><th>Date:</th><td><?php echo $row['dt']; ?></td></tr>
                    <?php    endforeach;   ?>
                    <?php else: ?>
                        <tr><td><H1>Now Details</H1></td></tr>
                        <?php endif; ?>
</table>
</div>


<div class="m-2">
<button class="btn btn-primary">teacher</button>
<button class="btn btn-primary">student</button>
</div>



<h2 class="text-center text-primary">All Student in <?php echo $row['classroom'] ?></h2>

<form action="">
  <input type="text" name="search" id="">
  <button class="btn btn-primary">Search</button>
</form>

<?php if(isset( $students) ): ?>

    <?php $i = 0 ; ?>
				  <?php  foreach($students as $student): ?>

            <?php 
		   $image = $student['image'];
		   $gender = $student['gender']; 
		   $image = get_image($image,$gender);	
	   ?> 


					<div class="card m-2 shadow-sm" style="max-width: 12rem;min-width: 12rem;">
	  <img src="<?=$image?>" class=" rounded-circle card-img-top w-75 d-block mx-auto mt-1" alt="Card image cap">
  <div class="card-body">
    <center><h5 class="card-title"><?=$student['name_student']?> </h5></center>

    <a  href="<?=ROOT?>/profile/studentprofile/<?=$student['id']?>"   class="btn btn-primary">Profile</a>
    


  </div>
</div>

               <?php endforeach; ?>
			    <?php else :  ?>
					 <h1 class="text-danger">No Students</h1>
                <?php endif;?>


  </div>


   </div>

  



        










</div>













<?php $this->view('layouts/footer')?>