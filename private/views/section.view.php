








<?php $this->view('layouts/header')?>

<style>
    body{
        background : url('assets/images/sativa.png');
    }
    .section{
        min-height: 100vh; 

  align-items: center;
    }
    .section a{
        margin-left: 20px;
    }

    .image{
        width:100px;
    }
</style>




<div class="section  d-flex  justify-content-center ">



<div class="row">


<div class="col">
    
<a href="<?=ROOT?>/login/teacher" title="teacher">
 <img src="<?=ROOT?>/assets/images/teacher.png" alt="teacher" class="image">
</a>


</div>




<div class="col">

<a href="<?=ROOT?>/login/student" title="student">
<img src="<?=ROOT?>/assets/images/student.png" alt="student" class="image">
</a>

</div>



<div class="col">


<a href="<?=ROOT?>/login/parent" title="parent">
<img src="<?=ROOT?>/assets/images/parent.png" alt="parent" class="image">
</a>

</div>




<div class="col">



<a href="<?=ROOT?>/login" title="admin">
<img src="<?=ROOT?>/assets/images/admin.png" alt="admin" class="image">
</a>


</div>







</div>












</div>




<?php $this->view('layouts/footer')?>