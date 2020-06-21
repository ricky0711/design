<?php 
  ob_start();
  include('header.php');
 
  $data=$_SESSION['Userdata'];
  $ilid=$_GET['ilid'];
?>
<div class="card">
    <div class="card-header">
    <h4 class="card-title">All the available Companies</h4>
    <p class="card-category">
        Here you can find all the available companines
    </p>
    </div>
    <div class="card-body">
                <div class="toolbar">
                <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <?php
                    //include('../../Files/PDO/dbcon.php');	
                      $stmt=$con->prepare("CALL GET_BORADCAST_LIST(:ilid);");
                      $stmt->bindparam(":ilid", $ilid);
                      $stmt->execute();
                ?>
            <div class="material-datatables">
                <table id="broadcast_list" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone No.</th>
                            <th>Contact Person</th>
                            <th>CP Phone No.</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone No.</th>
                            <th>Contact Person</th>
                            <th>CP Phone No.</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php while($data = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $data['COMPANY_NAME']; ?></td>
                            <td><?php echo $data['COMPANY_EMAIL']; ?></td>
                            <td><?php echo $data['COMPANY_PHONE_NUMBER_1']; ?></td>
                            <td><?php echo $data['COMPANY_HR_NAME']; ?></td>
                            <td><?php echo $data['COMPANY_PHONE_NUMBER_2']; ?></td>
                            <td class="text-right"><a href="company_profile.php?cid=<?php echo $data['COMPANY_ID'] ?>" class="btn btn-link btn-info btn-just-icon " rel="tooltip" title="View Company Profile"><i class="material-icons">visibility</i></a>
                            <a href="remove_from_list.php?mid=<?php echo $data['BROADCAST_LIST_MEMBER_ID'] ?>&ilid=<?php echo $ilid ?>" class="btn btn-link btn-danger btn-just-icon " rel="tooltip" title="Deactivate Company"><i class="material-icons">person_remove</i></a></td>
                        </tr>
                        <?php } 
                        ?>
                    </tbody>
                </table>
            </div>
    </div>
</div>
<script>
$(document).on("click" , "button.viewBroadcast" , function(){
        var id=$(this).val();
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET","view_test_marks.php?tid="+id,false);
        xmlhttp.send(null);
        document.getElementById("View_broadcast").innerHTML=xmlhttp.responseText;
        $('#view_marks').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",
            }
        });
        var table = $('#view_marks').DataTable();
    });
</script>
<?php 
  include('footer.php');
  ob_flush();
?>      
