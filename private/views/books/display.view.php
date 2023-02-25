<?php $this->view('layouts/header')?>
<?php $this->view('layouts/nav')?>



<div class="container-fluid shadow  p-4 mx-auto" style="max-width: 1000px;">

<?php  foreach($rows as $row): ?>

<iframe src="<?php echo    "/books".'/'. $row['pdf']; ?>" width="100%" height="600px">
</iframe>



<?php  endforeach; ?>


<?php  if(isset($_GET['mybook'])): ?>

<a href="<?=ROOT?>/mybook/index/<?php echo Auth::teacher('id') ?>" class="btn btn-danger">Cancle</a>
<?php else: ?>

    <a href="<?=ROOT?>/book" class="btn btn-danger">Cancle</a>

    <?php endif; ?>
</div>


<?php $this->view('layouts/footer')?>