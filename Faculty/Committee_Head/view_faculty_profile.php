<?php 
  ob_start();
  $fid = $_GET["fid"];
  include('header.php');
  $datahead=$_SESSION['Userdata'];
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
              $stmt->bindparam(":fid",$fid);
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
                                    <input type="file" class="form-control" name="faculty_pic" placeholder="Company Logo" name="profileImage" id="profileImage" onchange="displayImage(this)" accept="image/*" style="display: none;" value="<?php echo $date['FACULTY_PROFILE_PIC'] ?>" disabled>
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
                                      <input type="text" class="form-control" name="fname" class="form-control" placeholder="First Name" value="<?php echo $data["FACULTY_FIRST_NAME"]; ?>" disabled >
                                  </div>
                                  <div class="form-group col-5">
                                      <label for="exampleInput1" class="bmd-label-floating">Last Name</label>
                                      <input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php echo $data["FACULTY_LAST_NAME"]; ?>" disabled>
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
                                        <input type="email" name="email" placeholder="Student Email" class="form-control" value="<?php echo $data["FACULTY_EMAIL"]; ?>" disabled>
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
                                        <input type="text" name="num" class="form-control" placeholder="Phone number" value="<?php echo $data["FACULTY_PHONE_NUMBER"]; ?>" disabled>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-sm-10 mt-2">
                                  <div class="input-group form-control-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i class="material-icons">calendar</i>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="about" class="bmd-label-floating">About</label>
                                        <input type="text" name="about" class="form-control" placeholder="Phone number" value="<?php echo $data["FACULTY_ABOUT"]; ?>" disabled>
                                    </div>
                                  </div>
                              </div>
                              <div class="media">
                                <div class="media-body mb-2">
                                    <?php 
                                        if ($data['FACULTY_ROLE'] == 'FC') {
                                            ?>
                                                <select name="frole" onchange="update_role()" id="frole" class="form-control">
                                                    <option value="FC" selected>Faculty</option>
                                                    <option value="CM">Committee Member</option>
                                                    <option value="CH">Committee Head</option>
                                                </select>
                                            <?php
                                        }elseif ($data['FACULTY_ROLE'] == 'CM') {
                                            ?>
                                                <select name="frole" onchange="update_role()" id="frole" class="form-control">
                                                    <option value="FC">Faculty</option>
                                                    <option value="CM" selected>Committee Member</option>
                                                    <option value="CH">Committee Head</option>
                                                </select>
                                            <?php
                                        }
                                    ?>
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
<script>
    function update_role() {
        var frole = document.getElementById("frole").value;
        if (frole == 'CH') {
            var mypath="update_committee_head_role.php?fid=<?php echo $fid; ?>";
            window.location.href = mypath;
        }
        else{
            var mypath="update_faculty_role.php?fid=<?php echo $fid; ?>&frole="+frole;
            window.location.href = mypath;
        }
    }
</script>      
<?php 
  include('footer.php');
  ob_flush();
?>      
<script>
    function update_role() {
        var frole = document.getElementById("frole").value;
        if (frole == 'CH') {
            var mypath="update_committee_head_role.php?fid=<?php echo $fid; ?>";
            window.location.href = mypath;
        }
        else{
            var mypath="update_faculty_role.php?fid=<?php echo $fid; ?>&frole="+frole;
            window.location.href = mypath;
        }
    }
</script>