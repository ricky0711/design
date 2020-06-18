<div class="row">
<?php
     include('../Files/PDO/dbcon.php');
     session_start();
     $eid = $_GET['eid'];
     $stmt2=$con->prepare("CALL GET_APPLIED_PRESENT_STUDENT(:eid)");
     $stmt2->bindParam(":eid",$eid);     
     $stmt2->execute();
     $stmt2=$con->prepare("CALL GET_APPLIED_PRESENT_STUDENT(:eid)");
     $stmt2->bindParam(":eid",$eid);     
     $stmt2->execute();
     $sid = $_SESSION["selection_list_id"];
       $cnt=0;
       $c=0;
        while ($data=$stmt2->fetch(PDO::FETCH_ASSOC)) {
            $studid=$data['STUDENT_ID'];
            $check = 0;
            $stmt3=$con->prepare("CALL GET_SHORTLISTED_STUDENT(:sid)");
            $stmt3->bindParam(":sid",$sid);
            $stmt3->execute();
            $stmt3=$con->prepare("CALL GET_SHORTLISTED_STUDENT(:sid)");  
            $stmt3->bindParam(":sid",$sid);   
            $stmt3->execute();

            while ($y=$stmt3->fetch(PDO::FETCH_ASSOC)) {
                $shortlit_studid=$y['SHORTLIST_STUDENT_ID'];
                if ($studid==$shortlit_studid) {
                    $check = 1;
                    break;
                }
            }

            $stmt5=$con->prepare("CALL CHECK_STUDENT_TRAINING_ACCEPTED(:sid)");
            $stmt5->bindParam(":sid",$studid);
            $stmt5->execute();
            $stmt5=$con->prepare("CALL CHECK_STUDENT_TRAINING_ACCEPTED(:sid)");
            $stmt5->bindParam(":sid",$studid);
            $stmt5->execute();
            $tradata=$stmt5->fetch(PDO::FETCH_ASSOC);
            $st = $tradata["st"];    
            if ($st== '0') {
            
                if ($check==1) {
                    ?>
                    
                    <div class="col-md-4">
                        <div class="card card-product">
                            <div class="card-header card-header-image" data-header-animation="true">

                                <a href="#">
                                    <img class="img" src="../Student/Profile_pic/<?php echo $data["STUDENT_PROFILE_PIC"]; ?>" style="height:220px;">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="card-actions text-center">
                                    <!-- <button type="button" class="btn btn-danger btn-link fix-broken-card">
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
                                    </a> -->
                                </div>
                                <h4 class="card-title">
                                    <a href="#"><?php echo $data["STUDENT_FIRST_NAME"]." ".$data["STUDENT_LAST_NAME"]; ?></a>
                                </h4>
                                <div class="card-description">
                                    <?php echo $data["STUDENT_ENROLLMENT_NUMBER"]; ?><br>
                                    <?php echo $data["STUDENT_DATE_OF_BIRTH"]; ?><br>
                                    <?php if($data["STUDENT_GENDER"]=="M"){
                                                echo "Male";
                                            }else{
                                                echo "Female";
                                            }
                                    ?>
                                    <div class="form-check pull-right">
                                    <label class="form-check-label" >
                                    <input class="form-check-input" type="checkbox" id="stud_ins<?php echo $cnt; ?>" name="<?php echo $studid; ?>"
                                            value="<?php echo $studid; ?>" checked="checked" onClick="get_click(this.id)">
                                        <span class="form-check-sign">
                                        <span class="check"></span>
                                        </span>
                                    </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <p class="card-category"><i class="material-icons">mail</i> <?php echo $data["STUDENT_EMAIL"]; ?></p>
                                </div>
                                <div class="stats">
                                <p class="card-category"><i class="material-icons">phone</i> <?php echo $data["STUDENT_PHONE_NUMBER"]; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- New Design Here -->
                <?php
                    $cnt+=1; 
                }
                else
                {
                    ?>
                    <div class="col-md-4">
                        <div class="card card-product">
                            <div class="card-header card-header-image" data-header-animation="true">

                                <a href="#">
                                    <img class="img" src="../Student/Profile_pic/<?php echo $data["STUDENT_PROFILE_PIC"]; ?>" style="height:220px;">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="card-actions text-center">
                                    <!-- <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                        <i class="material-icons">build</i> Fix Header!
                                    </button>
                                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Add Student">
                                    </button> -->
                                    <!-- <a href="student_documents.php?sid=<?php echo $studdata["TRAINING_STUDENT_ID"]; ?>" >
                                        <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Add Document">
                                            <i class="material-icons">create_new_folder</i>
                                        </button>
                                    </a>
                                    <a href="terminate_student.php?sid=<?php echo $studdata["TRAINING_STUDENT_ID"]; ?>">
                                    <button type="button"  class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Terminate Student">
                                        <i class="material-icons">person_remove</i>
                                    </button>
                                    </a> -->
                                </div>
                                <h4 class="card-title">
                                    <a href="#"><?php echo $data["STUDENT_FIRST_NAME"]." ".$data["STUDENT_LAST_NAME"]; ?></a>
                                </h4>
                                <div class="card-description">
                                    <?php echo $data["STUDENT_ENROLLMENT_NUMBER"]; ?><br>
                                    <?php echo $data["STUDENT_DATE_OF_BIRTH"]; ?><br>
                                    <?php  if($data["STUDENT_GENDER"]=="M"){
                                                echo "Male";
                                            }else{
                                                echo "Female";
                                            } 
                                    ?>
                                    <div class="form-check pull-right">
                                    <label class="form-check-label" >
                                    <input class="form-check-input" type="checkbox" id="ins_stud<?php echo $c; ?>" name="<?php echo $studid; ?>"
                                            value="<?php echo $studid; ?>" onClick="ins_click(this.id)">
                                        <span class="form-check-sign">
                                        <span class="check"></span>
                                        </span>
                                    </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <p class="card-category"><i class="material-icons">mail</i> <?php echo $data["STUDENT_EMAIL"]; ?></p>
                                </div>
                                <div class="stats">
                                <p class="card-category"><i class="material-icons">phone</i> <?php echo $data["STUDENT_PHONE_NUMBER"]; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    $c+=1;
                }
            }
        } 
           ?>
           </div>