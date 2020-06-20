<?php
    include('../../Files/PDO/dbcon.php');
     $dept = $_GET['dept'];
     $degree = $_GET['degree'];
     $pyear = $_GET['pyear'];
     $_SESSION['dept']=$dept;
     $stmt=$con->prepare("CALL GET_STUDENTS_BY_BATCH(:dept,:degree,:pyear)");
     $stmt->bindParam(':dept',$dept);
     $stmt->bindParam(':degree',$degree);
     $stmt->bindParam(':pyear',$pyear);
     $stmt->execute();
     ?>
    <div class="toolbar">

    </div>
<div class="material-datatables">
    <table id="student_list" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
        <thead>
            <tr>
                <th>Enrollment Number</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>About</th>
                <th class="disabled-sorting">Actions</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Enrollment Number</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>About</th>
                <th class="disabled-sorting">Actions</th>
            </tr>
        </tfoot>
        <tbody>
            <?php while ($data=$stmt->fetch(PDO::FETCH_ASSOC)) {?>

            <tr>
                <td><?php echo $data['STUDENT_ENROLLMENT_NUMBER'] ?></td>
                <td class="text-nowrap"><?php echo $data['STUDENT_FIRST_NAME'] ?> <?php echo $data['STUDENT_LAST_NAME'] ?></td>
                <td><?php echo $data['STUDENT_EMAIL'] ?></td>
                <td><?php echo $data['STUDENT_PHONE_NUMBER'] ?></td>
                <td class="text-nowrap"><?php echo $data['STUDENT_ABOUT'] ?></td>
                <td><a href="student_profile.php?sid=<?php echo $data['STUDENT_ID']; ?>" class="btn btn-link btn-info btn-just-icon " rel="tooltip" title="View Student Profile"><i class="material-icons">visibility</i></a>
                <a href="end_student_process.php?sid=<?php echo $data['STUDENT_ID']; ?>" class="btn btn-link btn-danger btn-just-icon " rel="tooltip" title="Deactivate Student"><i class="material-icons">person_remove</i></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>