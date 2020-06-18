<?php 
	session_start();
	$a = $_GET['a'];
 ?>
 <div class="form-group">
	<label for="t[]" class="bmd-label-floating">Technical Skill <?php echo $a+1; ?></label>
	<input type="text" name="t[]" class="form-control ">
</div>
<div id="technical_skills_<?php echo $a+1; ?>"></div>
<?php $_SESSION['skill']=$a+1; ?>