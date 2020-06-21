<?php 
    include('../../Files/PDO/dbcon.php');	
    $dept=$_GET['dept'];
    $degree=$_GET['degree'];
    $stmt=$con->prepare("CALL VIEW_DOCUMENTS(:dept,:degree)");
    $stmt->bindparam(":dept", $dept);
    $stmt->bindparam(":degree", $degree);
    $stmt->execute();

?>
<div class="toolbar">

</div>
<div class="material-datatables">
    <table id="materials" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
        <thead>
            <tr>
                <th>Document Title</th>
                <th>Document Type</th>
                <th>Document Name</th>
                <th class="disabled-sorting">Actions</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Document Title</th>
                <th>Document Type</th>
                <th>Document Name</th>
                <th class="disabled-sorting text-right">Actions</th>
            </tr>
        </tfoot>
        <tbody>
            <?php while($x = $stmt->fetch(PDO::FETCH_ASSOC)) {

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
                <td class="text-right"><a href="MATERIAL/<?php echo $x['DOCUMENT_NAME']; ?>" download class="btn btn-link btn-info btn-just-icon " rel="tooltip" title="<?php echo $x['DOCUMENT_NAME']; ?>"><i class="material-icons">cloud_download</i></a></td>
                <td><a href="delete_material.php?did=<?php echo $x['DOCUMENT_ID']; ?>" class="btn btn-link btn-danger btn-just-icon " rel="tooltip" title="Delete Document"><i class="material-icons">delete_sweep</i></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

