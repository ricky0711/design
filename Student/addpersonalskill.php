<?php 
	session_start();
	$a = $_GET['a'];
 ?>
  <div class="form-group">
	<label for="p[]" class="bmd-label-floating">Personal Skill <?php echo $a+1; ?></label>
	<input type="text" name="p[]" class="form-control ">
</div>
<div id="personal_skills_<?php echo $a+1; ?>"></div>
<?php $_SESSION['personalSkill']=$a+1; ?>