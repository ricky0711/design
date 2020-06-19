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
                    <i class="material-icons">info</i> New Test
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                    <i class="material-icons">location_on</i> Past Test
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link9" role="tablist">
                    <i class="material-icons">gavel</i> Upcoming Test
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link10" role="tablist">
                    <i class="material-icons">help_outline</i> Marks
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
                            <div class="media">
                                <div class="media-body">
                                    <select class="form-control p-1 pl-3 btn btn-secondary btn-round" name="dept" id="dept" onchange="course()" data-size="5" data-style="btn btn-primary btn-round" title="Select Department">
                                        <option disabled>Select Department</option>
                                        <option value="BMIIT">BMIIT</option>
                                        <option value="SRIMCA">SRIMCA</option>
    							        <option value="CGPIT">CGPIT</option>
                                    </select>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <select class="form-control p-1 pl-3 btn btn-secondary btn-round" name="degree" id="degree" onchange="passing_year()" data-size="5" data-style="btn btn-primary btn-round" title="Select Degree">
                                        <option disabled selected>Select Degree</option>
                                    </select>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <select class="form-control p-1 pl-3 btn btn-secondary btn-round" name="pyear" id="pyear" onchange="event_bind()" data-size="5" data-style="btn btn-primary btn-round" title="Select Passing Year">
                                        <option disabled selected>Select Passing Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <select class="form-control p-1 pl-3 btn btn-secondary btn-round" name="event" id="event" data-size="5" data-style="btn btn-primary btn-round" title="Select Event">
                                        <option disabled selected>Select Event</option>
                                    </select>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body row">
                                    <div class="input-group-prepend col-1">
                                        <span class="input-group-text">
                                        <i class="material-icons">calendar</i>
                                        </span>
                                    </div>
                                    <div class="form-group col-11">
                                        <label for="tname" class="bmd-label-floating">Test Name</label>
                                        <input type="text" name="tname" class="form-control pull-left">
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i class="material-icons">calendar</i>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="tdes" class="bmd-label-floating">Test Description</label>
                                        <input type="text" name="tdes" class="form-control pull-left">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group form-control-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="material-icons">calendar</i>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="tmarks" class="bmd-label-floating">Total Marks</label>
                                    <input type="text" name="tmarks" class="form-control pull-left">
                                </div>
                            </div>
                            <div class="input-group form-control-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="material-icons">calendar</i>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="pmarks" class="bmd-label-floating">Passing Marks</label>
                                    <input type="text" name="pmarks" class="form-control pull-left">
                                </div>
                            </div>
                    	<input type="submit" class="btn btn-success btn-round" value="Create" name="Submit">
                    	<input type="reset" class="btn btn-danger btn-round pull-right" value="RESET" name="">
                        </form>
                    </div>
                </div>
                </div>
                <div class="tab-pane " id="link8">
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
                                $stmt=$con->prepare("CALL GET_PAST_TEST();");
                                $stmt->execute();
                                $stmt=$con->prepare("CALL GET_PAST_TEST();");
                                $stmt->execute();
                                // print_r( $stmt->errorinfo());
                            ?>
                        <div class="material-datatables">
                            <table id="past_test" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                    <th>Test Name</th>
                                    <th>Event Name</th>
                                    <th>Test Description</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Department</th>
                                    <th>Degree</th>
                                    <th>Passing Year</th>
                                    <th>Total Marks</th>
                                    <th>Passing Marks</th>
                                    <th class="disabled-sorting">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Test Name</th>
                                        <th>Event Name</th>
                                        <th>Test Description</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Department</th>
                                        <th>Degree</th>
                                        <th>Passing Year</th>
                                        <th>Total Marks</th>
                                        <th>Passing Marks</th>
                                        <th class="disabled-sorting">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
	                            	<?php while($data = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

                                    <tr>
                                        <td><?php echo $data['TEST_NAME']; ?></td>
                                        <td class="text-nowrap"><?php echo $data['EVENT_NAME']; ?></td>
                                        <td><?php echo $data['TEST_DESCRIPTION']; ?></td>
                                        <td><?php echo $data['EVENT_DATE']; ?></td>
                                        <td><?php echo $data['EVENT_TIME']; ?></td>
                                        <td><?php echo $data['BATCH_DEPARTMENT']; ?></td>
                                        <td><?php echo $data['BATCH_DEGREE']; ?></td>
                                        <td><?php echo $data['BATCH_PASSING_YEAR']; ?></td>
                                        <td><?php echo $data['TEST_TOTAL_MARKS']; ?></td>
                                        <td><?php echo $data['TEST_PASSING_MARKS']; ?></td>
                                        <td><a href="view_test_marks.php?tid=<?php echo $data['TEST_ID']; ?>" class="btn btn-link btn-info btn-just-icon " rel="tooltip" title="View Marks"><i class="material-icons">visibility</i></a></td>
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
                                $stmt22=$con->prepare("CALL GET_FUTURE_TEST();");
                                $stmt22->execute();
                                $stmt22=$con->prepare("CALL GET_FUTURE_TEST();");
                                $stmt22->execute();
                            ?>
                        <div class="material-datatables">
                            <table id="upcoming_test" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                    <th>Test Name</th>
                                    <th>Event Name</th>
                                    <th>Test Description</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Department</th>
                                    <th>Degree</th>
                                    <th>Passing Year</th>
                                    <th>Total Marks</th>
                                    <th>Passing Marks</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Test Name</th>
                                        <th>Event Name</th>
                                        <th>Test Description</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Department</th>
                                        <th>Degree</th>
                                        <th>Passing Year</th>
                                        <th>Total Marks</th>
                                        <th>Passing Marks</th>
                                    </tr>
                                </tfoot>
                                <tbody>
	                            	<?php while($data = $stmt22->fetch(PDO::FETCH_ASSOC)) { ?>

                                    <tr>
                                        <td><?php echo $data['TEST_NAME']; ?></td>
                                        <td class="text-nowrap"><?php echo $data['EVENT_NAME']; ?></td>
                                        <td><?php echo $data['TEST_DESCRIPTION']; ?></td>
                                        <td><?php echo $data['EVENT_DATE']; ?></td>
                                        <td><?php echo $data['EVENT_TIME']; ?></td>
                                        <td><?php echo $data['BATCH_DEPARTMENT']; ?></td>
                                        <td><?php echo $data['BATCH_DEGREE']; ?></td>
                                        <td><?php echo $data['BATCH_PASSING_YEAR']; ?></td>
                                        <td><?php echo $data['TEST_TOTAL_MARKS']; ?></td>
                                        <td><?php echo $data['TEST_PASSING_MARKS']; ?></td>
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

