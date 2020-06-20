<?php 
    include 'header.php';
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="ml-auto mr-auto">
            <div class="page-categories">
            <h3 class="title text-center">Faculty related activities Details</h3>
            <br />
            <ul class="nav nav-pills nav-pills-success nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#link7" role="tablist">
                    <i class="material-icons">people_alt</i>Committee Member List 
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                    <i class="material-icons">people_outline</i> Faculty List
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link9" role="tablist">
                    <i class="material-icons">desktop_access_disabled</i> Deactivated Faculty
                </a>
                </li>
            </ul>
            <div class="tab-content tab-space tab-subcategories">
                <div class="tab-pane active" id="link7">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">Description about product</h4>
                    <p class="card-category">
                        More information here
                    </p>
                    </div>
                    <div class="card-body">
                                <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                </div>
                                <?php
                                    include('../../Files/PDO/dbcon.php');	
                                    $stmt=$con->prepare("CALL VIEW_COMMITTEE_MEMBER();");
                                    $stmt->execute();
                                ?>
                            <div class="material-datatables">
                                <table id="com_list" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Phone Number</td>
                                        <td>Gender</td>
                                        <td>About</td>
                                        <th class="disabled-sorting pull-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Phone Number</td>
                                        <td>Gender</td>
                                        <td>About</td>
                                        <th class="disabled-sorting pull-right">Actions</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php while($data = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                        <td><?php echo $data['FACULTY_FIRST_NAME']; ?> <?php echo $data['FACULTY_LAST_NAME']; ?></td>
                                        <td class="text-nowrap"><?php echo $data['FACULTY_EMAIL']; ?></td>
                                        <td><?php echo $data['FACULTY_PHONE_NUMBER']; ?></td>
                                        <td><?php echo $data['FACULTY_GENDER']; ?></td>
                                        <td><?php echo $data['FACULTY_ABOUT']; ?></td>
                                        <td><a href="view_faculty_profile.php?fid=<?php echo $data['FACULTY_ID'] ?>" class="btn btn-link btn-info btn-just-icon " rel="tooltip" title="View Committee Member Profile"><i class="material-icons">visibility</i></a>
                                            <a href="deactivate_profile.php?fid=<?php echo $data['FACULTY_ID'] ?>" class="btn btn-link btn-danger btn-just-icon " rel="tooltip" title="Deactivate Committee Member"><i class="material-icons">person_remove</i></a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
                </div>
                <div class="tab-pane" id="link8">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">Description about product</h4>
                    <p class="card-category">
                        More information here
                    </p>
                    </div>
                    <div class="card-body">
                                <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                </div>
                                <?php 
                                    $stmt=$con->prepare("CALL VIEW_FACULTY();");
                                    $stmt->execute();
                                    $stmt=$con->prepare("CALL VIEW_FACULTY();");
                                    $stmt->execute();
                                ?>
                            <div class="material-datatables">
                                <table id="fac_list" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Phone Number</td>
                                        <td>Gender</td>
                                        <td>About</td>
                                        <th class="disabled-sorting">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Phone Number</td>
                                        <td>Gender</td>
                                        <td>About</td>
                                        <th class="disabled-sorting pull-right">Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php while($data = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                        <td><?php echo $data['FACULTY_FIRST_NAME']; ?> <?php echo $data['FACULTY_LAST_NAME']; ?></td>
                                        <td class="text-nowrap"><?php echo $data['FACULTY_EMAIL']; ?></td>
                                        <td><?php echo $data['FACULTY_PHONE_NUMBER']; ?></td>
                                        <td><?php echo $data['FACULTY_GENDER']; ?></td>
                                        <td><?php echo $data['FACULTY_ABOUT']; ?></td>
                                        <td><a href="view_faculty_profile.php?fid=<?php echo $data['FACULTY_ID'] ?>" class="btn btn-link btn-info btn-just-icon " rel="tooltip" title="View Faculty Profile"><i class="material-icons">visibility</i></a>
                                            <a href="deactivate_profile.php?fid=<?php echo $data['FACULTY_ID'] ?>" class="btn btn-link btn-danger btn-just-icon " rel="tooltip" title="Deactivate Faculty"><i class="material-icons">person_remove</i></a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
                </div>
                <div class="tab-pane " id="link9">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">Resume Details</h4>
                    <p class="card-category">
                        More information here
                    </p>
                    </div>
                    <div class="card-body">
                                <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                </div>
                                <?php
                                    $stmt=$con->prepare("CALL VIEW_DEACTIVE_FACULTY();");
                                    $stmt->execute();
                                    $stmt=$con->prepare("CALL VIEW_DEACTIVE_FACULTY();");
                                    $stmt->execute();
                                ?>
                            <div class="material-datatables">
                                <table id="deactivated_fac" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Phone Number</td>
                                        <td>Gender</td>
                                        <td>About</td>
                                        <th class="disabled-sorting">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Phone Number</td>
                                        <td>Gender</td>
                                        <td>About</td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php while($data = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                        <td><?php echo $data['FACULTY_FIRST_NAME']; ?> <?php echo $data['FACULTY_LAST_NAME']; ?></td>
                                        <td class="text-nowrap"><?php echo $data['FACULTY_EMAIL']; ?></td>
                                        <td><?php echo $data['FACULTY_PHONE_NUMBER']; ?></td>
                                        <td><?php echo $data['FACULTY_GENDER']; ?></td>
                                        <td><?php echo $data['FACULTY_ABOUT']; ?></td>
                                        <td><a href="restore_faculty.php?fid=<?php echo $data['FACULTY_ID'] ?>" class="btn btn-link btn-success btn-just-icon " rel="tooltip" title="Restore Faculty"><i class="material-icons">sync</i></a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
<?php 

include 'footer.php';
ob_flush();
?>

