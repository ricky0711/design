<?php
  ob_start();
  include('header.php');
  include('../Files/PDO/dbcon.php');
  $data=$_SESSION['Userdata'];
  $cid = $data["COMPANY_ID"];
  $cname= $data["COMPANY_NAME"];
?>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<div class="content">
    <div class="container-fluid">
      <?php
        if(isset($_SESSION["errorforstipend"])){
      ?>
        <div class="row">
            <div class="col-12">
              <?php echo $_SESSION["errorforstipend"]; ?>
              <?php 
                  }else{
                    ?>
                    <?php 
                          }
                        ?>
                        
                      <form action="#" method="Post">
                        <div class="">
                              <?php
                                    $stmt=$con->prepare("CALL VIEW_SELECTION_LIST(:cid);");
                                    $stmt->bindParam(":cid",$cid);  
                                    $stmt->execute();
                                    $a=1; 
                              ?>
                              <select class="selectpicker" id="slist" onchange="student_details()" name="slist" data-size="7" data-style="btn btn-primary btn-round" title="Select Shortlist">
                                <option disabled selected>Select Shortlist</option>
                                  <?php 
                                  while($data  = $stmt->fetch(PDO::FETCH_ASSOC))
                                  {
                                  ?>
                                <option value="<?php echo $data["SELECTION_LIST_ID"]; ?>"><?php echo $data["SELECTION_LIST_NAME"]; ?></option>
                                  <?php } ?>
                              </select>
                              <div class="d-flex justify-content-center">
                              <input type="submit" name="submit" value="Submit" class="btn btn-outline-success">
                          </div>
                      </form> 
            </div>
            <br><br>
        </div>
    </div>
</div>
<?php 
  include('footer.php');
  ob_flush();
?>      

<?php 
	if(isset($_REQUEST["submit"])){
  
    $select_id = $_REQUEST["slist"];  
    $sid = $_GET["sid"];
    $stmt2=$con->prepare("CALL GET_RECOMMENDATION(:sid, :cid);");
    $stmt2->bindparam(':sid', $sid);
    $stmt2->bindparam(':cid', $cid);
    $stmt2->execute();
    $stmt2=$con->prepare("CALL GET_RECOMMENDATION(:sid, :cid);");
    $stmt2->bindparam(':sid', $sid);
    $stmt2->bindparam(':cid', $cid);
    $stmt2->execute();
    $company_data= $stmt2->fetch(PDO::FETCH_ASSOC); 
    $rid = $company_data["RECOMMENDATION_ID"];
    

    $type = "SH";
    $stmt3=$con->prepare("CALL INSERT_UPDATE_SHORTLIST(:rid,:select_id,:studid);");
    $stmt3->bindparam(':rid', $rid);
    $stmt3->bindparam(':select_id', $select_id);
    $stmt3->bindparam(':studid', $sid);
    $stmt3->bindparam(':type', $type);
    $stmt3=$con->prepare("CALL INSERT_UPDATE_SHORTLIST(:rid,:select_id,:studid);");
    $stmt3->bindparam(':rid', $rid);
    $stmt3->bindparam(':select_id', $select_id);
    $stmt3->bindparam(':studid', $sid);
    $stmt3->bindparam(':type', $type);
    $stmt3->execute();
    

    $stmt5=$con->prepare("CALL REMOVE_RECOMMENDATION(:rid)");
    $stmt5->bindparam(':rid', $rid);
    $stmt5->execute();
    $stmt5=$con->prepare("CALL REMOVE_RECOMMENDATION(:rid)");
    $stmt5->bindparam(':rid', $rid);
    $stmt5->execute();

    if($stmt3){
      echo "<script>alert('Recommendaed Student')</script>";
    }else{
      echo "<script>alert('Recommendaed Not Student')</script>";
    }
	}
?>

