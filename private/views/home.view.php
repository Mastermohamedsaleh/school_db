


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


<?php   if( Auth::logged_in_admin() ): ?>

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
 <div class="col-lg-4 col-sm-12">

 
 <div class="card shadow">
    

 <div class="card-header  text-success">
Myschool
    </div>

   <div class="card-body">
       <a href="<?=ROOT?>/book" class="ff" >  <i class="fa fa-plus"></i> </a>
   </div>

   <div class="card-header  text-success">
Library
    </div>
     
 </div>  
 
 </div>
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
 <div class="col-lg-4 col-sm-12">

 
 <div class="card shadow">
 
 <div class="card-header  text-success">
sss
    </div>   


   <div class="card-body">
       <a href="" class="ff" >  <i class="fa fa-plus"></i> </a>
   </div>

   <div class="card-header  text-success">
Library
    </div>
     
 </div>  
 
 </div>
 <div class="col-lg-4  col-sm-12">


 <div class="card shadow">
    

 <div class="card-header  text-success">
Myschool
    </div>

   <div class="card-body">
       <a href="<?=ROOT?>/setting" class="ff" >  <i class="fa fa-cogs"></i> </a>
   </div>

   <div class="card-header  text-success">
Settings
    </div>
     
 </div>  
 
 </div>

</div>










</div>

<?php  endif; ?>









<!-- For Student And Teacher -->



<?php   if( Auth::logged_in_student()   ||  Auth::logged_in_teacher() ): ?>
  
    
    

	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 2000px;">






    <!-- Head -->
<div class="image-back">
  


   <div class="learn">
      <p class="">"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p><br>
      <h1>WELCOME TO OUR SCHOOL </h1>  
   </div>



</div>

<!-- End Head -->



<!-- Start Our Team -->



<div class="our-team">




<div class="row">

 <h1 class="text-center">Our team</h1>

<div class="col mx-2">
     
</div>


<div class="col">
    sssssssss
</div>


<div class="col mx-2">
    sssssssss
</div>



</div>






</div>





<!-- End Our Team -->

<!-- Number members -->


<h1 class="text-center">Members</h1>

<div class="number-members">









<div class="row p-4">


<div class="col">

  
  <div class="contact text-center">
  <i class= "fa fa-plus"></i>
     <h6 class="text-light">70000</h6>
     <p class="text-light">Students</p>
  </div>
  

</div>


<div class="col">


<div class="contact text-center">
<i class="fa-solid fa-palette"></i>
     <h6 class="text-light">70000</h6>
     <p class="text-light">Students</p>
  </div>

</div>


<div class="col">

<div class="contact text-center">
  <i class= "fa fa-plus"></i>
     <h6 class="text-light">70000</h6>
     <p class="text-light">Students</p>
  </div>


</div>


</div>
 
















</div>





<!-- End Number Members -->









<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">


  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 20223 Copyright:
    <a class="text-reset fw-bold" href="#">Myschool.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


























</div>













<?php  endif; ?>









<?php   $this->view("layouts/footer"); ?>

