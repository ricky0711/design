<?php 
  ob_start();
  include('header.php');
  $data=$_SESSION['Userdata'];
?>
<div class="content">
  <div class="container-fluid">
    <div class="col-md-8 col-12 mr-auto ml-auto">
      <!--      Wizard container        -->
      <div class="wizard-container">
        <div class="card card-wizard" data-color="rose" id="wizardProfile">
        <?php
                $count=0;
                include('../Files/PDO/dbcon.php');
                $id=$_SESSION['lid'];
                $type=$_SESSION['lut'];
                $stmt=$con->prepare("CALL GET_STUDENT_DETAILS(:sid);");
                $stmt->bindparam(":sid",$id);
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
              ?>
        <form action="#" method="POST" enctype="multipart/form-data">
            <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
            <div class="card-header text-center">
              <h3 class="card-title">
                Your Profile
              </h3>
              <h5 class="card-description">This information will let us know more about you.</h5>
            </div>
            <div class="wizard-navigation">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="#about" data-toggle="tab" role="tab">
                    About
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#account" data-toggle="tab" role="tab">
                    Parents
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#address" data-toggle="tab" role="tab">
                    Address
                  </a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                  <div class="tab-pane active" id="about">
                      <h5 class="info-text"> Let's start with the basic information (with validation)</h5>
                      <div class="row justify-content-center">
                      <div class="col-sm-4">
                          <div class="picture-container">
                          <div class="picture" style="height:150px;width:150px;">
                            <img src="Profile_pic/<?php echo $data['STUDENT_PROFILE_PIC']; ?>" onclick="triggerClick()" id="profileDisplay"  style="display: block;margin: -5px auto;" class="w-100 h-100">
                                <input type="file" class="form-control" name="student_pic" id="profileImage" onchange="displayImage(this)" accept="image/*" style="display: none;" value="<?php echo $date['STUDENT_PROFILE_PIC'] ?>" required>
                          </div>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="input-group form-control-lg">
                          <div class="row">
                            <div class="input-group-prepend col-1 mr-3">
                                <span class="input-group-text">
                                <i class="material-icons">face</i>
                                </span>
                            </div>
                            <div class="form-group col-5">
                                <label for="exampleInput1" class="bmd-label-floating">First Name</label>
                                <input type="text" class="form-control" name="fname" class="form-control" placeholder="First Name" value="<?php echo $data["STUDENT_FIRST_NAME"]; ?>" required >
                            </div>
                            <div class="form-group col-5">
                                <label for="exampleInput1" class="bmd-label-floating">Last Name</label>
                                <input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php echo $data["STUDENT_LAST_NAME"]; ?>" required>
                            </div>
                          </div>
                          </div>
                          <div class="input-group form-control-lg">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                              <i class="material-icons">record_voice_over</i>
                              </span>
                          </div>
                          <div class="form-group">
                              <label for="exampleInput11" class="bmd-label-floating">Date Of Birth</label>
                              <input name="sdob" class="form-control" type="text" placeholder="Date of Birth" value="<?php echo $data["STUDENT_DATE_OF_BIRTH"]; ?>" required>
                          </div>
                          </div>
                          <div class="input-group form-control-lg">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                              <i class="material-icons">record_voice_over</i>
                              </span>
                          </div>
                          <input type="hidden" name="enum" values="<?php echo $data["STUDENT_ENROLLMENT_NUMBER"]; ?>"">
                          <?php $gender = $data["STUDENT_GENDER"]; ?>
                          <?php if($gender == 'M'){ ?>
                          <div class="form-group">    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" value="M" checked required> Male
                                <span class="circle">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" value="F" required> Female
                                <span class="circle">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </div>
                          <?php }else{ ?>
                          <div class="form-group">    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" value="M" required> Male
                                <span class="circle">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" value="F" checked required> Female
                                <span class="circle">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </div>
                          <?php } ?>
                          </div>
                      </div>
                      <div class="col-sm-6 mt-5">
                          <div class="input-group form-control-lg">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                              <i class="material-icons">email</i>
                              </span>
                          </div>
                          <div class="form-group">
                              <label for="exampleInput1" class="bmd-label-floating">Email</label>
                              <input type="email" name="email" placeholder="Student Email" class="form-control" value="<?php echo $data["STUDENT_EMAIL"]; ?>" required>
                          </div>
                          </div>
                      </div>
                      <div class="col-sm-6 mt-3">
                          <div class="input-group form-control-lg">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                              <i class="material-icons">calendar</i>
                              </span>
                          </div>
                          <div class="form-group">
                              <label for="exampleInput1" class="bmd-label-floating">Phone Number</label>
                              <input type="text" name="pnum" class="form-control" placeholder="Phone number" value="<?php echo $data["STUDENT_PHONE_NUMBER"]; ?>" required>
                          </div>
                          </div>
                      </div>
                      </div>
                  </div>
                  <div class="tab-pane" id="account">
                      <h5 class="info-text"> Parent's Profile</h5>
                          <div class="row justify-content-center">
                              <div class="col-lg-10">
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <div class="input-group form-control-lg">
                                              <div class="input-group-prepend">
                                                  <span class="input-group-text">
                                                  <i class="material-icons mb-2">face</i>
                                                  </span>
                                              </div>
                                              <div class="form-group">
                                                  <label for="exampleInput1" class="bmd-label-floating">Parent's Name</label>
                                                  <input type="text" name="pname" placeholder="Parent Name" class="form-control" value="<?php echo $data["STUDENT_PARENT_NAME"]; ?>" required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-sm-12">
                                          <div class="input-group form-control-lg">
                                              <div class="input-group-prepend">
                                                  <span class="input-group-text">
                                                  <i class="material-icons mb-2">record_voice_over</i>
                                                  </span>
                                              </div>
                                              <div class="form-group">
                                                  <label for="exampleInput11" class="bmd-label-floating">Parent's Phone Number</label>
                                                  <input type="text" name="pnumber" placeholder="Parent Number" class="form-control" value="<?php echo $data["STUDENT_PARENT_PHONE_NUMBER"]; ?>" required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-sm-12">
                                              <div class="input-group form-control-lg">
                                                  <div class="input-group-prepend">
                                                      <span class="input-group-text">
                                                      <i class="material-icons mb-2">email</i>
                                                      </span>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="exampleInput1" class="bmd-label-floating">Parent's Email</label>
                                                      <input type="email" name="pemail" placeholder="Parent email" class="form-control" value="<?php echo $data["STUDENT_PARENT_EMAIL"]; ?>" required>
                                                  </div>
                                              </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                  </div>
                <div class="tab-pane" id="address">
                  <div class="row justify-content-center">
                    <div class="col-sm-12">
                      <h5 class="info-text"> So what's Your Address </h5>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input name="saddress" value="<?php echo $data["STUDENT_ADDRESS"]; ?>" placeholder="Address" class="form-control" required>
                      </div>
                    </div> <br> <br> <br>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>About</label>
                        <input type="text" name="sabout" value="<?php echo $data["STUDENT_ABOUT"]; ?>" placeholder="Something about yourself........" class="form-control" required>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="mr-auto">
                <input type="button" class="btn btn-previous btn-fill btn-default btn-wd disabled" name="previous" value="Previous">
              </div>
              <div class="ml-auto">
                <input type="button" class="btn btn-next btn-fill btn-rose btn-wd" name="next" value="Next">
                <input type="submit" class="btn btn-finish btn-fill btn-rose btn-wd" name="Update" value="Finish">
              </div>
              <div class="clearfix"></div>
            </div>
      </form>
        </div>
      </div>
      <!-- wizard container -->
    </div>
  </div>
