<?php 
    ob_start();
    include 'header.php';
    $data = $_SESSION['Userdata'];
    $cname= $data["COMPANY_NAME"];
    $cid = $data["COMPANY_ID"];
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
                                    while($data = $stmt->fetch(PDO::FETCH_ASSOC))
                                    {
                                    if ($data['NOTIFICATION_TYPE']=='RECOM') {
                                        $id=$data['NOTIFICATION_SENDER_ID'];
                                        $utype=$data['NOTIFICATION_SENDER_TYPE'];
                                        $stmt2=$con->prepare("CALL GET_USERNAME(:id, :utype);");
                                        $stmt2->bindparam(":id",$id);
                                        $stmt2->bindparam(":utype",$utype);
                                        $stmt2->execute();
                                        $stmt2=$con->prepare("CALL GET_USERNAME(:id, :utype);");
                                        $stmt2->bindparam(":id",$id);
                                        $stmt2->bindparam(":utype",$utype);
                                        $stmt2->execute();
                                        $x=$stmt2->fetch(PDO::FETCH_ASSOC);
                                        $uname=$x['uname'];
                                    ?>
                                    <div class="alert alert-warning alert-with-icon" data-notify="container">
                                                <i class="material-icons" data-notify="icon">notifications</i>
                                                    <!-- <button type="button" class="close" aria-label="Close">
                                                        <i class="material-icons">close</i>
                                                    </button> -->
                                                    <p class="pull-right mr-5"><?php echo $data['NOTIFICATION_TIME_STAMP']; ?></p>
                                                <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                                                <h4  class="pull-left ml-2 font-weight-bold"><?php echo $uname; ?></h4>
                                                <p class="pull-left font-weight-bold mr-5">A Student has been recommended by the Committee Head please review the student's profile and proceed accordingly. The recommendation has been made under following reason: <?php echo $data['NOTIFICATION_DESCRPTION']; ?></p>
                                                <!-- <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span> -->
                                                <a href="remove_notification.php?nid=<?php echo $data['NOTIFICATION_ID']; ?>">
                                                    <button class="btn btn-secondary btn-sm btn-round mr-5" type="button">
                                                        <i class="material-icons">close</i> Remove
                                                    </button>
                                                </a>
                                                <a href="recommendations.php">
                                                    <button class="btn btn-secondary btn-sm btn-round pull-left mr-2" type="button">
                                                        <i class="material-icons">visibility</i> View
                                                    </button>
                                                </a>
                                    </div>
                                    <?php
                                    }elseif ($data['NOTIFICATION_TYPE']=='MEVNT' || $data['NOTIFICATION_TYPE']=='AEVNT') {
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
                                    }
                                    }
                                    ?>
                                    <!-- <div class="alert alert-info alert-with-icon" data-notify="container">
                                                <i class="material-icons" data-notify="icon">notifications</i>
                                                    <p class="pull-right mr-5">11/11/11 11:11:11 </p>
                                                <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                                                <h4  class="pull-left ml-2 font-weight-bold">TITLE</h4>
                                                <p class="pull-left font-weight-bold mr-5">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style</p>
                                                <button class="btn btn-secondary btn-sm btn-round pull-left mr-2">
                                                    <i class="material-icons">visibility</i> View
                                                </button>
                                                <button class="btn btn-secondary btn-sm btn-round pull-left mr-2">
                                                    <i class="material-icons">cloud_download</i> Offer Leter
                                                </button>
                                                <button class="btn btn-secondary btn-sm btn-round pull-left">
                                                    <i class="material-icons">cloud_download</i> Bond
                                                </button>
                                                <button class="btn btn-secondary btn-sm btn-round">
                                                    <i class="material-icons">check</i> Accept
                                                </button>
                                                <button class="btn btn-secondary btn-sm btn-round mr-5">
                                                    <i class="material-icons">close</i> Deny
                                                </button>
                                    </div>
                                    <div class="alert alert-success alert-with-icon" data-notify="container">
                                                <i class="material-icons" data-notify="icon">notifications</i>
                                                    <p class="pull-right mr-5">11/11/11 11:11:11 </p>
                                                <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                                                <h4  class="pull-left ml-2 font-weight-bold">TITLE</h4>
                                                <p class="pull-left font-weight-bold mr-5">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style</p>
                                                <button class="btn btn-secondary btn-sm btn-round pull-left mr-2">
                                                    <i class="material-icons">visibility</i> View
                                                </button>
                                                <button class="btn btn-secondary btn-sm btn-round">
                                                    <i class="material-icons">check</i> Accept
                                                </button>
                                                <button class="btn btn-secondary btn-sm btn-round mr-5">
                                                    <i class="material-icons">close</i> Deny
                                                </button>
                                    </div>
                                    <div class="alert alert-rose alert-with-icon" data-notify="container">
                                                <i class="material-icons" data-notify="icon">notifications</i>
                                                    <p class="pull-right mr-5">11/11/11 11:11:11 </p>
                                                <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                                                <h4  class="pull-left ml-2 font-weight-bold">TITLE</h4>
                                                <p class="pull-left font-weight-bold mr-5">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style</p>
                                                <button class="btn btn-secondary btn-sm btn-round pull-left mr-2">
                                                    <i class="material-icons">visibility</i> View
                                                </button>
                                                
                                                <button class="btn btn-secondary btn-sm btn-round mr-5">
                                                    <i class="material-icons">close</i> Deny
                                                </button>
                                        </div>         
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php 
    include 'footer.php';
?>