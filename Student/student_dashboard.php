<?php 
    include 'header.php';
?>
            <div class="content">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-stats">
                                    <div class="card-header card-header-primary card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">notifications</i>
                                        </div>
                                        
                                        <h3 class="font-weight-bold text-dark">Notifications</h3>
                                       <!-- <h3 class="card-title">184</h3> -->
                                    </div>
                                    <div class="card-body">
                                    <?php
                                    $count=0;
                                    include('../Files/PDO/dbcon.php');
                                    $id=$_SESSION['lid'];
                                    $type=$_SESSION['lut'];
                                    $stmt=$con->prepare("CALL GET_ALL_NOTIFICATION(:id,:type);");
                                    $stmt->bindparam(":id",$id);
                                    $stmt->bindparam(":type",$type);
                                    $stmt->execute();
                                    // print_r($stmt->errorinfo());
                                    while($data = $stmt->fetch(PDO::FETCH_ASSOC))
                                    {
                                    if ($data['NOTIFICATION_TYPE'] == 'MEVNT' || $data['NOTIFICATION_TYPE'] == 'AEVNT') {
                                        $id = $data['NOTIFICATION_EVENT_ID'];
                                        if($count==0)
                                        {
                                        $x=7;
                                        $stmt1=$con->prepare(" CALL GET_EVENT(:id);");
                                        $stmt1->bindparam(":id",$x);
                                        $stmt1->execute();
                                        $uname=$stmt1->fetch(PDO::FETCH_ASSOC);
                                        $count=1;
                                        echo $uname;
                                        }
                                        $stmt1=$con->prepare(" CALL GET_EVENT(:id);");
                                        $stmt1->bindparam(":id",$id);
                                        $stmt1->execute();
                                        $uname=$stmt1->fetch(PDO::FETCH_ASSOC);
                                    // print_r($stmt1->errorInfo());
                                        if ($uname["EVENT_CATEGORY"] == "1") {   
                                            ?>
                                            <div class="alert alert-primary alert-with-icon" data-notify="container">
                                                <i class="material-icons" data-notify="icon">notifications</i>
                                                    <!-- <button type="button" class="close" aria-label="Close">
                                                        <i class="material-icons">close</i>
                                                    </button> -->
                                                    <p class="pull-right mr-5"><?php echo $data['NOTIFICATION_TIME_STAMP']; ?> </p>
                                                <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                                                <h4  class="pull-left ml-2 font-weight-bold"><?php echo $uname['EVENT_NAME']; ?></h4>
                                                <p class="pull-left font-weight-bold mr-5">Hey There! A new event is created under your batch please review the event and coordinate with a Committee Member. Incase of query under and any situation including conflict in date, time or venue contact any Committee Member <br></p>
                                                <!-- <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span> -->
                                                <a href="remove_notification.php?nid=<?php echo $data['NOTIFICATION_ID']; ?>" type="button">
                                                    <button class="btn btn-secondary btn-sm btn-round mr-5">
                                                        <i class="material-icons">close</i> Remove
                                                    </button>
                                                </a>   
                                                <a href="view_event_detail.php?eid=<?php echo $data['NOTIFICATION_EVENT_ID']; ?>"> 
                                                    <button class="btn btn-secondary btn-sm btn-round pull-left mr-2" type="button">
                                                        <i class="material-icons">visibility</i> View
                                                    </button>
                                                </a>
                                            </div>
                                            <?php
                                        }else{
                                            ?>
                                            <div class="alert alert-primary alert-with-icon" data-notify="container">
                                                <i class="material-icons" data-notify="icon">notifications</i>
                                                    <!-- <button type="button" class="close" aria-label="Close">
                                                        <i class="material-icons">close</i>
                                                    </button> -->
                                                    <p class="pull-right mr-5"><?php echo $data['NOTIFICATION_TIME_STAMP']; ?> </p>
                                                <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                                                <h4  class="pull-left ml-2 font-weight-bold"><?php echo $uname['EVENT_NAME']; ?></h4>
                                                <p class="pull-left font-weight-bold mr-5">Hey There! A new event is created under your company please review the event and coordinate with a Committee Member. Incase of query under and any situation including change in date, time or venue contact any Committee Member <br></p>
                                                <!-- <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span> -->
                                                <a href="view_event_detail.php?eid=<?php echo $data['NOTIFICATION_EVENT_ID']; ?>"> 
                                                    <button class="btn btn-secondary btn-sm btn-round pull-left mr-2" type="button">
                                                        <i class="material-icons">visibility</i> View
                                                    </button>
                                                </a>
                                                <a href="allow.php?nid=<?php echo $data['NOTIFICATION_ID']; ?>&sid=<?php echo $data['NOTIFICATION_RECEIVER_ID'];?>&eid=<?php echo $uname['EVENT_ID']; ?>">
                                                    <button class="btn btn-secondary btn-sm btn-round">
                                                        <i class="material-icons">check</i> Apply
                                                    </button>
                                                </a>
                                                <a href="view_event_detail.php?eid=<?php echo $data['NOTIFICATION_EVENT_ID']; ?>">
                                                    <button class="btn btn-secondary btn-sm btn-round mr-5">
                                                        <i class="material-icons">close</i> Deny
                                                    </button>   
                                                </a>
                                            </div>
                                            <?php
                                        } 
                                    }
                                    elseif ($data['NOTIFICATION_TYPE'] == 'TROF') {
                                        $id = $data['NOTIFICATION_EVENT_ID'];
                                        $studid=$data["NOTIFICATION_RECEIVER_ID"];
                                        $stmt4=$con->prepare(" CALL GET_STUDENT_TRAINING_DATA(:selection_list_id,:stud_id);");
                                        $stmt4->bindparam(":selection_list_id",$id);
                                        $stmt4->bindparam(":stud_id",$studid);
                                        $stmt4->execute();
                                        $stmt4=$con->prepare(" CALL GET_STUDENT_TRAINING_DATA(:selection_list_id,:stud_id);");
                                        $stmt4->bindparam(":selection_list_id",$id);
                                        $stmt4->bindparam(":stud_id",$studid);
                                        $stmt4->execute();
                                        $companydata=$stmt4->fetch(PDO::FETCH_ASSOC);
                                        $cmpny_name=$companydata["COMPANY_NAME"];
                                        ?>
                                        <div class="alert alert-info alert-with-icon" data-notify="container">
                                                <i class="material-icons" data-notify="icon">notifications</i>
                                                    <!-- <button type="button" class="close" aria-label="Close">
                                                        <i class="material-icons">close</i>
                                                    </button> -->
                                                    <p class="pull-right mr-5"><?php echo $data['NOTIFICATION_TIME_STAMP']; ?></p>
                                                <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                                                <h4  class="pull-left ml-2 font-weight-bold"><?php echo $cmpny_name; ?></h4>
                                                <p class="pull-left font-weight-bold mr-5"><?php echo $data['NOTIFICATION_DESCRPTION']." from ".$cmpny_name." offring you stipend of Rs.".$companydata["TRAINING_OFFERED_STIPEND"]; ?>. Please make sure that you will not be offered another training if you deny then your process will be considered as complete and you will be loged out of the system.</p>
                                                <a href="Company_profile.php?cid=<?php echo $companydata['COMPANY_ID']; ?>">
                                                    <button class="btn btn-secondary btn-sm btn-round pull-left mr-2">
                                                        <i class="material-icons">visibility</i> View
                                                    </button>
                                                </a>
                                                <a href="accept_training.php?nid=<?php echo $data['NOTIFICATION_ID']; ?>&slid=<?php echo $id; ?>">
                                                    <button class="btn btn-secondary btn-sm btn-round">
                                                        <i class="material-icons">check</i> Accept
                                                    </button>
                                                </a>
                                                <a href="deny_training.php?nid=<?php echo $data['NOTIFICATION_ID']; ?>&slid=<?php echo $id; ?>">
                                                    <button class="btn btn-secondary btn-sm btn-round mr-5">
                                                        <i class="material-icons">close</i> Deny
                                                    </button>
                                                </a>
                                        </div>  
                                        <?php
                                    }
                                    elseif ($data['NOTIFICATION_TYPE'] == 'PLOF') {
                                        $studid=$data["NOTIFICATION_RECEIVER_ID"];
                                        $stmt4=$con->prepare(" CALL CHECK_STUDENT_PLACEMENT_DATA(:stud_id)");
                                        $stmt4->bindparam(":stud_id",$studid);
                                        $stmt4->execute();
                                        $stmt4=$con->prepare(" CALL CHECK_STUDENT_PLACEMENT_DATA(:stud_id)");
                                        $stmt4->bindparam(":stud_id",$studid);
                                        $stmt4->execute();
                                        $companydata=$stmt4->fetch(PDO::FETCH_ASSOC);
                                        // print_r($companydata);
                                        $cmpny_name=$companydata["COMPANY_NAME"];
                                        $stmt5=$con->prepare("CALL GET_STUDENT_PLACEMENT_DOCUMENTS(:sid)");
                                        $stmt5->bindParam(":sid",$studid);     
                                        $stmt5->execute();
                                        $stmt5=$con->prepare("CALL GET_STUDENT_PLACEMENT_DOCUMENTS(:sid)");
                                        $stmt5->bindParam(":sid",$studid);     
                                        $stmt5->execute();
                                        while ($document = $stmt5->fetch(PDO::FETCH_ASSOC)) {
                                            if ($document['COMPANY_DOCUMENT_TYPE'] == 'OL') {
                                                $ol=$document['COMPANY_DOCUMENT_NAME'];
                                            }
                                            elseif ($document['COMPANY_DOCUMENT_TYPE'] == 'BD') {
                                                $bd=$document['COMPANY_DOCUMENT_NAME'];
                                            }
                                        }
                                    ?>
                                        <div class="alert alert-rose alert-with-icon" data-notify="container">
                                                <i class="material-icons" data-notify="icon">notifications</i>
                                                    <!-- <button type="button" class="close" aria-label="Close">
                                                        <i class="material-icons">close</i>
                                                    </button> -->
                                                    <p class="pull-right mr-5"><?php echo $data['NOTIFICATION_TIME_STAMP']; ?></p>
                                                <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                                                <h4  class="pull-left ml-2 font-weight-bold"><?php echo $cmpny_name; ?></h4>
                                                <p class="pull-left font-weight-bold mr-5"><?php echo $data['NOTIFICATION_DESCRPTION']." by ".$cmpny_name." offring you package of Rs.".$companydata["PLACEMENT_OFFERED_PACKAGE"]; ?>. Please make sure that you will not be offered another placement if you Accept/Deny then your process will be considered as complete and you will be loged out of the system.</p>
                                                <!-- <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span> -->
                                                <a href="Company_profile.php?cid=<?php echo $companydata['COMPANY_ID']; ?>">
                                                    <button class="btn btn-secondary btn-sm btn-round pull-left mr-2">
                                                        <i class="material-icons">visibility</i> View
                                                    </button>
                                                </a>
                                                <a href="../Company/Document_offer_letter/<?php echo $ol; ?>" download>
                                                    <button class="btn btn-secondary btn-sm btn-round pull-left mr-2">
                                                        <i class="material-icons">cloud_download</i> Offer Leter
                                                    </button>
                                                </a>
                                                <a href="../Company/Document_bond/<?php echo $bd; ?>" download>
                                                    <button class="btn btn-secondary btn-sm btn-round pull-left">
                                                        <i class="material-icons">cloud_download</i> Bond
                                                    </button>
                                                </a>
                                                <a href="accept_placement.php?nid=<?php echo $data['NOTIFICATION_ID']; ?>">
                                                    <button class="btn btn-secondary btn-sm btn-round">
                                                        <i class="material-icons">check</i> Accept
                                                    </button>
                                                </a>
                                                <a href="deny_placement.php?nid=<?php echo $data['NOTIFICATION_ID']; ?>">
                                                    <button class="btn btn-secondary btn-sm btn-round mr-5">
                                                        <i class="material-icons">close</i> Deny
                                                    </button>
                                                </a>
                                        </div>    
                                    <?php
                                    }
                                    elseif ($data['NOTIFICATION_TYPE'] == 'TRREG') {
                                    ?>
                                      <div class="alert alert-warning alert-with-icon" data-notify="container">
                                                <i class="material-icons" data-notify="icon">notifications</i>
                                                    <!-- <button type="button" class="close" aria-label="Close">
                                                        <i class="material-icons">close</i>
                                                    </button> -->
                                                    <p class="pull-right mr-5"><?php echo $data['NOTIFICATION_TIME_STAMP']; ?> </p>
                                                <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                                                <h4  class="pull-left ml-2 font-weight-bold">Hey!!</h4>
                                                <p class="pull-left font-weight-bold mr-5">Looks like your request for termination is denied by the Committee Member. You can make another request with more compeling reason or meet the committee head in person.<br></p>
                                                <!-- <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span> -->
                                                <a href="remove_notification.php?nid=<?php echo $data['NOTIFICATION_ID']; ?>" type="button">
                                                    <button class="btn btn-secondary btn-sm btn-round mr-5">
                                                        <i class="material-icons">close</i> Remove
                                                    </button>
                                                </a>   
                                            </div>      
                                    <?php        
                                    }
                                }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php 
    include 'footer.php';
?>