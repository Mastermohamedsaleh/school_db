<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>






<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">


<h2 class="text-success text-center">Delete Classroom</h2>




<?php if($rows):?>
<?php foreach ($rows as $row):?>
<form  method="post">

<h4 class="text-center text-danger">Are uou Sure From  Delete <?php echo $row['classroom']; ?></h4>

<input type="text" name = "classroom" value="<?php echo $row['classroom'];?>"  class="form-control" placeholder="Name classroom">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">


<div class="mt-3">
    <button  type="submit" class="btn btn-outline-success  float-end">Delete</button>
  <a  href="<?=ROOT?>/classroom" class="btn btn-outline-danger">Cancle</a>
    </div>


</form>

<?php endforeach; ?>
<?php else: ?>
 
      <h4 class="text-center text-danger">No Classroom</h4>
     
   <a  href="<?=ROOT?>/classroom" class="btn btn-outline-danger">Cancle</a>
     
     
<?php endif; ?>


</div>





<?php $this->view('layouts/footer')?>