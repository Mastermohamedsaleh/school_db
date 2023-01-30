<style>
	nav ul li a:hover{
		background-color: grey;
		color: white !important;
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
      <li class="nav-item active">
        <a class="nav-link active"  href="<?=ROOT?>/home" >DASHBOARD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=ROOT?>/user" >STAFS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=ROOT?>/student" >STUDENTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=ROOT?>/school" >SCHOOLS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" >CLASSES</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link">TESTS</a>
      </li>
</ul>


<ul class="navbar-nav ms-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <?php  echo Auth::user();  ?>
        </a>


        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?=ROOT?>/profile" >Profile</a>
          <a class="dropdown-item"  href="<?=ROOT?>/home">Dashboard</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?=ROOT?>/Logout" >Logout</a>
        </div>
      </li>


    </ul>


  </div>
</nav>