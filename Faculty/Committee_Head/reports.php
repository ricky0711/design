<?php 
    include 'header.php';
    include('../../Files/PDO/dbcon.php');
    $stmt=$con->prepare("CALL VIEW_COMPANY()");
    $stmt->execute();
    $stmt=$con->prepare("CALL VIEW_COMPANY()");
    $stmt->execute();
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
                    <i class="material-icons">info</i> Attendance
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                    <i class="material-icons">location_on</i> Marks
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link9" role="tablist">
                    <i class="material-icons">gavel</i> Placed Students
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
                        <div class="media">
                            <div class="media-body">
                                <select name="dept" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="dept" onchange="course()"
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
                            <select name="degree" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="degree" onchange="passing_year()">
                                <option>Select Degree</option>
                            </select>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <select name="pyear" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="pyear">
                                <option>Select Passing Year</option>
                            </select>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <select name="pyear" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="cid" onchange="att_report()">
                                <option value="-1">Select Company</option>
                                <?php 
                                    while ($x=$stmt->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                        <option value="<?php echo $x['COMPANY_ID']?>"><?php echo $x['COMPANY_NAME']?></option>
                                        <?php
                                    }
                                    ?>
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="media">
                        <div class="media-body mb-2">
                            <div id="attendance"></div>
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
                        <div class="media">
                            <div class="media-body mb-2">
                                <select name="dept" class="form-control p-1 pl-3" id="dept_mark_report" onchange="course_mark_report()" autofocus>
                                    <option>Select Department</option>
                                    <option value="BMIIT">BMIIT</option>
                                    <option value="SRIMCA">SRIMCA</option>
                                    <option value="CGPIT">CGPIT</option>
                                </select>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body mb-2">
                                <select name="degree" class="form-control p-1 pl-3" id="degree_mark_report" onchange="passing_year_mark_report()">
                                    <option>Select Degree</option>
                                </select>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body mb-2">
                                <select name="pyear" class="form-control p-1 pl-3" id="pyear_mark_report" onchange="test_bind()">
                                    <option>Select Passing Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body mb-2">
                                <select name="test" class="form-control p-1 pl-3" id="tests" onchange="get_marks()">
                                    <option>Select Test</option>
                                </select>
                            </div>
                        </div>
                        <div id="marks"></div>
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
                        <div class="media">
                            <div class="media-body mb-2">
                                <select name="pattern" class="form-control p-1 pl-3" id="pattern" onchange="pattern_set()" autofocus>
                                    <option>Select Report Pattern</option>
                                    <option value="C">Company Wise</option>
                                    <option value="S">Student Wise</option>
                                </select>
                            </div>
                        </div>
                        <div id="pattern_selector"></div>
                        <div id="data_display"></div>
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

<script type="text/javascript">
    function course() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "degreebind.php?dept=" + document.getElementById("dept").value, false);
        xmlhttp.send(null);
        //alert(xmlhttp.responseText);  
        document.getElementById("degree").innerHTML = xmlhttp.responseText;
    }

    function passing_year() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "pyearbind.php?dept=" + document.getElementById("dept").value + "&" + "degree=" + document
            .getElementById("degree").value, false);
        xmlhttp.send(null);
        document.getElementById("pyear").innerHTML = xmlhttp.responseText;
    }
    function att_report() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "att_report.php?dept=" + document.getElementById("dept").value + "&" + "degree=" + document.getElementById("degree").value + "&" + "pyear=" + document.getElementById("pyear").value + "&" + "cid=" + document.getElementById("cid").value, false);
        xmlhttp.send(null);
        document.getElementById("attendance").innerHTML = xmlhttp.responseText;
    }
    function course_mark_report(){
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET","degreebind.php?dept="+document.getElementById("dept_mark_report").value,false);
        xmlhttp.send(null);
        //alert(xmlhttp.responseText);  
        document.getElementById("degree_mark_report").innerHTML=xmlhttp.responseText;
    }
    function passing_year_mark_report(){ 
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET","pyearbind.php?dept="+document.getElementById("dept_mark_report").value+"&"+"degree="+document.getElementById("degree_mark_report").value,false);
        xmlhttp.send(null);
        document.getElementById("pyear_mark_report").innerHTML=xmlhttp.responseText;
    }
    function test_bind(){ 
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET","testbind.php?dept="+document.getElementById("dept_mark_report").value+"&"+"degree="+document.getElementById("degree_mark_report").value+"&"+"pyear="+document.getElementById("pyear_mark_report").value,false);
        xmlhttp.send(null);
        document.getElementById("tests").innerHTML=xmlhttp.responseText;
    }
    function get_marks(){ 
        var xmlhttp=new XMLHttpRequest();
        // alert('aa');
        xmlhttp.open("GET","mrk_report.php?tid="+document.getElementById("tests").value+"&"+"dept="+document.getElementById("dept").value+"&"+
                            "degree="+document.getElementById("degree").value+"&"+"pyear="+document.getElementById("pyear").value,false);
        xmlhttp.send(null);
        // alert(xmlhttp.responseText);
        document.getElementById("marks").innerHTML=xmlhttp.responseText;
    }
    function pattern_set(){
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET","pattern_selector.php?pattern="+document.getElementById("pattern").value,false);
        xmlhttp.send(null); 
        document.getElementById("pattern_selector").innerHTML=xmlhttp.responseText;
    }
    function course_placed_report(){
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET","degreebind.php?dept="+document.getElementById("dept_placed_report").value,false);
        xmlhttp.send(null);
        //alert(xmlhttp.responseText);  
        document.getElementById("degree_placed_report").innerHTML=xmlhttp.responseText;
    }
    function passing_year_placed_report(){ 
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET","pyearbind.php?dept="+document.getElementById("dept_placed_report").value+"&"+"degree="+document.getElementById("degree_placed_report").value,false);
        xmlhttp.send(null);
        document.getElementById("pyear_placed_report").innerHTML=xmlhttp.responseText;
    }
    function report_generate_placed_report(){ 
        // alert('a');
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET","placed_stud_report_generator.php?dept="+document.getElementById("dept_placed_report").value+"&"+"degree="+document.getElementById("degree_placed_report").value+"&"+"pyear="+document.getElementById("pyear_placed_report").value,false);
        xmlhttp.send(null);
        document.getElementById("data_display").innerHTML=xmlhttp.responseText;
    }
    function company_report_placed_report(){
        // alert('a');
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET","placement_company_report.php?year="+document.getElementById("year_placed_report").value,false);
        xmlhttp.send(null); 
        document.getElementById("data_display").innerHTML=xmlhttp.responseText;
    }
    </script>