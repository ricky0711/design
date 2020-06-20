<?php 
    include 'header.php';
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
            <div class="page-categories">
            <h3 class="title text-center">Batch Details</h3>
            <br />
            <ul class="nav nav-pills nav-pills-success nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#link7" role="tablist">
                    <i class="material-icons">list_alt</i> Batch List
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                    <i class="material-icons">fiber_new</i> New Batch
                </a>
                </li>
            </ul>
            <div class="tab-content tab-space tab-subcategories">
                <div class="tab-pane active" id="link7">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">All Batches list</h4>
                    <p class="card-category">
                        Here you can find all the Batches list
                    </p>
                    </div>
                    <div class="card-body">
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
                                <select class="form-control pl-2 col-10 btn btn-secondary btn-round" name="degree" id="degree" onchange="get_batch()" data-size="5" title="Select Degree">
                                    <option>Select Degree</option>
                                </select>
                            </div>
                        </div>  
                    <div id="show"></div> 
                    </div>
                </div>
                </div>
                <div class="tab-pane " id="link8">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">Create new Batch</h4>
                    <p class="card-category">
                        Provide information here to create a new Batch
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
                                <select class="form-control pl-2 col-10 btn btn-secondary btn-round" name="dept" id="dept_view_batch" onchange="course_view_batch()" data-size="5" title="Select Department">
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
                                <select class="form-control pl-2 col-10 btn btn-secondary btn-round" name="degree" id="degree_view_batch" data-size="5" title="Select Degree">
                                    <option>Select Degree</option>
                                </select>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body row">
                                <div class="input-group-prepend col-1 mr-0 pr-0">
                                    <span class="input-group-text">
                                    <i class="material-icons">today</i>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="ename" class="bmd-label-floating">Passing Year</label>
                                    <input type="text" name="pyear" class="form-control col-10" value="<?php echo date('Y');?>">
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body row">
                                <div class="input-group-prepend col-1 mr-0 pr-0">
                                    <span class="input-group-text">
                                    <i class="material-icons">today</i>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="ename" class="bmd-label-floating">No. of Semesters</label>
                                    <input type="text" name="sem" class="form-control col-10" >
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                            <input type="submit" class="btn btn-success" value="Create" name="Submit">
                            </div>
                        </div>
                    </form>
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
    function course(){
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","degreebind.php?dept="+document.getElementById("dept").value,false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);  
            document.getElementById("degree").innerHTML=xmlhttp.responseText;
        }
        function get_batch(){ 
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","view_batch_bind.php?dept="+document.getElementById("dept").value+"&degree="+document.getElementById("degree").value,false);
            xmlhttp.send(null);
            // alert(xmlhttp.responseText); 
            document.getElementById("show").innerHTML=xmlhttp.responseText;
        }
        function course(){
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","degreebind.php?dept="+document.getElementById("dept").value,false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);  
            document.getElementById("degree").innerHTML=xmlhttp.responseText;
        }
        function course_view_batch(){
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","degreebind.php?dept="+document.getElementById("dept_view_batch").value,false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);  
            document.getElementById("degree_view_batch").innerHTML=xmlhttp.responseText;
        }
        </script>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_REQUEST["Submit"])){

        $dept = $_REQUEST["dept"];
        $degree = $_REQUEST["degree"];
        

        if ($degree == 'BCA' || $degree == 'BSC(IT)') {
            $d2d=0;
            $type='BA';
        }elseif($degree == 'MCA' || $degree == 'MSC(IT)') {
          $d2d=0;
          $type='MA';
        }elseif($degree == 'IMCA' || $degree == 'IMSC(IT)') {
          $d2d=0;
          $type='IBM';
        }elseif($degree == 'BTECH(IT)'){
          $d2d=1;
          $type='BA';
        }elseif($degree == 'MTECH(IT)'){
          $d2d=1;
          $type='MA';
        }

        $pyear=$_REQUEST["pyear"];
        $nos=$_REQUEST["sem"];  

        include('../../Files/PDO/dbcon.php');

        $stmt2=$con->prepare("CALL INSERT_UPDATE_BATCH(:dept,:degree,:pyear,:sem,:d2d,:type)");
        $stmt2->bindParam(":dept",$dept);
        $stmt2->bindParam(":degree",$degree);
        $stmt2->bindParam(":pyear",$pyear);
        $stmt2->bindParam(":sem",$nos);
        $stmt2->bindParam(":d2d",$d2d);
        $stmt2->bindParam(":type",$type);
        $stmt2->execute();
      //   print_r( $stmt2->errorinfo());
        if ($stmt2) {
          echo "<script>alert('BATCH ADDED!')</script>";
        }
        else {
          echo "<script>alert('Looks Like Someting Went Worng!!!')</script>";
        }
       
    }
}
ob_flush();
?>

