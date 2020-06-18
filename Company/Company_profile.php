<?php 
  ob_start();
  include('header.php');
  $data=$_SESSION['Userdata'];
?>
            <?php
                $count=0;
                include('../Files/PDO/dbcon.php');
                $id=$_SESSION['lid'];
                $type=$_SESSION['lut'];
                $stmt=$con->prepare("CALL GET_COMPANY(:cid);");
                $stmt->bindparam(":cid",$id);
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
      <div class="content">
        <div class="container-fluid">
          <div class="col-md-8 col-12 mr-auto ml-auto">
            <!--      Wizard container        -->
            <div class="wizard-container">
              <div class="card card-wizard" data-color="rose" id="wizardProfile">
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
                          Account
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
                                <img src="com_logo/<?php echo $data['COMPANY_LOGO']; ?>" class="picture-src" id="wizardPicturePreview" title="" />
                                    <input type="file" name="company_logo" id="wizard-picture" disabled>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group form-control-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="material-icons">face</i>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Company Name</label>
                                    <input type="text" class="form-control" id="exampleInput1" name="cname" value="<?php echo $data["COMPANY_NAME"]; ?>" disabled >
                                </div>
                                </div>
                                <div class="input-group form-control-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="material-icons">record_voice_over</i>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput11" class="bmd-label-floating">Company Phone Number</label>
                                    <input type="text" class="form-control" id="exampleInput11" name="cnum" value="<?php echo $data["COMPANY_PHONE_NUMBER_1"]; ?>" disabled>
                                </div>
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
                                    <input type="email" class="form-control" id="exampleemalil" name="cemail" value="<?php echo $data["COMPANY_EMAIL"]; ?>" disabled>
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
                                    <label for="exampleInput1" class="bmd-label-floating">Registration Year</label>
                                    <input type="text" class="form-control" name="creg" value="<?php echo $data["COMPANY_REGISTERED_YEAR"]; ?>" id="exampleemalil" name="email" disabled>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="account">
                            <h5 class="info-text"> HR's Profile</h5>
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="input-group form-control-lg">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                        <i class="material-icons mb-2">face</i>
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInput1" class="bmd-label-floating">HR Name</label>
                                                        <input type="text" class="form-control" id="exampleInput1" name="hrname" value="<?php echo $data["COMPANY_HR_NAME"]; ?>"  disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-group form-control-lg">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                        <i class="material-icons mb-2">record_voice_over</i>
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInput11" class="bmd-label-floating">HR Phone Number</label>
                                                        <input type="text" class="form-control" id="exampleInput11" name="hrnum" value="<?php echo $data["COMPANY_PHONE_NUMBER_2"]; ?>" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                    <div class="input-group form-control-lg">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                            <i class="material-icons mb-2">email</i>
                                                            </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInput1" class="bmd-label-floating">Email</label>
                                                            <input type="email" class="form-control" id="exampleemalil" name="hremail" value="<?php echo $data["COMPANY_HR_EMAIL"]; ?>" disabled>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="input-group form-control-lg">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                        <i class="material-icons mb-2">language</i>
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInput1" class="bmd-label-floating">Company Website</label>
                                                        <input type="text" class="form-control" id="exampleInput1" name="cweb" value="<?php echo $data["COMPANY_WEBSITE"]; ?>"  disabled>
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
                              <input type="text" name="caddress" value="<?php echo $data["COMPANY_ADDRESS"]; ?>" class="form-control" disabled>
                            </div>
                          </div> <br> <br> <br>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>Company About</label>
                              <input type="text" name="cabout" value="<?php echo $data["COMPANY_ABOUT"]; ?>" class="form-control" disabled>
                            </div>
                          </div> <br> <br> <br>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Maximum Package</label>
                              <input type="text" name="cmax" value="<?php echo $data["COMPANY_MAXIMUM_PACKAGE"]; ?>" class="form-control" disabled>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Minimum Package</label>
                              <input type="text" name="cmin" value="<?php echo $data["COMPANY_MINIMUM_PACKAGE"]; ?>" class="form-control" disabled>
                            </div>
                          </div>
                          <!-- <div class="col-sm-4">
                            <div class="form-group">
                              <label>No. of Employess</label>
                              <input type="text" name="cemp" value="<?php echo $data["COMPANY_No_OF_EMPLOYESS"]; ?>" class="form-control">
                            </div>
                          </div> -->
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
<!-- ---------------- -->
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
              /*var img_data=document.getElementById('profileImage').value;
              img_data=img_data.split('\\');
              var xmlhttp=new XMLHttpRequest();
              xmlhttp.open("GET","update_dp.php?a="+img_data[0]+"&b="+img_data[1]+"&c="+img_data[2],false);
              xmlhttp.send(null);
              */document.getElementById('vikTest').innerHTML=xmlhttp.responseText;
            
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
  include('footer.php');
  ob_flush();
?>      