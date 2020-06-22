<?php 
    include 'header.php';
?>
<script src="../../Files/ckeditor/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="ml-auto mr-auto">
            <div class="page-categories">
            <h3 class="title text-center">Company Related Activity Details</h3>
            <br />
            <ul class="nav nav-pills nav-pills-success nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#link7" role="tablist">
                    <i class="material-icons">view_list</i> Company List
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                    <i class="material-icons">highlight_off</i> Deactivated Companies
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link9" role="tablist">
                    <i class="material-icons">mark_email_unread</i> Broadcast List
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link10" role="tablist">
                    <i class="material-icons">send</i> Send Broadcast
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link11" role="tablist">
                    <i class="material-icons">access_alarm</i> Placement Schedule
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link12" role="tablist">
                    <i class="material-icons">dvr</i>  View Schedule
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link13" role="tablist">
                    <i class="material-icons">support_agent</i> Recommend Student
                </a>
                </li>
            </ul>
            <div class="tab-content tab-space tab-subcategories">
                <div class="tab-pane active" id="link7">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">All the available Companies</h4>
                    <p class="card-category">
                        Here you can find all the available companines
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
                                <table id="company_list" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone No.</th>
                                            <th>Contact Person</th>
                                            <th>CP Phone No.</th>
                                            <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone No.</th>
                                            <th>Contact Person</th>
                                            <th>CP Phone No.</th>
                                            <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php while($data = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td><?php echo $data['COMPANY_NAME']; ?></td>
                                            <td><?php echo $data['COMPANY_EMAIL']; ?></td>
                                            <td><?php echo $data['COMPANY_PHONE_NUMBER_1']; ?></td>
                                            <td><?php echo $data['COMPANY_HR_NAME']; ?></td>
                                            <td><?php echo $data['COMPANY_PHONE_NUMBER_2']; ?></td>
                                            <td class="text-right"><a href="company_profile.php?cid=<?php echo $data['COMPANY_ID'] ?>" class="btn btn-link btn-info btn-just-icon " rel="tooltip" title="View Company Profile"><i class="material-icons">visibility</i></a>
                                            <a href="company_deactivate.php?cid=<?php echo $data['COMPANY_ID'] ?>" class="btn btn-link btn-danger btn-just-icon " rel="tooltip" title="Deactivate Company"><i class="material-icons">person_remove</i></a></td>
                                        </tr>
                                        <?php } 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
                </div>
                <div class="tab-pane " id="link8">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">Deactivated Companies</h4>
                    <p class="card-category">
                        Here you can find all the companies that are deactiavted 
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
                                <table id="deactivated_companies" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                        <th class="text-nowrap">Name</th>
                                        <th class="text-nowrap">Email</th>
                                        <th class="text-nowrap">Phone No.</th>
                                        <th class="text-nowrap">Contact Person</th>
                                        <th class="text-nowrap">CP Phone No.</th>
                                        <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone No.</th>
                                        <th>Contact Person</th>
                                        <th>CP Phone No.</th>
                                        <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php while($data = $stmt2->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                        <td ><?php echo $data['COMPANY_NAME']; ?></td>
                                        <td ><?php echo $data['COMPANY_EMAIL']; ?></td>
                                        <td ><?php echo $data['COMPANY_PHONE_NUMBER_1']; ?></td>
                                        <td ><?php echo $data['COMPANY_HR_NAME']; ?></td>
                                        <td ><?php echo $data['COMPANY_PHONE_NUMBER_2']; ?></td>
                                        <td class="text-right"><a href="company_profile.php?cid=<?php echo $data['COMPANY_ID'] ?>" class="btn btn-link btn-info btn-just-icon " rel="tooltip" title="View Company Profile"><i class="material-icons">visibility</i></a>
                                            <a href="restore_company.php?cid=<?php echo $data['COMPANY_ID'] ?>" class="btn btn-link btn-success btn-just-icon " rel="tooltip" title="Restore Company"><i class="material-icons">restore_from_trash</i></a></td>
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
                    <button class="btn btn-success btn-round pull-right btn-sm mt-2" data-toggle="modal" data-target="#noticeModal3">
                      <i class="material-icons mr-1">add_circle_outline</i>New
                    </button>
                    <h4 class="card-title">view available Broadcast List</h4>
                    <p class="card-category">
                        Here you can find all the available broadcast list
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
                                <table id="broadcast_list" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                        <td>Invitation List</td>
                                        <td>Created by</td>
                                        <td>Date of Creation</td>
                                        <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <td>Invitation List</td>
                                        <td>Created by</td>
                                        <td>Date of Creation</td>
                                        <td>Actions</td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php while($data = $stmt3->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                        <?php
                                            // $_SESSION["broadcast_id"]=$data['BROADCAST_LIST_ID'];
                                          ?>
                                        <td><?php echo $data['BROADCAST_LIST_NAME']; ?></td>
                                        <td><?php echo $data['FACULTY_FIRST_NAME']." ".$data['FACULTY_LAST_NAME']; ?></td>
                                        <td><?php echo $data['BROADCAST_LIST_DATE']; ?></td>
                                        <td class="text-right"><button type="button" value="<?php echo $data['BROADCAST_LIST_ID'] ?>" class="btn btn-link btn-info btn-just-icon broadcast_view" data-toggle="modal" data-target="#viewBroadcast" rel="tooltip" title="View Broadcast List"><i class="material-icons">visibility</i></button>
                                            <button type="button" value="<?php echo $data['BROADCAST_LIST_ID']; ?>" class="btn btn-link btn-success btn-just-icon addToList" rel="tooltip" data-toggle="modal" data-target="#addToBroadcast" title="Add Companies to the List"><i class="material-icons">add</i></button>
                                            <a href="delete_list.php?ilid=<?php echo $data['BROADCAST_LIST_ID']; ?>" class="btn btn-link btn-danger btn-just-icon " rel="tooltip" title="Delete Broadcast List"><i class="material-icons">delete_sweep</i></a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    <form action="#" method="post">
                        <div class="modal fade" id="viewBroadcast" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content" >
                                <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">View Broadcastlist</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <i class="material-icons">close</i>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div id="View_broadcast">
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-center">
                                <input type="submit" name="new_broadcast" class="btn btn-success btn-round" value="Create">
                                </div>
                            </div>
                            </div>
                        </div> 
                    </form>
                    <form action="#" method="post">
                        <div class="modal fade" id="addToBroadcast" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content" >
                                <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">Add Companies to the list</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <i class="material-icons">close</i>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div id="add"></div>
                                </div>
                                <div class="modal-footer justify-content-center">
                                </div>
                            </div>
                            </div>
                        </div> 
                    </form>  
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
                        <form action="broadcast_sender.php" method="POST">
                        <select name="blid" class="form-control p-1 pl-3 btn btn-secondary btn-round" required>
                                            <option>Select Broadcast List</option>
                                            <?php
                                            $stmt=$con->prepare("CALL VIEW_BROADCAST_LISTS();");
                                            $stmt->execute();
                                            $stmt=$con->prepare("CALL VIEW_BROADCAST_LISTS();");
                                            $stmt->execute();
                                             $a=0;
                            while($data = $stmt->fetch(PDO::FETCH_ASSOC))
                            { 
                              if ($a==0) 
                              {
                                ?>
                                            <option value="<?php echo $data['BROADCAST_LIST_ID']; ?>" selected>
                                                <?php echo $data['BROADCAST_LIST_NAME']; ?>-<?php echo $data['FACULTY_FIRST_NAME']; ?>
                                                <?php echo $data['FACULTY_LAST_NAME']; ?>-<?php echo $data['BROADCAST_LIST_DATE']; ?>
                                            </option>
                                            <?php 
                              $a+=1;
                              }
                              else
                              {
                                ?>
                                            <option value="<?php echo $data['BROADCAST_LIST_ID']; ?>">
                                                <?php echo $data['BROADCAST_LIST_NAME']; ?>-<?php echo $data['FACULTY_FIRST_NAME']; ?>
                                                <?php echo $data['FACULTY_LAST_NAME']; ?>-<?php echo $data['BROADCAST_LIST_DATE']; ?>
                                            </option>
                                            <?php 
                              }
                            } ?>
                                        </select>
                                        <p class="ml-5 text-darker font-weight-bold">For name of the representatve type @REP_NAME, for name of the company type @CMPNY_NAME and
                            for sender name type @SENDER.</p>
                            <div class="media">
                                <div class="media-body row">
                                    <div class="input-group-prepend col-1">
                                        <span class="input-group-text pl-4">
                                        <i class="material-icons">library_add_check</i>
                                        </span>
                                    </div>
                                    <div class="form-group col-11">
                                        <label for="pmarks" class="bmd-label-floating">Subject</label>
                                        <input type="text" name="subject" class="form-control pull-left">
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body mb-2">
                                    <textarea name="editor" id="editor">
                                        <p>Dear @REP_NAME,</p>
                                        <p>Content @CMPNY_NAME Content</p>
                                        <p>Yours&#39; Truly, @SENDER.</p>
                                    </textarea>
                                    <script>
                                        CKEDITOR.replace('editor');
                                    </script>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body mb-2">
                                    <input type="submit" class="btn btn-success" value="Send"
                                        name="Submit">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="link11">
                    <div class="card">
                        <div class="card-header">
                        <h4 class="card-title">Arrange Placement Schedule</h4>
                        <p class="card-category">
                            Here you find information to arrange a Placement
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
                                <table id="placement_schedule" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                        <th class="disabled-sorting"></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone No.</th>
                                        <th>Contact Person</th>
                                        <th>CP Phone No.</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone No.</th>
                                        <th>Contact Person</th>
                                        <th>CP Phone No.</th>
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
                                    <td><?php echo $data['COMPANY_PHONE_NUMBER_2']; ?></td>

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
                                    <td><?php echo $data['COMPANY_NAME']; ?></td>
                                    <td><?php echo $data['COMPANY_EMAIL']; ?></td>
                                    <td><?php echo $data['COMPANY_PHONE_NUMBER_1']; ?></td>
                                    <td><?php echo $data['COMPANY_HR_NAME']; ?></td>
                                    <td><?php echo $data['COMPANY_PHONE_NUMBER_2']; ?></td>
                                </tr>
                                <?php
                                $c+=1;
                                }
                                    } 
                                ?>
                                    </tbody>
                                </table>
                                    <div class="media col-6">
                                        <div class="media-body row">
                                            <div class="input-group-prepend col-2 mr-0 pr-0">
                                                <span class="input-group-text">
                                                <i class="material-icons">date_range</i>
                                                </span>
                                            </div>
                                            <div class="form-group col-10">
                                                <label for="edate" class="bmd-label-floating">Event Date</label>
                                                <input type="text" name="edate" class="form-control datepicker pull-left">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media col-6">
                                        <div class="media-body row">
                                            <div class="input-group-prepend col-2 mr-0 pr-0">
                                                <span class="input-group-text">
                                                <i class="material-icons">date_range</i>
                                                </span>
                                            </div>
                                            <div class="form-group col-10">
                                                <label for="edate" class="bmd-label-floating">No. of Days</label>
                                                <input type="text" name="edate" class="form-control pull-left">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="link12">
                    <div class="card">
                        <div class="card-header">
                        <h4 class="card-title">View Schedule</h4>
                        <p class="card-category">
                            Here you can find information regarding already generated Placement
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
                                <table id="view_schedule" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <td>Company</td>
                                            <td>Starting Date</td>
                                            <td>Ending Date</td>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td>Company</td>
                                            <td>Starting Date</td>
                                            <td>Ending Date</td>
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
                <div class="tab-pane" id="link13" name="link13">
                    <div class="card">
                        <div class="card-header">
                        <h4 class="card-title">Help center</h4>
                        <p class="card-category">
                            More information here
                        </p>
                        </div>
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <select name="cid" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="cid" onchange="get_event()" autofocus>
                                        <option>Select Comapny</option>
                                        <?php 
                                            $stmt=$con->prepare("CALL VIEW_COMPANY();");
                                            $stmt->execute();
                                            $stmt=$con->prepare("CALL VIEW_COMPANY();");
                                            $stmt->execute();
                                            while ($x = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                                    <option value="<?php echo $x['COMPANY_ID']; ?>"><?php echo $x['COMPANY_NAME']; ?></option>
                                                <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <select name="event" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="event" onchange="get_student()">
                                        <option>Select Event</option>
                                    </select>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <div id="student"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
    <form action="#" method="post">
        <div class="modal fade" id="noticeModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Create New ShortList</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">close</i>
                </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    <label for="title" class="bmd-label-floating">Shortlist Title</label>
                    <input type="text" name="ilname" class="form-control">
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                <input type="submit" name="new_broadcast" class="btn btn-success btn-round" value="Create">
                </div>
            </div>
            </div>
        </div> 
    </form> 

        <script type="text/javascript">	
		function get_event(){
            // alert('aa');
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","get_company_event.php?cid="+document.getElementById("cid").value,false);
            xmlhttp.send(null);
            document.getElementById("event").innerHTML=xmlhttp.responseText;
        }
        function get_student(){ 
            var xmlhttp=new XMLHttpRequest();
            // alert(document.getElementById("event").value);
            xmlhttp.open("GET","student_bind.php?eid="+document.getElementById("event").value+"&"+"cid="+document.getElementById("cid").value,false);
            xmlhttp.send(null);
            // alert(xmlhttp.responseText);
            document.getElementById("student").innerHTML=xmlhttp.responseText;
            $('#recommend').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",
            }
        });
        var table = $('#recommend').DataTable();
        }
        </script>
