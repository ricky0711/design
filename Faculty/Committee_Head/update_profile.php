<?php 
  ob_start();
  include('header.php');
  //session_start();
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
              include('../../Files/PDO/dbcon.php');
              $id=$_SESSION['lid'];
              $type=$_SESSION['lut'];
              $stmt=$con->prepare("CALL GET_FACULTY(:fid)");
              $stmt->bindparam(":fid",$id);
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
                    <!-- <li class="nav-item">
                      <a class="nav-link" href="#account" data-toggle="tab" role="tab">
                        Parents
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#address" data-toggle="tab" role="tab">
                        Address
                      </a>
                    </li> -->
                  </ul>
                
                <div class="card-body">
                  <div class="tab-content">
                      <div class="tab-pane active" id="about">
                          <h5 class="info-text"> Let's start with the basic information (with validation)</h5>
                          <div class="row justify-content-center">
                            <div class="col-sm-4">
                                <div class="picture-container">
                                  <div class="picture" style="height:150px;width:150px;">
                                    <img src="../img/<?php echo $data['FACULTY_PROFILE_PIC']; ?>" onclick="triggerClick()" id="profileDisplay"  style="display: block;margin: -5px auto;" class="w-100 h-100">
                                    <input type="file" class="form-control" name="faculty_pic" placeholder="Company Logo" name="profileImage" id="profileImage" onchange="displayImage(this)" accept="image/*" style="display: none;" value="<?php echo $date['FACULTY_PROFILE_PIC'] ?>" required>
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
                                      <input type="text" class="form-control" name="fname" class="form-control" placeholder="First Name" value="<?php echo $data["FACULTY_FIRST_NAME"]; ?>" required >
                                  </div>
                                  <div class="form-group col-5">
                                      <label for="exampleInput1" class="bmd-label-floating">Last Name</label>
                                      <input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php echo $data["FACULTY_LAST_NAME"]; ?>" required>
                                  </div>
                                </div>
                              </div>
                              <div class="input-group form-control-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="material-icons">record_voice_over</i>
                                    </span>
                                </div>
                                <?php $gender = $data["FACULTY_GENDER"]; ?>
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
                                        <input type="email" name="email" placeholder="Student Email" class="form-control" value="<?php echo $data["FACULTY_EMAIL"]; ?>" required>
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
                                        <input type="text" name="num" class="form-control" placeholder="Phone number" value="<?php echo $data["FACULTY_PHONE_NUMBER"]; ?>" required>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-sm-10 m-2">
                                <div class="form-group">
                                  <label>About</label>
                                  <input type="text" name="about" value="<?php echo $data["FACULTY_ABOUT"]; ?>" placeholder="Something about yourself........" class="form-control" required>
                                </div>
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
                    <input type="submit" class="btn btn-finish btn-fill btn-rose btn-wd" name="submit" value="Update">
                  </div>
                  <div class="clearfix"></div>
                </div>
            </form>
        </div>
      </div>
      <!-- wizard container -->
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
</script>
<?php 

	if(isset($_REQUEST['submit']))
	{
		$fid=$data["FACULTY_ID"]; 
		$fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
    $gender=$_REQUEST["gender"];
    $email=$_REQUEST["email"];
		$pnum=$_REQUEST["num"];
		$about=$_REQUEST["about"];
    
    
    $faculty_email = $data["FACULTY_EMAIL"];
    $faculty_pnum = $data["FACULTY_PHONE_NUMBER"];


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


    if($email_user == $email && $faculty_email != $email){
      echo "<script>alert('Email Exist')</script>";      
    }elseif($phone_user == $pnum && $faculty_pnum != $pnum){
      echo "<script>alert('Phone Number Exist')</script>";      
    }else{
      $stmt=$con->prepare("CALL UPDATE_FACULTY_PROFILE(:fid,:fname,:lname,:gender,:phn,:abt,:email)");
      $stmt->bindParam(":fid",$fid);
      $stmt->bindParam(":fname",$fname);
      $stmt->bindParam(":lname",$lname);
      $stmt->bindParam(":gender",$gender);
      $stmt->bindParam(":phn",$pnum);
      $stmt->bindParam(":abt",$about);
      $stmt->bindParam(":email",$email);
      $stmt->execute();
      header('Refresh:0');

      $stmt5=$con->prepare("CALL GET_FACULTY(:fid)");
      $stmt5->bindparam(":fid",$fid);
      $stmt5->execute();
      $stmt5=$con->prepare("CALL GET_FACULTY(:fid)");
      $stmt5->bindparam(":fid",$fid);
      $stmt5->execute();
      $facultdata = $stmt5->fetch(PDO::FETCH_ASSOC);
      $_SESSION['Userdata'] = $facultdata;
    }
      if (!($_FILES['faculty_pic']['size'] == 0 )) {
        $imgname = $_FILES["faculty_pic"]["name"];
        $tmpname = $_FILES["faculty_pic"]["tmp_name"];
        
        move_uploaded_file($tmpname, "../img/$imgname");

         $stmt=$con->prepare("CALL UPDATE_FACULTY_PROFILE_PIC(:fid,:profile_pic_name)");
         $stmt->bindParam(":fid",$fid);
		     $stmt->bindParam(":profile_pic_name",$imgname);
         $stmt->execute();
         header('Refresh:0');

         $stmt5=$con->prepare("CALL GET_FACULTY(:fid)");
         $stmt5->bindparam(":fid",$fid);
         $stmt5->execute();
         $stmt5=$con->prepare("CALL GET_FACULTY(:fid)");
         $stmt5->bindparam(":fid",$fid);
         $stmt5->execute();
         $facultdata = $stmt5->fetch(PDO::FETCH_ASSOC);
         $_SESSION['Userdata'] = $facultdata;
      }
	}
  ?>      
<?php 
  include('footer.php');
  ob_flush();
?>