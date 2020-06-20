<?php 
    include 'header.php';
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="ml-auto mr-auto">
            <div class="page-categories">
            <h3 class="title text-center">Test Details</h3>
            <br />
            <ul class="nav nav-pills nav-pills-success nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#link7" role="tablist">
                    <i class="material-icons">event</i> New Test
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                    <i class="material-icons">done_all</i> Past Test
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link9" role="tablist">
                    <i class="material-icons">next_plan</i> Upcoming Test
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link10" role="tablist">
                    <i class="material-icons">poll</i> Marks
                </a>
                </li>
            </ul>
            <div class="tab-content tab-space tab-subcategories">
                <div class="tab-pane active" id="link7">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">Create New Test</h4>
                    <p class="card-category">
                        Provide information to create a new Test
                    </p>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST">
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
                                    <select class="form-control pl-2 col-10 btn btn-secondary btn-round" name="pyear" id="pyear" data-size="5"  onchange="event_bind()"  title="Select Passing Year">
                                        <option disabled selected>Select Passing Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body row">
                                    <div class="input-group-prepend col-1 mr-0 pr-0">
                                        <span class="input-group-text">
                                        <i class="material-icons">event</i>
                                        </span>
                                    </div>
                                    <select class="form-control pl-2 col-10 btn btn-secondary btn-round" name="event" id="event" data-size="5"  onchange="event_bind()"  title="Select Passing Year">
                                        <option disabled selected>Select Event</option>
                                    </select>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body row">
                                    <div class="input-group-prepend col-1">
                                        <span class="input-group-text">
                                        <i class="material-icons">article</i>
                                        </span>
                                    </div>
                                    <div class="form-group col-11">
                                        <label for="tname" class="bmd-label-floating">Test Name</label>
                                        <input type="text" name="tname" class="form-control pull-left">
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body row">
                                    <div class="input-group-prepend col-1">
                                        <span class="input-group-text">
                                        <i class="material-icons">description</i>
                                        </span>
                                    </div>
                                    <div class="form-group col-11">
                                        <label for="tdes" class="bmd-label-floating">Test Description</label>
                                        <input type="text" name="tdes" class="form-control pull-left">
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body row">
                                    <div class="input-group-prepend col-1">
                                        <span class="input-group-text">
                                        <i class="material-icons">grade</i>
                                        </span>
                                    </div>
                                    <div class="form-group col-11">
                                        <label for="tmarks" class="bmd-label-floating">Total Marks</label>
                                        <input type="text" name="tmarks" class="form-control pull-left">
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body row">
                                    <div class="input-group-prepend col-1">
                                        <span class="input-group-text">
                                        <i class="material-icons">library_add_check</i>
                                        </span>
                                    </div>
                                    <div class="form-group col-11">
                                        <label for="pmarks" class="bmd-label-floating">Passing Marks</label>
                                        <input type="text" name="pmarks" class="form-control pull-left">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group form-control-lg">
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
                    <h4 class="card-title">Past Test Details</h4>
                    <p class="card-category">
                        Get information about test's that already happened
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
                                        <td><button type="button" value="<?php echo $data['TEST_ID']; ?>" class="btn btn-link btn-info btn-just-icon viewMarks" rel="tooltip" title="View Marks" data-toggle="modal" data-target="#noticeModal"><i class="material-icons">visibility</i></button></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <form action="#" method="post">
                            <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content" >
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel">Update Stipend</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        <i class="material-icons">close</i>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="material-datatables" id="Marks_view">
                                    </div>        
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </form>
                </div>
                </div>
                <div class="tab-pane" id="link9">
                <div class="card" style="width:1200px;">
                    <div class="card-header">
                    <h4 class="card-title">Upcoming Test Details</h4>
                    <p class="card-category">
                        Get information about test's that are going to happen
                    </p>
                    </div>
                    <div class="card-body">
                            <div class="toolbar">
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
                    <h4 class="card-title">Marks</h4>
                    <p class="card-category">
                        Enter marks for the occured test
                    </p>
                    </div>
                    <div class="card-body">
                    <form action="#" method="post">
                    <div class="media">
                        <div class="media-body mb-2">
                            <select name="dept" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="dept_marks" onchange="course_marks()" autofocus>
                                <option>Select Department</option>
                                <option value="BMIIT">BMIIT</option>
                                <option value="SRIMCA">SRIMCA</option>
                                <option value="CGPIT">CGPIT</option>
                            </select>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body mb-2">
                            <select name="degree" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="degree_marks" onchange="passing_year_marks()">
                                <option>Select Degree</option>
                            </select>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body mb-2">
                            <select name="pyear" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="pyear_marks" onchange="test_bind()">
                                <option>Select Passing Year</option>
                            </select>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body mb-2">
                            <select name="test" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="tests" onchange="get_marks()">
                                <option>Select Test</option>
                            </select>
                        </div>
                    </div>
                    <div id="marks"></div>
                    </form>
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
// ob_flush();
?>

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
        function event_bind(){ 
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","test_eventbind.php?dept="+document.getElementById("dept").value+"&"+"degree="+document.getElementById("degree").value+"&"+"pyear="+document.getElementById("pyear").value,false);
            xmlhttp.send(null);
            document.getElementById("event").innerHTML=xmlhttp.responseText;
        }
		function course_marks(){
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","degreebind.php?dept="+document.getElementById("dept_marks").value,false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);  
            document.getElementById("degree_marks").innerHTML=xmlhttp.responseText;
        }
        function passing_year_marks(){ 
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","pyearbind.php?dept="+document.getElementById("dept_marks").value+"&"+"degree="+document.getElementById("degree_marks").value,false);
            xmlhttp.send(null);
            document.getElementById("pyear_marks").innerHTML=xmlhttp.responseText;
        }
        function test_bind(){ 
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","testbind.php?dept="+document.getElementById("dept_marks").value+"&"+"degree="+document.getElementById("degree_marks").value+"&"+"pyear="+document.getElementById("pyear_marks").value,false);
            xmlhttp.send(null);
            document.getElementById("tests").innerHTML=xmlhttp.responseText;
        }
        function get_marks(){ 
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","marksbind.php?tid="+document.getElementById("tests").value,false);
            xmlhttp.send(null);
            document.getElementById("marks").innerHTML=xmlhttp.responseText;
        }
        </script>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // include('../../Files/PDO/dbcon.php');
    if(isset($_REQUEST["Submit"])){

        $tname = $_REQUEST["tname"];
        $eid = $_REQUEST["event"];
        $tdes = $_REQUEST["tdes"];
        $tmarks = $_REQUEST["tmarks"];
        $pmarks = $_REQUEST["pmarks"];

        $gb = $_SESSION['lid'];
        $gtype=$_SESSION['lut'];

        //include('../../Files/PDO/dbcon.php');

        $stmt=$con->prepare("CALL INSERT_TEST(:eid,:tname,:tdes,:tmarks,:pmarks);");
        $stmt->bindParam(":eid",$eid);
        $stmt->bindParam(":tname",$tname);
        $stmt->bindParam(":tdes",$tdes);
        $stmt->bindParam(":tmarks",$tmarks);
        $stmt->bindParam(":pmarks",$pmarks);
        $stmt->execute();
        
        if ($stmt) {
            echo "<script>alert('Test Successfully Created!')</script>";
            header("Refresh: 0");
        }
        else {
            echo "<script>alert('Looks Like Someting Went Worng!!!')</script>";
        }

      // print_r( $stmt->errorinfo());
    }
    if(isset($_REQUEST["marks_submit"])){
        $tid=$_REQUEST['test'];
        $i=0;
        foreach ($_REQUEST as $key => $value) {
            if($i==sizeof($_REQUEST)-1)
            {
            }
            else if($i>=4) {
            $stmt=$con->prepare("CALL INSERT_MARKS(:tid,:sid,:obMarks)");
              $stmt->bindParam(":tid",$tid);
              $stmt->bindParam(":sid",$key);
              $stmt->bindParam(":obMarks",$value);
              $stmt->execute();
            }
            $i+=1;
        }
        if($stmt)
      {
          echo "<script>alert('Marks Filled-Up Successfully')</script>";
          header("Refresh: 0");
      }
      else {
          echo "<script>alert('Something Went Worng')</script>";
      }
    }
}
ob_flush();
?>