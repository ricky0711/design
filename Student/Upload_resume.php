<?php
   ob_start();
   include('header.php');
   $data=$_SESSION['Userdata'];
   $sid = $data["STUDENT_ID"];
   $sname= $data["STUDENT_FIRST_NAME"]." ".$data["STUDENT_LAST_NAME"];
   include('../Files/PDO/dbcon.php');
?>
<div class="content">
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                  <i class="material-icons">assignment</i>
                  </div>
                  <h4 class="card-title">Upload Your Resume</h4>
              </div>
              <div class="card-body">
                  <div class="toolbar">
                  <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="validatedCustomFile" name="resume_document" accept="application/pdf" required>
                      <label class="custom-file-label" for="validatedCustomFile">Choose file for Resume</label>
                      <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                    <div class="d-flex justify-content-center">
                      <button type="submit" class="btn btn-success btn-round" name="doc_save" ><i class="fa fa-upload"></i> Upload</button>
                    </div>
                </form>
              </div>
            <!-- end content-->
            </div>
            <!--  end card  -->
        </div>
      <!-- end col-md-12 -->
      </div>
      <!-- end row -->
  </div> 
</div>
<?php 
  include('footer.php');
?>      

<?php
    if(isset($_REQUEST['doc_save'])){
      $ran_num = mt_rand(100000,999999);
      $resume_document_name = $ran_num." ".$_FILES['resume_document']['name'];
      $resume_document_temp_name = $_FILES['resume_document']['tmp_name'];
      move_uploaded_file($resume_document_temp_name, "Resume_Document/$resume_document_name");
      $stmt=$con->prepare("CALL STUDENT_RESUME_UPLOAD(:studid,:resume_name)");
      $stmt->bindParam(":studid",$sid);     
      $stmt->bindParam(":resume_name",$resume_document_name);
      $stmt->execute(); 
      if($stmt == TRUE){
        echo "<script>alert('Resume Uploaded')</script>"; 
      }else{
         echo "<script>alert('Resume Not Uploaded')</script>"; 
      }
    }
 ?>
