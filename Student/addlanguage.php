<?php 
	session_start();
	$a = $_GET['a'];
 ?>
 <div class="form-group">
	<label for="l[]" class="bmd-label-floating">Language <?php echo $a+1; ?></label>
	<input type="text" name="l[]" class="form-control ">
</div>
<div id="language_<?php echo $a+1; ?>"></div>
<?php $_SESSION['language']=$a+1; ?>