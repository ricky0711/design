<?php 
	session_start();
	$a = $_GET['a'];
 ?>
  <div class="form-group">
	<label for="pr[]" class="bmd-label-floating">Projects <?php echo $a+1; ?></label>
	<input type="text" name="pr[]" class="form-control ">
</div>
<div id="project_<?php echo $a+1; ?>"></div>
<?php $_SESSION['project']=$a+1; ?>