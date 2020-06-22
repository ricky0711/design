<?php 
  ob_start();
  //include('header.php');
    session_start();
  $data=$_SESSION['Userdata'];
  $ilid=$_GET['ilid'];
?>

                <?php
                    include('../../Files/PDO/dbcon.php');	
                      $stmt=$con->prepare("CALL GET_BORADCAST_LIST(:ilid);");
                      $stmt->bindparam(":ilid", $ilid);
                      $stmt->execute();
                ?>
            <div class="material-datatables">
                <table id="tblbroadcast_list" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone No.</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Phone No.</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php while($data = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $data['COMPANY_NAME']; ?></td>
                            <td><?php echo $data['COMPANY_PHONE_NUMBER_1']; ?></td>
                            <td class="text-right"><a href="company_profile.php?cid=<?php echo $data['COMPANY_ID'] ?>" class="btn btn-link btn-info btn-just-icon " rel="tooltip" title="View Company Profile"><i class="material-icons">visibility</i></a>
                            <a href="remove_from_list.php?mid=<?php echo $data['BROADCAST_LIST_MEMBER_ID'] ?>&ilid=<?php echo $ilid ?>" class="btn btn-link btn-danger btn-just-icon " rel="tooltip" title="Deactivate Company"><i class="material-icons">person_remove</i></a></td>
                        </tr>
                        <?php } 
                        ?>
                    </tbody>
                </table>
            </div>
<?php 
  //include('footer.php');
  ob_flush();
?>      
<script type="text/javascript">
    function company_check_evnt(clicked) {
        if ($('#' + clicked).is(":checked")) {
            var val = $('#' + clicked).val();
            // alert("uncheck" + val);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "Ex_company_add.php?cid=" + val, false);
            xmlhttp.send(null);
        } else {
            var val = $('#' + clicked).val();
            // alert(val);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "delete_company.php?cid=" + val, false);
            xmlhttp.send(null);
        }
    }


    function company_uncheck_evnt(clicked) {
        if ($('#' + clicked).is(":checked")) {
            var val = $('#' + clicked).val();
            // alert("check" + val);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "insert_company.php?cid=" + val, false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);
        } else {
            var val = $('#' + clicked).val();
            // alert(val);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "delete_company.php?cid=" + val, false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);
        }
    }
    
    </script>