<?php 
  ob_start();
  //include('header.php');
  session_start();
  $data=$_SESSION['Userdata'];
  $cid=$_GET["cid"];
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
                    <table id="tblcmp_plcmnt" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
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
                                 $stmt2=$con->prepare("CALL GET_PLACMENT_STUDENTS(:cid)");
                                 $stmt2->bindParam(":cid",$cid);     
                                 $stmt2->execute(); 
                                 $stmt2=$con->prepare("CALL GET_PLACMENT_STUDENTS(:cid)");
                                 $stmt2->bindParam(":cid",$cid);     
                                 $stmt2->execute();
                                while($studdata=$stmt2->fetch(PDO::FETCH_ASSOC)) { 
                                 $st='0';
                                 $sid=$studdata['STUDENT_ID'];
                                 $stmt3=$con->prepare("CALL CHECK_STUDENT_PLACEMENT_NOTIFICATION(:sid)");
                                 $stmt3->bindParam(":sid",$sid);     
                                 $stmt3->execute();
                                 $stmt3=$con->prepare("CALL CHECK_STUDENT_PLACEMENT_NOTIFICATION(:sid)");
                                 $stmt3->bindParam(":sid",$sid);     
                                 $stmt3->execute();
                                 $x=$stmt3->fetch(PDO::FETCH_ASSOC);
                                 $st=$x['st'];
                                if ($st=='1') {
                                    $stmt4=$con->prepare("CALL GET_STUDENT_PLACEMENT_DOCUMENTS(:sid)");
                                    $stmt4->bindParam(":sid",$sid);     
                                    $stmt4->execute();
                                    $stmt4=$con->prepare("CALL GET_STUDENT_PLACEMENT_DOCUMENTS(:sid)");
                                    $stmt4->bindParam(":sid",$sid);     
                                    $stmt4->execute();
                                    while ($document = $stmt4->fetch(PDO::FETCH_ASSOC)) {
                                        if ($document['COMPANY_DOCUMENT_TYPE'] == 'OL') {
                                            $ol=$document['COMPANY_DOCUMENT_NAME'];
                                        }
                                        elseif ($document['COMPANY_DOCUMENT_TYPE'] == 'BD') {
                                            $bd=$document['COMPANY_DOCUMENT_NAME'];
                                        }
                                    }
                                 ?>
                            <tr>
                                <td><?php echo $studdata["STUDENT_ENROLLMENT_NUMBER"]; ?></td>
                                <td><?php echo $studdata["STUDENT_FIRST_NAME"]." ".$studdata["STUDENT_LAST_NAME"]; ?></td>
                                <td><?php echo $studdata["PLACEMENT_OFFERED_PACKAGE"]; ?></td>
                                <td class="text-right text-nowrap"><a href="../../Company/Document_offer_letter/<?php echo $ol; ?>" download class="btn btn-link btn-warning btn-just-icon " rel="tooltip" title="Offer Letter"><i class="material-icons">visibility</i></a>
                                            <a href="../../Company/Document_bond/<?php echo $bd; ?>" download class="btn btn-link btn-rose btn-just-icon " rel="tooltip" title="Bond"><i class="material-icons">restore_from_trash</i></a>
                                            <a href="student_profile.php?sid=<?php echo $studdata["STUDENT_ID"]; ?>" class="btn btn-link btn-info btn-just-icon " rel="tooltip" title="View Student Profile"><i class="material-icons">restore_from_trash</i></a>
                                            <a href="insert_student_placement_notification.php?sid=<?php echo $studdata["STUDENT_ID"]; ?>&cid=<?php echo $cid; ?>" class="btn btn-link btn-success btn-just-icon " rel="tooltip" title="Finalize Student"><i class="material-icons">restore_from_trash</i></a></td>

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