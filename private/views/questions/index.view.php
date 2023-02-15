<?php  $this->view('layouts/header')?>
<?php  $this->view('layouts/nav')?>










<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">


<h3 class="text-center text-primary">All Question</h3>





 <?php if($tests): ?>

<?php   foreach($tests as $test):  ?>


<?php  echo $test['id']  ?>

<a href="<?=ROOT?>/question/create/<?php echo $test['id'] ?>" class="btn btn-primary m-2">Add Question</a>





 

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

  <?php     $choices =  json_decode($row['choices']);      ?>

    
  <ul class="list-group list-group-flush">
   <?php if($choices): ?>
   <?php  foreach($choices as $key => $value):   ?>
    <li class="list-group-item"> <?=$key?> : <?=$value ?>  </li>
   <?php   endforeach;  ?>
   <?php  else: ?>
      <li class="list-group-item"> No Answers Here </li>
   <?php  endif; ?>
  </ul>
</div>


<p class ="card-text"> <b>Correct Answer :</b> <?php  echo $row['correct_answer'] ?> </p>
 

<p class="card-text float-end">
    <a href="<?=ROOT?>/question/edit/<?php echo $row['id'] ?>/<?php echo $test['id'] ?>" class="btn-sm btn btn-warning">Edit</a>
    <a href="<?=ROOT?>/question/delete/<?php echo $row['id'] ?>" class="btn-sm btn btn-danger">Delete</a>
</p>




</div>



</div>

</div>

<?php endforeach; ?>

   <?php  endif; ?>

<?php   endforeach; ?>








</div>



<?php  else : ?>
 
   <h1 class="text-center text-danger">No Question</h1>
   


<?php endif; ?>


</div>
 



 
 
 



<?php $this->view('layouts/footer')?>