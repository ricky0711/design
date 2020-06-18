<?php
   ob_start();
   include('header.php');
   $data=$_SESSION['Userdata'];
   $cid = $data["COMPANY_ID"];
   $cname= $data["COMPANY_NAME"];
   include('../Files/PDO/dbcon.php');
   $selection_list_id=$_GET["sid"];
   $_SESSION["selection_list_id"]=$_GET["sid"]; 
?>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                      <form action="#" method="Post">
                                        <div class="pull-right">
                                              <select class="selectpicker" id="ename" onchange="student_details()" name="event_name" data-size="7" data-style="btn btn-primary btn-round" title="Select Event">
                                                <option disabled selected>Select Event</option>
                                                <?php
                                                  $stmt1=$con->prepare("CALL GET_EVENT_BY_COMPANY(:cid);");
                                                  $stmt1->bindParam(":cid",$cid);  
                                                  $stmt1->execute();
                                                  $stmt1=$con->prepare("CALL GET_EVENT_BY_COMPANY(:cid);");
                                                  $stmt1->bindParam(":cid",$cid);  
                                                  $stmt1->execute();
                                                  while($eventdata = $stmt1->fetch(PDO::FETCH_ASSOC))
                                                  {
                                                ?>
                                                <option value="<?php echo $eventdata["EVENT_ID"]; ?>"><?php echo $eventdata["EVENT_NAME"]; ?></option>
                                            </div>
                                              <?php
                                                  } 
                                                ?>
                                          </select>
                                      </form>
                            </div>
                            <br><br>
                            <div id="test" class="mt-5"></div>
                        </div>
                    </div>
                </div>
        <script type="text/javascript">
          function student_details(){ 
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","student_bind.php?eid="+document.getElementById("ename").value,false);
            xmlhttp.send(null);
            document.getElementById("test").innerHTML=xmlhttp.responseText;
          } 
        </script>
        

<?php 
  include('footer.php');
?>      

<script type="text/javascript">
        function get_click(clicked){
            if ($('#'+clicked).is(":checked")) {
                var val=$('#'+clicked).val();
                //alert("data checked");
                var xmlhttp=new XMLHttpRequest();
                xmlhttp.open("GET","Ex_student_add.php?sid="+val,false);
                xmlhttp.send(null);
            } else {
                var val=$('#'+clicked).val();
                var xmlhttp=new XMLHttpRequest();
                xmlhttp.open("GET","delete_stud.php?sid="+val,false);
                xmlhttp.send(null);
            }
        }


         function ins_click(clicked){
            if ($('#'+clicked).is(":checked")) {
                var val=$('#'+clicked).val();
                //alert('checked');
                var xmlhttp=new XMLHttpRequest();
                xmlhttp.open("GET","insert_stud.php?sid="+val,false);
                xmlhttp.send(null);
                //alert(xmlhttp.responseText);
            } else {
                var val=$('#'+clicked).val();
                //alert("unchecked");
                var xmlhttp=new XMLHttpRequest();
                xmlhttp.open("GET","delete_stud.php?sid="+val,false);
                xmlhttp.send(null);
                //alert(xmlhttp.responseText);
            }
        }
</script>


