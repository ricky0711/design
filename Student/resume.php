<?php 
    include 'header.php';
    $data=$_SESSION['Userdata'];
     error_reporting(0);
    ?>
    <style>
    .zoom {
    transition: transform .2s;
    width: 45%;
    margin: 0 auto;
    }

    .zoom:hover {
    -ms-transform: scale(1.1); /* IE 9 */
    -webkit-transform: scale(1.1); /* Safari 3-8 */
    transform: scale(1.1); 
    }
</style>
<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
            <div class="page-categories">
            <h3 class="title text-center">Resume Details</h3>
            <br />
            <ul class="nav nav-pills nav-pills-success nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#link7" role="tablist">
                    <i class="material-icons">info</i> Academic Details
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                    <i class="material-icons">location_on</i> Resume Details
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link9" role="tablist">
                    <i class="material-icons">gavel</i> Show Resume Details
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#link10" role="tablist">
                    <i class="material-icons">help_outline</i> Build Resume
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
                        <form action="#" method="Post">
                    
                            <h4 class="card-title">10TH</h4>
                                    <select name="10thBoard" data-style="btn btn-success btn-round" class="selectpicker" title="Select Board">
                                        <option disabled>-- Select Board --</option>
                                        <option value="AISSCE">AISSCE</option>
                                        <option value="Andaman &amp; Nicobar State Board">Andaman &amp; Nicobar State Board</option>
                                        <option value="Andhra Pradesh State Board">Andhra Pradesh State Board</option>
                                        <option value="Arunachal Pradesh State Board">Arunachal Pradesh State Board</option>
                                        <option value="Assam State Board">Assam State Board</option>
                                        <option value="Bihar State Board">Bihar State Board</option>
                                        <option value="CBSE">CBSE</option>
                                        <option value="Chandigarh State Board">Chandigarh State Board</option>
                                        <option value="Chhattisgarh State Board">Chhattisgarh State Board</option>
                                        <option value="Dadar &amp; Nagar Haveli State Board">Dadar &amp; Nagar Haveli State Board</option>
                                        <option value="Daman and Diu State Board">Daman and Diu State Board</option>
                                        <option value="Delhi State Board">Delhi State Board</option>
                                        <option value="Goa State Board">Goa State Board</option>
                                        <option value="Gujarat State Board">Gujarat State Board</option>
                                        <option value="Haryana State Board">Haryana State Board</option>
                                        <option value="Himachal Pradesh State Board">Himachal Pradesh State Board</option>
                                        <option value="HSCE">HSCE</option>
                                        <option value="ICSE">ICSE</option>
                                        <option value="Jammu and Kashmir State Board">Jammu and Kashmir State Board</option>
                                        <option value="Jharkhand State Board">Jharkhand State Board</option>
                                        <option value="Karnataka State Board">Karnataka State Board</option>
                                        <option value="Kerala State Board">Kerala State Board</option>
                                        <option value="Lakshadweep State Board">Lakshadweep State Board</option>
                                        <option value="Madhya Pradesh State Board">Madhya Pradesh State Board</option>
                                        <option value="Maharashtra State Board">Maharashtra State Board</option>
                                        <option value="Manipur State Board">Manipur State Board</option>
                                        <option value="Meghalaya State Board">Meghalaya State Board</option>
                                        <option value="Mizoram State Board">Mizoram State Board</option>
                                        <option value="Nagaland State Board">Nagaland State Board</option>
                                        <option value="Orissa State Board">Orissa State Board</option>
                                        <option value="Pondicherry State Board">Pondicherry State Board</option>
                                        <option value="Punjab State Board">Punjab State Board</option>
                                        <option value="Rajasthan State Board">Rajasthan State Board</option>
                                        <option value="Sikkim State Board">Sikkim State Board</option>
                                        <option value="SSCE">SSCE</option>
                                        <option value="Tamil Nadu State Board">Tamil Nadu State Board</option>
                                        <option value="Telangana State Board">Telangana State Board</option>
                                        <option value="Tripura State Board">Tripura State Board</option>
                                        <option value="Uttar Pradesh State Board">Uttar Pradesh State Board</option>
                                        <option value="Uttaranchal State Board">Uttaranchal State Board</option>
                                        <option value="West Bengal State Board">West Bengal State Board</option>
                                        <option value="Others">Others</option>
                                    </select>
                            <div class="form-group">
                                <label for="10per" class="bmd-label-floating">10th Percentage</label>
                                <input type="text" name="10thper" class="form-control mt-4" required>
                            </div>
                            <div class="form-group">
                                <label for="10per" class="bmd-label-floating">10th School</label>
                                <input type="text" name="10thschool" class="form-control " required>
                            </div>
                            <div>
                                <hr style="border-top: 1px solid #495057">
                            </div>

                        <?php 
                            include('../Files/PDO/dbcon.php');
                            $bid = $data["STUDENT_BATCH_ID"];
                            $stmt=$con->prepare("CALL GET_BATCH_INFO(:bid);");
                            $stmt->bindParam(":bid",$bid);  
                            $stmt->execute();
                            $datauser = $stmt->fetch(PDO::FETCH_ASSOC);
                            //$sem = $datauser["BATCH_SEMESTER"];  
                            $degree = $datauser["BATCH_DEGREE"];
                            $d2d = $datauser["BATCH_D2D"];
                            $type = $datauser["BATCH_TYPE"];

                            if($d2d == "1"){
                        ?>
                                    <div class="row m-3">
                                        <label class="col-2 text-light font-weight-bold text-nowrap">D2D:</label>
                                        <input onchange="y()" id="d2d1" class="col-1 mt-1" type="radio" name="de2dep" class="form-control" value="Y">
                                        <label class="col-2">YES</label>
                                        <input onchange="n()" id="d2d2" class="col-1 mt-1" type="radio" name="de2dep" class="form-control" value="N">
                                        <label class="col-2">NO</label>
                                    </div>
                                    <div id="d2dtext"></div>
                        <?php 
                        }
                        elseif($d2d == "0"){
                        ?>
                                <h4 class="card-title">12TH</h4>
                                    <select name='12thBoard' data-style="btn btn-success btn-round" class="selectpicker mt-2" required>
                                            <option value=''>-- Select Board --</option>
                                            <option value='AISSCE'>AISSCE</option>
                                            <option value='Andaman &amp; Nicobar State Board'>Andaman &amp; Nicobar State Board</option>
                                            <option value='Andhra Pradesh State Board'>Andhra Pradesh State Board</option>
                                            <option value='Arunachal Pradesh State Board'>Arunachal Pradesh State Board</option>
                                            <option value='Assam State Board'>Assam State Board</option>
                                            <option value='Bihar State Board'>Bihar State Board</option>
                                            <option value='CBSE'>CBSE</option>
                                            <option value='Chandigarh State Board'>Chandigarh State Board</option>
                                            <option value='Chhattisgarh State Board'>Chhattisgarh State Board</option>
                                            <option value='Dadar &amp; Nagar Haveli State Board'>Dadar &amp; Nagar Haveli State Board</option>
                                            <option value='Daman and Diu State Board'>Daman and Diu State Board</option>
                                            <option value='Delhi State Board'>Delhi State Board</option>
                                            <option value='Goa State Board'>Goa State Board</option>
                                            <option value='Gujarat State Board'>Gujarat State Board</option>
                                            <option value='Haryana State Board'>Haryana State Board</option>
                                            <option value='Himachal Pradesh State Board'>Himachal Pradesh State Board</option>
                                            <option value='HSCE'>HSCE</option>
                                            <option value='ICSE'>ICSE</option>
                                            <option value='Jammu and Kashmir State Board'>Jammu and Kashmir State Board</option>
                                            <option value='Jharkhand State Board'>Jharkhand State Board</option>
                                            <option value='Karnataka State Board'>Karnataka State Board</option>
                                            <option value='Kerala State Board'>Kerala State Board</option>
                                            <option value='Lakshadweep State Board'>Lakshadweep State Board</option>
                                            <option value='Madhya Pradesh State Board'>Madhya Pradesh State Board</option>
                                            <option value='Maharashtra State Board'>Maharashtra State Board</option>
                                            <option value='Manipur State Board'>Manipur State Board</option>
                                            <option value='Meghalaya State Board'>Meghalaya State Board</option>
                                            <option value='Mizoram State Board'>Mizoram State Board</option>
                                            <option value='Nagaland State Board'>Nagaland State Board</option>
                                            <option value='Orissa State Board'>Orissa State Board</option>
                                            <option value='Pondicherry State Board'>Pondicherry State Board</option>
                                            <option value='Punjab State Board'>Punjab State Board</option>
                                            <option value='Rajasthan State Board'>Rajasthan State Board</option>
                                            <option value='Sikkim State Board'>Sikkim State Board</option>
                                            <option value='SSCE'>SSCE</option>
                                            <option value='Tamil Nadu State Board'>Tamil Nadu State Board</option>
                                            <option value='Telangana State Board'>Telangana State Board</option>
                                            <option value='Tripura State Board'>Tripura State Board</option>
                                            <option value='Uttar Pradesh State Board'>Uttar Pradesh State Board</option>
                                            <option value='Uttaranchal State Board'>Uttaranchal State Board</option>
                                            <option value='West Bengal State Board'>West Bengal State Board</option>
                                            <option value='Others'>Others</option>
                                    </select>
                                    <select name='12thspecialization' id='12sp' data-style="btn btn-success btn-round" class="selectpicker mt-2" onchange='others1()' required>
                                        <option value=''>-- Select Specialization--</option>
                                        <option value='COMMERCE'>COMMERCE</option>
                                        <option value='SCIENCE'>SCIENCE</option>
                                        <option value='ARTS'>ARTS</option>
                                        <option value='COMPUTER SCIENCE'>COMPUTER SCIENCE</option>
                                        <option value='OTHERS'>OTHERS</option>
                                    </select>
                                    <div id='sptext'></div>
                                    <div class="form-group">
                                        <label for="12thper" class="bmd-label-floating">12th Percentage</label>
                                        <input type="text" name="12thper" class="form-control mt-4" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="12thpassschool" class="bmd-label-floating">12th School</label>
                                        <input type="text" name="12thpassschool" class="form-control " required>
                                    </div>
                                    <div>
                                        <hr style="border-top: 1px solid #495057">
                                    </div>
                        <?php
                        if($type == "BA"){
                        ?>     
                                <h4 class="card-title">BACHELOR</h4>
                                    <select name='bunamema' data-style="btn btn-success btn-round" class="selectpicker mt-2" required>
                                    <?php include('university.php'); ?>
                                    </select>
                                    <select onchange="othersforbach1()" id="bdgree" name="bdgree" data-style="btn btn-success btn-round" class="selectpicker mt-2" required>
                                        <option>--Select Degree--</option>
                                        <option value="BCA">BCA</option>
                                        <option value="B.Sc(IT)">B.Sc(IT)</option>
                                        <option value="B.Sc(CS)">B.Sc(CS)</option>
                                        <option value="B.Sc(CA)">B.Sc(CA)</option>
                                        <option value="OTHERS">Other</option>
                                    </select>   
                                    <div class="form-group">
                                        <label for="bach1semba" class="bmd-label-floating">Sem 1 Marks</label>
                                        <input type="text" name="bach1semba" class="form-control mt-4" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="bach2semba" class="bmd-label-floating">Sem 2 Marks</label>
                                        <input type="text" name="bach2semba" class="form-control " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="bach3semba" class="bmd-label-floating">Sem 3 Marks</label>
                                        <input type="text" name="bach3semba" class="form-control " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="bach4semba" class="bmd-label-floating">Sem 4 Marks</label>
                                        <input type="text" name="bach4semba" class="form-control " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="bach5semba" class="bmd-label-floating">Sem 5 Marks</label>
                                        <input type="text" name="bach5semba" class="form-control " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="bach6semba" class="bmd-label-floating">Sem 6 Marks</label>
                                        <input type="text" name="bach6semba" class="form-control " required>
                                    </div>  
                                    
                                    <div id="bsptext"></div>
                                    <div class="form-group">
                                        <label for="degreesp" class="bmd-label-floating">Degree Specialization</label>
                                        <input type="text" name="degreesp" class="form-control " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="bmainstitute" class="bmd-label-floating">Institute / College Name</label>
                                        <input type="text" name="bmainstitute" class="form-control " required>
                                    </div>
                                    <div>
                                        <hr style="border-top: 1px solid #495057">
                                    </div>
                        <?php
                        }
                        elseif($type == "MA"){
                        ?>        
                                <h4 class="card-title">BACHELOR</h4>
                                <div>
                                    <hr style="border-top: 1px solid #495057">
                                </div>
                                    <div class="form-group">
                                        <label for="b1semma" class="bmd-label-floating">Sem 1 Marks</label>
                                        <input type="text" name="b1semma" class="form-control mt-4" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="b2semma" class="bmd-label-floating">Sem 2 Marks</label>
                                        <input type="text" name="b2semma" class="form-control " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="b3semma" class="bmd-label-floating">Sem 3 Marks</label>
                                        <input type="text" name="b3semma" class="form-control " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="b4semma" class="bmd-label-floating">Sem 4 Marks</label>
                                        <input type="text" name="b4semma" class="form-control " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="b5semma" class="bmd-label-floating">Sem 5 Marks</label>
                                        <input type="text" name="b5semma" class="form-control " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="b6semma" class="bmd-label-floating">Sem 6 Marks</label>
                                        <input type="text" name="b6semma" class="form-control " required>
                                    </div>
                                <select name='bunamema' data-style="btn btn-success btn-round" class="selectpicker mt-2" required>
                                    <?php include('university.php'); ?>
                                </select>
                                <select onchange="othersforbach1()" id="bdgree" name="bdgree" data-style="btn btn-success btn-round" class="selectpicker mt-2" required>
                                    <option>--Select Degree--</option>
                                    <option value="BCA">BCA</option>
                                    <option value="B.Sc(IT)">B.Sc(IT)</option>
                                    <option value="B.Sc(CS)">B.Sc(CS)</option>
                                    <option value="B.Sc(CA)">B.Sc(CA)</option>
                                    <option value="OTHERS">Other</option>
                                </select>
                                <div id="bsptext"></div>
                                    <div class="form-group">
                                        <label for="degreesp" class="bmd-label-floating">Degree Specialization</label>
                                        <input type="text" name="degreesp" class="form-control " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="bmainstitute" class="bmd-label-floating">Institute / College Name</label>
                                        <input type="text" name="bmainstitute" class="form-control " required>
                                    </div>
                                <div>
                                    <hr style="border-top: 1px solid #495057">
                                </div>
                                <h4 class="card-title">MASTER</h4>
                                    <div class="form-group">
                                        <label for="m1sem" class="bmd-label-floating">Sem 1 Marks</label>
                                        <input type="text" name="m1sem" class="form-control mt-4" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="m2sem" class="bmd-label-floating">Sem 2 Marks</label>
                                        <input type="text" name="m2sem" class="form-control " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="m3sem" class="bmd-label-floating">Sem 3 Marks</label>
                                        <input type="text" name="m3sem" class="form-control " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="m4sem" class="bmd-label-floating">Sem 4 Marks</label>
                                        <input type="text" name="m4sem" class="form-control " required>
                                    </div>    
                                <select name='masteruname' data-style="btn btn-success btn-round" class="selectpicker mt-2" required>
                                    <?php include('university.php'); ?>
                                </select>
                                <select onchange="othersformaster1()" id="masterdegree" name="masterdegree" data-style="btn btn-success btn-round" class="selectpicker mt-2" required>
                                    <option>--Select Degree--</option>
                                    <option value="MCA">MCA</option>
                                    <option value="M.Sc(IT)">M.Sc(IT)</option>
                                    <option value="M.Sc(CS)">M.Sc(CS)</option>
                                    <option value="M.Sc(CA)">M.Sc(CA)</option>
                                    <option value="OTHERS">Other</option>
                                </select>
                                    <div id="mastertext"></div>
                                    <div class="form-group">
                                        <label for="mastersp" class="bmd-label-floating">Degree Specialization</label>
                                        <input type="text" name="mastersp" class="form-control " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="masterins" class="bmd-label-floating">Institute / College Name</label>
                                        <input type="text" name="masterins" class="form-control " required>
                                    </div>
                                    <div>
                                        <hr style="border-top: 1px solid #495057">
                                    </div>
                                <?php 
                                }
                                else if($type == "IBM"){
                                ?>
                                    <h4 class="card-title">INTEGRATED</h4>
                                    <div>
                                    <hr style="border-top: 1px solid #495057">
                                    </div>
                                        <div class="form-group">
                                            <label for="i1sem" class="bmd-label-floating">Sem 1 Marks</label>
                                            <input type="text" name="i1sem" class="form-control mt-4" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="i2sem" class="bmd-label-floating">Sem 2 Marks</label>
                                            <input type="text" name="i2sem" class="form-control " required>
                                        </div>
                                        <div class="form-group">
                                            <label for="i3sem" class="bmd-label-floating">Sem 3 Marks</label>
                                            <input type="text" name="i3sem" class="form-control " required>
                                        </div>
                                        <div class="form-group">
                                            <label for="i4sem" class="bmd-label-floating">Sem 4 Marks</label>
                                            <input type="text" name="i4sem" class="form-control " required>
                                        </div>
                                        <div class="form-group">
                                            <label for="i5sem" class="bmd-label-floating">Sem 5 Marks</label>
                                            <input type="text" name="i5sem" class="form-control " required>
                                        </div>
                                        <div class="form-group">
                                            <label for="i6sem" class="bmd-label-floating">Sem 6 Marks</label>
                                            <input type="text" name="i6sem" class="form-control " required>
                                        </div>
                                        <div class="form-group">
                                            <label for="i7sem" class="bmd-label-floating">Sem 7 Marks</label>
                                            <input type="text" name="i7sem" class="form-control " required>
                                        </div>
                                        <div class="form-group">
                                            <label for="i8sem" class="bmd-label-floating">Sem 8 Marks</label>
                                            <input type="text" name="i8sem" class="form-control " required>
                                        </div>
                                        <div class="form-group">
                                            <label for="i9sem" class="bmd-label-floating">Sem 9 Marks</label>
                                            <input type="text" name="i9sem" class="form-control " required>
                                        </div>
                                        <div class="form-group">
                                            <label for="i10sem" class="bmd-label-floating">Sem 10 Marks</label>
                                            <input type="text" name="i10sem" class="form-control " required>
                                        </div>   
                                <select name='masteruname' data-style="btn btn-success btn-round" class="selectpicker mt-2" required>
                                    <?php include('university.php'); ?>
                                </select>
                                <select onchange="othersformaster1()" id="masterdegree" name="masterdegree" data-style="btn btn-success btn-round" class="selectpicker mt-2" required>
                                    <option>--Select Degree--</option>
                                    <option value="IMCA">IMCA</option>
                                    <option value="Int. M.Sc(IT)">Int. M.Sc(IT)</option>
                                    <option value="Int. M.Sc(CS)">Int. M.Sc(CS)</option>
                                    <option value="Int. M.Sc(CA)">Int. M.Sc(CA)</option>
                                    <option value="OTHERS">Other</option>
                                </select>
                                    <div id="mastertext"></div>
                                    <div class="form-group">
                                        <label for="mastersp" class="bmd-label-floating">Degree Specialization</label>
                                        <input type="text" name="mastersp" class="form-control " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="masterins" class="bmd-label-floating">Institute / College Name</label>
                                        <input type="text" name="masterins" class="form-control " required>
                                    </div>
                                    <div>
                                    <hr style="border-top: 1px solid #495057">
                                    </div>
                                <?php  
                                }  
                            }
                        ?> 
                            <div class="d-flex justify-content-center">
                                <input type="submit" name="submit"  class="btn btn-success btn-round" value="submit">
                            </div>     
                        </form>
                    </div>
                </div>
                </div>
                <div class="tab-pane " id="link8">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">Resume Details</h4>
                    <p class="card-category">
                        More information here
                    </p>
                    </div>
                    <div class="card-body">
                        <form action="#" method="Post">

                                <h5 class="mt-4">Technical Skills<button class="btn btn-outline-success btn-round pull-right" type="button" onclick="addskill()"><i class="fa fa-plus"></i></button></h5>
                                <div id="technical_skills_0"></div>
                                <hr class="mt-5" style="border-top: 1px solid #495057">
                            
                            
                                <h5 class="mb-3">Personal Skills<button class="btn btn-outline-success btn-round pull-right" type="button" onclick="addpersonalskill()"><i class="fa fa-plus"></i></button></h5>
                                <div id="personal_skills_0"></div>
                                <hr class="mt-5" style="border-top: 1px solid #495057">
                            
                            
                                <h5 class="mb-3">Languages Known<button class="btn btn-outline-success btn-round pull-right" type="button" onclick="addlanguage()"><i class="fa fa-plus"></i></button></h5>
                                <div id="language_0"></div>
                                <hr class="mt-5" style="border-top: 1px solid #495057">
                            
                                <h5 class="mb-3">Projects<button class="btn btn-outline-success btn-round pull-right" type="button" onclick="addproject()"><i class="fa fa-plus"></i></button></h5>
                                <p style="font-size: 12px;" class="ml-3 mb-2">Enter Project Name, Description, Period(X years OR Y months)</p>
                                <div id="project_0"></div>
                                <hr class="mt-5" style="border-top: 1px solid #495057">
                            
                                <h5 class="mb-3">Achivements<button class="btn btn-outline-success btn-round pull-right" type="button" onclick="addachivement()"><i class="fa fa-plus"></i></button></h5>
                                <p style="font-size: 12px;" class="ml-3 mb-2">Enter Achivement, Description,Period(X years OR Y months)</p>
                                <div id="achivement_0"></div>
                                <hr class="mt-5" style="border-top: 1px solid #495057">
                            
                                <h5 class="mb-3">Carrier Objective</h5>
                                <textarea class="form-control" name="carrier_objective" placeholder="How do you wanna build your carrier" rows="6"></textarea>
                                <div id="achivement_0"></div>
                                <hr class="mt-5" style="border-top: 1px solid #495057">
                            
                                <div class="d-flex justify-content-center">
                                <input type="submit" name="submit2"  class="btn btn-lg btn-outline-success text-uppercase" value="submit">
                                </div>
                            
                        </form>
                    </div>
                </div>
                </div>
                <div class="tab-pane" id="link9">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">View Resume Details</h4>
                    <p class="card-category">
                        More information here
                    </p>
                    </div>
                    <div class="card-body">
                    <?php 
                        // include('../Files/PDO/dbcon.php');
                        $bid = $data["STUDENT_BATCH_ID"];
                        $sid = $data["STUDENT_ID"];
                        $stmt=$con->prepare("CALL GET_BATCH_INFO(:bid);");
                        $stmt->bindParam(":bid",$bid);  
                        $stmt->execute();
                        $datauser = $stmt->fetch(PDO::FETCH_ASSOC);
                        $degree = $datauser["BATCH_DEGREE"];
                        $d2d = $datauser["BATCH_D2D"];
                        $type = $datauser["BATCH_TYPE"]; 
                        //echo "<script>alert('$type,$d2d,$degree')</script>"; 
                        $stmt1=$con->prepare("CALL GET_STUDENT_DIPACADEMIC_12TH(:sid);");
                        $stmt1->bindParam(":sid",$sid);  
                        $stmt1->execute();
                        $stmt1=$con->prepare("CALL GET_STUDENT_DIPACADEMIC_12TH(:sid);");
                        $stmt1->bindParam(":sid",$sid);  
                        $stmt1->execute();
                        //print_r($stmt1->errorinfo());
                        $data5 = $stmt1->fetch(PDO::FETCH_ASSOC);
                        if(isset($data5["_DETAILS_DIPLOMA_ID"])){
                            $dipid = $data5["_DETAILS_DIPLOMA_ID"];
                        }
                        if (isset($data5["_DETAILSACADEMIC_12TH_ID"])) {
                            $twid = $data5["_DETAILSACADEMIC_12TH_ID"];
                        }
                
                        $stmt5=$con->prepare("CALL GET_STUDENT_RESUME(:sid)");
                        $stmt5->bindParam(":sid",$sid);
                        $stmt5=$con->prepare("CALL GET_STUDENT_RESUME(:sid)");
                        $stmt5->bindParam(":sid",$sid);
                        $stmt5->execute();
                        // print_r($stmt5->errorinfo());
                        $dataresume = $stmt5->fetch(PDO::FETCH_ASSOC);
                        // print_r($dataresume);

                        if($d2d == 1){
                                $stmt5=$con->prepare("CALL CHECK_RESUME_DETAILS(:sid);");
                                $stmt5->bindParam(":sid",$sid);
                                $stmt5->execute();
                                $stmt5=$con->prepare("CALL CHECK_RESUME_DETAILS(:sid);");
                                $stmt5->bindParam(":sid",$sid);
                                $stmt5->execute();
                                $data8 = $stmt5->fetch(PDO::FETCH_ASSOC);
                                if($data8["aid"] == NULL){
                                            header('Location: _details.php');
                                }elseif($data8["rid"] == NULL){
                                            header('Location: resume_details.php');
                                }else{
                                    if(isset($dipid)){
                                        if($type=="BA"){
                        ?>
                            <table class="table text-dark table-responsive">
                                <tr>
                                    <td class="text-nowrap">10TH BOARD</td>
                                    <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_BOARD']; ?></td>
                                </tr>
                                <tr>
                                <td class="text-nowrap">10TH SCHOOL</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_SCHOOL']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">10TH PERCENTAGE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_PERCENTAGE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">DIPLOMA UNIVERSITY</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_DIPLOMA_UNIVERSITY']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">DIPLOMA INSTITUTE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_DIPLOMA_INSTITUTE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">DIPLOMA SPECIALIZATION</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_DIPLOMA_SPECIALIZATION']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">DIPLOMA SEM 1</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_DIPLOMA_SEM_1']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">DIPLOMA SEM 2</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_DIPLOMA_SEM_2']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">DIPLOMA SEM 3</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_DIPLOMA_SEM_3']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">DIPLOMA SEM 4</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_DIPLOMA_SEM_4']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">DIPLOMA SEM 5</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_DIPLOMA_SEM_5']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">DIPLOMA SEM 6</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_DIPLOMA_SEM_6']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR UNIVERSITY</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_UNIVERSITY']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR INSTITUTE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_INSTITUTE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SPECIALIZATION</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SPECIALIZATION']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR DEGREE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_DEGREE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 1</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_1']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 2</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_2']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 3</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_3']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 4</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_4']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 5</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_5']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 6</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_6']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">TECHNICAL SKILLS</td>
                                <td class="text-nowrap"><?php $ts=$dataresume["RESUME_TECHNICAL_SKILLS"]; 
                                                                $ts1 = explode('#', $ts);
                                                                foreach ($ts1 as $value) {
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">PERSONAL SKILLS</td>
                                <td class="text-nowrap"><?php $ps=$dataresume["RESUME_PERSONAL_SKILLS"]; 
                                                                $ps1 = explode('#', $ps);
                                                                foreach ($ps1 as $value) { 
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">LANGUAGES</td>
                                <td class="text-nowrap"><?php $lun=$dataresume["RESUME_LANGUAGES"]; 
                                                                $l1 = explode('#', $lun);
                                                        foreach ($l1 as $value) {
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">PROJECTS</td>
                                <td class="text-nowrap"><?php
                                    $prj=$dataresume['RSEUME_PROJECTS'];
                                    $prj=explode('#', $prj);
                                    $a=0;
                                    foreach ($prj as $prjs) {
                                        $a+=1;
                                    $prjs=explode(',', $prjs);
                                    echo "($a) ".$prjs[0]."<br>";
                                    echo $prjs[1]."<br>";
                                    echo $prjs[2]."<br>";
                                    } ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">ACHIVEMENTS</td>
                                <td class="text-nowrap"><?php 
                                    $ra=$dataresume['RESUME_ACHIVEMENTS'];
                                    $ra1=explode('#', $ra);
                                    $a=0;
                                    foreach ($ra1 as $value) {
                                        $a+=1;
                                echo "($a) ".$value; }
                                ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">CARRIER OBJECTIVE</td>
                                <td class=""><?php echo $dataresume['RESUME_CARRIER_OBJECTIVE']; ?></td>                               
                                </tr>
                            </table>
                            <?php  
                            }elseif ($type == "MA") {
                            ?>
                            <table class="table text-dark table-responsive">
                                <tr>
                                    <td class="text-nowrap">10TH BOARD</td>
                                    <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_BOARD']; ?></td>
                                </tr>
                                <tr>
                                <td class="text-nowrap">10TH SCHOOL</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_SCHOOL']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">10TH PERCENTAGE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_PERCENTAGE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">DIPLOMA UNIVERSITY</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_DIPLOMA_UNIVERSITY']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">DIPLOMA INSTITUTE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_DIPLOMA_INSTITUTE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">DIPLOMA SPECIALIZATION</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_DIPLOMA_SPECIALIZATION']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">DIPLOMA SEM 1</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_DIPLOMA_SEM_1']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">DIPLOMA SEM 2</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_DIPLOMA_SEM_2']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">DIPLOMA SEM 3</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_DIPLOMA_SEM_3']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">DIPLOMA SEM 4</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_DIPLOMA_SEM_4']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">DIPLOMA SEM 5</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_DIPLOMA_SEM_5']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">DIPLOMA SEM 6</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_DIPLOMA_SEM_6']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR UNIVERSITY</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_UNIVERSITY']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR INSTITUTE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_INSTITUTE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SPECIALIZATION</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SPECIALIZATION']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR DEGREE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_DEGREE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 1</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_1']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 2</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_2']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 3</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_3']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 4</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_4']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 5</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_5']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 6</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_6']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER UNIVERSITY</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_UNIVERSITY']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER INSTITUTE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_INSTITUTE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER SPECIALIZATION</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SPECIALIZATION']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER SEM 1</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SEM_1']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER SEM 2</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SEM_2']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER SEM 3</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SEM_3']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER SEM 4</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SEM_4']; ?></td>
                        
                                </tr>
                                <tr>
                                <td class="text-nowrap">TECHNICAL SKILLS</td>
                                <td class="text-nowrap"><?php $ts=$dataresume["RESUME_TECHNICAL_SKILLS"]; 
                                                                $ts1 = explode('#', $ts);
                                                                foreach ($ts1 as $value) {
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">PERSONAL SKILLS</td>
                                <td class="text-nowrap"><?php $ps=$dataresume["RESUME_PERSONAL_SKILLS"]; 
                                                                $ps1 = explode('#', $ps);
                                                                foreach ($ps1 as $value) { 
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">LANGUAGES</td>
                                <td class="text-nowrap"><?php $lun=$dataresume["RESUME_LANGUAGES"]; 
                                                                $l1 = explode('#', $lun);
                                                        foreach ($l1 as $value) {
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">PROJECTS</td>
                                <td class="text-nowrap"><?php
                                    $prj=$dataresume['RSEUME_PROJECTS'];
                                    $prj=explode('#', $prj);
                                    $a=0;
                                    foreach ($prj as $prjs) {
                                        $a+=1;
                                    $prjs=explode(',', $prjs);
                                    echo "($a) ".$prjs[0]."<br>";
                                    echo $prjs[1]."<br>";
                                    echo $prjs[2]."<br>";
                                    } ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">ACHIVEMENTS</td>
                                <td class="text-nowrap"><?php 
                                    $ra=$dataresume['RESUME_ACHIVEMENTS'];
                                    $ra1=explode('#', $ra);
                                    $a=0;
                                    foreach ($ra1 as $value) {
                                        $a+=1;
                                echo "($a) ".$value; }
                                ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">CARRIER OBJECTIVE</td>
                                <td class=""><?php echo $dataresume['RESUME_CARRIER_OBJECTIVE']; ?></td>                               
                                </tr>
                            </table>
                            <?php  
                            }
                        }elseif (isset($twid)) {
                            if($type=="BA"){
                            ?>
                            <table class="table text-dark table-responsive">
                                <tr>
                                    <td class="text-nowrap">10TH BOARD</td>
                                    <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_BOARD']; ?></td>
                                </tr>
                                <tr>
                                <td class="text-nowrap">10TH SCHOOL</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_SCHOOL']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">10TH PERCENTAGE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_PERCENTAGE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH BOARD</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_BOARD']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH SCHOOL</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_SCHOOL']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH STREAM</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_STREAM']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH PERCENTAGE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_PERCENTAGE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR UNIVERSITY</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_UNIVERSITY']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR INSTITUTE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_INSTITUTE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SPECIALIZATION</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SPECIALIZATION']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR DEGREE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_DEGREE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 1</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_1']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 2</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_2']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 3</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_3']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 4</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_4']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 5</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_5']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 6</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_6']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 7</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_7']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 8</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_8']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">TECHNICAL SKILLS</td>
                                <td class="text-nowrap"><?php $ts=$dataresume["RESUME_TECHNICAL_SKILLS"]; 
                                                                $ts1 = explode('#', $ts);
                                                                foreach ($ts1 as $value) {
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">PERSONAL SKILLS</td>
                                <td class="text-nowrap"><?php $ps=$dataresume["RESUME_PERSONAL_SKILLS"]; 
                                                                $ps1 = explode('#', $ps);
                                                                foreach ($ps1 as $value) { 
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">LANGUAGES</td>
                                <td class="text-nowrap"><?php $lun=$dataresume["RESUME_LANGUAGES"]; 
                                                                $l1 = explode('#', $lun);
                                                        foreach ($l1 as $value) {
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">PROJECTS</td>
                                <td class="text-nowrap"><?php
                                    $prj=$dataresume['RSEUME_PROJECTS'];
                                    $prj=explode('#', $prj);
                                    $a=0;
                                    foreach ($prj as $prjs) {
                                        $a+=1;
                                    $prjs=explode(',', $prjs);
                                    echo "($a) ".$prjs[0]."<br>";
                                    echo $prjs[1]."<br>";
                                    echo $prjs[2]."<br>";
                                    } ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">ACHIVEMENTS</td>
                                <td class="text-nowrap"><?php 
                                    $ra=$dataresume['RESUME_ACHIVEMENTS'];
                                    $ra1=explode('#', $ra);
                                    $a=0;
                                    foreach ($ra1 as $value) {
                                        $a+=1;
                                echo "($a) ".$value; }
                                ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">CARRIER OBJECTIVE</td>
                                <td class=""><?php echo $dataresume['RESUME_CARRIER_OBJECTIVE']; ?></td>                               
                                </tr>
                            </table>
                            <?php
                            }elseif ($type == "MA") {
                            ?>
                            <table class="table text-dark table-responsive">
                                <tr>
                                    <td class="text-nowrap">10TH BOARD</td>
                                    <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_BOARD']; ?></td>
                                </tr>
                                <tr>
                                <td class="text-nowrap">10TH SCHOOL</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_SCHOOL']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">10TH PERCENTAGE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_PERCENTAGE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH BOARD</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_BOARD']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH SCHOOL</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_SCHOOL']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH STREAM</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_STREAM']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH PERCENTAGE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_PERCENTAGE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR UNIVERSITY</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_UNIVERSITY']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR INSTITUTE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_INSTITUTE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SPECIALIZATION</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SPECIALIZATION']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR DEGREE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_DEGREE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 1</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_1']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 2</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_2']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 3</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_3']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 4</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_4']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 5</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_5']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 6</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_6']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 7</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_7']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 8</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_8']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER UNIVERSITY</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_UNIVERSITY']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER INSTITUTE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_INSTITUTE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER SPECIALIZATION</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SPECIALIZATION']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER SEM 1</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SEM_1']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER SEM 2</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SEM_2']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER SEM 3</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SEM_3']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER SEM 4</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SEM_4']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">TECHNICAL SKILLS</td>
                                <td class="text-nowrap"><?php $ts=$dataresume["RESUME_TECHNICAL_SKILLS"]; 
                                                                    $ts1 = explode('#', $ts);
                                                                    foreach ($ts1 as $value) {
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">PERSONAL SKILLS</td>
                                <td class="text-nowrap"><?php $ps=$dataresume["RESUME_PERSONAL_SKILLS"]; 
                                                                    $ps1 = explode('#', $ps);
                                                                    foreach ($ps1 as $value) { 
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">LANGUAGES</td>
                                <td class="text-nowrap"><?php $lun=$dataresume["RESUME_LANGUAGES"]; 
                                                                    $l1 = explode('#', $lun);
                                                            foreach ($l1 as $value) {
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">PROJECTS</td>
                                <td class="text-nowrap"><?php
                                    $prj=$dataresume['RSEUME_PROJECTS'];
                                    $prj=explode('#', $prj);
                                    $a=0;
                                    foreach ($prj as $prjs) {
                                        $a+=1;
                                        $prjs=explode(',', $prjs);
                                        echo "($a) ".$prjs[0]."<br>";
                                        echo $prjs[1]."<br>";
                                        echo $prjs[2]."<br>";
                                        } ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">ACHIVEMENTS</td>
                                <td class="text-nowrap"><?php 
                                        $ra=$dataresume['RESUME_ACHIVEMENTS'];
                                        $ra1=explode('#', $ra);
                                        $a=0;
                                    foreach ($ra1 as $value) {
                                        $a+=1;
                                    echo "($a) ".$value; }
                                    ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">CARRIER OBJECTIVE</td>
                                <td class=""><?php echo $dataresume['RESUME_CARRIER_OBJECTIVE']; ?></td>                               
                                </tr>
                            </table>
                            <?php
                                }
                            }
                        }
                    }elseif($d2d == 0){
                        if($type == "BA"){
                            ?>
                            <table class="table text-dark table-responsive">
                                <tr>
                                    <td class="text-nowrap">10TH BOARD</td>
                                    <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_BOARD']; ?></td>
                                </tr>
                                <tr>
                                <td class="text-nowrap">10TH SCHOOL</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_SCHOOL']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">10TH PERCENTAGE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_PERCENTAGE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH BOARD</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_BOARD']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH SCHOOL</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_SCHOOL']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH STREAM</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_STREAM']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH PERCENTAGE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_PERCENTAGE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR UNIVERSITY</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_UNIVERSITY']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR INSTITUTE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_INSTITUTE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SPECIALIZATION</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SPECIALIZATION']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR DEGREE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_DEGREE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 1</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_1']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 2</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_2']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 3</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_3']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 4</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_4']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 5</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_5']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 6</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_6']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">TECHNICAL SKILLS</td>
                                <td class="text-nowrap"><?php $ts=$dataresume["RESUME_TECHNICAL_SKILLS"]; 
                                                                    $ts1 = explode('#', $ts);
                                                                    foreach ($ts1 as $value) {
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">PERSONAL SKILLS</td>
                                <td class="text-nowrap"><?php $ps=$dataresume["RESUME_PERSONAL_SKILLS"]; 
                                                                    $ps1 = explode('#', $ps);
                                                                    foreach ($ps1 as $value) { 
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">LANGUAGES</td>
                                <td class="text-nowrap"><?php $lun=$dataresume["RESUME_LANGUAGES"]; 
                                                                    $l1 = explode('#', $lun);
                                                            foreach ($l1 as $value) {
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">PROJECTS</td>
                                <td class="text-nowrap"><?php
                                    $prj=$dataresume['RSEUME_PROJECTS'];
                                    $prj=explode('#', $prj);
                                    $a=0;
                                    foreach ($prj as $prjs) {
                                        $a+=1;
                                        $prjs=explode(',', $prjs);
                                        echo "($a) ".$prjs[0]."<br>";
                                        echo $prjs[1]."<br>";
                                        echo $prjs[2]."<br>";
                                        } ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">ACHIVEMENTS</td>
                                <td class="text-nowrap"><?php 
                                        $ra=$dataresume['RESUME_ACHIVEMENTS'];
                                        $ra1=explode('#', $ra);
                                        $a=0;
                                    foreach ($ra1 as $value) {
                                        $a+=1;
                                    echo "($a) ".$value; }
                                    ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">CARRIER OBJECTIVE</td>
                                <td class=""><?php echo $dataresume['RESUME_CARRIER_OBJECTIVE']; ?></td>                               
                                </tr>
                            </table>
                            <?php     
                      }elseif($type == "MA"){
                            ?>
                            <table class="table text-dark table-responsive">
                                <tr>
                                    <td class="text-nowrap">10TH BOARD</td>
                                    <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_BOARD']; ?></td>
                                </tr>
                                <tr>
                                <td class="text-nowrap">10TH SCHOOL</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_SCHOOL']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">10TH PERCENTAGE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_PERCENTAGE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH BOARD</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_BOARD']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH SCHOOL</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_SCHOOL']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH STREAM</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_STREAM']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH PERCENTAGE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_PERCENTAGE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR UNIVERSITY</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_UNIVERSITY']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR INSTITUTE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_INSTITUTE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SPECIALIZATION</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SPECIALIZATION']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR DEGREE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_DEGREE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 1</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_1']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 2</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_2']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 3</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_3']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 4</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_4']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 5</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_5']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">BACHELOR SEM 6</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_6']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER UNIVERSITY</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_UNIVERSITY']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER INSTITUTE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_INSTITUTE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER SPECIALIZATION</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SPECIALIZATION']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER SEM 1</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SEM_1']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER SEM 2</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SEM_2']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER SEM 3</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SEM_3']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">MASTER SEM 4</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SEM_4']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">TECHNICAL SKILLS</td>
                                <td class="text-nowrap"><?php $ts=$dataresume["RESUME_TECHNICAL_SKILLS"]; 
                                                                    $ts1 = explode('#', $ts);
                                                                    foreach ($ts1 as $value) {
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">PERSONAL SKILLS</td>
                                <td class="text-nowrap"><?php $ps=$dataresume["RESUME_PERSONAL_SKILLS"]; 
                                                                    $ps1 = explode('#', $ps);
                                                                    foreach ($ps1 as $value) { 
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">LANGUAGES</td>
                                <td class="text-nowrap"><?php $lun=$dataresume["RESUME_LANGUAGES"]; 
                                                                    $l1 = explode('#', $lun);
                                                            foreach ($l1 as $value) {
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">PROJECTS</td>
                                <td class="text-nowrap"><?php
                                    $prj=$dataresume['RSEUME_PROJECTS'];
                                    $prj=explode('#', $prj);
                                    $a=0;
                                    foreach ($prj as $prjs) {
                                        $a+=1;
                                        $prjs=explode(',', $prjs);
                                        echo "($a) ".$prjs[0]."<br>";
                                        echo $prjs[1]."<br>";
                                        echo $prjs[2]."<br>";
                                        } ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">ACHIVEMENTS</td>
                                <td class="text-nowrap"><?php 
                                        $ra=$dataresume['RESUME_ACHIVEMENTS'];
                                        $ra1=explode('#', $ra);
                                        $a=0;
                                    foreach ($ra1 as $value) {
                                        $a+=1;
                                    echo "($a) ".$value; }
                                    ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">CARRIER OBJECTIVE</td>
                                <td class=""><?php echo $dataresume['RESUME_CARRIER_OBJECTIVE']; ?></td>                               
                                </tr>
                            </table>
                            <?php
                        }elseif($type == "IBM"){
                            ?>
                            <table class="table text-dark table-responsive">
                                <tr>
                                    <td class="text-nowrap">10TH BOARD</td>
                                    <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_BOARD']; ?></td>
                                </tr>
                                <tr>
                                <td class="text-nowrap">10TH SCHOOL</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_SCHOOL']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">10TH PERCENTAGE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_10TH_PERCENTAGE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH BOARD</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_BOARD']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH SCHOOL</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_SCHOOL']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH STREAM</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_STREAM']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">12TH PERCENTAGE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_12TH_PERCENTAGE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">INTEGRATED SEM 1</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_1']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">INTEGRATED SEM 2</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_2']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">INTEGRATED SEM 3</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_3']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">INTEGRATED SEM 4</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_4']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">INTEGRATED SEM 5</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_5']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">INTEGRATED SEM 6</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_BACHELOR_SEM_6']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">INTEGRATED SEM 7</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SEM_1']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">INTEGRATED SEM 8</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SEM_2']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">INTEGRATED SEM 9</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SEM_3']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">INTEGRATED SEM 10</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SEM_4']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">INTEGRATED UNIVERSITY</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_UNIVERSITY']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">INTEGRATED INSTITUTE</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_INSTITUTE']; ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">INTEGRATED SPECIALIZATION</td>
                                <td class="text-nowrap"><?php echo $dataresume['ACADEMIC_MASTER_SPECIALIZATION']; ?></td>
                                
                                </tr>
                                
                                <tr>
                                <td class="text-nowrap">TECHNICAL SKILLS</td>
                                <td class="text-nowrap"><?php $ts=$dataresume["RESUME_TECHNICAL_SKILLS"]; 
                                                                    $ts1 = explode('#', $ts);
                                                                    foreach ($ts1 as $value) {
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">PERSONAL SKILLS</td>
                                <td class="text-nowrap"><?php $ps=$dataresume["RESUME_PERSONAL_SKILLS"]; 
                                                                    $ps1 = explode('#', $ps);
                                                                    foreach ($ps1 as $value) { 
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">LANGUAGES</td>
                                <td class="text-nowrap"><?php $lun=$dataresume["RESUME_LANGUAGES"]; 
                                                                    $l1 = explode('#', $lun);
                                                            foreach ($l1 as $value) {
                                                                echo $value."<br>"; }
                                            ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">PROJECTS</td>
                                <td class="text-nowrap"><?php
                                    $prj=$dataresume['RSEUME_PROJECTS'];
                                    $prj=explode('#', $prj);
                                    $a=0;
                                    foreach ($prj as $prjs) {
                                        $a+=1;
                                        $prjs=explode(',', $prjs);
                                        echo "($a) ".$prjs[0]."<br>";
                                        echo $prjs[1]."<br>";
                                        echo $prjs[2]."<br>";
                                        } ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">ACHIVEMENTS</td>
                                <td class="text-nowrap"><?php 
                                        $ra=$dataresume['RESUME_ACHIVEMENTS'];
                                        $ra1=explode('#', $ra);
                                        $a=0;
                                    foreach ($ra1 as $value) {
                                        $a+=1;
                                    echo "($a) ".$value; }
                                    ?></td>
                                
                                </tr>
                                <tr>
                                <td class="text-nowrap">CARRIER OBJECTIVE</td>
                                <td class=""><?php echo $dataresume['RESUME_CARRIER_OBJECTIVE']; ?></td>                               
                                </tr>
                            </table>
                            <?php
                      }
                   }    
                   ?>
                   </div>
                </div>
                </div>
                <div class="tab-pane" id="link10">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">Help center</h4>
                    <p class="card-category">
                        More information here
                    </p>
                    </div>
                    <div class="card-body">
                        <form action="Bulid_resume.php" method="Post">
                            <h5 class="mb-3">Select Templete</h5>
                            <select class="form-control" name="resume">
                                <option value="Temp1">Templete1</option>
                                <option value="Temp2">Templete2</option>
                                <!-- <option value="Temp3">Templete3</option>
                                <option value="Temp4">Templete4</option> -->
                            </select>
                            <div class="card">
                                <div class="card-body">
                                    <img src="../Files/assets2/img/Template1.png" alt="" class="zoom">
                                    <img src="../Files/assets2/img/Template2.png" alt="" class="zoom">
                                </div>
                            </div>
                            <input type="submit" value="submit" name="build_resume">
                        </form>
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
<?php 
  if(isset($_REQUEST["submit"])){
    if(isset($_REQUEST["de2dep"])){
      $d2dradio = $_REQUEST["de2dep"];  
  if($d2d == "1"){
        if($d2dradio == "Y")
        {
                if($type == "MA"){

                            $sid = $data["STUDENT_ID"];
                            $tenthBoard = $_REQUEST["10thBoard"];
                            $tenthschool = $_REQUEST["10thschool"];
                            $tenper=$_REQUEST["10thper"];
                            $dipsem1=$_REQUEST["d1sem"];
                            $dipsem2=$_REQUEST["d2sem"];
                            $dipsem3=$_REQUEST["d3sem"];
                            $dipsem4=$_REQUEST["d4sem"];
                            $dipsem5=$_REQUEST["d5sem"];
                            $dipsem6=$_REQUEST["d6sem"]; 
                            $dipuni=$_REQUEST["duniversity"];
                            $dsp=$_REQUEST["dsp"];
                            if($dsp == "OTHERS"){
                              $dsp=$_REQUEST["others_sp_dip"];
                            }
                           $dins=$_REQUEST["diplomainstitute"];
                           $bachsem3=$_REQUEST["bach3sem"];
                           $bachsem4=$_REQUEST["bach4sem"];
                           $bachsem5=$_REQUEST["bach5sem"];
                           $bachsem6=$_REQUEST["bach6sem"];
                           $bachsem7=$_REQUEST["bach7sem"];
                           $bachsem8=$_REQUEST["bach8sem"];
                           $bachuni=$_REQUEST["bachuniversity"];
                           $bachdegree = $_REQUEST["bbdegree"];
                           if($bachdegree == "OTHERS"){
                            $bachdegree=$_REQUEST["others_sp_bach_d2dY"];
                           }
                           $bashsp=$_REQUEST["sp_b_b_d2dY"];
                           $bachcname=$_REQUEST["bachd2dYMAinstitute"];
                           $mastersem1=$_REQUEST["master1sem"];
                           $mastersem2=$_REQUEST["master2sem"];
                           $mastersem3=$_REQUEST["master3sem"];
                           $mastersem4=$_REQUEST["master4sem"];
                           $uname_m=$_REQUEST["masterdipuname"];
                           $ist_m=$_REQUEST["masterins"];
                           $sp_m=$_REQUEST["mastersp"];
                           $degree_m=$_REQUEST["masterdegree"];
                           if($degree_m == "OTHERS"){
                             $degree_m=$_REQUEST["other_for_master_dip_y"];
                           }

                           $stmt2=$con->prepare("CALL D6B6M4(:sid,:10board,:10school,:per10,:duniversity,:diplomainstitute,:dsp,:d1,:d2,:d3,:d4,:d5,:d6,:bachuni,:bachinstitute,:bsp,:bdegree,:b3,:b4,:b5,:b6,:b7,:b8,:m1,:m2,:m3,:m4,:university_m,:institution_m,:specialization_m,:degree_m);");
                           $stmt2->bindParam(":sid",$sid);
                           $stmt2->bindParam(":10board",$tenthBoard);
                           $stmt2->bindParam(":10school",$tenthschool);
                           $stmt2->bindParam(":per10",$tenper);
                           $stmt2->bindParam(":duniversity",$dipuni);
                           $stmt2->bindParam(":diplomainstitute",$dins);
                           $stmt2->bindParam(":dsp",$dsp);
                           $stmt2->bindParam(":d1",$dipsem1);
                           $stmt2->bindParam(":d2",$dipsem2);
                           $stmt2->bindParam(":d3",$dipsem3);
                           $stmt2->bindParam(":d4",$dipsem4);
                           $stmt2->bindParam(":d5",$dipsem5);
                           $stmt2->bindParam(":d6",$dipsem6);
                           $stmt2->bindParam(":bachuni",$bachuni);
                           $stmt2->bindParam(":bachinstitute",$bachcname);
                           $stmt2->bindParam(":bsp",$bashsp);
                           $stmt2->bindParam(":bdegree",$bachdegree);
                           $stmt2->bindParam(":b3",$bachsem3);
                           $stmt2->bindParam(":b4",$bachsem4);
                           $stmt2->bindParam(":b5",$bachsem5);
                           $stmt2->bindParam(":b6",$bachsem6);
                           $stmt2->bindParam(":b7",$bachsem7);
                           $stmt2->bindParam(":b8",$bachsem8);
                           $stmt2->bindParam(":m1",$mastersem1);
                           $stmt2->bindParam(":m2",$mastersem2);
                           $stmt2->bindParam(":m3",$mastersem3);
                           $stmt2->bindParam(":m4",$mastersem4);
                           $stmt2->bindParam(":university_m",$uname_m);
                           $stmt2->bindParam(":institution_m",$ist_m);
                           $stmt2->bindParam(":specialization_m",$sp_m);
                           $stmt2->bindParam(":degree_m",$degree_m);
                           $stmt2->execute();
                           $stmt2=$con->prepare("CALL D6B6M4(:sid,:10board,:10school,:per10,:duniversity,:diplomainstitute,:dsp,:d1,:d2,:d3,:d4,:d5,:d6,:bachuni,:bachinstitute,:bsp,:bdegree,:b3,:b4,:b5,:b6,:b7,:b8,:m1,:m2,:m3,:m4,:university_m,:institution_m,:specialization_m,:degree_m);");
                           $stmt2->bindParam(":sid",$sid);
                           $stmt2->bindParam(":10board",$tenthBoard);
                           $stmt2->bindParam(":10school",$tenthschool);
                           $stmt2->bindParam(":per10",$tenper);
                           $stmt2->bindParam(":duniversity",$dipuni);
                           $stmt2->bindParam(":diplomainstitute",$dins);
                           $stmt2->bindParam(":dsp",$dsp);
                           $stmt2->bindParam(":d1",$dipsem1);
                           $stmt2->bindParam(":d2",$dipsem2);
                           $stmt2->bindParam(":d3",$dipsem3);
                           $stmt2->bindParam(":d4",$dipsem4);
                           $stmt2->bindParam(":d5",$dipsem5);
                           $stmt2->bindParam(":d6",$dipsem6);
                           $stmt2->bindParam(":bachuni",$bachuni);
                           $stmt2->bindParam(":bachinstitute",$bachcname);
                           $stmt2->bindParam(":bsp",$bashsp);
                           $stmt2->bindParam(":bdegree",$bachdegree);
                           $stmt2->bindParam(":b3",$bachsem3);
                           $stmt2->bindParam(":b4",$bachsem4);
                           $stmt2->bindParam(":b5",$bachsem5);
                           $stmt2->bindParam(":b6",$bachsem6);
                           $stmt2->bindParam(":b7",$bachsem7);
                           $stmt2->bindParam(":b8",$bachsem8);
                           $stmt2->bindParam(":m1",$mastersem1);
                           $stmt2->bindParam(":m2",$mastersem2);
                           $stmt2->bindParam(":m3",$mastersem3);
                           $stmt2->bindParam(":m4",$mastersem4);
                           $stmt2->bindParam(":university_m",$uname_m);
                           $stmt2->bindParam(":institution_m",$ist_m);
                           $stmt2->bindParam(":specialization_m",$sp_m);
                           $stmt2->bindParam(":degree_m",$degree_m);
                           $stmt2->execute();
                           //print_r($stmt2->errorinfo());
                           if($stmt2 == TRUE){
                            echo "<script>alert('Data Insert')</script>";
                           }
                           else{
                            echo "<script>alert('Data Are Not Insert')</script>";
                           }

                }elseif ($type == "BA") {
                  
                            $sid = $data["STUDENT_ID"];
                            $tenthBoard = $_REQUEST["10thBoard"];
                            $tenthschool = $_REQUEST["10thschool"];
                            $tenper=$_REQUEST["10thper"];
                            $dipuy = $_REQUEST["dipuniversityba"];
                            $dipinsyba = $_REQUEST["dipinsbay"];
                            $dspyba = $_REQUEST["diplomasp"];
                            if($dspyba == "OTHERS"){
                                $dspyba = $_REQUEST["others_sp_dip_y_ba"];
                            }
                            $dsem1=$_REQUEST["Yd2dd1sem"];
                            $dsem2=$_REQUEST["Yd2dd2sem"];
                            $dsem3=$_REQUEST["Yd2dd3sem"];
                            $dsem4=$_REQUEST["Yd2dd4sem"];
                            $dsem5=$_REQUEST["Yd2dd5sem"];
                            $dsem6=$_REQUEST["Yd2dd6sem"];
                            $bachsem1forbay=$_REQUEST["bach3sembay"];
                            $bachsem2forbay=$_REQUEST["bach4sembay"];
                            $bachsem3forbay=$_REQUEST["bach5sembay"];
                            $bachsem4forbay=$_REQUEST["bach6sembay"];
                            $bachsem5forbay=$_REQUEST["bach7sembay"];
                            $bachsem6forbay=$_REQUEST["bach8sembay"];
                            $university_b=$_REQUEST["bachuniversity"];
                            $institute_b=$_REQUEST["bachd2dYMAinstitute"];
                            $specialization_b=$_REQUEST["sp_b_b_d2dY"];
                            $degree_b=$_REQUEST["bbdegree"];
                            if($degree_b == "OTHERS"){
                              $degree_b=$_REQUEST["others_sp_bach_d2dY"];
                            }

                           $stmt3=$con->prepare("CALL D6B6(:sid,:10board,:10school,:per10,:duniversity,:diplomainstitute,:dsp,:d1,:d2,:d3,:d4,:d5,:d6,:b3,:b4,:b5,:b6,:b7,:b8,:university_b,:institute_b,:specialization_b,:degree_b);");
                           $stmt3->bindParam(":sid",$sid);
                           $stmt3->bindParam(":10board",$tenthBoard);
                           $stmt3->bindParam(":10school",$tenthschool);
                           $stmt3->bindParam(":per10",$tenper);
                           $stmt3->bindParam(":duniversity",$dipuy);
                           $stmt3->bindParam(":diplomainstitute",$dipinsyba);
                           $stmt3->bindParam(":dsp",$dspyba);
                           $stmt3->bindParam(":d1",$dsem1);
                           $stmt3->bindParam(":d2",$dsem2);
                           $stmt3->bindParam(":d3",$dsem3);
                           $stmt3->bindParam(":d4",$dsem4);
                           $stmt3->bindParam(":d5",$dsem5);
                           $stmt3->bindParam(":d6",$dsem6);
                           $stmt3->bindParam(":b3",$bachsem1forbay);
                           $stmt3->bindParam(":b4",$bachsem2forbay);
                           $stmt3->bindParam(":b5",$bachsem3forbay);
                           $stmt3->bindParam(":b6",$bachsem4forbay);
                           $stmt3->bindParam(":b7",$bachsem5forbay);
                           $stmt3->bindParam(":b8",$bachsem6forbay);
                           $stmt3->bindParam(":university_b",$university_b);
                           $stmt3->bindParam(":institute_b",$institute_b);
                           $stmt3->bindParam(":specialization_b",$specialization_b);
                           $stmt3->bindParam(":degree_b",$degree_b);
                           $stmt3->execute();
                             $stmt3=$con->prepare("CALL D6B6(:sid,:10board,:10school,:per10,:duniversity,:diplomainstitute,:dsp,:d1,:d2,:d3,:d4,:d5,:d6,:b3,:b4,:b5,:b6,:b7,:b8,:university_b,:institute_b,:specialization_b,:degree_b);");
                           $stmt3->bindParam(":sid",$sid);
                           $stmt3->bindParam(":10board",$tenthBoard);
                           $stmt3->bindParam(":10school",$tenthschool);
                           $stmt3->bindParam(":per10",$tenper);
                           $stmt3->bindParam(":duniversity",$dipuy);
                           $stmt3->bindParam(":diplomainstitute",$dipinsyba);
                           $stmt3->bindParam(":dsp",$dspyba);
                           $stmt3->bindParam(":d1",$dsem1);
                           $stmt3->bindParam(":d2",$dsem2);
                           $stmt3->bindParam(":d3",$dsem3);
                           $stmt3->bindParam(":d4",$dsem4);
                           $stmt3->bindParam(":d5",$dsem5);
                           $stmt3->bindParam(":d6",$dsem6);
                           $stmt3->bindParam(":b3",$bachsem1forbay);
                           $stmt3->bindParam(":b4",$bachsem2forbay);
                           $stmt3->bindParam(":b5",$bachsem3forbay);
                           $stmt3->bindParam(":b6",$bachsem4forbay);
                           $stmt3->bindParam(":b7",$bachsem5forbay);
                           $stmt3->bindParam(":b8",$bachsem6forbay);
                           $stmt3->bindParam(":university_b",$university_b);
                           $stmt3->bindParam(":institute_b",$institute_b);
                           $stmt3->bindParam(":specialization_b",$specialization_b);
                           $stmt3->bindParam(":degree_b",$degree_b);
                           $stmt3->execute(); 
                           //print_r($stmt3 ->errorinfo());
                           if($stmt3 == TRUE){
                            echo "<script>alert('Data Insert')</script>";
                           }
                           else{
                            echo "<script>alert('Data Are Not Insert')</script>";
                           }
                }
              }elseif ($d2dradio == "N") {
                if($type == "MA"){

                            $sid = $data["STUDENT_ID"];
                            $tenthBoard = $_REQUEST["10thBoard"];
                            $tenthschool = $_REQUEST["10thschool"];
                            $tenper=$_REQUEST["10thper"];
                            $twboard=$_REQUEST["12thBoard"];
                            $twschool=$_REQUEST["12thpassschool"];
                            $twper=$_REQUEST["12thper"];
                            $twsp=$_REQUEST["12thspecialization"];  
                            if($twsp == "OTHERS"){
                              $twsp=$_REQUEST["others_sp_d2d_n_12th"];  
                            }
                            $bachnd2duni=$_REQUEST["bunind2d"];
                            $bachinstitutend2d=$_REQUEST["binstitutend2d"];
                            $bachsp=$_REQUEST["sp_b_n_d2d"];
                            $bachdegree=$_REQUEST["bbdegree"];   
                            if($bachdegree == "OTHERS"){
                              $bachdegree=$_REQUEST["others_sp_bach_n_d2d_ba"];   
                            }
                            $bachsem1nd2dma=$_REQUEST["b1semnd2d"];
                            $bachsem2nd2dma=$_REQUEST["b2semnd2d"];
                            $bachsem3nd2dma=$_REQUEST["b3semnd2d"];
                            $bachsem4nd2dma=$_REQUEST["b4semnd2d"];
                            $bachsem5nd2dma=$_REQUEST["b5semnd2d"];
                            $bachsem6nd2dma=$_REQUEST["b6semnd2d"];
                            $bachsem7nd2dma=$_REQUEST["b7semnd2d"];
                            $bachsem8nd2dma=$_REQUEST["b8semnd2d"]; 
                            $mastersem1nd2dma=$_REQUEST["msem1nd2dma"];
                            $mastersem2nd2dma=$_REQUEST["msem2nd2dma"];
                            $mastersem3nd2dma=$_REQUEST["msem3nd2dma"];
                            $mastersem4nd2dma=$_REQUEST["msem4nd2dma"];
                            $uname_m=$_REQUEST["masterdipuname"];
                            $ist_m=$_REQUEST["masterins"];
                            $sp_m=$_REQUEST["mastersp"];
                            $degree_m=$_REQUEST["masterdegree"];
                            if($degree_m == "OTHERS"){
                              $degree_m=$_REQUEST["other_for_master_dip_y"];
                            }
  
                            $stmt4=$con->prepare("CALL B8M4(:sid,:10board,:10school,:per10,:12board,:12school,:12stream,:12per,:bachuni,:bachinstitute,:bsp,:bdegree,:b1,:b2,:b3,:b4,:b5,:b6,:b7,:b8,:m1,:m2,:m3,:m4,:university_m,:institute_m,:specialization_m,:degree_m);");
                            $stmt4->bindParam(":sid",$sid);    
                            $stmt4->bindParam(":10board",$tenthBoard);
                            $stmt4->bindParam(":10school",$tenthschool);
                            $stmt4->bindParam(":per10",$tenper); 
                            $stmt4->bindParam(":12board",$twboard);    
                            $stmt4->bindParam(":12school",$twschool);      
                            $stmt4->bindParam(":12stream",$twsp);      
                            $stmt4->bindParam(":12per",$twper);      
                            $stmt4->bindParam(":bachuni",$bachnd2duni);      
                            $stmt4->bindParam(":bachinstitute",$bachinstitutend2d);  
                            $stmt4->bindParam(":bsp",$bachsp);      
                            $stmt4->bindParam(":bdegree",$bachdegree);      
                            $stmt4->bindParam(":b1",$bachsem1nd2dma);      
                            $stmt4->bindParam(":b2",$bachsem2nd2dma);      
                            $stmt4->bindParam(":b3",$bachsem3nd2dma);      
                            $stmt4->bindParam(":b4",$bachsem4nd2dma);      
                            $stmt4->bindParam(":b5",$bachsem5nd2dma);      
                            $stmt4->bindParam(":b6",$bachsem6nd2dma);      
                            $stmt4->bindParam(":b7",$bachsem7nd2dma);      
                            $stmt4->bindParam(":b8",$bachsem8nd2dma);      
                            $stmt4->bindParam(":m1",$mastersem1nd2dma);      
                            $stmt4->bindParam(":m2",$mastersem2nd2dma);      
                            $stmt4->bindParam(":m3",$mastersem3nd2dma);      
                            $stmt4->bindParam(":m4",$mastersem4nd2dma);
                            $stmt4->bindParam(":university_m",$uname_m);
                            $stmt4->bindParam(":institute_m",$ist_m);
                            $stmt4->bindParam(":specialization_m",$sp_m);
                            $stmt4->bindParam(":degree_m",$degree_m);
                            $stmt4->execute();
                           $stmt4=$con->prepare("CALL B8M4(:sid,:10board,:10school,:per10,:12board,:12school,:12stream,:12per,:bachuni,:bachinstitute,:bsp,:bdegree,:b1,:b2,:b3,:b4,:b5,:b6,:b7,:b8,:m1,:m2,:m3,:m4,:university_m,:institute_m,:specialization_m,:degree_m);");
                            $stmt4->bindParam(":sid",$sid);    
                            $stmt4->bindParam(":10board",$tenthBoard);
                            $stmt4->bindParam(":10school",$tenthschool);
                            $stmt4->bindParam(":per10",$tenper); 
                            $stmt4->bindParam(":12board",$twboard);    
                            $stmt4->bindParam(":12school",$twschool);      
                            $stmt4->bindParam(":12stream",$twsp);      
                            $stmt4->bindParam(":12per",$twper);      
                            $stmt4->bindParam(":bachuni",$bachnd2duni);      
                            $stmt4->bindParam(":bachinstitute",$bachinstitutend2d);  
                            $stmt4->bindParam(":bsp",$bachsp);      
                            $stmt4->bindParam(":bdegree",$bachdegree);      
                            $stmt4->bindParam(":b1",$bachsem1nd2dma);      
                            $stmt4->bindParam(":b2",$bachsem2nd2dma);      
                            $stmt4->bindParam(":b3",$bachsem3nd2dma);      
                            $stmt4->bindParam(":b4",$bachsem4nd2dma);      
                            $stmt4->bindParam(":b5",$bachsem5nd2dma);      
                            $stmt4->bindParam(":b6",$bachsem6nd2dma);      
                            $stmt4->bindParam(":b7",$bachsem7nd2dma);      
                            $stmt4->bindParam(":b8",$bachsem8nd2dma);      
                            $stmt4->bindParam(":m1",$mastersem1nd2dma);      
                            $stmt4->bindParam(":m2",$mastersem2nd2dma);      
                            $stmt4->bindParam(":m3",$mastersem3nd2dma);      
                            $stmt4->bindParam(":m4",$mastersem4nd2dma);
                            $stmt4->bindParam(":university_m",$uname_m);
                            $stmt4->bindParam(":institute_m",$ist_m);
                            $stmt4->bindParam(":specialization_m",$sp_m);
                            $stmt4->bindParam(":degree_m",$degree_m);
                            $stmt4->execute();
                            //print_r($stmt4 ->errorinfo());
                             if($stmt4 == TRUE){
                              echo "<script>alert('Data Insert')</script>";
                             }
                             else{
                              echo "<script>alert('Data Are Not Insert')</script>";
                             }

                }elseif ($type == "BA") {

                            $sid = $data["STUDENT_ID"];
                      
                            $tenthBoard = $_REQUEST["10thBoard"];
                            $tenthschool = $_REQUEST["10thschool"];
                            $tenper=$_REQUEST["10thper"];
                            $twboard=$_REQUEST["12thBoard"];
                            $twschool=$_REQUEST["12thpassschool"];
                            $twper=$_REQUEST["12thper"];
                            $twsp=$_REQUEST["12thspecialization"];  
                            if($twsp == "OTHERS"){
                              $twsp=$_REQUEST["others_sp_d2d_n_12th"];  
                            }
                            $bachsem1nd2dma=$_REQUEST["b1semnd2dba"];
                            $bachsem2nd2dma=$_REQUEST["b2semnd2dba"];
                            $bachsem3nd2dma=$_REQUEST["b3semnd2dba"];
                            $bachsem4nd2dma=$_REQUEST["b4semnd2dba"];
                            $bachsem5nd2dma=$_REQUEST["b5semnd2dba"];
                            $bachsem6nd2dma=$_REQUEST["b6semnd2dba"];
                            $bachsem7nd2dma=$_REQUEST["b7semnd2dba"];
                            $bachsem8nd2dma=$_REQUEST["b8semnd2dba"];
                            $university_b=$_REQUEST["bachuniversity"];
                            $institute_b=$_REQUEST["bachd2dYMAinstitute"];
                            $specialization_b=$_REQUEST["sp_b_b_d2dY"];
                            $degree_b=$_REQUEST["bbdegree"];
                            if($degree_b == "OTHERS"){
                              $degree_b=$_REQUEST["others_sp_bach_d2dY"];
                            }
                            $stmt5=$con->prepare("CALL B8(:sid,:10board,:10school,:per10,:12board,:12school,:12stream,:12per,:b1,:b2,:b3,:b4,:b5,:b6,:b7,:b8,:university_b,:institute_b,:specialization_b,:degree_b);");  
                            $stmt5->bindParam(":sid",$sid);    
                            $stmt5->bindParam(":10board",$tenthBoard);
                            $stmt5->bindParam(":10school",$tenthschool);
                            $stmt5->bindParam(":per10",$tenper); 
                            $stmt5->bindParam(":12board",$twboard);    
                            $stmt5->bindParam(":12school",$twschool);      
                            $stmt5->bindParam(":12stream",$twsp);      
                            $stmt5->bindParam(":12per",$twper);      
                            $stmt5->bindParam(":b1",$bachsem1nd2dma);      
                            $stmt5->bindParam(":b2",$bachsem2nd2dma);      
                            $stmt5->bindParam(":b3",$bachsem3nd2dma);      
                            $stmt5->bindParam(":b4",$bachsem4nd2dma);      
                            $stmt5->bindParam(":b5",$bachsem5nd2dma);      
                            $stmt5->bindParam(":b6",$bachsem6nd2dma);      
                            $stmt5->bindParam(":b7",$bachsem7nd2dma);      
                            $stmt5->bindParam(":b8",$bachsem8nd2dma);
                            $stmt5->bindParam(":university_b",$university_b);
                            $stmt5->bindParam(":institute_b",$institute_b);
                            $stmt5->bindParam(":specialization_b",$specialization_b);
                            $stmt5->bindParam(":degree_b",$degree_b);
                            $stmt5->execute();
                            $stmt5=$con->prepare("CALL B8(:sid,:10board,:10school,:per10,:12board,:12school,:12stream,:12per,:b1,:b2,:b3,:b4,:b5,:b6,:b7,:b8,:university_b,:institute_b,:specialization_b,:degree_b);");  
                            $stmt5->bindParam(":sid",$sid);    
                            $stmt5->bindParam(":10board",$tenthBoard);
                            $stmt5->bindParam(":10school",$tenthschool);
                            $stmt5->bindParam(":per10",$tenper); 
                            $stmt5->bindParam(":12board",$twboard);    
                            $stmt5->bindParam(":12school",$twschool);      
                            $stmt5->bindParam(":12stream",$twsp);      
                            $stmt5->bindParam(":12per",$twper);      
                            $stmt5->bindParam(":b1",$bachsem1nd2dma);      
                            $stmt5->bindParam(":b2",$bachsem2nd2dma);      
                            $stmt5->bindParam(":b3",$bachsem3nd2dma);      
                            $stmt5->bindParam(":b4",$bachsem4nd2dma);      
                            $stmt5->bindParam(":b5",$bachsem5nd2dma);      
                            $stmt5->bindParam(":b6",$bachsem6nd2dma);      
                            $stmt5->bindParam(":b7",$bachsem7nd2dma);      
                            $stmt5->bindParam(":b8",$bachsem8nd2dma);
                            $stmt5->bindParam(":university_b",$university_b);
                            $stmt5->bindParam(":institute_b",$institute_b);
                            $stmt5->bindParam(":specialization_b",$specialization_b);
                            $stmt5->bindParam(":degree_b",$degree_b);
                            $stmt5->execute();
                           //print_r($stmt5 ->errorinfo());
                          if($stmt5 == TRUE){
                            echo "<script>alert('Data Insert')</script>";
                           }
                           else{
                            echo "<script>alert('Data Are Not Insert')</script>";
                           }                            
                }
        }

    }
   
  }
  elseif ($d2d == "0") {
      if($type == "BA"){
                 $sid = $data["STUDENT_ID"];
                 $tenthBoard = $_REQUEST["10thBoard"];
                 $tenthschool = $_REQUEST["10thschool"];
                 $tenper=$_REQUEST["10thper"];
                 $tw0baboard=$_REQUEST["12thBoard"];
                 $tw0sp=$_REQUEST["12thspecialization"];
                 if($tw0sp == "OTHERS"){
                  $tw0sp=$_REQUEST["others_sp_ba_12th"];
                 }
                 $twper=$_REQUEST["12thper"];
                 $twschoolname=$_REQUEST["12thpassschool"]; 
                 $b1=$_REQUEST["bach1semba"];  
                 $b2=$_REQUEST["bach2semba"];
                 $b3=$_REQUEST["bach3semba"];
                 $b4=$_REQUEST["bach4semba"];
                 $b5=$_REQUEST["bach5semba"];
                 $b6=$_REQUEST["bach6semba"];
                 $university_b=$_REQUEST["bunamema"];
                 $institute_b=$_REQUEST["bmainstitute"];
                 $specialization_b=$_REQUEST["degreesp"];
                 $degree_b=$_REQUEST["bdgree"]; 
                 if($degree_b == "OTHERS"){
                 $degree_b=$_REQUEST["others_sp_bach_ma"]; 
                  }
                 $stmt6=$con->prepare("CALL B6(:sid,:10board,:10school,:per10,:12board,:12school,:12stream,:12per,:b1,:b2,:b3,:b4,:b5,:b6,:university_b,:institute_b,:specialization_b,:degree_b);");  
                 $stmt6->bindParam(":sid",$sid);    
                 $stmt6->bindParam(":10board",$tenthBoard);
                 $stmt6->bindParam(":10school",$tenthschool);
                 $stmt6->bindParam(":per10",$tenper); 
                 $stmt6->bindParam(":12board",$tw0baboard);    
                 $stmt6->bindParam(":12school",$twschoolname);      
                 $stmt6->bindParam(":12stream",$tw0sp);      
                 $stmt6->bindParam(":12per",$twper);      
                 $stmt6->bindParam(":b1",$b1);                       
                 $stmt6->bindParam(":b2",$b2);
                 $stmt6->bindParam(":b3",$b3);
                 $stmt6->bindParam(":b4",$b4);
                 $stmt6->bindParam(":b5",$b5);
                 $stmt6->bindParam(":b6",$b6);
                 $stmt6->bindParam(":university_b",$university_b);
                 $stmt6->bindParam(":institute_b",$institute_b);
                 $stmt6->bindParam(":specialization_b",$specialization_b);
                 $stmt6->bindParam(":degree_b",$degree_b);
                 $stmt6->execute();
                  $stmt6=$con->prepare("CALL B6(:sid,:10board,:10school,:per10,:12board,:12school,:12stream,:12per,:b1,:b2,:b3,:b4,:b5,:b6,:university_b,:institute_b,:specialization_b,:degree_b);");  
                 $stmt6->bindParam(":sid",$sid);    
                 $stmt6->bindParam(":10board",$tenthBoard);
                 $stmt6->bindParam(":10school",$tenthschool);
                 $stmt6->bindParam(":per10",$tenper); 
                 $stmt6->bindParam(":12board",$tw0baboard);    
                 $stmt6->bindParam(":12school",$twschoolname);      
                 $stmt6->bindParam(":12stream",$tw0sp);      
                 $stmt6->bindParam(":12per",$twper);      
                 $stmt6->bindParam(":b1",$b1);                       
                 $stmt6->bindParam(":b2",$b2);
                 $stmt6->bindParam(":b3",$b3);
                 $stmt6->bindParam(":b4",$b4);
                 $stmt6->bindParam(":b5",$b5);
                 $stmt6->bindParam(":b6",$b6);
                 $stmt6->bindParam(":university_b",$university_b);
                 $stmt6->bindParam(":institute_b",$institute_b);
                 $stmt6->bindParam(":specialization_b",$specialization_b);
                 $stmt6->bindParam(":degree_b",$degree_b);
                 $stmt6->execute();
                 //print_r($stmt6->errorinfo());
                 if($stmt6 == TRUE){
                            echo "<script>alert('Data Insert')</script>";
                 }
                 else{
                            echo "<script>alert('Data Are Not Insert')</script>";
                 } 

      } 
      elseif ($type == "MA") {

                 $sid = $data["STUDENT_ID"];
                 $tenthBoard = $_REQUEST["10thBoard"];
                 $tenthschool = $_REQUEST["10thschool"];
                 $tenper=$_REQUEST["10thper"];
                 $tw0baboard=$_REQUEST["12thBoard"];
                 $tw0sp=$_REQUEST["12thspecialization"];
                 if($tw0sp == "OTHERS"){
                  $tw0sp=$_REQUEST["others_sp_ba_12th"];
                 }
                 $twper=$_REQUEST["12thper"];
                 $twschoolname=$_REQUEST["12thpassschool"];
                 $bachinsma=$_REQUEST["bmainstitute"];
                 $bachspma=$_REQUEST["degreesp"];  
                 $bachdegreema=$_REQUEST["bdgree"]; 
                 if($bachdegreema == "OTHERS"){
                  $bachdegreema=$_REQUEST["others_sp_bach_ma"]; 
                 } 
                 $bachuniversityma=$_REQUEST["bunamema"];
                 $bsem1ma=$_REQUEST["b1semma"];
                 $bsem2ma=$_REQUEST["b2semma"];
                 $bsem3ma=$_REQUEST["b3semma"];
                 $bsem4ma=$_REQUEST["b4semma"];
                 $bsem5ma=$_REQUEST["b5semma"];
                 $bsem6ma=$_REQUEST["b6semma"]; 
                 $msem1ma=$_REQUEST["m1sem"];
                 $msem2ma=$_REQUEST["m2sem"];
                 $msem3ma=$_REQUEST["m3sem"];
                 $msem4ma=$_REQUEST["m4sem"];                   
                 $university_m=$_REQUEST["masteruname"];
                 $institute_m=$_REQUEST["masterins"];
                 $specialization_m=$_REQUEST["mastersp"];
                 $degree_m=$_REQUEST["masterdegree"]; 
                 if($degree_m == "OTHERS"){
                 $degree_m=$_REQUEST["others_sp_master_type_ma"]; 
                  }
                $stmt7=$con->prepare("CALL B6M4(:sid,:10board,:10school,:per10,:12board,:12school,:12stream,:12per,:buni,:bins,:bsp,:bdegree,:b1,:b2,:b3,:b4,:b5,:b6,:m1,:m2,:m3,:m4,:university_m,:institute_m,:specialization_m,:degree_m);");  
                 $stmt7->bindParam(":sid",$sid);    
                 $stmt7->bindParam(":10board",$tenthBoard);
                 $stmt7->bindParam(":10school",$tenthschool);
                 $stmt7->bindParam(":per10",$tenper); 
                 $stmt7->bindParam(":12board",$tw0baboard);    
                 $stmt7->bindParam(":12school",$twschoolname);      
                 $stmt7->bindParam(":12stream",$tw0sp);      
                 $stmt7->bindParam(":12per",$twper);
                 $stmt7->bindParam(":buni",$bachuniversityma);
                 $stmt7->bindParam(":bins",$bachinsma);
                 $stmt7->bindParam(":bsp",$bachspma);
                 $stmt7->bindParam(":bdegree",$bachdegreema);
                 $stmt7->bindParam(":b1",$bsem1ma);
                 $stmt7->bindParam(":b2",$bsem2ma);
                 $stmt7->bindParam(":b3",$bsem3ma);
                 $stmt7->bindParam(":b4",$bsem4ma);
                 $stmt7->bindParam(":b5",$bsem5ma);
                 $stmt7->bindParam(":b6",$bsem6ma);
                 $stmt7->bindParam(":m1",$msem1ma);
                 $stmt7->bindParam(":m2",$msem2ma);
                 $stmt7->bindParam(":m3",$msem3ma);
                 $stmt7->bindParam(":m4",$msem4ma);
                 $stmt7->bindParam(":university_m",$university_m);
                 $stmt7->bindParam(":institute_m",$institute_m);
                 $stmt7->bindParam(":specialization_m",$specialization_m);
                 $stmt7->bindParam(":degree_m",$degree_m);
                 $stmt7->execute();
                 
                $stmt7=$con->prepare("CALL B6M4(:sid,:10board,:10school,:per10,:12board,:12school,:12stream,:12per,:buni,:bins,:bsp,:bdegree,:b1,:b2,:b3,:b4,:b5,:b6,:m1,:m2,:m3,:m4,:university_m,:institute_m,:specialization_m,:degree_m);");  
                 $stmt7->bindParam(":sid",$sid);    
                 $stmt7->bindParam(":10board",$tenthBoard);
                 $stmt7->bindParam(":10school",$tenthschool);
                 $stmt7->bindParam(":per10",$tenper); 
                 $stmt7->bindParam(":12board",$tw0baboard);    
                 $stmt7->bindParam(":12school",$twschoolname);      
                 $stmt7->bindParam(":12stream",$tw0sp);      
                 $stmt7->bindParam(":12per",$twper);
                 $stmt7->bindParam(":buni",$bachuniversityma);
                 $stmt7->bindParam(":bins",$bachinsma);
                 $stmt7->bindParam(":bsp",$bachspma);
                 $stmt7->bindParam(":bdegree",$bachdegreema);
                 $stmt7->bindParam(":b1",$bsem1ma);
                 $stmt7->bindParam(":b2",$bsem2ma);
                 $stmt7->bindParam(":b3",$bsem3ma);
                 $stmt7->bindParam(":b4",$bsem4ma);
                 $stmt7->bindParam(":b5",$bsem5ma);
                 $stmt7->bindParam(":b6",$bsem6ma);
                 $stmt7->bindParam(":m1",$msem1ma);
                 $stmt7->bindParam(":m2",$msem2ma);
                 $stmt7->bindParam(":m3",$msem3ma);
                 $stmt7->bindParam(":m4",$msem4ma);
                 $stmt7->bindParam(":university_m",$university_m);
                 $stmt7->bindParam(":institute_m",$institute_m);
                 $stmt7->bindParam(":specialization_m",$specialization_m);
                 $stmt7->bindParam(":degree_m",$degree_m);
                 $stmt7->execute();
                 //print_r($stmt7->errorinfo());
                  if($stmt7 == TRUE){
                            echo "<script>alert('Data Insert')</script>";
                  }
                  else{
                            echo "<script>alert('Data Are Not Insert')</script>";
                  }
      } 
      elseif ($type == "IBM") {
        
                 $sid = $data["STUDENT_ID"];
                 $tenthBoard = $_REQUEST["10thBoard"];
                 $tenthschool = $_REQUEST["10thschool"];
                 $tenper=$_REQUEST["10thper"];
                 $tw0baboard=$_REQUEST["12thBoard"];
                 $tw0sp=$_REQUEST["12thspecialization"];
                 if($tw0sp == "OTHERS"){
                  $tw0sp=$_REQUEST["others_sp_ba_12th"];
                 }
                 $twper=$_REQUEST["12thper"];
                 $twschoolname=$_REQUEST["12thpassschool"];
                 $i1=$_REQUEST["i1sem"];
                 $i2=$_REQUEST["i2sem"];
                 $i3=$_REQUEST["i3sem"];
                 $i4=$_REQUEST["i4sem"];
                 $i5=$_REQUEST["i5sem"];
                 $i6=$_REQUEST["i6sem"];
                 $i7=$_REQUEST["i7sem"];
                 $i8=$_REQUEST["i8sem"];
                 $i9=$_REQUEST["i9sem"];
                 $i10=$_REQUEST["i10sem"];
                 $university_m=$_REQUEST["masteruname"];
                 $institute_m=$_REQUEST["masterins"];
                 $specialization_m=$_REQUEST["mastersp"];
                 $degree_m=$_REQUEST["masterdegree"]; 
                 if($degree_m == "OTHERS"){
                 $degree_m=$_REQUEST["others_sp_master_type_ma"]; 
                  }

                 $stmt8=$con->prepare("CALL I10(:sid,:10board,:10school,:per10,:12board,:12school,:12stream,:12per,:i1,:i2,:i3,:i4,:i5,:i6,:i7,:i8,:i9,:i10,:university_m,:institute_m,:specialization_m,:degree_m);");  
                 $stmt8->bindParam(":sid",$sid);    
                 $stmt8->bindParam(":10board",$tenthBoard);
                 $stmt8->bindParam(":10school",$tenthschool);
                 $stmt8->bindParam(":per10",$tenper); 
                 $stmt8->bindParam(":12board",$tw0baboard);    
                 $stmt8->bindParam(":12school",$twschoolname);      
                 $stmt8->bindParam(":12stream",$tw0sp);      
                 $stmt8->bindParam(":12per",$twper);      
                 $stmt8->bindParam(":i1",$i1);
                 $stmt8->bindParam(":i2",$i2);
                 $stmt8->bindParam(":i3",$i3);
                 $stmt8->bindParam(":i4",$i4);      
                 $stmt8->bindParam(":i5",$i5);
                 $stmt8->bindParam(":i6",$i6);
                 $stmt8->bindParam(":i7",$i7);
                 $stmt8->bindParam(":i8",$i8);
                 $stmt8->bindParam(":i9",$i9);
                 $stmt8->bindParam(":i10",$i10);
                 $stmt8->bindParam(":university_m",$university_m);
                 $stmt8->bindParam(":institute_m",$institute_m);
                 $stmt8->bindParam(":specialization_m",$specialization_m);
                 $stmt8->bindParam(":degree_m",$degree_m);
                 $stmt8->execute();               
                 $stmt8=$con->prepare("CALL I10(:sid,:10board,:10school,:per10,:12board,:12school,:12stream,:12per,:i1,:i2,:i3,:i4,:i5,:i6,:i7,:i8,:i9,:i10,:university_m,:institute_m,:specialization_m,:degree_m);");  
                 $stmt8->bindParam(":sid",$sid);    
                 $stmt8->bindParam(":10board",$tenthBoard);
                 $stmt8->bindParam(":10school",$tenthschool);
                 $stmt8->bindParam(":per10",$tenper); 
                 $stmt8->bindParam(":12board",$tw0baboard);    
                 $stmt8->bindParam(":12school",$twschoolname);      
                 $stmt8->bindParam(":12stream",$tw0sp);      
                 $stmt8->bindParam(":12per",$twper);      
                 $stmt8->bindParam(":i1",$i1);
                 $stmt8->bindParam(":i2",$i2);
                 $stmt8->bindParam(":i3",$i3);
                 $stmt8->bindParam(":i4",$i4);      
                 $stmt8->bindParam(":i5",$i5);
                 $stmt8->bindParam(":i6",$i6);
                 $stmt8->bindParam(":i7",$i7);
                 $stmt8->bindParam(":i8",$i8);
                 $stmt8->bindParam(":i9",$i9);
                 $stmt8->bindParam(":i10",$i10);
                 $stmt8->bindParam(":university_m",$university_m);
                 $stmt8->bindParam(":institute_m",$institute_m);
                 $stmt8->bindParam(":specialization_m",$specialization_m);
                 $stmt8->bindParam(":degree_m",$degree_m);
                 $stmt8->execute();
                 print_r($stmt8->errorinfo());
                  if($stmt8 == TRUE){
                            echo "<script>alert('Data Insert')</script>";
                  }
                  else{
                            echo "<script>alert('Data Are Not Insert')</script>";
                  } 

      }

  }
}
 ?>
 <?php
  if (isset($_REQUEST['submit2'])) {
      $sid=$data["STUDENT_ID"];
      $technical_skills="";
      $person_skills="";
      $language="";
      $project="";
      $achivement="";  
      $carrier_objective=$_REQUEST['carrier_objective'];


    if (isset($_REQUEST['t'])) {
      $technical_skills=implode('#', $_REQUEST['t']);
    }
    else{
      $technical_skills=null;
    }


    if (isset($_REQUEST['p'])) {
      $person_skills=implode('#', $_REQUEST['p']);
    }
    else{
      $person_skills=null;
    }


    if (isset($_REQUEST['l'])) {
      $language=implode('#', $_REQUEST['l']);
     // echo '-----------------------------------------'."$lunguage";
    }
    else{
      $language=null;
    }


    if (isset($_REQUEST['pr'])) {
      $project=implode('#', $_REQUEST['pr']);
      //echo '-----------------------------------------'."$project";
    }
    else{
      $project=null;
    }


    if (isset($_REQUEST['ac'])) {
      $achivement=implode('#', $_REQUEST['ac']);
      //echo '-----------------------------------------'."$achivement";
    }
    else{
      $achivement=null;
    }

    // $sid="1";
    // $technical_skills="1";
    // $person_skills="1";
    // $language="1";
    // $project="1";
    // $achivement="1";  
    // $carrier_objective="1";

    //include('../Files/PDO/dbcon.php');
    $stmt=$con->prepare("CALL INSERT_UPDATE_RESUME(:sid,:tskill,:pskills,:language,:project,:achivement,:cob);");
    $stmt->bindparam(':sid',$sid);
    $stmt->bindparam(':tskill',$technical_skills);
    $stmt->bindparam(':pskills',$person_skills);
    $stmt->bindparam(':language',$language);
    $stmt->bindparam(':project',$project);
    $stmt->bindparam(':achivement',$achivement);
    $stmt->bindparam(':cob',$carrier_objective);
    $stmt->execute();
    // print_r($stmt->errorinfo());
    if($stmt  == TRUE){
        echo "<script>alert('Data inserted')</script>";
    }else{
        echo "<script>alert('Data Not inserted')</script>";
    }

  }
?>