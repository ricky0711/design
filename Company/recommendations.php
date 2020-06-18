<?php 
  ob_start();
  include('header.php');
  $data=$_SESSION['Userdata'];
  $cid=$_SESSION['lid'];
  error_reporting(0);
?>
<?php
	    include('../Files/PDO/dbcon.php');	
        $stmt=$con->prepare("CALL VIEW_RECOMMENDATIONS(:cid);");
        $stmt->bindparam(':cid', $cid);
        $stmt->execute();
	?>
            <div class="content">
                <div class="content">
                    <div class="container-fluid">
                        <h3>Recommended Students</h3>
                        <br>
                        <div class="row">
                                    <?php while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        $rid = $data["RECOMMENDATION_ID"];
                                        $stmt2=$con->prepare("CALL CHECK_RECOMMENDATION_STATUS(:rid)");
                                        $stmt2->bindparam(':rid', $rid);
                                        $stmt2->execute();
                                        $stmt2=$con->prepare("CALL CHECK_RECOMMENDATION_STATUS(:rid)");
                                        $stmt2->bindparam(':rid', $rid);
                                        $stmt2->execute();
                                        $x=$stmt2->fetch(PDO::FETCH_ASSOC);
                                        $st=$x['RECOMMENDATION_STATUS'];
                                        // echo $st;
                                        if ($st == '0') {
                                            // print_r($data);  `1
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
                                            
                                            <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                                <i class="material-icons">build</i> Fix Header!
                                            </button>
                                            <a href="student_profile.php?sid=<?php echo $data["STUDENT_ID"];?>"> 
                                            <button type="button"  class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View Student">
                                                <i class="material-icons">visibility</i>
                                            </button>
                                            </a>
                                            <a href="add_to_short_list.php?sid=<?php echo $data["STUDENT_ID"]; ?>&cid=<?php echo $cid; ?>rid=<?php echo $data["RECOMMENDATION_ID"]; ?>" >
                                            <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Add to Shortlist">
                                                <i class="material-icons">person_add</i>
                                            </button>
                                            </a>
                                            <a href="remove_student_recommendation.php?rid=<?php echo $data["RECOMMENDATION_ID"]; ?>">
                                            <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Terminate Student">
                                                <i class="material-icons">person_remove</i>
                                            </button>
                                            </a>
                                        </div>
                                        <h4 class="card-title">
                                            <a href="#"><?php echo $data["STUDENT_FIRST_NAME"]." ".$data["STUDENT_LAST_NAME"]; ?></a>
                                        </h4>
                                        <div class="card-description">
                                            <?php echo $data["STUDENT_ENROLLMENT_NUMBER"]; ?><br>
                                            <?php echo $data["STUDENT_DATE_OF_BIRTH"]; ?>
                                            <?php if($data["STUDENT_GENDER"]=="M"){
                                                        ?>
                                                        <i class="fa fa-mars text-info ml-3" style="font-size:25px;"></i>
                                                        <?php
                                                    }else{
                                                        ?>
                                                        <i class="fa fa-venus text-rose ml-3" style="font-size:25px;"></i>
                                                        <?php
                                                    }

                                            ?><br>
                                            <code><?php echo $data['RECOMMENDATION_DESCRIPTION'];?></code>

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
                            <?php $a++; ?>
                                <?php
                            }
                        } 
                        ?>
                        </div>
                    </div>
                </div>
            </div>
    <?php 
  include('footer.php');
  ob_flush();
?>