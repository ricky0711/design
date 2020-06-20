<?php 
  include('../../Files/PDO/dbcon.php');
  $pattern = $_GET['pattern'];
    if ($pattern == 'S') {
        ?>
                  <div class="media">
                    <div class="media-body mb-2">
                    	<select name="dept" class="form-control p-1 pl-3" id="dept_placed_report" onchange="course_placed_report()" autofocus>
                            <option>Select Department</option>
                            <option value="BMIIT">BMIIT</option>
    		                    <option value="SRIMCA">SRIMCA</option>
    							          <option value="CGPIT">CGPIT</option>
    					        </select>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-body mb-2">
                    	<select name="degree" class="form-control p-1 pl-3" id="degree_placed_report" onchange="passing_year_placed_report()">
                            <option>Select Degree</option>
                        </select>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-body mb-2">
                    	<select name="pyear" class="form-control p-1 pl-3" id="pyear_placed_report" onchange="report_generate_placed_report()">
                            <option>Select Passing Year</option>
                  		</select>
                    </div>
                  </div>
        <?php
    }
    elseif($pattern == 'C'){
        // include('../../Files/PDO/dbcon.php');

        $stmt=$con->prepare("CALL GET_ALL_BATCH_YEAR();");
        $stmt->execute();
        ?>
                  <div class="media">
                    <div class="media-body mb-2">
                    	<select name="year" class="form-control p-1 pl-3" id="year_placed_report" onchange="company_report_placed_report()">
                            <option>Select Passing Year</option>
                            <?php 
                                while ($data=$stmt->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <option value="<?php echo $data['BATCH_PASSING_YEAR']?>"><?php echo $data['BATCH_PASSING_YEAR']?></option>
                            <?php 
                                }                            
                            ?>
                  		</select>
                    </div>
                  </div>
        <?php
    }
?>