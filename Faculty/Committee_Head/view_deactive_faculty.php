<?php 
  ob_start();
  include('header.php');
 
  $data=$_SESSION['Userdata'];
?>
<!--=================================
 Main content -->

 <!--=================================
wrapper -->

	<?php
	    include('../../Files/PDO/dbcon.php');	
        $stmt=$con->prepare("CALL VIEW_DEACTIVE_FACULTY();");
        $stmt->execute();
	?>

    <div class="content-wrapper header-info">
      <!-- widgets -->
      <div class="mb-30">
           <div class="card h-100">
           <div class="card-body h-100">
             <h4 class="card-title">Deactive Faculty</h4>
             <!-- action group -->
	          <ul class="list-unstyled d-xl-flex justify-content-center">
	            <li>
                     <table class="table text-dark table-responsive">
                      <tr>
                        <td></td>
                        <td></td>
                        <td class="text-dark font-weight-bold"><h4>Deactive Faculty</h4></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr class="font-weight-bold">
                        <td></td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Phone Number</td>
                        <td>Gender</td>
                        <td>About</td>
                        <td>Profile</td>
                      </tr>
                      <?php while($data = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                      <tr>
                        <td>
                          <div style="height: 35px;width: 35px;border-radius: 50%;">
                            <img src="../img/<?php echo $data['FACULTY_PROFILE_PIC'] ?>" alt="avatar" style="height: 100%;width: 100%;">
                          </div>
                        </td>
                        <td><?php echo $data['FACULTY_FIRST_NAME']; ?> <?php echo $data['FACULTY_LAST_NAME']; ?></td>
                        <td class="text-nowrap"><?php echo $data['FACULTY_EMAIL']; ?></td>
                        <td><?php echo $data['FACULTY_PHONE_NUMBER']; ?></td>
                        <td><?php echo $data['FACULTY_GENDER']; ?></td>
                        <td><?php echo $data['FACULTY_ABOUT']; ?></td>
                        <td><a href="restore_faculty.php?fid=<?php echo $data['FACULTY_ID'] ?>" title="">
                          <button type="button" class="btn btn-outline-info"><i class="fas fa-trash-restore"></i></button>
                        </a></td>
                      </tr>
                     <?php } ?>
                     </table>
              </li>
	          </ul>
	         </div>
          </div>
        </div>
<?php 
  include('footer.php');
  ob_flush();
?>      
