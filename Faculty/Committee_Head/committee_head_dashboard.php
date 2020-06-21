<?php 
    ob_start();
    include 'header.php';
    $data=$_SESSION['Userdata'];
?>
            <div class="content">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-warning card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">weekend</i>
                                        </div>
                                        <p class="card-category">Bookings</p>
                                        <h3 class="card-title">184</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons text-danger">warning</i>
                                            <a href="#pablo">Get More Space...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-rose card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">equalizer</i>
                                        </div>
                                        <p class="card-category">Website Visits</p>
                                        <h3 class="card-title">75.521</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">local_offer</i> Tracked from Google Analytics
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-success card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">store</i>
                                        </div>
                                        <p class="card-category">Revenue</p>
                                        <h3 class="card-title">$34,245</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">date_range</i> Last 24 Hours
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-info card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons"></i>
                                        </div>
                                        <p class="card-category">Followers</p>
                                        <h3 class="card-title">+245</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">update</i> Just Updated
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    include('../../Files/PDO/dbcon.php');
                                    $id=$_SESSION['lid'];
                                    $type='CH';
                                    $stmt=$con->prepare("CALL GET_ALL_NOTIFICATION(:id,:type);");
                                    $stmt->bindparam(":id",$id);
                                    $stmt->bindparam(":type",$type);
                                    $stmt->execute();
                                    while($data = $stmt->fetch(PDO::FETCH_ASSOC))
                                    {
                                    $id = $data['NOTIFICATION_EVENT_ID'];
                                    if($count==0)
                                    {
                                        $x=7;
                                        $stmt1=$con->prepare(" CALL GET_EVENT_NAME(:id);");
                                        $stmt1->bindparam(":id",$x);
                                        $stmt1->execute();
                                        $uname=$stmt1->fetch(PDO::FETCH_ASSOC);
                                        $count=1;
                                        // echo $uname;
                                    }
                                    $stmt1=$con->prepare(" CALL GET_EVENT_NAME(:id);");
                                    $stmt1->bindparam(":id",$id);
                                    $stmt1->execute();
                                    $uname=$stmt1->fetch(PDO::FETCH_ASSOC); 
                                    if ($data['NOTIFICATION_TYPE'] == 'MEVNT' || $data['NOTIFICATION_TYPE'] == 'AEVNT') {
                                        ?>
                                            <div class="alert alert-primary alert-with-icon" data-notify="container">
                                                <i class="material-icons" data-notify="icon">notifications</i>
                                                    <!-- <button type="button" class="close" aria-label="Close">
                                                        <i class="material-icons">close</i>
                                                    </button> -->
                                                    <p class="pull-right mr-5"><?php echo $data['NOTIFICATION_TIME_STAMP']; ?> </p>
                                                <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                                                <h4  class="pull-left ml-2 font-weight-bold"><?php echo $uname['EVENT_NAME']; ?></h4>
                                                <p class="pull-left font-weight-bold mr-5">Hey There! A new event is created please review the event and coordinate with other Committee Members. Incase of query under and any situation including change in date, time or venue contact respective Committee Member <br></p>
                                                <!-- <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span> -->
                                                <a href="remove_notification.php?nid=<?php echo $data['NOTIFICATION_ID']; ?>">
                                                    <button class="btn btn-secondary btn-sm btn-round mr-5">
                                                        <i class="material-icons">close</i> Remove
                                                    </button>
                                                </a>   
                                                <a href="view_event_detail.php?eid=<?php echo $data['NOTIFICATION_EVENT_ID']; ?>"> 
                                                    <button class="btn btn-secondary btn-sm btn-round pull-left mr-2">
                                                        <i class="material-icons">visibility</i> View
                                                    </button>
                                                </a>

                                    </div>
                                        <?php
                                    }
                                    elseif ($data['NOTIFICATION_TYPE'] == 'CSL') {
                                        $select_list_id= $data['NOTIFICATION_EVENT_ID'];
                                        $stmt4=$con->prepare(" CALL GET_SELECTION_LIST_DATA(:selection_list_id);");
                                        $stmt4->bindparam(":selection_list_id",$select_list_id);
                                        $stmt4->execute();
                                        $stmt4=$con->prepare(" CALL GET_SELECTION_LIST_DATA(:selection_list_id);");
                                        $stmt4->bindparam(":selection_list_id",$select_list_id);
                                        $stmt4->execute();
                                        $companydata=$stmt4->fetch(PDO::FETCH_ASSOC); 
                                        $cmpny_name=$companydata["COMPANY_NAME"];
                                        ?>
                                            <div class="alert alert-success alert-with-icon" data-notify="container">
                                                <i class="material-icons" data-notify="icon">notifications</i>
                                                    <!-- <button type="button" class="close" aria-label="Close">
                                                        <i class="material-icons">close</i>
                                                    </button> -->
                                                    <p class="pull-right mr-5"><?php echo $data['NOTIFICATION_TIME_STAMP']; ?></p>
                                                <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                                                <h4  class="pull-left ml-2 font-weight-bold"><?php echo $cmpny_name; ?></h4>
                                                <p class="pull-left font-weight-bold mr-5">Hey There! <?php echo $cmpny_name; ?> just sent you a list of there shortlisted students for training alogin with stipend offering for <?php echo $companydata['STUDENTS']; ?> student(s), check your mail as well. Please review the list and proceed accordingly</p>
                                                <!-- <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span> -->
                                                <a href="remove_notification.php?nid=<?php echo $data['NOTIFICATION_ID']; ?>">
                                                    <button class="btn btn-secondary btn-sm btn-round mr-5" type="button">
                                                        <i class="material-icons">close</i> Remove
                                                    </button>
                                                </a>
                                                <a href="view_company_shortlist.php?sid=<?php echo $data['NOTIFICATION_EVENT_ID']; ?>">
                                                    <button class="btn btn-secondary btn-sm btn-round pull-left mr-2" type="button">
                                                        <i class="material-icons">visibility</i> View
                                                    </button>
                                                </a>
                                            </div>
                                        <?php
                                    }elseif ($data['NOTIFICATION_TYPE'] == 'CPL') {
                                        $cid=$data['NOTIFICATION_SENDER_ID'];
                                        $type='CP';
                                        $stmt5=$con->prepare(" CALL GET_USERNAME(:cid, :type);");
                                        $stmt5->bindparam(":cid",$cid);
                                        $stmt5->bindparam(":type",$type);
                                        $stmt5->execute();
                                        $stmt5=$con->prepare(" CALL GET_USERNAME(:cid, :type);");
                                        $stmt5->bindparam(":cid",$cid);
                                        $stmt5->bindparam(":type",$type);
                                        $stmt5->execute();
                                        $companydata=$stmt5->fetch(PDO::FETCH_ASSOC); 
                                        $cmpny_name=$companydata["uname"];
                                        ?>
                                            <div class="alert alert-success alert-with-icon" data-notify="container">
                                                <i class="material-icons" data-notify="icon">notifications</i>
                                                    <!-- <button type="button" class="close" aria-label="Close">
                                                        <i class="material-icons">close</i>
                                                    </button> -->
                                                    <p class="pull-right mr-5"><?php echo $data['NOTIFICATION_TIME_STAMP']; ?></p>
                                                <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                                                <h4  class="pull-left ml-2 font-weight-bold"><?php echo $cmpny_name; ?></h4>
                                                <p class="pull-left font-weight-bold mr-5">Hey There! <?php echo $cmpny_name; ?> just sent you a list of there shortlisted students for placement alogin with package offering, check your mail as well. Please review the list and proceed accordingly.</p>
                                                <!-- <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span> -->
                                                <a href="remove_notification.php?nid=<?php echo $data['NOTIFICATION_ID']; ?>">
                                                    <button class="btn btn-secondary btn-sm btn-round mr-5" type="button">
                                                        <i class="material-icons">close</i> Remove
                                                    </button>
                                                </a>
                                                <a href="view_company_placement_list.php?cid=<?php echo $data['NOTIFICATION_SENDER_ID']; ?>">
                                                    <button class="btn btn-secondary btn-sm btn-round pull-left mr-2" type="button">
                                                        <i class="material-icons">visibility</i> View
                                                    </button>
                                                </a>
                                            </div>
                                        <?php
                                    }elseif ($data['NOTIFICATION_TYPE'] == 'TRMNT') {
                                        $cid=$data['NOTIFICATION_SENDER_ID'];
                                        $type='CP';
                                        $stmt5=$con->prepare(" CALL GET_USERNAME(:cid, :type);");
                                        $stmt5->bindparam(":cid",$cid);
                                        $stmt5->bindparam(":type",$type);
                                        $stmt5->execute();
                                        $stmt5=$con->prepare(" CALL GET_USERNAME(:cid, :type);");
                                        $stmt5->bindparam(":cid",$cid);
                                        $stmt5->bindparam(":type",$type);
                                        $stmt5->execute();
                                        $companydata=$stmt5->fetch(PDO::FETCH_ASSOC); 
                                        $cmpny_name=$companydata["uname"];
                                        ?>
                                            <div class="alert alert-danger alert-with-icon" data-notify="container">
                                                <i class="material-icons" data-notify="icon">notifications</i>
                                                    <p class="pull-right mr-5"><?php echo $data['NOTIFICATION_TIME_STAMP']; ?></p>
                                                <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                                                <h4  class="pull-left ml-2 font-weight-bold"><?php echo $cmpny_name; ?></h4>
                                                <p class="pull-left font-weight-bold mr-5">Ola! <?php echo $data['NOTIFICATION_DESCRPTION']; ?> by <?php echo $cmpny_name; ?> when the student is under training at <?php echo $cmpny_name; ?>. Please make sure everything is alright with all the associated parties</p>
                                                <a href="remove_notification.php?nid=<?php echo $data['NOTIFICATION_ID']; ?>">
                                                    <button class="btn btn-secondary btn-sm btn-round mr-5">
                                                        <i class="material-icons">close</i> Remove
                                                    </button>
                                                </a>
                                            </div>
                                        <?php
                                    }elseif ($data['NOTIFICATION_TYPE'] == 'TRREQ') {
                                        $sid=$data['NOTIFICATION_SENDER_ID'];
                                        $type='ST';
                                        $stmt5=$con->prepare(" CALL GET_USERNAME(:sid, :type);");
                                        $stmt5->bindparam(":sid",$sid);
                                        $stmt5->bindparam(":type",$type);
                                        $stmt5->execute();
                                        $stmt5=$con->prepare(" CALL GET_USERNAME(:sid, :type);");
                                        $stmt5->bindparam(":sid",$sid);
                                        $stmt5->bindparam(":type",$type);
                                        $stmt5->execute();
                                        $companydata=$stmt5->fetch(PDO::FETCH_ASSOC); 
                                        $cmpny_name=$companydata["uname"];
                                        ?>
                                            <div class="alert alert-warning alert-with-icon" data-notify="container">
                                                <i class="material-icons" data-notify="icon">notifications</i>
                                                    <!-- <button type="button" class="close" aria-label="Close">
                                                        <i class="material-icons">close</i>
                                                    </button> -->
                                                    <p class="pull-right mr-5"><?php echo $data['NOTIFICATION_TIME_STAMP']; ?></p>
                                                <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                                                <h4  class="pull-left ml-2 font-weight-bold"><?php echo $uname; ?></h4>
                                                <p class="pull-left font-weight-bold mr-5">A Student <?php echo $uname; ?> is requesting for termination from the training and placement process under the following reason: <?php echo $data['NOTIFICATION_DESCRPTION']; ?>. Please do coordinate with the student before approving</p>
                                                <a href="approve_termination.php?sid=<?php echo $data['NOTIFICATION_SENDER_ID']; ?>&nid=<?php echo $data['NOTIFICATION_ID']; ?>">
                                                    <button class="btn btn-secondary btn-sm btn-round" type="button">
                                                        <i class="material-icons">check</i> Accept
                                                    </button>
                                                </a>
                                                <a href="remove_termination.php?nid=<?php echo $data['NOTIFICATION_ID']; ?>&sid=<?php echo $data['NOTIFICATION_SENDER_ID']; ?>">
                                                    <button class="btn btn-secondary btn-sm btn-round mr-5" type="button">
                                                        <i class="material-icons">close</i> Deny
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