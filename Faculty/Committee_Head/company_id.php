<?php
    include('..\..\Files\PDO\dbcon.php');
     $eve=$_GET['eve'];
     if ($eve == "PRE") {
         # code...
     }
     else if($eve == "IN"){
        $stmt=$con->prepare("CALL VIEW_COMPANY()");
        $stmt->execute();
        ?>
            <div class="input-group-prepend col-1 mr-0 pr-0">
                <span class="input-group-text">
                <i class="material-icons">person_pin</i>
                </span>
            </div>
        <?php
        echo "<select class='form-control pl-2 col-10 btn btn-secondary btn-round' name='cmp_id' id='cmp'>".
               "<option>Select Company</option>"; 
           while($data = $stmt->fetch(PDO::FETCH_ASSOC))
           {
               ?>
               <option value="<?php echo $data['COMPANY_ID'] ?>"><?php echo $data['COMPANY_NAME'] ?></option>
               <?php	
           }
        echo "</select>";	
     }
?>