<?php  $this->view('layouts/header')?>
<?php  $this->view('layouts/nav')?>












<div class="container shadow  p-5  mx-auto"  style="max-width: 1000px;">

<h4>Update Teacher Into Class</h4>











<form method="POST">
<div class="row">
    <div class="col">
    <select name="teacher_id" class="form-control">
<?php foreach($teachers as $teacher): ?>
<option value="<?php echo $teacher['id'] ?>"><?php echo $teacher['name'] ?></option>
<?php endforeach; ?>
</select>
    </div>
    <div class="col">
  
    <select name="classroom_id" class="form-control">
    <?php foreach($classrooms as $classroom): ?> 
<option  value="<?php if($classroom['id'] == $classroom_id ){echo 'selected';} ?> " ><?php echo $classroom['classroom']?></option>
<?php endforeach; ?>
</select>
    </div>

    <div class="col">
        <button class="btn btn-primary">Add</button>
    </div>
</div>

</form>


<?php  $this->view('layouts/footer')?>