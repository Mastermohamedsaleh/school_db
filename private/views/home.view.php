


<?php  $page = "Home";   ?>









<?php   $this->view("layouts/header"); ?>




<?php   if( Auth::logged_in_student()   ||  Auth::logged_in_teacher() ): ?>




  <nav class="navbar" style=" background :rgb(92, 209, 92) !important ; ">
<div class="container-fluid main-nav"  >
  <a class="navbar-brand text-light">+9927878985</a>
  <form class="d-flex">
sssssss
  </form>
</div>
</nav>



  

   
    
<?php  endif; ?>

<?php   $this->view("layouts/nav"); ?>




<style>
 
  .ff{
       font-size:80px;
       display:flex;
          justify-content:center;
   	color: limegreen;
  }

   a{
		text-decoration: none;
	}
   
 .card{
  transition: 1s ; 
  }

  .card:hover{
    transform: scale(1.1);
}
  
.card-header{
		font-weight: bold;
	}

</style>


<div class="continer shadow mx-auto p-4" style="width:70%">


<div class="row">


<?php   if( Auth::logged_in_admin() ): ?>
 <div class="col-lg-4 col-sm-12">

 
 <div class="card shadow">
    

 <div class="card-header  text-success">
Myschool
    </div>

   <div class="card-body">
        
       <a href="<?=ROOT?>/student" class="ff"> <i class="fa fa-graduation-cap"></i> </a>
   </div>

   <div class="card-header  text-success">
       Students
    </div>
     
 </div>

 
 </div>
 <div class="col-lg-4 col-sm-12">

 
 <div class="card shadow">
    

 <div class="card-header  text-success">
Myschool
    </div>

   <div class="card-body">
       <a href="<?=ROOT?>/teacher" class="ff" ><i class="fa fa-user-large"></i></a>
   </div>

   <div class="card-header  text-success">
 Teachers
    </div>
     
 </div>  
 
 </div>
 <div class="col-lg-4  col-sm-12">

 
 <div class="card shadow">
    


 <div class="card-header  text-success">
Myschool
    </div>

   <div class="card-body">
       <a href="<?=ROOT?>/classroom" class="ff" >  <i class="fa fa-plus"></i> </a>
   </div>

   <div class="card-header  text-success">
Classroom
    </div>
     
 </div>  
 
 </div>

</div>
<!-- One Row -->


<!-- Start Two Row -->





<div class="row mt-2">



 <div class="col-lg-4 col-sm-12">

 
 <div class="card shadow">
    

 <div class="card-header  text-success">
Myschool
    </div>

   <div class="card-body">
       <a href="<?=ROOT?>/grade" class="ff" >  <i class="fa fa-plus"></i> </a>
   </div>

   <div class="card-header  text-success">
    Grades
    </div>
     
 </div>  
 
 </div>


  
 <?php endif; ?>


 
<?php   if( Auth::logged_in_admin()  ||  Auth::logged_in_teacher()  ): ?>
 <div class="col-lg-4 col-sm-12">

 
 <div class="card shadow">
    

 <div class="card-header  text-success">
Myschool
    </div>

   <div class="card-body">
       <a href="<?=ROOT?>/book" class="ff" >  <i class="fa fa-plus"></i> </a>
   </div>

   <div class="card-header  text-success">
Books
    </div>
     
 </div>  
 
 </div>

 <?php endif; ?>


<?php  if( Auth::logged_in_admin() ) : ?>
 <div class="col-lg-4  col-sm-12">

 
 <div class="card shadow">
  
 
 <div class="card-header  text-success">
Myschool
    </div>

   <div class="card-body">
       <a href="<?=ROOT?>/myparent" class="ff" >  <i class="fa fa-plus"></i> </a>
   </div>

   <div class="card-header  text-success">
Parents
    </div>
     
 </div>  
 
 </div>

</div>



<!-- End row -->

<!-- Start Three Row -->


<div class="row mt-2">



 <div class="col-lg-4 col-sm-12">

 
 <div class="card shadow">
    


 <div class="card-header  text-success">
Myschool
    </div>

   <div class="card-body">
       <a href="<?=ROOT?>/admin" class="ff" >  <i class="fa fa-plus"></i> </a>
   </div>

   <div class="card-header  text-success">
   Admins
    </div>
     
 </div>  
 
 </div>
 
 
 <?php  endif; ?>
 <?php   if( Auth::logged_in_teacher() ) :  ?>
 
 <div class="col-lg-4 col-sm-12">

 
 <div class="card shadow">
 
 <div class="card-header  text-success">
Myschool
    </div>   


   <div class="card-body">
       <a href="<?=ROOT?>/mybook/index/<?php echo Auth::teacher('id') ?>" class="ff" >  <i class="fa fa-plus"></i> </a>
   </div>

   <div class="card-header  text-success">
Mybook
    </div>
     
 </div>  
 
 </div>






 <div class="col-lg-4  col-sm-12">


 <div class="card shadow">
    

 <div class="card-header  text-success">
Myschool
    </div>

   <div class="card-body">
       <a href="<?=ROOT?>/test/index/<?php echo Auth::teacher('id') ?>" class="ff" ><i class="fa fa-cogs"></i> </a>
   </div>

   <div class="card-header  text-success">
TESTS
    </div>
     
 </div>  
 
 </div>

</div>















 <?php endif; ?>












</div>









<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted" style="margin-top:306px">


  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 20223 Copyright:
    <a class="text-reset fw-bold" href="#">Myschool.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->




</div>























<?php   $this->view("layouts/footer"); ?>

