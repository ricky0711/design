<?php 
    include 'header.php';
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="ml-auto mr-auto d-flex justify-content-center">
            <div class="page-categories">
            <h3 class="title text-center">Resume Details</h3>
            <br />
            <ul class="nav nav-pills nav-pills-success nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#link7" role="tablist">
                    <i class="material-icons">event</i> New Event
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                    <i class="material-icons">done_all</i> Past Event
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link9" role="tablist">
                    <i class="material-icons">next_plan</i> Upcoming Event
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link10" role="tablist">
                    <i class="material-icons">highlight_off</i> Cancelled Event
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link11" role="tablist">
                    <i class="material-icons">emoji_people</i> Attendance
                </a>
                </li>
            </ul>
            <div class="tab-content tab-space tab-subcategories">
                <div class="tab-pane active" id="link7">
                    <div class="card">
                        <div class="card-header">
                        <h4 class="card-title">Description about New Event</h4>
                        <p class="card-category">
                            Provide all the information here
                        </p>
                        </div>
                        <div class="card-body">  
                            <form action="#" method="POST">
                                <div class="row">
                                    <div class="media col-6">
                                        <div class="media-body row">
                                            <div class="input-group-prepend col-2 mr-0 pr-0">
                                                <span class="input-group-text">
                                                <i class="material-icons">today</i>
                                                </span>
                                            </div>
                                            <div class="form-group col-10">
                                                <label for="ename" class="bmd-label-floating">Event Name</label>
                                                <input type="text" name="ename" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media col-6">
                                        <div class="media-body row">
                                            <div class="input-group-prepend col-2 mr-0 pr-0">
                                                <span class="input-group-text">
                                                <i class="material-icons">add_comment</i>
                                                </span>
                                            </div>
                                            <div class="form-group col-10">
                                                <label for="edes" class="bmd-label-floating">Event Description</label>
                                                <input type="text" name="edes" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="media col-6">
                                        <div class="media-body row">    
                                            <div class="input-group-prepend col-2 mr-0 pr-0">
                                                <span class="input-group-text">
                                                <i class="material-icons">add_location_alt</i>
                                                </span>
                                            </div>
                                            <div class="form-group col-10">
                                                <label for="evenue" class="bmd-label-floating">Event Venue</label>
                                                <input type="text" name="evenue" class="form-control">
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
                                                <label for="edate" class="bmd-label-floating">Event Date</label>
                                                <input type="text" name="edate" class="form-control datepicker pull-left">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                        <div class="media-body row">
                                            <div class="input-group-prepend col-1 mr-0 pr-0">
                                                <span class="input-group-text">
                                                <i class="material-icons">schedule</i>
                                                </span>
                                            </div>
                                            <div class="form-group col-10">
                                                <label for="etime" class="bmd-label-floating">Event Time</label>
                                                <input type="text" name="etime" class="from-control timepicker ml-2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body row">
                                            <div class="input-group-prepend col-1 mr-0 pr-0">
                                                <span class="input-group-text">
                                                <i class="material-icons">museum</i>
                                                </span>
                                            </div>
                                            <select class="form-control pl-2 col-10 btn btn-secondary btn-round" name="eventfor" id="eventfor" onchange="event_for()" data-size="5"    title="Select Event For">
                                                <option disabled selected>Select Event For</option>
                                                <option value="PRE">Pre-Placement</option>
                                                <option value="IN">In-Placement</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            <div id="cmp_id" class="row"></div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body row">
                                            <div class="input-group-prepend col-1 mr-0 pr-0">
                                                <span class="input-group-text">
                                                <i class="material-icons">apartment</i>
                                                </span>
                                            </div>
                                            <select class="form-control pl-2 col-10 btn btn-secondary btn-round" name="dept" id="dept" onchange="course()" data-size="5" title="Select Department">
                                                <option disabled selected>Select Department</option>
                                                <option value="BMIIT">BMIIT</option>
                                                <option value="SRIMCA">SRIMCA</option>
                                                <option value="CGPIT">CGPIT</option>
                                            </select>
                                        </div>
                                    </div>    
                                    <div class="media">
                                        <div class="media-body row">
                                            <div class="input-group-prepend col-1 mr-0 pr-0">
                                                <span class="input-group-text">
                                                <i class="material-icons">school</i>
                                                </span>
                                            </div>
                                            <select class="form-control pl-2 col-10 btn btn-secondary btn-round" name="degree" id="degree" onchange="passing_year()" data-size="5" title="Select Degree">
                                                <option>Select Degree</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body row">
                                            <div class="input-group-prepend col-1 mr-0 pr-0">
                                                <span class="input-group-text">
                                                <i class="material-icons">military_tech</i>
                                                </span>
                                            </div>
                                            <select class="form-control pl-2 col-10 btn btn-secondary btn-round" name="pyear" id="pyear" data-size="5"    title="Select Passing Year">
                                                <option disabled selected>Select Passing Year</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="media">
                                        <div class="media-body row">
                                            <div class="input-group-prepend col-1 mr-0 pr-0">
                                                <span class="input-group-text">
                                                <i class="material-icons">style</i>
                                                </span>
                                            </div>
                                            <select class="form-control ml-1 pl-2 col-10 btn btn-secondary btn-round" name="etype" id="etype" data-size="5"    title="Select Event Type">
                                                <option disabled selected>Select Event Type</option>
                                                <option value="SM">Seminar</option>
                                                <option value="TS">Test</option>
                                                <option value="CM">Company Visit</option>
                                                <option value="WS">Workshop</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body row">
                                            <div class="input-group-prepend col-1 mr-0 pr-0">
                                                <span class="input-group-text">
                                                <i class="material-icons">tune</i>
                                                </span>
                                            </div>
                                            <select class="form-control pl-2 col-10 btn btn-secondary btn-round" name="ecat" id="cate" data-size="5"    title="Select Event Type">
                                                <option disabled selected>Select Event Category</option>
                                                <option value="1">Mandatory</option>
                                                <option value="0">Voluntary</option>
                                            </select>
                                        </div>
                                    </div>
                                <div class="media">
                                    <div class="media-body mb-2">
                                    <input type="submit" class="btn btn-success" value="Create" name="Submit">
                                    </div>
                                </div>
                                    
                            </form>   
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="link8">
                    <div class="card" style="width:1200px;">
                        <div class="card-header">
                        <h4 class="card-title">Events that already occured</h4>
                        <p class="card-category">
                            Here you will find the events that already happend
                        </p>
                        </div>
                        <div class="card-body">
                                <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                </div>
                                <?php
                                    include('../../Files/PDO/dbcon.php');	
                                    $stmt=$con->prepare("CALL VIEW_PAST_EVENT();");
                                    $stmt->execute();
                                ?>
                            <div class="material-datatables">
                                <table id="past_events" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Venue</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Department</th>
                                        <th>Degree</th>
                                        <th>Passing Year</th>
                                        <th>Type</th>
                                        <th>Category</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Venue</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Department</th>
                                            <th>Degree</th>
                                            <th>Passing Year</th>
                                            <th>Type</th>
                                            <th>Category</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php while($data = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                        <td class="text-nowrap"><?php echo $data['EVENT_NAME']; ?></td>
                                        <td class="text-nowrap"><?php echo $data['EVENT_DESCRIPTION']; ?></td>
                                        <td class="text-nowrap"><?php echo $data['EVENT_VENUE']; ?></td>
                                        <td class="text-nowrap"><?php echo $data['EVENT_DATE']; ?></td>
                                        <td class="text-nowrap"><?php echo $data['EVENT_TIME']; ?></td>
                                        <td class="text-nowrap"><?php echo $data['BATCH_DEPARTMENT']; ?></td>
                                        <td class="text-nowrap"><?php echo $data['BATCH_DEGREE']; ?></td>
                                        <td class="text-nowrap"><?php echo $data['BATCH_PASSING_YEAR']; ?></td>
                                        <td class="text-nowrap"><?php echo $data['EVENT_TYPE']; ?></td>
                                        <td class="text-nowrap"><?php if ($data['EVENT_CATEGORY']=="1") { echo "Mandatory";	}elseif ($data['EVENT_CATEGORY']=="0") { echo "Voluntary"; }  ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="link9">
                    <div class="card" style="width:1200px;">
                        <div class="card-header">
                        <h4 class="card-title">Events that are ready to Occur</h4>
                        <p class="card-category">
                            Here you will find the Upcoming Events 
                        </p>
                        </div>
                        <div class="card-body">
                                <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                </div>
                                <?php
                                    //include('../../Files/PDO/dbcon.php');
                                    $stmt22=$con->prepare("CALL VIEW_FUTURE_EVENT();");
                                    $stmt22->execute();
                                    $stmt22=$con->prepare("CALL VIEW_FUTURE_EVENT();");
                                    $stmt22->execute();
                                ?>
                            <div class="material-datatables">
                                <table id="upcoming_events" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;">
                                    <thead>
                                        <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Venue</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Department</th>
                                        <th>Degree</th>
                                        <th>Passing Year</th>
                                        <th>Type</th>
                                        <th>Category</th>
                                        <th class="disabled-sorting">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Venue</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Department</th>
                                            <th>Degree</th>
                                            <th>Passing Year</th>
                                            <th>Type</th>
                                            <th>Category</th>
                                            <th class="disabled-sorting">Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php while($data = $stmt22->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                        <td><?php echo $data['EVENT_NAME']; ?></td>
                                        <td><?php echo $data['EVENT_DESCRIPTION']; ?></td>
                                        <td><?php echo $data['EVENT_VENUE']; ?></td>
                                        <td><?php echo $data['EVENT_DATE']; ?></td>
                                        <td><?php echo $data['EVENT_TIME']; ?></td>
                                        <td><?php echo $data['BATCH_DEPARTMENT']; ?></td>
                                        <td><?php echo $data['BATCH_DEGREE']; ?></td>
                                        <td><?php echo $data['BATCH_PASSING_YEAR']; ?></td>
                                        <td><?php echo $data['EVENT_TYPE']; ?></td>
                                        <td><?php if ($data['EVENT_CATEGORY']=="1") { echo "Mandatory";	}elseif ($data['EVENT_CATEGORY']=="0") { echo "Voluntary"; }  ?></td>
                                        <td>
                                            <a href="update_event.php?eid=<?php echo $data['EVENT_ID']; ?>" class="btn btn-link btn-info btn-just-icon " rel="tooltip" title="Update Event"><i class="material-icons">library_add_check</i></a>
                                            <a href="cancel_event.php?eid=<?php echo $data['EVENT_ID']; ?>" class="btn btn-link btn-danger btn-just-icon " rel="tooltip" title="Cancel Event"><i class="material-icons">delete_sweep</i></a>
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
                <div class="card" style="width:1200px;">
                    <div class="card-header">
                    <h4 class="card-title">Events that are cancelled</h4>
                    <p class="card-category">
                        Here you can find the events that are cancelled due to any reason 
                    </p>
                    </div>
                    <div class="card-body">
                            <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <?php
                                    //include('../../Files/PDO/dbcon.php'); 
                                    $stmt33=$con->prepare("CALL VIEW_FUTURE_CANCELED_EVENT();");
                                    $stmt33->execute();
                                    $stmt33=$con->prepare("CALL VIEW_FUTURE_CANCELED_EVENT();");
                                    $stmt33->execute();
                                    // print_r($stmt33->errorinfo());
                            ?>
                        <div class="material-datatables">
                            <table id="canceled_events" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;">
                                <thead>
                                    <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Venue</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Department</th>
                                    <th>Degree</th>
                                    <th>Passing Year</th>
                                    <th>Type</th>
                                    <th>Category</th>
                                    <th class="disabled-sorting">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Venue</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Department</th>
                                        <th>Degree</th>
                                        <th>Passing Year</th>
                                        <th>Type</th>
                                        <th>Category</th>
                                        <th class="disabled-sorting">Actions</th>

                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php while($data = $stmt33->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <tr>
                                    <td><?php echo $data['EVENT_NAME']; ?></td>
                                    <td><?php echo $data['EVENT_DESCRIPTION']; ?></td>
                                    <td><?php echo $data['EVENT_VENUE']; ?></td>
                                    <td><?php echo $data['EVENT_DATE']; ?></td>
                                    <td><?php echo $data['EVENT_TIME']; ?></td>
                                    <td><?php echo $data['BATCH_DEPARTMENT']; ?></td>
                                    <td><?php echo $data['BATCH_DEGREE']; ?></td>
                                    <td><?php echo $data['BATCH_PASSING_YEAR']; ?></td>
                                    <td><?php echo $data['EVENT_TYPE']; ?></td>
                                    <td><?php if ($data['EVENT_CATEGORY']=="1") { echo "Mandatory";	}elseif ($data['EVENT_CATEGORY']=="0") { echo "Voluntary"; }  ?></td>
                                    <td><a href="restore_event.php?eid=<?php echo $data['EVENT_ID']; ?>" class="btn btn-link btn-info btn-just-icon " rel="tooltip" title="Restore Event"><i class="material-icons">restore_from_trash</i></a></td>
                                    </tr>
                                    <?php }
                                        $stmt=$con->prepare("CALL VIEW_PAST_CANCELED_EVENT();");
                                        $stmt->execute();
                                        while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <tr>
                                    <td><?php echo $data['EVENT_NAME']; ?></td>
                                    <td><?php echo $data['EVENT_DESCRIPTION']; ?></td>
                                    <td><?php echo $data['EVENT_VENUE']; ?></td>
                                    <td class="text-nowrap"><?php echo $data['EVENT_DATE']; ?></td>
                                    <td><?php echo $data['EVENT_TIME']; ?></td>
                                    <td><?php echo $data['BATCH_DEPARTMENT']; ?></td>
                                    <td><?php echo $data['BATCH_DEGREE']; ?></td>
                                    <td><?php echo $data['BATCH_PASSING_YEAR']; ?></td>
                                    <td><?php echo $data['EVENT_TYPE']; ?></td>
                                    <td><?php if ($data['EVENT_CATEGORY']=="1") { echo "Mandatory"; }elseif ($data['EVENT_CATEGORY']=="0") { echo "Voluntary"; }  ?></td>
                                    <td>Expired</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>         
                    </div>
                </div>
                </div>
                <div class="tab-pane" id="link11">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">Attendance</h4>
                    <p class="card-category">
                        More information here
                    </p>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                        <div class="media">
                            <div class="media-body">
                                <select name="dept_att" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="dept_att" onchange="course_att()"
                                    autofocus>
                                    <option>Select Department</option>
                                    <option value="BMIIT">BMIIT</option>
                                    <option value="SRIMCA">SRIMCA</option>
                                    <option value="CGPIT">CGPIT</option>
                                </select>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <select name="degree_att" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="degree_att"
                                    onchange="passing_year_att()">
                                    <option>Select Degree</option>
                                </select>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body mb-2">
                                <select name="pyear_att" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="pyear_att"
                                    onchange="all_event_att()">
                                    <option>Select Passing Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body mb-2">
                                <select name="event_att" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="event_att"
                                    onchange="get_att()">
                                    <option>Select Event</option>
                                </select>
                            </div>
                        </div>
                        <div id="att"></div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript"> 
    function course(){
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET","degreebind.php?dept="+document.getElementById("dept").value,false);
        xmlhttp.send(null);
        //alert(xmlhttp.responseText);  
        document.getElementById("degree").innerHTML=xmlhttp.responseText;
    }
    function passing_year(){ 
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET","pyearbind.php?dept="+document.getElementById("dept").value+"&"+"degree="+document.getElementById("degree").value,false);
        xmlhttp.send(null);
        document.getElementById("pyear").innerHTML=xmlhttp.responseText;
    }
    function event_for()
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET","company_id.php?eve="+document.getElementById("eventfor").value,false);
        xmlhttp.send(null);
        document.getElementById("cmp_id").innerHTML=xmlhttp.responseText;
    }
    function course_att() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "degreebind.php?dept=" + document.getElementById("dept_att").value, false);
        xmlhttp.send(null);
        //alert(xmlhttp.responseText);  
        document.getElementById("degree_att").innerHTML = xmlhttp.responseText;
    }

    function passing_year_att() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "pyearbind.php?dept=" + document.getElementById("dept_att").value + "&" + "degree=" + document
            .getElementById("degree_att").value, false);
        xmlhttp.send(null);
        document.getElementById("pyear_att").innerHTML = xmlhttp.responseText;
    }

    function all_event_att() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "eventbind.php?dept=" + document.getElementById("dept_att").value + "&" + "degree=" + document
            .getElementById("degree_att").value + "&" + "pyear=" + document.getElementById("pyear_att").value, false);
        xmlhttp.send(null);
        document.getElementById("event_att").innerHTML = xmlhttp.responseText;
    }

    function get_att() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "attbind.php?eid=" + document.getElementById("event_att").value, false);
        xmlhttp.send(null);
        document.getElementById("att").innerHTML = xmlhttp.responseText;
    }
    </script>
