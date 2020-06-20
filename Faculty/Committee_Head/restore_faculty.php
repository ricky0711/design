<?php 
	include('../../Files/PDO/dbcon.php');
	$fid = $_GET['fid'];
	$stmt=$con->prepare("CALL RESTORE_FACULTY(:fid)");
    $stmt->bindParam(':fid',$fid);
    $stmt->execute();

    header("Location: faculty.php");
 ?>