
<?php
   ob_start();
   session_start();
   $data=$_SESSION['Userdata'];
   $cid = $data["COMPANY_ID"];
   $cname= $data["COMPANY_NAME"];
   include('../Files/PDO/dbcon.php');
   $selection_list_id=$_GET["sid"];
   $_SESSION["selection_list_id"]=$_GET["sid"]; 

	$stmt=$con->prepare("CALL VIEW_SHORTLIST(:sid);");
	$stmt->bindParam(":sid",$selection_list_id);     
	$stmt->execute(); 
	$count=0; 
	$x=1;
	while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$studid=$data["SHORTLIST_STUDENT_ID"];	
		//echo "$studid";
		$stmt2=$con->prepare("CALL GET_STUDENT_DETAILS(:studid)");
		$stmt2->bindParam(":studid",$studid);     
		$stmt2->execute(); 
		$stmt2=$con->prepare("CALL GET_STUDENT_DETAILS(:studid)");
		$stmt2->bindParam(":studid",$studid);     
		$stmt2->execute(); 
		while ($studdata = $stmt2->fetch(PDO::FETCH_ASSOC)) {
?>
						
                        <tr>
						            <td><?php echo $studdata["STUDENT_ENROLLMENT_NUMBER"]; ?></td>
						            <td><?php echo $studdata["STUDENT_FIRST_NAME"]." ".$studdata["STUDENT_LAST_NAME"]; ?></td>
                       				<td>
									   <div class="form-group">
											<label for="title" class="bmd-label-floating">Add Stipend</label>
											<input type="text" class="form-control" name="stipend_student<?php echo $count;?>" id="title">
											<input type="hidden" class="form-control"name="student_id<?php echo $count;?>"
                       								value="<?php echo $studdata['STUDENT_ID'];?>" required>
										</div> 
										                      					
                       				</td>

						        </tr>

						        <?php 
						        	$count+=1;
						    	} ?>	
						        <?php
						}?>
							<button type="submit"  name="submit" value="<?php echo $selection_list_id; ?>" class="btn btn-success mt-3 mb-3 btn-sm btn-block">
								<i class="fa fa-inr"></i> Update Stipend
							</button>
							<?php
								$_SESSION["count"]=$count;
							?>
							
<?php 
	if(isset($_REQUEST["submit"])){
		//$stipend=$_REQUEST["stipend_student"];

		echo "<script>alert('THIS')</script>";

		// $acc='P';
		// $a=0;
		// for ($i = 0; $i < $count; $i++) {
		// 	$stipend=$_REQUEST["stipend_student$i"];
		// 	$student_id=$_REQUEST["student_id$i"];
		// 	//echo "<script>alert('$student_id')</script>";
		// 	if($a==0){
		// 		$stmt3=$con->prepare("CALL INSERT_UPDATE_TRAINING(:studid,:com_id,:stipend,:accepted)");
	    // 		$stmt3->bindParam(":studid	",$student_id);
	    // 		$stmt3->bindParam(":com_id",$cid);
	    // 		$stmt3->bindParam(":stipend",$stipend);
	    // 		$stmt3->bindParam(":accepted",$acc);
	    // 		$stmt3->execute();
	    // 		$a=1;
    	// 	}
    	// 	$stmt3=$con->prepare("CALL INSERT_UPDATE_TRAINING(:studid,:com_id,:stipend,:accepted)");
    	// 	$stmt3->bindParam(":studid",$student_id);
    	// 	$stmt3->bindParam(":com_id",$cid);
    	// 	$stmt3->bindParam(":stipend",$stipend);
    	// 	$stmt3->bindParam(":accepted",$acc);
    	// 	$stmt3->execute();
		// }

		// if($stmt3 == TRUE){
	   	// echo "<script>alert('Stipend Save Or Updated')</script>";
		// }else{
		// 	echo "<script>alert('Save Not Stipend')</script>";
		// }


	}
 ?>
 