<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){

      if(isset($_REQUEST["Submit"])){

          $ename = $_REQUEST["ename"];
          $edes = $_REQUEST["edes"];
          $evenue = $_REQUEST["evenue"];
          $edate = $_REQUEST["edate"];
          $fdate = strtotime($edate);
          $date = date('Y-m-d',$fdate);
          $dept = $_REQUEST["dept"];
          $degree = $_REQUEST["degree"];
          $pyear = $_REQUEST["pyear"];
          $etime = $_REQUEST["etime"];
          $etype = $_REQUEST["etype"];
          $ecat = $_REQUEST["ecat"];
          $eve = $_REQUEST['eventfor'];

          $gb = $_SESSION['lid'];
          $gtype=$_SESSION['lut'];

          if ($eve == "PRE") {
            $cid=0;
          }
          elseif ($eve == "IN") {
            $cid=$_REQUEST['cmp_id'];
          }

          //include('../../Files/PDO/dbcon.php');

          $stmt=$con->prepare("CALL INSERT_EVENT(:gb,:ename,:edes,:evenue,:edate,:dept,:degree,:pyear,:etime,:etype,:ecate,:gtype,:cid);");
          $stmt->bindParam(":gb",$gb);
          $stmt->bindParam(":ename",$ename);
          $stmt->bindParam(":edes",$edes);
          $stmt->bindParam(":evenue",$evenue);
          $stmt->bindParam(":edate",$date);
          $stmt->bindParam(":dept",$dept);
          $stmt->bindParam(":degree",$degree);
          $stmt->bindParam(":pyear",$pyear);
          $stmt->bindParam(":etime",$etime);
          $stmt->bindParam(":etype",$etype);
          $stmt->bindParam(":ecate",$ecat);
          $stmt->bindParam(":gtype",$gtype);
          $stmt->bindParam(":cid",$cid);
          $stmt->execute();
          // print_r( $stmt->errorinfo());
          if ($stmt) {
            echo "<script>alert('Event Successfully Created!')</script>";
            header('Refresh: 0');
          }
          else {
            echo "<script>alert('Looks Like Someting Went Worng!!!')</script>";
          }
         
      }
  }
  ob_flush();
