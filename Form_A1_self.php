<?php 
require_once('connection.php');
include('templates/header.php');
//include('headerself.php');
?>
     
     <div class="container bootstrap snippets bootdey">
          <div class="row">
               <div class="col-12 col-md-12 col-lg-3">
                    <?php include('profile.php'); ?>
               </div>
               
               <div class="profile-info col-md-12 col-lg-9">
                    <div class="panel">
                         <h3 style="text-align:center">Performance Appraisal </h3>        
                    </div>
                    <br>
                    <div class="panel">
                         <div class="bio-graph-heading">
                              FROM A(Section 1)
                         </div>
                         <br>
                         <div class="container" style="padding-top:10px; text-align:left;"><h5>PERSONAL INFORMATION</h5></div>
                         <br>
                         <?php
                              $selectUserInfoQuery = "SELECT * FROM personaldetails WHERE Userid = '".$_SESSION['userId']."'";
                              $rowUserInfo = mysqli_fetch_assoc(mysqli_query($con,$selectUserInfoQuery));
                         ?>
                         

                         <form action="controllers/form_a1_validation.php" method="POST" >
                              
                              <div class="container" style="padding:0px 30px 30px 30px;">
                              
                                   <div class="form-group">
                                        <label for="empName">Employee Name</label>
                                        <input type="text" class="form-control" id="empName" name="empName" value="<?php if(isset($rowUserInfo['NameOfFacultyMember'])){echo $rowUserInfo['NameOfFacultyMember'];} ?>" style="text-align:left;">
                                   </div>
                                   <br>
                                   <div class="form-group">
                                        <label for="fatherName">Father's Name</label>
                                        <input type="text" class="form-control" id="fatherName" name="fatherName" value="<?php echo $rowUserInfo['FatherName'];?>" style="text-align:left;">
                                   </div>
                                   <br>
                                   <div class="form-group">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $rowUserInfo['DOB'];?>" style="text-align:left;">
                                   </div>
                                   <br>
                                   <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <input type="text" class="form-control" id="gender" name="gender"  value="<?php echo $rowUserInfo['Gender'];?>" style="text-align:left;">
                                   </div>
                                   <br>
                                   <div class="form-group">
                                        <label for="dependents">No of Dependents</label>
                                        <input type="text" class="form-control" id="dependents" name="dependents" value="<?php echo $rowUserInfo['NoOfDependent'];?>" style="text-align:left;">
                                   </div>
                                   <br>
                                   <div class="form-group">
                                        <label for="maritalStatus">Marital Status</label>
                                        <input type="text" class="form-control" id="maritalStatus" name="maritalStatus" value="<?php echo $rowUserInfo['MaritalStatus'];?>" style="text-align:left;">
                                   </div>
                                   <br>
                                   <div class="form-group">
                                        <label for="nationality">Nationality</label>
                                        <input type="text" class="form-control" id="nationality" name="nationality" value="<?php echo $rowUserInfo['Nationality'];?>" style="text-align:left;">
                                   </div>
                                   <br>
                                   <div class="form-group">
                                        <label for="religion">Religion</label>
                                        <input type="text" class="form-control" id="religion" name="religion" value="<?php echo $rowUserInfo['Religion'];?>" style="text-align:left;">
                                   </div>
                                   <br>
                                   <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $rowUserInfo['Email'];?>" style="text-align:left;">
                                   </div>
                                   <br>
                                   <button type="submit" value="login" class="btn btn-primary text-center">Submit</button>

                                   

                              </div>
                         </form>

                    </div>
               </div>
          </div>
     </div>


          <?php
               include ('templates/footer.php');
          ?>



     <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
     <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


     <!-- jQuery -->
     <script src="assets/js/jquery-2.1.0.min.js"></script>

     <!-- Bootstrap -->
     <script src="assets/js/popper.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>

     <!-- Plugins -->
     <script src="assets/js/scrollreveal.min.js"></script>
     <script src="assets/js/waypoints.min.js"></script>
     <script src="assets/js/jquery.counterup.min.js"></script>
     <script src="assets/js/imgfix.min.js"></script>

     <!-- Global Init -->
     <script src="assets/js/custom.js"></script>
     <!--  -->

