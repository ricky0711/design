<?php
   ob_start();
   include('header.php');
   $data=$_SESSION['Userdata'];
   $cid = $data["COMPANY_ID"];
   $cname= $data["COMPANY_NAME"];
   include('../Files/PDO/dbcon.php');
   $selection_stud_list_id=$_GET["sid"];
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
                  <h4 class="card-title">Upload Documents</h4>
              </div>
              <div class="card-body">
                  <div class="toolbar">
                  <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="validatedCustomFile" name="offer_letter" accept="application/pdf" required>
                      <label class="custom-file-label" for="validatedCustomFile">Choose file for Offer letter</label>
                      <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="validatedCustomFile" name="bond" accept="application/pdf" required>
                      <label class="custom-file-label" for="validatedCustomFile">Choose file for Bond</label>
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
    // echo "<br>"; 
    // print_r($_FILES);
    // echo "<br>";
    if(isset($_REQUEST['doc_save'])){
      $ran_num = mt_rand(100000,999999);
      $offer_letter_name = $ran_num." ".$_FILES['offer_letter']['name'];
      $offer_letter_temp_name = $_FILES['offer_letter']['tmp_name'];
      $bond_name = $ran_num." ".$_FILES['bond']['name'];
      $bond_temp_name = $_FILES['bond']['tmp_name']; 
      //echo "<script>alert('$ran_num')</script>";
      $doc_type_ol="OL";
      $doc_type_b="BD";
      // $stmt1=$con->prepare("CALL GET_COMPANY_DOCUMENT(:studid)");
      // $stmt1->bindParam(":studid",$selection_stud_list_id);   
      // $stmt1->execute();   
      move_uploaded_file($offer_letter_temp_name, "Document_offer_letter/$offer_letter_name");
      move_uploaded_file($bond_temp_name, "Document_bond/$bond_name");
      $stmt=$con->prepare("CALL INSERT_UPDATE_COMPANY_DOCUMENT(:studid,:company_id,:doc_type,:doc_name)");
      $stmt->bindParam(":studid",$selection_stud_list_id);     
      $stmt->bindParam(":company_id",$cid);
      $stmt->bindParam(":doc_type",$doc_type_ol);     
      $stmt->bindParam(":doc_name",$offer_letter_name);          
      $stmt->execute(); 
      $stmt=$con->prepare("CALL INSERT_UPDATE_COMPANY_DOCUMENT(:studid,:company_id,:doc_type,:doc_name)");
      $stmt->bindParam(":studid",$selection_stud_list_id);     
      $stmt->bindParam(":company_id",$cid);
      $stmt->bindParam(":doc_type",$doc_type_b);     
      $stmt->bindParam(":doc_name",$bond_name);          
      $stmt->execute(); 
      if($stmt == TRUE){
        $_SESSION["message_document"]="Document Save";
        header("location: training.php");
      }else{
         echo "<script>alert('Document Not Save')</script>"; 
      }
    }
 ?>
