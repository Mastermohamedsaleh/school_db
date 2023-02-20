


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
       <a href="<?=ROOT?>/teacher" class="ff" > <i class="fa fa-chalkboard-user"></i> </a>
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
sss
    </div>

   <div class="card-body">
       <a href="" class="ff" >  <i class="fa fa-plus"></i> </a>
   </div>

   <div class="card-header  text-success">
sss
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
sss
    </div>

   <div class="card-body">
       <a href="" class="ff" >  <i class="fa fa-plus"></i> </a>
   </div>

   <div class="card-header  text-success">
    Grades
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
sss
    </div>

   <div class="card-body">
       <a href="" class="ff" >  <i class="fa fa-cogs"></i> </a>
   </div>

   <div class="card-header  text-success">
sss
    </div>
     
 </div>  
 
 </div>

</div>










</div>

<?php  endif; ?>













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
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

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

