<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>




<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">

<h5>All Parents</h5>



<table class="table table-striped table-hover text-center">

<a href="<?=ROOT?>/myparent/create" class="btn btn-primary mb-3"><i class="fa fa-plus"></i>Add Parent</a>

<tr>
    <th>#</th>
    <th>Name</th>
    <th>Phone</th>
    <th>SSn</th>
    <th>Son</th>
    <th>Action</th>
</tr>

<?php if($rows):   ?>



<?php 
 $i = 0;
foreach($rows as $row):?>

<tr>
    <td><?php echo ++$i ?></td>
    <td><?php echo $row['name_parent'] ?></td>
    <td><?php echo $row['phone'] ?></td>
    <td><?php echo $row['ssn'] ?></td>
    <td><?php echo  substr( $row['name_student']  , 0 , 20 )  ?></td>
    <td>   
     <a href="<?=ROOT?>/myparent/edit/<?php echo $row['id'] ?>" class="btn btn-info">Edit</a>       
     <a href="<?=ROOT?>/myparent/delete/<?php echo $row['id'] ?>" class="btn btn-danger">DELETE</a>       
 
    </td>
</tr>

<?php  endforeach; ?>


   
</table>

<?php  else:  ?>

<h2 class="text-danger text-center">No Parent</h2>

<?php endif; ?>




</div>







<?php $this->view('layouts/footer')?>