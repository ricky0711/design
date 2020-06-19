<?php 
    include 'header.php';
    $data=$_SESSION['Userdata'];
  $fid=$data["FACULTY_ID"];
  $ftype=$data["FACULTY_ROLE"];
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
                    <i class="material-icons">info</i> Student List
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                    <i class="material-icons">location_on</i> Deactivate Student
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link9" role="tablist">
                    <i class="material-icons">gavel</i> New Material
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link10" role="tablist">
                    <i class="material-icons">help_outline</i> View Material
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
                            <div class="media-body ">
                                <select name="dept" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="dept" onchange="course()" autofocus>
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
                                <select name="pyear" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="pyear" onchange="get_stud()">
                                    <option>Select Passing Year</option>
                                </select>
                            </div>
                        </div>
                        <div id="students"></div>
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
                            <div class="media-body ">
                                <select name="dept" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="dept_de" onchange="course_de()" autofocus>
                                    <option>Select Department</option>
                                    <option value="BMIIT">BMIIT</option>
                                    <option value="SRIMCA">SRIMCA</option>
                                    <option value="CGPIT">CGPIT</option>
                                </select>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <select name="degree" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="degree_de" onchange="passing_year_de()">
                                    <option>Select Degree</option>
                                </select>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <select name="pyear" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="pyear_de" onchange="get_stud_de()">
                                    <option>Select Passing Year</option>
                                </select>
                            </div>
                        </div>
                        <div id="students_de"></div>
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
                    <form action="#" method="POST" enctype="multipart/form-data">   
                        <div class="media">
                            <div class="media-body">
                            <select name="dept" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="dept_material" onchange="course_material()">
                                    <option>Select Department</option>
                                    <option value="BMIIT">BMIIT</option>
                                    <option value="SRIMCA">SRIMCA</option>
                                    <option value="CGPIT">CGPIT</option>
                            </select>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                            <select name="degree" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="degree_material">
                                    <option>Select Degree</option>
                                </select>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                            <input type="text" name="title" class="form-control" placeholder="Material Title">
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                            <select name="doc_type" class="form-control p-1 pl-3 btn btn-secondary btn-round">
                                    <option>Select Type</option>
                                    <option value="PL">Practical List</option>
                                    <option value="RL">Referance Material</option>
                                    <option value="SP">Sample Paper</option>
                            </select>
                            </div>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" accept="application/pdf" name="matrials[]" multiple required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file for Matrials</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                            <input type="submit" class="btn btn-success" value="Create" name="material_Submit">
                            </div>
                        </div>
                    </form>
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
                      <div class="media">
                        <div class="media-body">
                          <select name="dept" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="dept_view_material" onchange="course_view_material()" autofocus>
                                <option>Select Department</option>
                                <option value="BMIIT">BMIIT</option>
                                <option value="SRIMCA">SRIMCA</option>
                                <option value="CGPIT">CGPIT</option>
                          </select>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-body">
                          <select name="degree" class="form-control p-1 pl-3 btn btn-secondary btn-round" id="degree_view_material" onchange="get_material()">
                                <option>Select Degree</option>
                            </select>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-body">
                          <div id="material"></div>
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
        function passing_year(){ 
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","pyearbind.php?dept="+document.getElementById("dept").value+"&"+"degree="+document.getElementById("degree").value,false);
            xmlhttp.send(null);
            document.getElementById("pyear").innerHTML=xmlhttp.responseText;
        }
        function get_stud(){ 
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","get_stud.php?dept="+document.getElementById("dept").value+"&"+"degree="+document.getElementById("degree").value+"&"+"pyear="+document.getElementById("pyear").value,false);
            xmlhttp.send(null);
            document.getElementById("students").innerHTML=xmlhttp.responseText;
        }
        function course_de(){
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","degreebind.php?dept="+document.getElementById("dept_de").value,false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);  
            document.getElementById("degree_de").innerHTML=xmlhttp.responseText;
        }
        function passing_year_de(){ 
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","pyearbind.php?dept="+document.getElementById("dept_de").value+"&"+"degree="+document.getElementById("degree_de").value,false);
            xmlhttp.send(null);
            document.getElementById("pyear_de").innerHTML=xmlhttp.responseText;
        }
        function get_stud_de(){ 
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","get_deactive_stud.php?dept="+document.getElementById("dept_de").value+"&"+"degree="+document.getElementById("degree_de").value+"&"+"pyear="+document.getElementById("pyear_de").value,false);
            xmlhttp.send(null);
            document.getElementById("students_de").innerHTML=xmlhttp.responseText;
        }
        function course_material(){
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","degreebind.php?dept="+document.getElementById("dept_material").value,false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);  
            document.getElementById("degree_material").innerHTML=xmlhttp.responseText;
        }
        function course_view_material(){
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","degreebind.php?dept="+document.getElementById("dept_view_material").value,false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);  
            document.getElementById("degree_view_material").innerHTML=xmlhttp.responseText;
        }
        function get_material(){ 
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","material_bind.php?dept="+document.getElementById("dept_view_material").value+"&"+"degree="+document.getElementById("degree_view_material").value,false);
            xmlhttp.send(null);
            document.getElementById("material").innerHTML=xmlhttp.responseText;
        }
        </script>

<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){

      if(isset($_REQUEST["material_Submit"])){
        include('../../Files/PDO/dbcon.php');
        // echo "<script>alert('aa');</script>";
            $filecount = count($_FILES["matrials"]["name"]);
            $dept = $_REQUEST["dept"];
            $degree = $_REQUEST["degree"];
            $doc_type = $_REQUEST["doc_type"];
            $doc_title = $_REQUEST["title"];
           for($i=0;$i<$filecount;$i++){
               $ran_num = mt_rand(100000,999999);
               $filename = $ran_num." ".$_FILES["matrials"]["name"][$i];
               move_uploaded_file($_FILES["matrials"]["tmp_name"][$i], "MATERIAL/$filename");
               $stmt=$con->prepare("CALL INSERT_MATERIAL(:dept,:degree,:up_id,:up_type,:doc_type,:doc_name,:doc_title);");
               $stmt->bindParam(":dept",$dept);
               $stmt->bindParam(":degree",$degree);
               $stmt->bindParam(":up_id",$fid);
               $stmt->bindParam(":up_type",$ftype);
               $stmt->bindParam(":doc_type",$doc_type);
               $stmt->bindParam(":doc_name",$filename);
               $stmt->bindParam(":doc_title",$doc_title);
               $stmt->execute(); 
               print_r($stmt->errorinfo());
           }    
            if ($stmt) {
            echo "<script>alert('All Document Save!')</script>";
          }
          else {
            echo "<script>alert('Looks Like Someting Went Worng!!!')</script>";
          }
         
      }
  }
  ob_flush();
?>