<?php 
    include 'footer.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(isset($_REQUEST["new_broadcast"])){
  
            $ilname = $_REQUEST["ilname"];
           
            $gb = $_SESSION['lid'];
  
            //include('../../Files/PDO/dbcon.php');
  
            $stmt=$con->prepare("CALL INSERT_BROADCAST_LIST(:ilname, :gb);");
            $stmt->bindParam(":ilname",$ilname);
            $stmt->bindParam(":gb",$gb);
            $stmt->execute();
            // print_r( $stmt->errorinfo());
            if ($stmt) {
              echo "<script>alert('Event Successfully Created!')</script>";
            }
            else {
              echo "<script>alert('Looks Like Someting Went Worng!!!')</script>";
            }
            header("Location: company.php");
        }
    }
    ob_flush();
?>

<script type="text/javascript">
    function company_check_evnt(clicked) {
        if ($('#' + clicked).is(":checked")) {
            var val = $('#' + clicked).val();
            // alert("uncheck" + val);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "Ex_company_add.php?cid=" + val, false);
            xmlhttp.send(null);
        } else {
            var val = $('#' + clicked).val();
            // alert(val);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "delete_company.php?cid=" + val, false);
            xmlhttp.send(null);
        }
    }


    function company_uncheck_evnt(clicked) {
        if ($('#' + clicked).is(":checked")) {
            var val = $('#' + clicked).val();
            // alert("check" + val);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "insert_company.php?cid=" + val, false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);
        } else {
            var val = $('#' + clicked).val();
            // alert(val);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "delete_company.php?cid=" + val, false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);
        }
    }
    
    </script>