?>
<?php 

include 'footer.php';
ob_flush();
?>


<script type="text/javascript">
    function att_check_evnt(clicked) {
        if ($('#' + clicked).is(":checked")) {
            var val = $('#' + clicked).val();
            // alert("uncheck" + val);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "insert_att.php?sid=" + val, false);
            xmlhttp.send(null);
            // alert(xmlhttp.responseText);
        } else {
            var val = $('#' + clicked).val();
            // alert(val);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "delete_att.php?sid=" + val, false);
            xmlhttp.send(null);
            // alert(xmlhttp.responseText);
        }
    }


    function att_uncheck_evnt(clicked) {
        if ($('#' + clicked).is(":checked")) {
            var val = $('#' + clicked).val();
            // alert("check" + val);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "insert_att.php?sid=" + val, false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);
        } else {
            var val = $('#' + clicked).val();
            // alert(val);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "delete_att.php?sid=" + val, false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);
        }
    }
    </script>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // include('../../Files/PDO/dbcon.php');
    if(isset($_REQUEST["att_submit"])){
        $eid=$_REQUEST['event_att'];
      $sid=0;
      $att=0;
      $fid=$_SESSION['lid'];
      $c=1;
        $stmt=$con->prepare("CALL  GET_APPLIED_STUDENT(:eid)");
      $stmt->bindParam(":eid",$eid);
      $stmt->execute();
      while ($x=$stmt->fetch(PDO::FETCH_ASSOC)) {
        $sid=$x['STUDENT_ID'];
        if(isset($_REQUEST[$sid]))
        {
          $att=1;
        }
        else
        {
          $att=0;
        }
        if ($c==1) {
          $c=0;
          $st1=$con->prepare("CALL INSERT_UPDATE_ATTENDANCE(:eid,:sid,:fid,:att);");
          $st1->bindparam(":eid",$eid);
          $st1->bindparam(":sid",$sid);
          $st1->bindparam(":fid",$fid);
          $st1->bindparam(":att",$att);
          $st1->execute();
        }
        $st1=$con->prepare("CALL INSERT_UPDATE_ATTENDANCE(:eid,:sid,:fid,:att);");
        $st1->bindparam(":eid",$eid);
        $st1->bindparam(":sid",$sid);
        $st1->bindparam(":fid",$fid);
        $st1->bindparam(":att",$att);
        $st1->execute();
        // print_r($st1->errorinfo());
      }
    }
}
?>