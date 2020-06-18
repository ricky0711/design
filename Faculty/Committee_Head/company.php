<?php 
    include 'header.php';
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="ml-auto mr-auto">
            <div class="page-categories">
            <h3 class="title text-center">Resume Details</h3>
            <br />
            <ul class="nav nav-pills nav-pills-success nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#link7" role="tablist">
                    <i class="material-icons">info</i> Company List
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                    <i class="material-icons">location_on</i> Deactivate Companies
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link9" role="tablist">
                    <i class="material-icons">gavel</i> Broadcast List
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link10" role="tablist">
                    <i class="material-icons">help_outline</i> Send Broadcast
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link11" role="tablist">
                    <i class="material-icons">help_outline</i> Placement Schedule
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link12" role="tablist">
                    <i class="material-icons">help_outline</i>  View Schedule
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link13" role="tablist">
                    <i class="material-icons">help_outline</i> Recommend Student
                </a>
                </li>
            </ul>
            <div class="tab-content tab-space tab-subcategories">
                <div class="tab-pane active" id="link7">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">Description about product</h4>
                    <p class="card-category">
                        More information here
                    </p>
                    </div>
                    <div class="card-body">
                                <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                </div>
                                <?php
                                    include('../../Files/PDO/dbcon.php');	
                                    $stmt=$con->prepare("CALL VIEW_COMPANY();");
                                    $stmt->execute();
                                ?>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone No.</th>
                                        <th>Contact Person</th>
                                        <th>CP Email</th>
                                        <th>CP Phone No.</th>
                                        <th>Address</th>
                                        <th>Website</th>
                                        <th class="disabled-sorting pull-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone No.</th>
                                        <th>Contact Person</th>
                                        <th>CP Email</th>
                                        <th>CP Phone No.</th>
                                        <th>Address</th>
                                        <th>Website</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php while($data = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                        <td ><?php echo $data['COMPANY_NAME']; ?></td>
                                        <td ><?php echo $data['COMPANY_EMAIL']; ?></td>
                                        <td ><?php echo $data['COMPANY_PHONE_NUMBER_1']; ?></td>
                                        <td ><?php echo $data['COMPANY_HR_NAME']; ?></td>
                                        <td ><?php echo $data['COMPANY_HR_EMAIL']; ?>></td>
                                        <td ><?php echo $data['COMPANY_PHONE_NUMBER_2']; ?></</td>
                                        <td ><?php echo $data['COMPANY_ADDRESS']; ?></td>
                                        <td ><?php echo $data['COMPANY_WEBSITE']; ?></td>
                                        <td>
                                    <a href="company_profile.php?cid=<?php echo $data['COMPANY_ID'] ?>" title="">
                                        <button type="button" class="btn btn-outline-info"><i
                                                class="fa fa-user-circle-o"></i></button>
                                    </a>
                                </td>
                                <td>
                                    <a href="company_deactivate.php?cid=<?php echo $data['COMPANY_ID'] ?>" title="">
                                        <button type="button" class="btn btn-outline-danger"><i
                                                class="fas fa-user-slash"></i></button>
                                    </a>
                                </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
                </div>
                <div class="tab-pane " id="link8">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">Resume Details</h4>
                    <p class="card-category">
                        More information here
                    </p>
                    </div>
                    <div class="card-body">
                                <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                </div>
                                <?php
                                    //include('../../Files/PDO/dbcon.php');	
                                    $stmt2=$con->prepare("CALL VIEW_DEACTIVE_COMPANY();");
                                    $stmt2->execute();
                                    $stmt2=$con->prepare("CALL VIEW_DEACTIVE_COMPANY();");
                                    $stmt2->execute();
                                ?>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone No.</th>
                                        <th>Contact Person</th>
                                        <th>CP Email</th>
                                        <th>CP Phone No.</th>
                                        <th>Address</th>
                                        <th>Website</th>
                                        <th class="disabled-sorting pull-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone No.</th>
                                        <th>Contact Person</th>
                                        <th>CP Email</th>
                                        <th>CP Phone No.</th>
                                        <th>Address</th>
                                        <th>Website</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php while($data = $stmt2->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                        <td ><?php echo $data['COMPANY_NAME']; ?></td>
                                        <td ><?php echo $data['COMPANY_EMAIL']; ?></td>
                                        <td ><?php echo $data['COMPANY_PHONE_NUMBER_1']; ?></td>
                                        <td ><?php echo $data['COMPANY_HR_NAME']; ?></td>
                                        <td ><?php echo $data['COMPANY_HR_EMAIL']; ?>></td>
                                        <td ><?php echo $data['COMPANY_PHONE_NUMBER_2']; ?></</td>
                                        <td ><?php echo $data['COMPANY_ADDRESS']; ?></td>
                                        <td ><?php echo $data['COMPANY_WEBSITE']; ?></td>
                                        <td>
                                    <a href="company_profile.php?cid=<?php echo $data['COMPANY_ID'] ?>" title="">
                                        <button type="button" class="btn btn-outline-info"><i
                                                class="fa fa-user-circle-o"></i></button>
                                    </a>
                                </td>
                                <td>
                                    <a href="restore_company.php?cid=<?php echo $data['COMPANY_ID'] ?>" title="">
                                    <button type="button" class="btn btn-outline-success"><i class="fas fa-trash-restore"></i></button>
                                    </a>
                                </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
                </div>
                <div class="tab-pane" id="link9">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">View Resume Details</h4>
                    <p class="card-category">
                        More information here
                    </p>
                    </div>
                    <div class="card-body">
                                <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                </div>
                                <?php
                                    //include('../../Files/PDO/dbcon.php');	
                                    $stmt3=$con->prepare("CALL VIEW_BROADCAST_LISTS();");
                                    $stmt3->execute();
                                    $stmt3=$con->prepare("CALL VIEW_BROADCAST_LISTS();");
                                    $stmt3->execute();
                                ?>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                        <td>Invitation List</td>
                                        <td>Created by</td>
                                        <td>Date of Creation</td>
                                        <th class="disabled-sorting pull-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <td>Invitation List</td>
                                        <td>Created by</td>
                                        <td>Date of Creation</td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php while($data = $stmt3->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                        <td><?php echo $data['BROADCAST_LIST_NAME']; ?></td>
                                        <td><?php echo $data['FACULTY_FIRST_NAME']." ".$data['FACULTY_LAST_NAME']; ?></td>
                                        <td><?php echo $data['BROADCAST_LIST_DATE']; ?></td>
                                        <td>
                                            <a href="view_list.php?ilid=<?php echo $data['BROADCAST_LIST_ID'] ?>" title="">
                                            <button type="button" class="btn btn-sm btn-outline-info"><i class="fa fa-eye"></i></button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="add_company_list.php?ilid=<?php echo $data['BROADCAST_LIST_ID'] ?>" title="">
                                            <button type="button" class="btn btn-sm btn-outline-success"><i class="fa fa-plus"></i></button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="delete_list.php?ilid=<?php echo $data['BROADCAST_LIST_ID'] ?>" title="">
                                            <button type="button" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                            </a>
                                        </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
                </div>
                <div class="tab-pane" id="link10">
                    <div class="card">
                        <div class="card-header">
                        <h4 class="card-title">Help center</h4>
                        <p class="card-category">
                            More information here
                        </p>
                        </div>
                        <div class="card-body">
                        From the seamless transition of glass and metal to the streamlined profile, every detail was carefully considered to enhance your experience. So while its display is larger, the phone feels just right.
                        <br>
                        <br> Another Text. The first thing you notice when you hold the phone is how great it feels in your hand. The cover glass curves down around the sides to meet the anodized aluminum enclosure in a remarkable, simplified design.
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="link11">
                    <div class="card">
                        <div class="card-header">
                        <h4 class="card-title">Help center</h4>
                        <p class="card-category">
                            More information here
                        </p>
                        </div>
                        <div class="card-body">
                                <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                </div>
                                    <?php
                                        $stmt5=$con->prepare("CALL VIEW_COMPANY();");
                                        $stmt5->execute();
                                        $stmt5=$con->prepare("CALL VIEW_COMPANY();");
                                        $stmt5->execute();
                                    ?>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone No.</th>
                                        <th>Contact Person</th>
                                        <th>CP Email</th>
                                        <th>CP Phone No.</th>
                                        <th>Address</th>
                                        <th>Website</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone No.</th>
                                        <th>Contact Person</th>
                                        <th>CP Email</th>
                                        <th>CP Phone No.</th>
                                        <th>Address</th>
                                        <th>Website</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                        $cnt=0;
                                        $c=0;
                                        while($data = $stmt5->fetch(PDO::FETCH_ASSOC)) 
                                        {
                                        $cid=$data['COMPANY_ID'];
                                        $check = 0;
                                        $stmt3=$con->prepare("CALL GET_PLACEMENT_SCHEDULE_LIST()");
                                        $stmt3->execute();
                                        $stmt3=$con->prepare("CALL GET_PLACEMENT_SCHEDULE_LIST()");
                                        $stmt3->execute();
                                        
                                        while ($y=$stmt3->fetch(PDO::FETCH_ASSOC)) {
                                            $b_cid=$y['COMPANY_ID'];
                                            if ($b_cid==$cid) {
                                                $check = 1;
                                                break;
                                            }
                                        }
                                        if ($check==1) {
                                    ?>
                                        <tr>
                                    <td><input type="checkbox" id="company_check<?php echo $cid;?>"
                                            name="<?php echo $cid;?>" value="<?php echo $cid;?>"
                                            onClick="company_check_evnt(this.id)" checked></td>
                                    <td><?php echo $data['COMPANY_NAME']; ?></td>
                                    <td><?php echo $data['COMPANY_EMAIL']; ?></td>
                                    <td><?php echo $data['COMPANY_PHONE_NUMBER_1']; ?></td>
                                    <td><?php echo $data['COMPANY_HR_NAME']; ?></td>
                                    <td><?php echo $data['COMPANY_HR_EMAIL']; ?></td>
                                    <td><?php echo $data['COMPANY_PHONE_NUMBER_2']; ?></td>
                                    <td><?php echo $data['COMPANY_ADDRESS']; ?></td>
                                    <td><?php echo $data['COMPANY_WEBSITE']; ?></td>
                                </tr>
                                <?php
                                $cnt+=1; 
                                }
                                else
                                {
                                ?>
                                <tr>
                                    <td><input type="checkbox" id="company_uncheck<?php echo $cid;?>"
                                            name="<?php echo $cid;?>" value="<?php echo $cid;?>"
                                            onClick="company_uncheck_evnt(this.id)"></td>
                                    <td>
                                        <div style="height: 35px;width: 35px;border-radius: 50%;">
                                            <img src="../../Company/com_logo/<?php echo $data['COMPANY_LOGO'] ?>"
                                                alt="avatar" style="height: 100%;width: 100%;">
                                        </div>
                                    </td>
                                    <td><?php echo $data['COMPANY_NAME']; ?></td>
                                    <td><?php echo $data['COMPANY_EMAIL']; ?></td>
                                    <td><?php echo $data['COMPANY_PHONE_NUMBER_1']; ?></td>
                                    <td><?php echo $data['COMPANY_HR_NAME']; ?></td>
                                    <td><?php echo $data['COMPANY_HR_EMAIL']; ?></td>
                                    <td><?php echo $data['COMPANY_PHONE_NUMBER_2']; ?></td>
                                    <td><?php echo $data['COMPANY_ADDRESS']; ?></td>
                                    <td><?php echo $data['COMPANY_WEBSITE']; ?></td>
                                </tr>
                                <?php
                                $c+=1;
                                }
                                    } 
                                ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="link12">
                    <div class="card">
                        <div class="card-header">
                        <h4 class="card-title">Help center</h4>
                        <p class="card-category">
                            More information here
                        </p>
                        </div>
                        <div class="card-body">
                                <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                </div>
                                    <?php
                                        $stmt6=$con->prepare("CALL GET_PLACMENT_SCHEDULE()");
                                        $stmt6->execute();
                                        $stmt6=$con->prepare("CALL GET_PLACMENT_SCHEDULE()");
                                        $stmt6->execute();
                                    ?>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <td>Company</td>
                                            <td>Strat</td>
                                            <td>End</td>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td>Company</td>
                                            <td>Strat</td>
                                            <td>End</td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                        while ($x=$stmt6->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <tr>
                                    <td><?php echo $x['COMPANY_NAME']; ?></td>
                                        <td><?php echo $x['PLACEMENT_SCHEDULE_START_DATE']; ?></td>
                                        <td><?php echo $x['PLACEMENT_SCHEDULE_END_DATE']; ?></td>
                                    </tr>
                                    <?php 
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                        <td><a href="placement_schedule_download.php"><button class="btn btn-outline-warning"><i class="fa fa-download"></i>Download</button></a></td>   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="link13">
                    <div class="card">
                        <div class="card-header">
                        <h4 class="card-title">Help center</h4>
                        <p class="card-category">
                            More information here
                        </p>
                        </div>
                        <div class="card-body">
                        From the seamless transition of glass and metal to the streamlined profile, every detail was carefully considered to enhance your experience. So while its display is larger, the phone feels just right.
                        <br>
                        <br> Another Text. The first thing you notice when you hold the phone is how great it feels in your hand. The cover glass curves down around the sides to meet the anodized aluminum enclosure in a remarkable, simplified design.
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
<?php 

include 'footer.php';
ob_flush();
?>

