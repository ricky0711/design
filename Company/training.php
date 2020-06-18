<?php
  ob_start();
  include('header.php');
  include('../Files/PDO/dbcon.php');
  $data=$_SESSION['Userdata'];
  $cid = $data["COMPANY_ID"];
  $cname= $data["COMPANY_NAME"];
?>
            <div class="content">
                <div class="content">
                    <div class="container-fluid">
                        <h3>Under Training Student List 
                        
                        </h3>
                        <br>
                        <form action="#" method="Post" class="">
                        <div class="row">
                                <?php 
                                        $stmt=$con->prepare("CALL GET_ALL_TRANING_STUDENT_BY_COMPANY(:company_id);");
                                        $stmt->bindParam(":company_id",$cid);  
                                        $stmt->execute();
                                        $a=1;
                                        while($studdata  = $stmt->fetch(PDO::FETCH_ASSOC))
                                        {
                                            $studid=$studdata["TRAINING_STUDENT_ID"];
                                            $stmt2=$con->prepare("CALL GET_STUDENT_DETAILS(:studid)");
                                                    $stmt2->bindParam(":studid",$studid);     
                                            $stmt2->execute(); 
                                            $stmt2=$con->prepare("CALL GET_STUDENT_DETAILS(:studid)");
                                            $stmt2->bindParam(":studid",$studid);     
                                            $stmt2->execute();
                                            // while($studenttabledata  = $stmt2->fetch(PDO::FETCH_ASSOC))
                                            // {
                                                // echo "<per>";
                                                // print_r($studenttabledata);
                                                // echo "</per>";
                                            $studenttabledata  = $stmt2->fetch(PDO::FETCH_ASSOC);

                                            $stmt3=$con->prepare("CALL CHECK_STUDENT_TRAINING(:sid)");
                                                    $stmt3->bindParam(":sid",$studid);     
                                            $stmt3->execute(); 
                                            $stmt3=$con->prepare("CALL CHECK_STUDENT_TRAINING(:sid)");
                                            $stmt3->bindParam(":sid",$studid);     
                                            $stmt3->execute();
                                            $check_training = $stmt3->fetch(PDO::FETCH_ASSOC);
                                            $st = $check_training['st'];
                                            if ($st == '0') {
                                    ?>
                                    <div class="col-md-4">
                                        <div class="card card-product">
                                            <div class="card-header card-header-image" data-header-animation="true">
                
                                                <a href="#">
                                                    <img class="img" src="../Student/Profile_pic/<?php echo $studenttabledata["STUDENT_PROFILE_PIC"]; ?>" style="height:220px;">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-actions text-center">
                                                    <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                                        <i class="material-icons">build</i> Fix Header!
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Add Student">
                                                    </button>
                                                    <a href="student_documents.php?sid=<?php echo $studdata["TRAINING_STUDENT_ID"]; ?>" >
                                                        <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Add Document">
                                                            <i class="material-icons">create_new_folder</i>
                                                        </button>
                                                    </a>
                                                    <a href="terminate_student.php?sid=<?php echo $studdata["TRAINING_STUDENT_ID"]; ?>">
                                                    <button type="button"  class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Terminate Student">
                                                        <i class="material-icons">person_remove</i>
                                                    </button>
                                                    </a>
                                                </div>
                                                <h4 class="card-title">
                                                    <a href="#"><?php echo $studenttabledata["STUDENT_FIRST_NAME"]." ".$studenttabledata["STUDENT_LAST_NAME"]; ?></a>
                                                </h4>
                                                <div class="card-description">
                                                    <?php echo $studenttabledata["STUDENT_ENROLLMENT_NUMBER"]; ?><br>
                                                    <?php echo $studenttabledata["STUDENT_DATE_OF_BIRTH"]; ?><br>
                                                    <?php if($studenttabledata["STUDENT_GENDER"]=="M"){
                                                                echo "Male";
                                                            }else{
                                                                echo "Female";
                                                            }
                                                    ?>
                                                    <div class="form-check pull-right">
                                                    <label class="form-check-label" >
                                                        <input class="form-check-input" type="checkbox" name="<?php echo $studid; ?>"
                                                        value="<?php echo $studid; ?>"> 
                                                        <span class="form-check-sign">
                                                        <span class="check"></span>
                                                        </span>
                                                    </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="stats">
                                                    <p class="card-category"><i class="material-icons">mail</i> <?php echo $studenttabledata["STUDENT_EMAIL"]; ?></p>
                                                </div>
                                                <div class="stats">
                                                <p class="card-category"><i class="material-icons">phone</i> <?php echo $studenttabledata["STUDENT_PHONE_NUMBER"]; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            
                            <?php $a++; ?>
                                <?php
                            }
                        }                        
                        ?>                       
                       </div>
                       <button type="submit" name="submit" class="btn btn-success btn-round pull-right">
                            <i class="material-icons">send</i> Send Placement List
                        </button>
                       </form>
                    </div> 
                </div>
            </div>
            <?php 
            include 'footer.php'; 
            ?>
            <?php 
  if(isset($_REQUEST["submit"])){
    $_SESSION['req']=$_REQUEST;
    $stmt3=$con->prepare("CALL GET_ALL_TRANING_STUDENT_BY_COMPANY(:company_id);");
    $stmt3->bindParam(":company_id",$cid);  
    $stmt3->execute();
    $stmt3=$con->prepare("CALL GET_ALL_TRANING_STUDENT_BY_COMPANY(:company_id);");
    $stmt3->bindParam(":company_id",$cid);  
    $stmt3->execute();
    $missing=array();
    $cnt=0;
    while($studdata  = $stmt3->fetch(PDO::FETCH_ASSOC))
    {
        $checked_studid = $studdata["TRAINING_STUDENT_ID"];
        // if(empty($_REQUEST["$checked_studid"])){
        //   echo "<script>alert('Please Select a Student')</script>";
        //   break;
        // }

        if(isset($_REQUEST["$checked_studid"])){
            $sid=$_REQUEST["$checked_studid"];
            // echo "<script>alert('$sid')</script>";
            // if(empty($sid)){
            //   echo "<script>alert('Please Select a Student')</script>";
            // }
            //echo "<script>alert('$sid')</script>";
            //header("Location: student_documents.php?sid=$sid");
            $stmt4=$con->prepare("CALL CHECK_PLACEMENT_DOCUMENTS(:stud_id,:company_id);");
            $stmt4->bindParam(":stud_id",$sid);  
            $stmt4->bindParam(":company_id",$cid);  
            $stmt4->execute();
            $stmt4=$con->prepare("CALL CHECK_PLACEMENT_DOCUMENTS(:stud_id,:company_id);");
            $stmt4->bindParam(":stud_id",$sid);  
            $stmt4->bindParam(":company_id",$cid);  
            $stmt4->execute();
            $file_check = $stmt4->fetch(PDO::FETCH_ASSOC);
            if ($file_check['OL'] != '1' || $file_check['BD'] != '1') {
              array_push($missing,$file_check['STUDENT_ENROLLMENT_NUMBER']);
            }
            $cnt=1;
        }
    }
    if (sizeof($missing) != 0) {
        $msg="";
        foreach($missing as $a){
          $msg .= $a;
          $msg .= "  ";
        }
        ?>
    <script>
    alert("Document Missing For <?php echo $msg; ?>");
    </script>
    <?php
    }
    if ($cnt==1 && sizeof($missing) == 0) {
          header("Location: Package_entry.php");
    }
  }

  
?>