</div>
<script type="text/javascript" >
  function triggerClick() {
      document.querySelector('#profileImage').click();
  }

  function displayImage(e) {
      if(e.files[0]){
          var reader = new FileReader();

          reader.onload = function(e){
              document.querySelector('#profileDisplay').setAttribute('src',e.target.result);

          }
          reader.readAsDataURL(e.files[0]);
      }
  }
  
  function course(){
      var xmlhttp=new XMLHttpRequest();
      xmlhttp.open("GET","degreebind.php?dept="+document.getElementById("dept").value,false);
      xmlhttp.send(null);
      //alert(xmlhttp.responseText);  
      document.getElementById("degree").innerHTML=xmlhttp.responseText;
  }
</script>

<?php 

	if(isset($_REQUEST['Update']))
	{
		$sid=$data["STUDENT_ID"]; 
		$fname=$_REQUEST["fname"];
		$lname=$_REQUEST["lname"];
		$enum=$_REQUEST["enum"];
		$dob=$_REQUEST["sdob"];
		$fdate=strtotime($dob);
		$fdob=date('Y-m-d',$fdate); 
		$gender=$_REQUEST["gender"];
		$pname=$_REQUEST["pname"];
		$about=$_REQUEST["sabout"];
		$address=$_REQUEST["saddress"];
		$pnum=$_REQUEST["pnum"];
		$email=$_REQUEST["email"];
		$ppnum=$_REQUEST["pnumber"];
		$pemail=$_REQUEST["pemail"];

    $studemail = $data["STUDENT_EMAIL"];
    $studpnum = $data["STUDENT_PHONE_NUMBER"];


    $stmt=$con->prepare("CALL CHECK_USER(:email)");
    $stmt->bindParam(':email',$email);
    $stmt->execute();
    $rowsdata = $stmt->fetch(PDO::FETCH_ASSOC);
    $email_user="";
    if(isset($rowsdata)){
    $email_user = $rowsdata['LOGIN_USER_EMAIL'];
    }
   


    $stmt1=$con->prepare("CALL CHECK_USER_PHONE(:pnum)");
    $stmt1->bindParam(':pnum',$pnum);
    $stmt1->execute();
    $stmt1=$con->prepare("CALL CHECK_USER_PHONE(:pnum)");
    $stmt1->bindParam(':pnum',$pnum);
    $stmt1->execute();
    $rowsdata1 = $stmt1->fetch(PDO::FETCH_ASSOC);
    $phone_user="";
    if(isset($rowsdata1)){
    $phone_user = $rowsdata1['LOGIN_USER_PHONE_NUMBER'];
    }


    if($email_user == $email && $studemail != $email){
      echo "<script>alert('Email Exist')</script>";      
    }elseif($phone_user == $pnum && $studpnum != $pnum){
      echo "<script>alert('Phone Number Exist')</script>";      
    }else{
      $stmt=$con->prepare("CALL UPDATE_STUDENT_PROFILE(:sid,:fname,:lname,:ennum,:dob,:gender,:pname,:about,:address,:pnum,:email,:ppnum,:pemail)");
      $stmt->bindParam(":sid",$sid);
      $stmt->bindParam(":fname",$fname);
      $stmt->bindParam(":lname",$lname);
      $stmt->bindParam(":ennum",$enum);
      $stmt->bindParam(":dob",$fdob);
      $stmt->bindParam(":gender",$gender);
      $stmt->bindParam(":pname",$pname);
      $stmt->bindParam(":about",$about);
      $stmt->bindParam(":address",$address);
      $stmt->bindParam(":pnum",$pnum);
      $stmt->bindParam(":email",$email);
      $stmt->bindParam(":ppnum",$ppnum);
      $stmt->bindParam(":pemail",$pemail);
      $stmt->execute();

      if (!($_FILES['student_pic']['size'] == 0 )) {
      $imgname = $_FILES["student_pic"]["name"];
      $tmpname = $_FILES["student_pic"]["tmp_name"];

      move_uploaded_file($tmpname, "Profile_pic/$imgname");
    
      $stmt88=$con->prepare("CALL UPDATE_STUDENT_PROFILE_PIC(:ppic,:sid)");
      $stmt88->bindParam(":ppic",$imgname);
      $stmt88->bindParam(":sid",$sid);
      $stmt88->execute();
      $stmt88=$con->prepare("CALL UPDATE_STUDENT_PROFILE_PIC(:ppic,:sid)");
      $stmt88->bindParam(":ppic",$imgname);
      $stmt88->bindParam(":sid",$sid);
      $stmt88->execute();
    
      $stmt5=$con->prepare("CALL GET_STUDENT_DETAILS(:sid);");
      $stmt5->bindparam(":sid",$sid);
      $stmt5->execute();
      $stmt5=$con->prepare("CALL GET_STUDENT_DETAILS(:sid);");
      $stmt5->bindparam(":sid",$sid);
      $stmt5->execute();
      $studdata = $stmt5->fetch(PDO::FETCH_ASSOC);
      $_SESSION['Userdata'] = $studdata;
      header('Refresh:0');
      }
   }
   
	}
  
 ?>
<?php 
  include('footer.php');
  ob_flush();
?>      