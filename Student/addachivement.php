<?php 
	session_start();
	$a = $_GET['a'];
 ?>
   <div class="form-group">
	<label for="ac[]" class="bmd-label-floating">Achievement <?php echo $a+1; ?></label>
	<input type="text" name="ac[]" class="form-control ">
</div>
<div id="achivement_<?php echo $a+1; ?>"></div>
<?php $_SESSION['achivement']=$a+1; ?>