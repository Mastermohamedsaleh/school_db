
<?php  $this->view('layouts/header')?>
<?php  $this->view('layouts/nav')?>




<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">


<h4 class="text-center text-primary">Add Questions</h4>



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


        

 <?php  if($success): ?>
           <div class="alert alert-success alert-dismissible fade show p-1" role="alert">
				  <strong><?php  echo $success;  ?>:</strong>
                  <span  type="button" class="close float-end" data-bs-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </span>
				</div>
           <?php endif; ?>







<form method="POST">


<div>
<h4>Question:</h4>
<input type="text"  name="question" class="form-control" placeholder  = "Question">
</div>


<div class="mt-2">
<h4>Point:</h4>
<input type="text"  name="point" class="form-control" placeholder = "Point">
</div>

<div class="mt-2">
<h4>Date:</h4>
<input type="date"  name="dt" class="form-control" >
</div>







<div class="mt-2">
<div class="card">
  <div class="card-header bg-secondary text-white">
   <span> Multipul Choice Answers</span> 
   <button   class="float-end  add_choice btn-sm btn btn-warning text-white" >  <i class="fa fa-plus"></i> Add Chocie</button>
   <button   class="float-end  remove_choice btn-sm btn btn-warning text-white mx-2" >   - Remove Chocie</button>
  </div>

  <ul class="list-group  list-group-flush choice-list">
    <li class="list-group-item li0">
    <h6>A :</h6> <input type="text" name="choice0"  class="form-control"  placeholder="Type Your answer here"> 
        <input type="radio"  value="A" name="correct_answer">Correct Answers
    </li>

    <li class="list-group-item li1">

    <h6>B :</h6> <input type="text" name="choice1" class="form-control"  placeholder="Type Your answer here">

        <input type="radio"   value="B" name="correct_answer">Correct Answers

    </li>
    
  </ul>
</div>
</div>

<!-- ID TEST -->
<?php  if($tests): ?>
<?php  foreach($tests as $test):  ?>
     <input type="hidden" name="test_id" value="<?php echo $test['id']  ?>">
     <div class="mt-2">
    <button class="btn-sm btn btn-primary float-end" >Save Question</button>
    <a  href="<?=ROOT?>/question/index/<?php echo $test['id'] ?>" class="btn-sm btn btn-danger" >Cancle</a>
</div>

<?php endforeach; ?>
<?php  else: ?> 
       <h2>No Questions</h2>
<?php endif; ?>
<!-- END ID TEST -->








</form>














</div>




<script>







document.querySelector(".add_choice").addEventListener("click", function(event){
  event.preventDefault();

  var letters = ['A','B','C','D','F','G','H','I','J'];
  var numbers = ['0','1','2','3','4','5','6','7','8'];
    var choices = document.querySelector(".choice-list");


    if(choices.children.length < letters.length){
        choices.innerHTML += `<li class="list-group-item li${numbers[choices.children.length]}">

<h6>${letters[choices.children.length]}</h6> <input type="text" name="choice${choices.children.length}" class="form-control"  placeholder="Type Your answer here">

<input type="radio" value="${letters[choices.children.length]}" name="correct_answer">Correct Answers

</li>`;

    }
  
});



document.querySelector(".remove_choice").addEventListener("click", function(event){
  event.preventDefault();


  var letters = ['A','B','C','D','F','G','H','I','J'];
  var numbers = ['0','1','2','3','4','5','6','7','8'];

    var choices = document.querySelector(".choice-list");


  
        choices.innerHTML -= `<li class="list-group-item  li${numbers[choices.children.length]} ">

<h6>${letters[choices.children.length]}</h6> <input type="text" name="choice${choices.children.length}" class="form-control"  placeholder="Type Your answer here">

<input type="radio" name="correct_answer">Correct Answers

</li>`;

 


});



 

</script>






<?php $this->view('layouts/footer')?>