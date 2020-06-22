<?php 
  ob_start();
  //include('header.php');
  session_start();
  $data=$_SESSION['Userdata'];
  $select_list_id=$_GET["sid"];
  $_SESSION["selection_list_id"]=$_GET["sid"];
  include('../../Files/PDO/dbcon.php');
  error_reporting(0);
?>
<div class="content">
    <div class="row">
        <div class="card" style="width:1200px;">
            <div class="card-header">
                <h4 class="card-title">Shortlisted Students</h4>
                <p class="card-category">
                </p>
            </div>
            <div class="card-body">
                    <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                <div class="material-datatables">
                    <table id="tblshortlist" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                            <tr>
                                <th>Enrollment Number</th>
                                <th>Name</th>
                                <th>Offered Stipend</th>
                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Enrollment Number</th>
                                <th>Name</th>
                                <th>Offered Stipend</th>
                            </tr>
                        </tfoot>
                        <tbody>
                    <?php
                            $stmt4=$con->prepare(" CALL GET_SHORTLISTED_STUDENT(:selection_list_id);");
                            $stmt4->bindparam(":selection_list_id",$select_list_id);
                            $stmt4->execute();
                             while($x = $stmt4->fetch(PDO::FETCH_ASSOC)) { 
                                //  print_r($x);
                                $studid=$x["SHORTLIST_STUDENT_ID"];
                                $stmt2=$con->prepare("CALL GET_STUDENT_DETAILS(:studid)");
                                $stmt2->bindParam(":studid",$studid);     
                                $stmt2->execute(); 
                                $stmt2=$con->prepare("CALL GET_STUDENT_DETAILS(:studid)");
                                $stmt2->bindParam(":studid",$studid);     
                                $stmt2->execute(); 
                                $studdata=$stmt2->fetch(PDO::FETCH_ASSOC);
                                $stmt3=$con->prepare("CALL GET_STIPEND_STUDENT(:studid,:selection_list_id)");
                                $stmt3->bindParam(":studid",$studid);   
                                $stmt3->bindParam(":selection_list_id",$select_list_id);   
                                $stmt3->execute();
                                $stmt3=$con->prepare("CALL GET_STIPEND_STUDENT(:studid,:selection_list_id)");
                                $stmt3->bindParam(":studid",$studid);   
                                $stmt3->bindParam(":selection_list_id",$select_list_id);   
                                $stmt3->execute();
                                $stipentdata = $stmt3->fetch(PDO::FETCH_ASSOC);
                                $stmt5=$con->prepare("CALL CHECK_STUDENT_TRAINING_NOTIFICATION(:studid)");
                                $stmt5->bindParam(":studid",$studid);   
                                $stmt5->execute();
                                $stmt5=$con->prepare("CALL CHECK_STUDENT_TRAINING_NOTIFICATION(:studid)");
                                $stmt5->bindParam(":studid",$studid);   
                                $stmt5->execute();
                                $checkdata=$stmt5->fetch(PDO::FETCH_ASSOC);
                                $st = $checkdata["st"];
                                if ($st=='1') {
                                 ?>
                            <tr>
                                <td><?php echo $studdata["STUDENT_ENROLLMENT_NUMBER"]; ?></td>
                                <td><?php echo $studdata["STUDENT_FIRST_NAME"]." ".$studdata["STUDENT_LAST_NAME"]; ?></td>
                                <td><?php echo $stipentdata["TRAINING_OFFERED_STIPEND"]; ?></td>
                                <td class="text-right"><a href="student_profile.php?sid=<?php echo $studdata["STUDENT_ID"]; ?>" class="btn btn-link btn-info btn-just-icon " rel="tooltip" title="View Student Profile"><i class="material-icons">visibility</i></a>
                                            <a href="insert_student_notification.php?sid=<?php echo $studdata["STUDENT_ID"]; ?>" class="btn btn-link btn-success btn-just-icon " rel="tooltip" title="Finalize Student"><i class="material-icons">restore_from_trash</i></a></td>
                            </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php 
  //include('footer.php');
  ob_flush();
?>