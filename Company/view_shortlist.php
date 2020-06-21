<?php
ob_start();
session_start();
//include('header.php');
$data=$_SESSION['Userdata'];
$cid = $data["COMPANY_ID"];
$cname= $data["COMPANY_NAME"];
include('../Files/PDO/dbcon.php');
$selection_list_id=$_GET["sid"];
$_SESSION["slist_id"]=$_GET["sid"];
$stmt=$con->prepare("CALL VIEW_SHORTLIST(:sid);");
$stmt->bindParam(":sid",$selection_list_id);     
$stmt->execute(); 
?>
<div class="material-datatables">
  <table id="viewShortlist" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
    <thead>
      <tr>
        <th>Enrollment No.</th>
        <th>Name</th>
        <th>Stipend</th>
        <th class="disabled-sorting text-right">Actions</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>Enrollment No.</th>
        <th>Name</th>
        <th>Stipend</th>
        <th class="text-right">Actions</th>
      </tr>
    </tfoot>
    <tbody>
      <?php 
      $x=1;
      while ($data = $stmt->fetch(PDO::FETCH_ASSOC))
      {
        $studid=$data["SHORTLIST_STUDENT_ID"];	
        // echo "$studid";
        $stmt2=$con->prepare("CALL GET_STUDENT_DETAILS(:studid)");
        $stmt2->bindParam(":studid",$studid);     
        $stmt2->execute(); 
        $stmt2=$con->prepare("CALL GET_STUDENT_DETAILS(:studid)");
        $stmt2->bindParam(":studid",$studid);     
        $stmt2->execute();

      while ($studdata = $stmt2->fetch(PDO::FETCH_ASSOC)) 
      {
        $student_id=$studdata["STUDENT_ID"];
        $stmt3=$con->prepare("CALL GET_STIPEND_STUDENT(:studid,:selection_list_id)");
        $stmt3->bindParam(":studid",$student_id);   
        $stmt3->bindParam(":selection_list_id",$selection_list_id);   
        $stmt3->execute();
        $stmt3=$con->prepare("CALL GET_STIPEND_STUDENT(:studid,:selection_list_id)");
        $stmt3->bindParam(":studid",$student_id);   
        $stmt3->bindParam(":selection_list_id",$selection_list_id);   
        $stmt3->execute();
      ?>
        <tr>
          <td><?php echo $studdata["STUDENT_ENROLLMENT_NUMBER"]; ?></td>
          <td><?php echo $studdata["STUDENT_FIRST_NAME"]." ".$studdata["STUDENT_LAST_NAME"]; ?></td>
              <?php
                $row =$stmt3->rowCount();
                if($row == 0){
              ?>
          <td><?php echo "Stipend Not Enter"; ?></td>
          <td><button type="button" value="<?php echo $studdata["STUDENT_ID"]; ?>" class="btn btn-link btn-danger btn-just-icon delStud" rel="tooltip" title="Delete ShortList"><i class="material-icons">delete_sweep</i></button></td>
        </tr>
              <?php
                }
                while ($stipentdata = $stmt3->fetch(PDO::FETCH_ASSOC))
                {
                //print_r($stipentdata);
                ?>
              <?php
                if($stipentdata["TRAINING_OFFERED_STIPEND"] == "0"){
              ?>
          <td><?php echo "Stipend Zero"; ?></td>
          <td><a href="delete_student.php?sid=<?php echo $studdata["STUDENT_ID"]; ?>" class="btn btn-link btn-danger btn-just-icon " rel="tooltip" title="Delete ShortList"><i class="material-icons">delete_sweep</i></a></td>
        </tr> 
        <?php
                }else{
                ?>
          <td><?php echo $stipentdata["TRAINING_OFFERED_STIPEND"]; ?></td>
          <td><a href="delete_student.php?sid=<?php echo $studdata["STUDENT_ID"]; ?>" class="btn btn-link btn-danger btn-just-icon " rel="tooltip" title="Delete ShortList"><i class="material-icons">delete_sweep</i></a></td>

        </tr>
            <?php
            }
            ?>
            <?php } } } 
            ?>
    </tbody>
  </table>
      <button type="button" value="<?php echo $selection_list_id; ?>" class="btn btn-success mt-3 mb-3 btn-sm btn-block StipendBtn" data-dismiss="modal" data-toggle="modal" data-target="#noticeModal2">
        <i class="fa fa-inr"></i> Update Stipend
      </button>
</div>
<?php 
ob_flush();
?>
