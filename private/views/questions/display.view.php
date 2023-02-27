<?php  $this->view('layouts/header')?>
<?php  $this->view('layouts/nav')?>



<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">


<h3 class="text-center text-primary">All Question</h3>





<?php  if($success): ?>
           <div class="alert alert-success alert-dismissible fade show p-1" role="alert">
				  <strong><?php  echo $success;  ?>:</strong>
                  <span  type="button" class="close float-end" data-bs-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </span>
				</div>
           <?php endif; ?>






 

<?php  if($rows): ?>

<div class="row" >



<?php   $i = 0; ?>
<?php   foreach($rows as $row):  ?>

<div class="col-12 mb-2  rounded" >



<div class="card shadow" >

<div class="card-header">
   <span class="text-white  bg-primary  rounded p-1" >   <?php  echo ++$i; ?> # Question </span> 
   <span class="text-white  bg-primary  rounded p-1 float-end" >   <?php  echo $row['dt']; ?> </span> 
</div>

<div class="card-body">

  <div class="card-title">
  <?php   echo $row['question'] ?>
  </div>





<div class="card-text">
<?php   echo $row['point'] . " Point" ?> 
</div>



<div class="card" style="width: 18rem;">
  <div class="card-header">
    Answers
  </div>





  <form method="POST">

<?php  $i = 0 ;  ?>
  <?php  $choices =  json_decode($row['choices']);      ?>
  <?php if($choices): ?>

  <ul class="list-group list-group-flush">
  <?php  foreach($choices as $key => $value):   ?>

    <li class="list-group-item"> <?=$key?> : <?=$value ?> <input type="radio" name="<?php  echo $row['id'] ?>"  value="<?php  echo $key ?>" class="float-end" style="transform:scale(1.5);cursor:pointer"> 

</li>
<?php   endforeach;  ?>

  </ul>
    

  <?php  else: ?>
      <li class="list-group-item"> No Answers Here </li>


  <?php  endif; ?>
</div>




</div>



</div>

</div>

<?php   endforeach; ?>



</div>


<?php  else : ?>
 
   <h1 class="text-center text-danger">No Question</h1>
   


<?php endif; ?>



<div class="text-center">
<button class="btn btn-primary shadow">Send Answers</button>

</div>



</form>

</div>
 



 
 
 



<?php $this->view('layouts/footer')?>