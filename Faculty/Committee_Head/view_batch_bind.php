<?php 
    include('../../Files/PDO/dbcon.php');	
    $dept=$_GET['dept'];
    $degree=$_GET['degree'];
    $stmt=$con->prepare("CALL VIEW_BATCH(:dept, :degree);");
    $stmt->bindparam(":dept", $dept);
    $stmt->bindparam(":degree", $degree);
    $stmt->execute();

?>
<div class="toolbar">

</div>
<div class="material-datatables">
<table id="batch_list" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
    <thead>
        <tr>
            <th>Passing Year</th>
            <th>Semester</th>
            <th>Students</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Passing Year</th>
            <th>Semester</th>
            <th>Students</th>
        </tr>
    </tfoot>
    <tbody>
        <?php while($x = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $stmt2=$con->prepare("CALL COUNT_BATCH_STUDENTS(:bid);");
            $stmt2->bindparam(":bid", $x['BATCH_ID']);
            $stmt2->execute();
            $stmt2=$con->prepare("CALL COUNT_BATCH_STUDENTS(:bid);");
            $stmt2->bindparam(":bid", $x['BATCH_ID']);
            $stmt2->execute();
            $a=$stmt2->fetch(PDO::FETCH_ASSOC);
            ?>
        <tr>
            <td><?php echo $x["BATCH_PASSING_YEAR"]; ?></td>
            <td><?php echo $x["BATCH_SEMESTER"]; ?></td>
            <td><?php echo $a["STUDENTS"]; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>