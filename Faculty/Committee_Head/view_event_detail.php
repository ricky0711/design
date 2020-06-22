<?php 
  ob_start();
  //include('header.php');
  session_start();
  $data=$_SESSION['Userdata'];
  include('../../Files/PDO/dbcon.php');	
  $eid = $_GET['eid'];
  $stmt=$con->prepare("CALL VIEW_EVENT_DETAILS(:eid);");
  $stmt->bindparam(":eid",$eid);
  $stmt->execute();
  $event=$stmt->fetch(PDO::FETCH_ASSOC);
//   print_r($event);
//   print_r($stmt->errorinfo());
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="card">
        <div class="card-title">
          <div class="card-body">
            <form action="#" method="POST">
              <div class="media">
                <div class="media-body mb-2">
                    <h4 class="font-weight-bold"><label class="pull-right" style="font-size:14px;"><?php echo $event['EVENT_DATE']; ?><br><?php echo $event['EVENT_TIME']; ?></label><?php echo $event['EVENT_NAME']; ?><br></h4>
                    <p><h6 class="font-weight-light">Venue: <?php echo $event['EVENT_VENUE']; ?></h6><h6 class="font-weight-light">Description: <?php echo $event['EVENT_DESCRIPTION']; ?></h6></p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

              
<?php 
  //include('footer.php');
  ob_flush();
?>