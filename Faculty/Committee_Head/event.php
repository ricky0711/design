<?php 
    include 'header.php';
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
            <div class="page-categories">
            <h3 class="title text-center">Resume Details</h3>
            <br />
            <ul class="nav nav-pills nav-pills-success nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#link7" role="tablist">
                    <i class="material-icons">info</i> New Event
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                    <i class="material-icons">location_on</i> Past Event
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link9" role="tablist">
                    <i class="material-icons">gavel</i> Upcoming Event
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link10" role="tablist">
                    <i class="material-icons">help_outline</i> Cancelled Event
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link11" role="tablist">
                    <i class="material-icons">help_outline</i> Attendance
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
                            <form action="#" method="POST">
                            
                                <div class="input-group form-control-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i class="material-icons">person_pin</i>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="ename" class="bmd-label-floating">Event Name</label>
                                        <input type="text" name="ename" class="form-control">
                                    </div>
                                </div> 
                                <div class="input-group form-control-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i class="material-icons">person_pin</i>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="edes" class="bmd-label-floating">Event Description</label>
                                        <input type="text" name="edes" class="form-control">
                                    </div>
                                </div>
                                <div class="input-group form-control-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i class="material-icons">person_pin</i>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="evenue" class="bmd-label-floating">Event Venue</label>
                                        <input type="text" name="evenue" class="form-control">
                                    </div>
                                </div>    
                                <div class="input-group form-control-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i class="material-icons">person_pin</i>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="edate" class="bmd-label-floating">Event Date</label>
                                        <input type="text" name="edate" class="form-control pull-left">
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <select class="form-control p-1 pl-3" name="eventfor" id="eventfor" onchange="event_for()" data-size="5"    title="Select Event For">
                                            <option disabled selected>Select Event For</option>
                                            <option value="PRE">PRE-PLACEMENT</option>
                                            <option value="IN">IN-PLACEMENT</option>
                                        </select>
                                    </div>
                                </div>    
                                <div class="media">
                                    <div class="media-body mb-2">
                                        <div id="cmp_id"></div>
                                    </div>
                                </div>
                                    
                                <div class="row">
                                    <div>
                                        <select class="form-control p-1 pl-3" name="dept" id="dept" onchange="course()" data-size="5" title="Select Department">
                                            <option disabled selected>Select Department</option>
                                            <option value="BMIIT">BMIIT</option>
                                            <option value="SRIMCA">SRIMCA</option>
                                            <option value="CGPIT">CGPIT</option>
                                        </select>
                                    </div>
                                </div>   
                                <div class="row">
                                    <div>
                                        <select class="form-control" name="degree" id="degree" onchange="passing_year()" data-size="5" title="Select Degree">
                                            <option>Select Degree</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <select class="form-control p-1 pl-3" name="pyear" id="pyear" data-size="5"    title="Select Passing Year">
                                            <option disabled selected>Select Passing Year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-group form-control-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i class="material-icons">clock</i>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="etime" class="bmd-label-floating">Event Time</label>
                                        <input type="time" name="etime" class="">
                                    </div>
                                </div>                                                                                   
                                <div class="row">
                                    <div>
                                        <select class="form-control p-1 pl-3" name="etype" id="etype" data-size="5"    title="Select Event Type">
                                            <option disabled selected>Select Event Type</option>
                                            <option value="SM">Seminar</option>
                                            <option value="TS">Test</option>
                                            <option value="CM">Company Visit</option>
                                            <option value="WS">Workshop</option>
                                        </select>
                                    </div>
                                </div>    
                                <div class="row">
                                    <div>
                                        <select class="form-control p-1 pl-3" name="ecat" id="cate" data-size="5"    title="Select Event Type">
                                            <option disabled selected>Select Event Category</option>
                                            <option value="1">Mandatory</option>
                                            <option value="0">Voluntary</option>
                                        </select>
                                    </div>
                                </div>    
                                <div class="media">
                                    <div class="media-body mb-2">
                                    <input type="submit" class="button button-border x-small" value="Create" name="Submit">
                                    <input type="reset" class="btn btn-lg btn-outline-danger float-right ml-2" value="RESET" name="">
                                    </div>
                                </div>
                                    
                            </form>   
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="link8">
                    <div class="card" style="width:1200px;">
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
                                    include('../../Files/PDO/dbcon.php');	
                                    $stmt=$con->prepare("CALL VIEW_PAST_EVENT();");
                                    $stmt->execute();
                                ?>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
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
                                $stmt22=$con->prepare("CALL VIEW_FUTURE_EVENT();");
                                $stmt22->execute();
                                $stmt22=$con->prepare("CALL VIEW_FUTURE_EVENT();");
                                $stmt22->execute();
                            ?>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;">
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
                                    //include('../../Files/PDO/dbcon.php'); 
                                    $stmt33=$con->prepare("CALL VIEW_FUTURE_CANCELED_EVENT();");
                                    $stmt33->execute();
                                    $stmt33=$con->prepare("CALL VIEW_FUTURE_CANCELED_EVENT();");
                                    $stmt33->execute();
                                    // print_r($stmt33->errorinfo());
                            ?>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;">
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
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>         
                    </div>
                </div>
                </div>
                <div class="tab-pane" id="link11">
                <div class="card" style="width:1200px;">
                    <div class="card-header">
                    <h4 class="card-title">Help center</h4>
                    <p class="card-category">
                        More information here
                    </p>
                    </div>
                    <div class="card-body">
                        
                    </div>
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
</script>
<?php 

include 'footer.php';
ob_flush();
?>

