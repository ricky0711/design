<?php
	include('../Files/PDO/dbcon.php');
	$nid = $_GET['nid'];
	$stmt=$con->prepare("CALL REMOVE_NOTIFICATION(:nid)");
	$stmt->bindparam(":nid",$nid);
	$stmt->execute();
	header("location: company_dashboard.php");
?>