<?php 
  ob_start();
  $sid = $_GET["sid"];
  include('header.php');
  $datafaculty=$_SESSION['Userdata'];
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
                // $id=$_SESSION['lid'];
                // $type=$_SESSION['lut'];
                $stmt=$con->prepare("CALL GET_STUDENT_DETAILS(:sid)");
                $stmt->bindparam(":sid",$sid);
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                // print_r($datas);
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
                            <img src="../../Student/Profile_pic/<?php echo $data['STUDENT_PROFILE_PIC']; ?>" onclick="triggerClick()" id="profileDisplay"  style="display: block;margin: -5px auto;" class="w-100 h-100">
                                <input type="file" class="form-control" name="student_pic" placeholder="Company Logo" name="profileImage" id="profileImage" onchange="displayImage(this)" accept="image/*" style="display: none;" value="<?php echo $date['STUDENT_PROFILE_PIC'] ?>" disabled>
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
                                <input type="text" class="form-control" name="fname" class="form-control" placeholder="First Name" value="<?php echo $data["STUDENT_FIRST_NAME"]; ?>" disabled >
                            </div>
                            <div class="form-group col-5">
                                <label for="exampleInput1" class="bmd-label-floating">Last Name</label>
                                <input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php echo $data["STUDENT_LAST_NAME"]; ?>" disabled>
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
                              <input name="sdob" class="form-control" type="text" placeholder="Date of Birth" value="<?php echo $data["STUDENT_DATE_OF_BIRTH"]; ?>" disabled>
                          </div>
                          </div>
                          <div class="input-group form-control-lg">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                              <i class="material-icons">record_voice_over</i>
                              </span>
                          </div>
                          <?php $gender = $data["STUDENT_GENDER"]; ?>
                          <?php if($gender == 'M'){ ?>
                          <div class="form-group">    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" value="M" checked disabled> Male
                                <span class="circle">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" value="F" disabled> Female
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
                                <input class="form-check-input" type="radio" name="gender" value="M" disabled> Male
                                <span class="circle">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" value="F" checked disabled> Female
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
                              <input type="email" name="email" placeholder="Student Email" class="form-control" value="<?php echo $data["STUDENT_EMAIL"]; ?>" disabled>
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
                              <input type="text" name="pnum" class="form-control" placeholder="Phone number" value="<?php echo $data["STUDENT_PHONE_NUMBER"]; ?>" disabled>
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
                                                  <input type="text" name="pname" placeholder="Parent Name" class="form-control" value="<?php echo $data["STUDENT_PARENT_NAME"]; ?>" disabled>
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
                                                  <input type="text" name="pnumber" placeholder="Parent Number" class="form-control" value="<?php echo $data["STUDENT_PARENT_PHONE_NUMBER"]; ?>" disabled>
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
                                                      <input type="email" name="pemail" placeholder="Parent email" class="form-control" value="<?php echo $data["STUDENT_PARENT_EMAIL"]; ?>" disabled>
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
                        <input name="saddress" value="<?php echo $data["STUDENT_ADDRESS"]; ?>" placeholder="Address" class="form-control" disabled>
                      </div>
                    </div> <br> <br> <br>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>About</label>
                        <input type="text" name="sabout" value="<?php echo $data["STUDENT_ABOUT"]; ?>" placeholder="Something about yourself........" class="form-control" disabled>
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
                <a href="update_profile.php"> <button type="button" class="btn btn-finish btn-fill btn-rose btn-wd">Update</button> </a>
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

</script>

<?php 
  include('footer.php');
  ob_flush();
?>      