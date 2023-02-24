<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>
	




<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">

<div class="row">



<?php  if($rows): ?>
	<?php  foreach($rows as $row) : ?>
<table class="table table-hover table-striped table-bordered">

        <h3>Details <?php echo $row['classroom']?></h3>
                    <tr><th>Classroom:</th><td><?php echo $row['classroom'];?></td></tr>
			
					<tr><th>Grade:</th><td><?php echo $row['grade']; ?></td></tr>

                    <tr><th>Date:</th><td><?php echo $row['dt']; ?></td></tr>
                    <?php    endforeach;   ?>
                    <?php else: ?>
                        <tr><td><H1>No Details</H1></td></tr>
                        <?php endif; ?>
</table>
</div>




<h2 class="text-center text-primary">All Student in <?php echo $row['classroom'] ?></h2>

<form action="<?=ROOT?>/search/studentsinclassroom/<?php echo $row['id']?>">
  <input type="text" name="find" >
  <button class="btn btn-primary">Search</button>
</form>


<?php   if(isset($studentsinclass)) {   $students = $studentsinclass;  } ?>


<?php if(isset( $students) ): ?>

<div class="row"  style="margin:auto">


<?php $i = 0 ; ?>
      <?php  foreach($students as $student): ?>
<div class="col text-center" >




<?php 
		   $image = $student['image'];
		   $gender = $student['gender']; 
		   $image = get_image($image,$gender);	
	   ?> 


					<div class="card m-2 shadow-sm" style="max-width: 12rem;min-width: 12rem;">
	  <img src="<?=$image?>" class=" rounded-circle card-img-top w-75 d-block mx-auto mt-1" alt="Card image cap">
   <div class="card-body">
    <h5 class="card-title text-center">  <?= substr($student['name_student'] , 0 , 13 )?> </h5>

    <a  href="<?=ROOT?>/profile/studentprofile/<?=$student['id']?>"   class="btn btn-primary">Profile</a>
    


  </div>
</div>







</div>
<?php endforeach; ?>
			    <?php else :  ?>
					 <h1 class="text-danger">No Students</h1>

           <a href="<?=ROOT?>/classroom" class="btn btn-danger" >Cancle</a>
                <?php endif;?>





</div>
























<a href="<?=ROOT?>/classroom" class="btn btn-danger" >Cancle</a>


</div>













<?php $this->view('layouts/footer')?>