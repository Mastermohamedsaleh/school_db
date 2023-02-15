<style>
	nav ul li a:hover{
		background-color: grey;
		color: white !important;
	}

  .navbar{
    background:#e8eaf7  !important;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
  	<a class="navbar-brand" href="#">
      <img src="<?=ROOT?>/logo.png" class="" style="width:50px;">
  		My School
	</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">



  

    <?php  if( Auth::logged_in_admin()   ):  ?>

      <?php  if(Auth::logged_in_teacher()  || Auth::logged_in_admin()   ):  ?> 
      <li class="nav-item active">
        <a class="nav-link active"  href="<?=ROOT?>/home" >DASHBOARD</a>
      </li>
   <?php endif; ?>

  

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="staff" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    STAFF
          </a>
          <ul class="dropdown-menu" aria-labelledby="staff">
            <li><a class="dropdown-item" href="<?=ROOT?>/Teacher">TEACHERS</a></li> 
            <li><a class="dropdown-item" href="<?=ROOT?>/admin">ADMINS</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>






      

      <li class="nav-item">
        <a class="nav-link" href="<?=ROOT?>/student" >STUDENTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=ROOT?>/myparent" >PARENTS</a>
      </li>
    
      <li class="nav-item">
        <a href="<?=ROOT?>/grade"  class="nav-link" >GRADE</a>
      </li>

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           CLASS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
         <li><a href="<?=ROOT?>/classroom"  class="dropdown-item">CLASS</a></li> 
            <li><a class="dropdown-item" href="<?=ROOT?>/Teacherclassroom">Add teacher To Class</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
     <?php  endif; ?>


         
    <?php  if(Auth::logged_in_teacher()  || Auth::logged_in_admin()  || Auth::logged_in_student()  ):  ?> 
      <li class="nav-item">
      <a class="nav-link" href="<?=ROOT?>/Book">BOOKS</a>
      </li>
  <?php  endif; ?>



      <?php  if(Auth::logged_in_teacher()) : ?>

      <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/Book/mybook/<?php echo Auth::teacher('id') ?>">My BOOKS</a>
      </li>

      <?php  endif; ?>




      <?php  if(Auth::logged_in_teacher()) : ?>
      <li class="nav-item">
        <a   href="<?=ROOT?>/test/index/<?php echo Auth::teacher('id') ?>" class="nav-link">TESTS</a>
      </li>
      <?php  endif; ?>

      <?php  if(Auth::logged_in_student()) : ?>
      <li class="nav-item">
        <a   href="<?=ROOT?>/test/display/<?php  echo Auth::student('classroom_id')  ?>" class="nav-link">TESTS</a>
      </li>
      <?php  endif; ?>



</ul>


<ul class="navbar-nav ms-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
         <?php   if(  Auth::logged_in_teacher()   ){ ?>
             <?php  echo Auth::teacher('name') ?>
           <?php
         }elseif( Auth::logged_in_student()){
          echo Auth::student('name_student');
         }
            ?>
        <?php  echo Auth::user();  ?>
        </a>


        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">


  <?php if( Auth::logged_in_student() ){  ?> 
           
          <a class="dropdown-item" href="<?=ROOT?>/profile/studentprofile/<?php  echo Auth::student('id') ?>" >Profile</a>
<?php   

    }elseif(  Auth::logged_in_teacher()){
?>
          <a class="dropdown-item" href="<?=ROOT?>/profile/teacherprofile/<?php  echo Auth::teacher('id') ?>" >Profile</a>
       

    <?php
    
    }else{
    ?>
          <a class="dropdown-item" href="<?=ROOT?>/profile" >Profile</a>
 

<?php  } ?>





<?php if( Auth::logged_in_admin() ):  ?> 
          <a class="dropdown-item"  href="<?=ROOT?>/home">Dashboard</a>
          <div class="dropdown-divider"></div>

<?php  endif; ?>


          <?php if( Auth::logged_in_student() ){  ?> 
           
          <a class="dropdown-item" href="<?=ROOT?>/Logout/index/STUDENT" >Logout</a>
 <?php   
 
     }elseif( Auth::logged_in_teacher() ){
 ?>
                    <a class="dropdown-item" href="<?=ROOT?>/Logout/index/TEACHER" >Logout</a>

 
     <?php
     
     }else{
     ?>
                 <a class="dropdown-item" href="<?=ROOT?>/Logout/index/STUDENT" >Logout</a>

  
 
 <?php  } ?>







          

        </div>
      </li>


    </ul>


  </div>
</nav>