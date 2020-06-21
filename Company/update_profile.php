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
     <script>   
    function isInputNumber(evt) {

        var ch = String.fromCharCode(evt.which);

        if (!(/[0-9]/.test(ch))) {
            evt.preventDefault();
        }

    }

    function isInputChar(evt) {

        var ch = String.fromCharCode(evt.which);

        if (!(/[A-Za-z]/.test(ch))) {
            evt.preventDefault();
        }

    }

    function isInputCharSpace(evt) {

        var ch = String.fromCharCode(evt.which);

        if (!(/^[a-zA-Z ]*$/.test(ch))) {
            evt.preventDefault();
        }

    }
    </script>
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
                      Update Your Profile
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
                                    <input type="file" name="company_logo" id="wizard-picture">
                                </div>
                                <h6 class="description">Choose Logo</h6>
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
                                    <input type="text" maxlength="30" class="form-control" id="exampleInput1" name="cname" value="<?php echo $data["COMPANY_NAME"]; ?>" required>
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
                                    <input type="text"  id="mobile1" onkeyup="check1(); return false;" onkeypress="isInputNumber(event)" maxlength="10" class="form-control" id="exampleInput11" name="cnum" value="<?php echo $data["COMPANY_PHONE_NUMBER_1"]; ?>" required>
                                    <span id="message1"></span>
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
                                    <input type="email" pattern=(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])
                                      maxlength="255"
                                     class="form-control" id="exampleemalil" name="cemail" value="<?php echo $data["COMPANY_EMAIL"]; ?>" required>
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
                                    <input type="text" minlength="4" maxlength="4" onkeypress="isInputNumber(event)" min="1950" max="<?php echo date('Y'); ?>" oninvalid="Year Must be between 1950-<?php echo date('Y'); ?>" class="form-control" name="creg" value="<?php echo $data["COMPANY_REGISTERED_YEAR"]; ?>" required>
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
                                                        <input type="text" onkeypress="isInputCharSpace(event)" maxlength="50" class="form-control" id="exampleInput1" name="hrname" value="<?php echo $data["COMPANY_HR_NAME"]; ?>"  required>
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
                                                        <input type="text" id="mobile" onkeyup="check(); return false;" maxlength="10" onkeypress="isInputNumber(event)" class="form-control" id="exampleInput11" name="hrnum" value="<?php echo $data["COMPANY_PHONE_NUMBER_2"]; ?>" required>
                                                        <span id="message"></span>
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
                                                            <input type="email" pattern=(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])
                                                              maxlength="255"
                                                             class="form-control" id="exampleemalil" name="hremail" value="<?php echo $data["COMPANY_HR_EMAIL"]; ?>" required>
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
                                                        <input type="url" maxlength="100" class="form-control" id="exampleInput1" name="cweb" value="<?php echo $data["COMPANY_WEBSITE"]; ?>"  required>
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
                              <input type="text" name="caddress" value="<?php echo $data["COMPANY_ADDRESS"]; ?>" class="form-control">
                            </div>
                          </div> <br> <br> <br>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>Company About</label>
                              <input type="text" name="cabout" value="<?php echo $data["COMPANY_ABOUT"]; ?>" class="form-control">
                            </div>
                          </div> <br> <br> <br>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Maximum Package</label>
                              <input type="text" name="cmax" id="maxval" minlength="5" onkeyup="packagecheck(); return false;" onkeypress="isInputNumber(event)" value="<?php echo $data["COMPANY_MAXIMUM_PACKAGE"]; ?>" class="form-control">
                              <span id="packagemessage"></span>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Minimum Package</label>
                              <input type="text" name="cmin" id="minval" minlength="5" onkeyup="packagecheck(); return false;" onkeypress="isInputNumber(event)" value="<?php echo $data["COMPANY_MINIMUM_PACKAGE"]; ?>" class="form-control">
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
        

        function check()
    {
        // alert("ff");
        var pass1 = document.getElementById('mobile');
        var message = document.getElementById('message');
        var badColor = "#84BA3F";
        if(mobile.value.length!=10){
            // alert("ffrr");
            message.style.color = badColor;
            message.innerHTML = "required 10 digits, match requested format!"
        }    
        if(mobile.value.length=='10'){
            message.style.color = badColor;
            message.innerHTML = ""
        }
    }


    function check1()
    {
        var pass1 = document.getElementById('mobile1');
        var message = document.getElementById('message1');
        var badColor = "#84BA3F";
        if(mobile1.value.length!=10){
            message.style.color = badColor;
            message.innerHTML = "required 10 digits, match requested format!"
        }    
        if(mobile1.value.length=='10'){
            message.style.color = badColor;
            message.innerHTML = ""
        }
    }

    
    function packagecheck()
    {
        //alert("This");
        var min = document.getElementById('minval');
        var max = document.getElementById('maxval');
        var message = document.getElementById('packagemessage');
        var badColor = "#84BA3F";
        if(parseInt(min.value) > parseInt(max.value)){
            message.style.color = badColor;
            message.innerHTML = "Min Package must be less than Max Package";
        }else{
            message.style.color = badColor;
            message.innerHTML = "";
        }    

        if(parseInt(min.value) < 1){
            // alert("This");
            message.style.color = badColor;
            message.innerHTML = "Min package could not be zero.";
        }

    }
      function check()
    {
        // alert("ff");
        var pass1 = document.getElementById('mobile');
        var message = document.getElementById('message');
        var badColor = "#84BA3F";
        if(mobile.value.length!=10){
            // alert("ffrr");
            message.style.color = badColor;
            message.innerHTML = "required 10 digits, match requested format!"
        }    
        if(mobile.value.length=='10'){
            message.style.color = badColor;
            message.innerHTML = ""
        }
    }


    function check1()
    {
        var pass1 = document.getElementById('mobile1');
        var message = document.getElementById('message1');
        var badColor = "#84BA3F";
        if(mobile1.value.length!=10){
            message.style.color = badColor;
            message.innerHTML = "required 10 digits, match requested format!"
        }    
        if(mobile1.value.length=='10'){
            message.style.color = badColor;
            message.innerHTML = ""
        }
    }

    
    function packagecheck()
    {
        //alert("This");
        var min = document.getElementById('minval');
        var max = document.getElementById('maxval');
        var message = document.getElementById('packagemessage');
        var badColor = "#84BA3F";
        if(parseInt(min.value) > parseInt(max.value)){
            message.style.color = badColor;
            message.innerHTML = "Min Package must be less than Max Package";
        }else{
            message.style.color = badColor;
            message.innerHTML = "";
        }    

        if(parseInt(min.value) < 1){
            // alert("This");
            message.style.color = badColor;
            message.innerHTML = "Min package could not be zero.";
        }

    }
    </script>
    
