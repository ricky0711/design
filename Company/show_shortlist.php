<?php
  ob_start();
  include('header.php');
  include('../Files/PDO/dbcon.php');
  $data=$_SESSION['Userdata'];
  $cid = $data["COMPANY_ID"];
  $cname= $data["COMPANY_NAME"];
?>
    
<script>
	function isInputNumber(evt) {

        var ch = String.fromCharCode(evt.which);

        if (!(/[0-9]/.test(ch))) {
            evt.preventDefault();
        }

    }
</script>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                 
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <button class="btn btn-success btn-round pull-right btn-sm mt-2" data-toggle="modal" data-target="#noticeModal3">
                      <i class="material-icons mr-1">add_circle_outline</i>New
                    </button>
                  <h4 class="card-title">ShortList</h4> 
                </div>
                <div class="card-body">
                  <div class="toolbar">
                  <?php
                    if(isset($_SESSION["errorforstipend"])){
                  ?>
                    <h4 class="card-title"><?php echo $_SESSION["errorforstipend"]; ?></h4>
                  <?php 
                  }else{
                    ?>
                    <h4 class="card-title"></h4>
                  <?php 
                  }
                 ?>
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Year</th>

                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Year</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </tfoot>
                      <tbody>
                          <?php 
                            $stmt=$con->prepare("CALL VIEW_SELECTION_LIST(:cid);");
                            $stmt->bindParam(":cid",$cid);  
                            $stmt->execute();
                            $a=1;
                            while($data  = $stmt->fetch(PDO::FETCH_ASSOC))
                            {
                          ?>
                        <tr>
                          <td><?php echo $a; ?></td>
                          <td><?php echo $data["SELECTION_LIST_NAME"]; ?></td>
                          <td><?php echo $data["SELECTION_LIST_YEAR"]; ?></td>
                          <td class="text-right">
                              <button type="button" value="<?php echo $data["SELECTION_LIST_ID"];?>" class="btn btn-link btn-info btn-just-icon viewBtn" rel="tooltip" title="View ShortList" data-toggle="modal" data-target="#view_Shortlist"><i class="material-icons">visibility</i></button>
                              <button type="button" value="<?php echo $data["SELECTION_LIST_ID"];?>" class="btn btn-link btn-warning btn-just-icon StipendBtn" rel="tooltip" title="Enter Stipend" data-toggle="modal" data-target="#upStipend"><i class="fa fa-inr"></i></button>
                              <a href="add_student_selection_list.php?sid=<?php echo $data["SELECTION_LIST_ID"]; ?>" class="btn btn-link btn-success btn-just-icon " rel="tooltip" title="Add Student to Selection List"><i class="material-icons">library_add_check</i></a>
                              <a href="delete_shortlist.php?sid=<?php echo $data["SELECTION_LIST_ID"]; ?>" class="btn btn-link btn-danger btn-just-icon " rel="tooltip" title="Delete ShortList"><i class="material-icons">delete_sweep</i></a>
                              <a href="send_shortlist.php?sid=<?php echo $data["SELECTION_LIST_ID"]; ?>" class="btn btn-link btn-primary btn-just-icon " rel="tooltip" title="Send ShortList"><i class="material-icons">send</i></a>                          
                            </td>
                        </tr>
                        <?php $a++; ?>
                          <?php } 
                          ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
          </div>
          <!-- end row -->
        </div>
        <div class="modal fade" id="view_Shortlist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" >
              <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">View ShortList</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                  <i class="material-icons">close</i>
                </button>
              </div>
              <div class="modal-body">
                  <div id="shortlist_data">           
                  </div>
              </div>
              <div class="modal-footer justify-content-center">
              </div>
            </div>
          </div>
        </div>
        <form action="#" method="post">
          <div class="modal fade" id="upStipend" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" >
                <div class="modal-header">
                  <h5 class="modal-title" id="myModalLabel">Update Stipend</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">close</i>
                  </button>
                </div>
                <div class="modal-body">
                  <div id="stipend_update">           
                  </div>        
                </div>
                <div class="modal-footer justify-content-center">
                    
                </div>
              </div>
            </div>
          </div>
        </form>
        <form action="#" method="post">
          <div class="modal fade" id="noticeModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" >
                <div class="modal-header">
                  <h5 class="modal-title" id="myModalLabel">Create New ShortList</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">close</i>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                      <label for="title" class="bmd-label-floating">Shortlist Title</label>
                      <input type="text" name="shortlistname" class="form-control">
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                  <input type="submit" name="new_shortlist" class="btn btn-success btn-round" value="Create">
                </div>
              </div>
            </div>
          </div> 
        </form> 
      </div>   
                <!-- end content-->

      <?php 
        include 'footer.php'
     ?>
     <?php 
      if(isset($_REQUEST["new_shortlist"])){
      $shname = $_REQUEST["shortlistname"];

      $stmt1=$con->prepare("CALL GET_SELECTIONLIST_NAME(:cid);");
      $stmt1->bindParam(":cid",$cid);
      $stmt1->execute();
      $stmt1=$con->prepare("CALL GET_SELECTIONLIST_NAME(:cid);");
      $stmt1->bindParam(":cid",$cid);
      $stmt1->execute();
      $a=0;

      // echo "<script>alert('$cid')</script>";
      while($data = $stmt1->fetch(PDO::FETCH_ASSOC))
      {
        $slname = $data["SELECTION_LIST_NAME"];
        if($slname == $shname){
          $a=1;
          echo "<script>alert('This Name Selection List Created')</script>";
          break;
        }
      }  
        if($a == 0){
        //echo "<script>alert('This is Created')</script>";
        $stmt=$con->prepare("CALL INSERT_SELECTION_LIST(:cid,:sname);");
        $stmt->bindParam(":cid",$cid);
        $stmt->bindParam(":sname",$shname);  
        $stmt->execute();
        if($stmt == TRUE){
          header('Location: show_shortlist.php');
        }else{
          echo "<script>alert('Selection List Not Created')</script>";
        } 
      }
     } 
    ob_flush();
 ?>
     <?php 
	if(isset($_REQUEST["submit"])){
		// $stipend=$_REQUEST["stipend_student"];
		$acc='P';
    $a=0;
    $count = $_SESSION["count"];
		for ($i = 0; $i < $count; $i++) {
      // echo "<script>alert('$count'  )</script>";  
			$stipend=$_REQUEST["stipend_student$i"];
			$student_id=$_REQUEST["student_id$i"];
			//echo "<script>alert('$student_id')</script>";
			if($a==0){
				$stmt3=$con->prepare("CALL INSERT_UPDATE_TRAINING(:studid,:com_id,:stipend,:accepted)");
	    		$stmt3->bindParam(":studid	",$student_id);
	    		$stmt3->bindParam(":com_id",$cid);
	    		$stmt3->bindParam(":stipend",$stipend);
	    		$stmt3->bindParam(":accepted",$acc);
	    		$stmt3->execute();
	    		$a=1;
    		}
    		$stmt3=$con->prepare("CALL INSERT_UPDATE_TRAINING(:studid,:com_id,:stipend,:accepted)");
    		$stmt3->bindParam(":studid",$student_id);
    		$stmt3->bindParam(":com_id",$cid);
    		$stmt3->bindParam(":stipend",$stipend);
    		$stmt3->bindParam(":accepted",$acc);
    		$stmt3->execute();
		}

		if($stmt3 == TRUE){
	   	echo "<script>alert('Stipend Save Or Updated')</script>";
		}else{
			echo "<script>alert('Save Not Stipend')</script>";
		}


	}
 ?>
 