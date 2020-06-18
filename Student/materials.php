<?php 
  ob_start();
  include('header.php');
  $userdata=$_SESSION['Userdata'];
  $bid=$userdata['STUDENT_BATCH_ID'];
    include('../Files/PDO/dbcon.php');	
    $stmt=$con->prepare("CALL GET_BATCH_INFO(:bid)");
    $stmt->bindparam(":bid", $bid);
    $stmt->execute();
    $batch=$stmt->fetch(PDO::FETCH_ASSOC);
    // print_r($batch);
    $dept=$batch['BATCH_DEPARTMENT'];
    $degree=$batch['BATCH_DEGREE'];
    $stmt2=$con->prepare("CALL VIEW_DOCUMENTS(:dept,:degree)");
    $stmt2->bindparam(":dept", $dept);
    $stmt2->bindparam(":degree", $degree);
    $stmt2->execute();
    $stmt2=$con->prepare("CALL VIEW_DOCUMENTS(:dept,:degree)");
    $stmt2->bindparam(":dept", $dept);
    $stmt2->bindparam(":degree", $degree);
    $stmt2->execute();
    // print_r($stmt2->errorinfo());
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
                <h4 class="card-title">Materials</h4>
            </div>
            <div class="card-body">
                <div class="toolbar">
                
                <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <div class="material-datatables">
                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                    <tr>
                        <th>Document Title</th>
                        <th>Document Type</th>
                        <th>Document</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Document Title</th>
                        <th>Document Type</th>
                        <th>Document</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        <?php while($x = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                            if($x["DOCUMENT_TYPE"] == "PL"){
                                $doc_type = "Practical List";
                            }else if($x["DOCUMENT_TYPE"] == "RL"){
                                $doc_type = "Referance Material";  
                            }else if($x["DOCUMENT_TYPE"] == "SP"){
                                $doc_type = "Sample Paper";  
                            }
                        ?>
                    
                    <tr>
                        <td><?php echo $x["DOCUMENT_TITLE"]; ?></td>
                        <td><?php echo $doc_type; ?></td>
                        <td><a href="../Faculty/Committee_Head/MATERIAL/<?php echo $x['DOCUMENT_NAME']; ?>" download><button class="btn btn-outline-warning"><i class="fa fa-download"></i>Download</button></a></td>
                    </tr>
                    <?php } ?>
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
</div> 
    <?php 
  include('footer.php');
  ob_flush();
?>