<?php  $this->view('layouts/header')?>
<?php  $this->view('layouts/nav')?>










<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">


<h3 class="text-center text-primary">All Answer</h3>


<?php if(count($errors) > 0):?>
				<div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
				  <strong>Errors:</strong>
				   <?php foreach($errors as $error):?>
				  	<br><?=$error?>
				  <?php endforeach;?>
				  <span  type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </span>
				</div>
				<?php endif;?>



 

<?php  if($rows): ?>

<div class="row" >



<?php   $i = 0; ?>
<?php   foreach($rows as $row):  ?>

<div class="col-12 mb-2  rounded" >



<div class="card shadow" >

<div class="card-header">
   <span class="text-white  bg-primary  rounded p-1" >   <?php  echo ++$i; ?> # Question </span> 
</div>

<div class="card-body">

  <div class="card-title">
  <?php   echo $row['question'] ?>
  </div>








<div class="card" style="width: 18rem;">
  <div class="card-header">
    Answers
  </div>


<div class="card-body">
      
 <div class="card-text">
    <p>Answer :</p> <?php   echo $row['answer']; ?>
 </div>  
 

</div>




</div>



</div>

</div>

<?php   endforeach; ?>








</div>



<?php  else : ?>
 
   <h1 class="text-center text-danger">No Answer</h1>
   


<?php endif; ?>











<form method="POST" class="mt-5">





    <input type="text"  name="mark" class="form-control" placeholder = "Write Mark Here">
    <button  type="submit" class="btn btn-primary mt-2">Send Mark</button>
</form>



</div>
 





 
 
 



<?php $this->view('layouts/footer')?>