<?php 
  ob_start();
//   include('header.php');
session_start();
 
  $data=$_SESSION['Userdata'];
?>
<div class="content">
    <div class="row">
        <div class="card" style="width:1200px;">
            <div class="card-header">
                <h4 class="card-title">Past Test Details</h4>
                <p class="card-category">
                    Get information about test's that already happened
                </p>
            </div>
            <div class="card-body">
                    <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <?php
                        include('../../Files/PDO/dbcon.php');	
                        $stmt=$con->prepare("CALL VIEW_TEST_MARKS(:tid);");
                        $stmt->bindparam(":tid", $_GET['tid']);
                        $stmt->execute();
                    ?>
                <div class="material-datatables">
                    <table id="view_marks" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                            <tr>
                                <th>Enrollment Number</th>
                                <th>Name</th>
                                <th>Marks Obtained</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Enrollment Number</th>
                                <th>Name</th>
                                <th>Marks Obtained</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php while($data = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

                            <tr>
                                <td><?php echo $data['STUDENT_ENROLLMENT_NUMBER']; ?></td>
                                <td><?php echo $data['STUDENT_FIRST_NAME']." ".$data['STUDENT_LAST_NAME']; ?></td>
                                <td><?php echo $data['MARKS_OBTAINED']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php 
//   include('footer.php');
  ob_flush();
?>
<script src="../../Files/assets2/js/core/jquery.min.js"></script>
<script src="../../Files/assets2/js/plugins/jquery.dataTables.min.js"></script>
<script>
        
</script>