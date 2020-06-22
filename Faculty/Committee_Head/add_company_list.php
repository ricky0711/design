<?php 
  ob_start();
  //include('header.php');
  session_start();
  $data=$_SESSION['Userdata'];
?>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<?php
      include('../../Files/PDO/dbcon.php'); 
      $ilid = $_GET['ilid'];
      $_SESSION["broadcast_id"]=$ilid;
      $stmt=$con->prepare("CALL VIEW_COMPANY");
      $stmt->execute();
  ?>
            <div class="material-datatables">
                <table id="tblcmp_list" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Phone No.</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Phone No.</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                            <?php 
                                $cnt=0;
                                $c=0;
                                while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                $cid=$data['COMPANY_ID'];
                                $check = 0;
                                $stmt3=$con->prepare("CALL GET_BROADCAST_LIST_MEMBER(:ilid)");
                                $stmt3->bindParam(":ilid",$ilid);
                                $stmt3->execute();
                                $stmt3=$con->prepare("CALL GET_BROADCAST_LIST_MEMBER(:ilid)");
                                $stmt3->bindParam(":ilid",$ilid);
                                $stmt3->execute();
                                
                                while ($y=$stmt3->fetch(PDO::FETCH_ASSOC)) {
                                    $b_cid=$y['COMPANY_ID'];
                                    if ($b_cid==$cid) {
                                        $check = 1;
                                        break;
                                    }
                                }
                                if ($check==1) {
                                    ?>
                        <tr>
                            <td><input type="checkbox" id="company_check<?php echo $cid;?>" name="<?php echo $cid;?>" value="<?php echo $cid;?>" onClick="company_check_evnt(this.id)" checked></td>
                            <td><?php echo $data['COMPANY_NAME']; ?></td>
                            <td><?php echo $data['COMPANY_PHONE_NUMBER_1']; ?></td>
                            <td class="text-right"><a href="company_profile.php?cid=<?php echo $data['COMPANY_ID'] ?>" class="btn btn-link btn-info btn-just-icon " rel="tooltip" title="View Company Profile"><i class="material-icons">visibility</i></a>
                            <a href="remove_from_list.php?mid=<?php echo $data['BROADCAST_LIST_MEMBER_ID'] ?>&ilid=<?php echo $ilid ?>" class="btn btn-link btn-danger btn-just-icon " rel="tooltip" title="Deactivate Company"><i class="material-icons">person_remove</i></a></td>
                        </tr>
                        <?php
                                $cnt+=1; 
                            }else {
                                ?>
                        <tr>
                            <td><input type="checkbox" id="company_check<?php echo $cid;?>" name="<?php echo $cid;?>" value="<?php echo $cid;?>" onClick="company_check_evnt(this.id)"></td>
                            <td><?php echo $data['COMPANY_NAME']; ?></td>
                            <td><?php echo $data['COMPANY_PHONE_NUMBER_1']; ?></td>
                            <td class="text-right"><a href="company_profile.php?cid=<?php echo $data['COMPANY_ID'] ?>" class="btn btn-link btn-info btn-just-icon " rel="tooltip" title="View Company Profile"><i class="material-icons">visibility</i></a>
                            <a href="remove_from_list.php?mid=<?php echo $data['BROADCAST_LIST_MEMBER_ID'] ?>&ilid=<?php echo $ilid ?>" class="btn btn-link btn-danger btn-just-icon " rel="tooltip" title="Deactivate Company"><i class="material-icons">person_remove</i></a></td>
                        </tr>
                        <?php
                                $cnt+=1; 
                            }
                        }
                            ?>
                    </tbody>
                </table>
            </div>
            <?php print_r($_SESSION);?>
<?php 
//   include('footer.php');
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