<?php 

  if(isset($_REQUEST['Update']))
  {
    $cid=$data["COMPANY_ID"]; 
    $cname=$_REQUEST["cname"];
    $cnum=$_REQUEST["cnum"];
    $creg=$_REQUEST["creg"];
    $caddress=$_REQUEST["caddress"];
    $cemail=$_REQUEST["cemail"];
    $cweb=$_REQUEST["cweb"];
    $cabout=$_REQUEST["cabout"];
    $cemp=$_REQUEST["cemp"];
    $cmax=$_REQUEST["cmax"];
    $cmin=$_REQUEST["cmin"];
    $hrname=$_REQUEST["hrname"];
    $hrnum=$_REQUEST["hrnum"];
    $hremail=$_REQUEST["hremail"];
    $fdate=strtotime($creg);
    $creg=date('Y-m-d',$fdate); 
    $ppic="This";
    $imgname=$data['COMPANY_LOGO'];



    $company_email = $data["COMPANY_EMAIL"];
    $company_pnum = $data["COMPANY_PHONE_NUMBER_1"];


    $stmt=$con->prepare("CALL CHECK_USER(:email)");
    $stmt->bindParam(':email',$cemail);
    $stmt->execute();
    $rowsdata = $stmt->fetch(PDO::FETCH_ASSOC);
    $email_user="";
    if(isset($rowsdata)){
    $email_user = $rowsdata['LOGIN_USER_EMAIL'];
    }
    

    $stmt1=$con->prepare("CALL CHECK_USER_PHONE(:pnum)");
    $stmt1->bindParam(':pnum',$cnum);
    $stmt1->execute();
    $stmt1=$con->prepare("CALL CHECK_USER_PHONE(:pnum)");
    $stmt1->bindParam(':pnum',$cnum);
    $stmt1->execute();
    $rowsdata1 = $stmt1->fetch(PDO::FETCH_ASSOC);
    $phone_user="";
    if(isset($rowsdata1)){
    $phone_user = $rowsdata1['LOGIN_USER_PHONE_NUMBER'];
    }
  


        //  header('Refresh:0');

        //  $stmt5=$con->prepare("CALL GET_COMPANY(:cid);");
        //  $stmt5->bindparam(":cid",$cid);
        //  $stmt5->execute();
        //  $stmt5=$con->prepare("CALL GET_COMPANY(:cid);");
        //  $stmt5->bindparam(":cid",$cid);
        //  $stmt5->execute();
        //  $companydata = $stmt5->fetch(PDO::FETCH_ASSOC);
        //  $_SESSION['Userdata'] = $companydata;



    if($email_user == $cemail && $company_email != $cemail){
      echo "<script>alert('Email Exist')</script>";      
    }elseif($phone_user == $cnum && $company_pnum != $cnum){
      echo "<script>alert('Phone Number Exist')</script>";      
    }else{
      $stmt=$con->prepare("CALL UPDATE_COMPANY_PROFILE(:cid,:cname,:creg,:caddress,:cweb,:cabout,:cemp,:cmax,:cmin,:hrname,:hremail,:cemail,:cnum,:hrnum)");
      $stmt->bindParam(":cid",$cid);
      $stmt->bindParam(":cname",$cname);
      $stmt->bindParam(":creg",$creg);
      $stmt->bindParam(":caddress",$caddress);
      $stmt->bindParam(":cweb",$cweb);
      $stmt->bindParam(":cabout",$cabout);
      $stmt->bindParam(":cemp",$cemp);
      $stmt->bindParam(":cmax",$cmax);
      $stmt->bindParam(":cmin",$cmin);
      $stmt->bindParam(":hrname",$hrname);
      $stmt->bindParam(":hremail",$hremail);
      $stmt->bindParam(":cemail",$cemail);
      $stmt->bindParam(":cnum",$cnum);
      $stmt->bindParam(":hrnum",$hrnum);
      $stmt->execute();

      if (!($_FILES['company_logo']['size'] == 0 )) {
    $imgname = $_FILES["company_logo"]["name"];
    $tmpname = $_FILES["company_logo"]["tmp_name"];
      
    move_uploaded_file($tmpname, "com_logo/$imgname");

    $stmt5=$con->prepare("CALL UPDATE_COMPANY_LOGO(:cid,:company_logo_nam)");
    $stmt5->bindParam(":cid",$cid);
    $stmt5->bindParam(":company_logo_nam",$imgname);
    $stmt5->execute();
    $stmt5=$con->prepare("CALL UPDATE_COMPANY_LOGO(:cid,:company_logo_nam)");
    $stmt5->bindParam(":cid",$cid);
    $stmt5->bindParam(":company_logo_nam",$imgname);
    $stmt5->execute();
    header('Refresh:0');
      
      $stmt5=$con->prepare("CALL GET_COMPANY(:cid);");
      $stmt5->bindparam(":cid",$cid);
      $stmt5->execute();
      $stmt5=$con->prepare("CALL GET_COMPANY(:cid);");
      $stmt5->bindparam(":cid",$cid);
      $stmt5->execute();
      $companydata = $stmt5->fetch(PDO::FETCH_ASSOC);
      $_SESSION['Userdata'] = $companydata;
      }
    }
  }
 ?>
<?php 
  include('footer.php');
  ob_flush();
?>      