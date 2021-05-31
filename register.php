<?php 
require_once('connection.php');
include('templates/header.php');
?>


     <div class="container bootstrap snippets bootdey">
          <div class="row">
               <div class="col-12 col-md-12 col-lg-3">
                    <?php include('profile.php');  ?>
               </div>
               <div class="profile-info col-md-12 col-lg-9">
                    <div class="panel">
                         <h3 style="text-align:center">Performance Appraisal </h3>     
                    </div>
                    <div class="panel">
                         <div class="bio-graph-heading">
                              FORM A
                         </div>
                         <br>
                         <div class="container" style="padding-top:10px; text-align:left;"><h5>PERSONAL INFORMATION</h5></div>
                         <br>
                         <div class="panel-body bio-graph-info">
                              <div class="container">
                                   <form action="controllers/form_data_validation.php" method="POST"  enctype="multipart/form-data">
                                        <div class="form-row">
                                             <div class="form-group ">
                                                  <label for="firstName">First Name</label>
                                                  <input type="text" class="form-control" id="firstName" name="firstName">
                                             </div>
                                             <br>
                                             <div class="form-group ">
                                                  <label for="lastName">Last Name</label>
                                                  <input type="text" class="form-control" id="lastName" name="lastName">
                                             </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                             <label for="fatherName">Father's Name</label>
                                             <input type="text" class="form-control" id="fatherName" name="fatherName">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                             <label for="dob">Date of Birth</label>
                                             <input type="date" class="form-control" id="dob" name="dob">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                             <label for="gender">Gender</label>
                                             <select class="form-control" id="gender" name="gender">
                                                  <option selected>Select</option>
                                                  <option value="Male">Male</option>
                                                  <option value="Female">Female</option>
                                                  <option value="Other">Other</option>
                                             </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                             <label for="maritalStatus">Marital Status</label>
                                             <select class="form-control" id="maritalStatus" name="maritalStatus">
                                                  <option selected>Select</option>
                                                  <option value="Married">Married</option>
                                                  <option value="Unmarried">Unmarried</option>
                                             </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                             <label for="dependents">No. of Childeren(s)</label>
                                             <input type="text" class="form-control" id="dependents" name="dependents">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                             <label for="nationality">Nationality</label>
                                             <input type="text" class="form-control" id="nationality" name="nationality">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                             <label for="religion">Religion</label>
                                             <input type="text" class="form-control" id="religion" name="religion">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                             <label for="caste">Caste</label>
                                             <input type="text" class="form-control" id="caste" name="caste">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                             <label for="subCategory">Sub Category</label>
                                             <input type="text" class="form-control" id="subCategory" name="subCategory">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                             <label for="permanentAddress">Permanent Address</label>
                                             <input type="text" class="form-control" id="permanentAddress" name="permanentAddress">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                             <label for="correspondentAddress">Address of correspondance</label>
                                             <input type="text" class="form-control" id="correspondentAddress" name="correspondentAddress">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                             <label for="email">Email</label>
                                             <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                             <label for="eid">Employee ID</label>
                                             <input type="text" class="form-control" id="eid" name="eid">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                             <label for="designation">Designation</label>
                                             <select name="designation" class='form-control' id="des">
                                                  <option selected>Select</option>
                                                  <option value="Fresher">Fresher</option>
                                                  <option value="Professor">Professor</option>
                                                  <option value="Associate Professor">Associate Professor</option>
                                                  <option value="Assistant Professor">Assistant Professor</option>
                                                  <option value="Teaching Assistant">Teaching Assistant</option>
                                                  <option value="Technical Assistant">Technical Assistantt</option>
                                                  <option value="Lab Assistant">Lab Assistant</option>
                                             </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                             <label for="mobile">Phone Number</label>
                                             <input type="text" class="form-control" id="mobile" name="mobile">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                             <label for="pwd">Password</label> &nbsp; <i id="ipass" class="fa fa-eye" style="padding-top: 15px;" onclick="hideshowpass()"></i>
                                             <input type="password" class="form-control" id="pwd" name="pwd" value="<?php echo @$_COOKIE['cpass'];?>">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                             <label for="myFile">Upload Photo</label>
                                             <input type="file" class="form-control" id="myFile" name="profilePhoto">
                                        </div>
                                        
                                        <br>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                   </form>
                                   <br>
                              </div>

<?php /*
                              <!--form start -->
                              <form action="controllers/form_data_validation.php" method="POST"  enctype="multipart/form-data">
                                   <div class="row">
                                        <div class="bio-row">
                                             <p><span>First Name </span> <input class="input" name="firstName" /></p>
                                        </div>
                                        <div class="bio-row">
                                             <p><span>Last Name </span> <input class="input" name="lastName" /></p>
                                        </div>
                                        <div class="bio-row">
                                             <p><span>Father's Name</span> <input class="input" name="fatherName" /></p>
                                        </div>
                                        <div class="bio-row">
                                             <p><span>No. of Children</span> <input class="input" name="dependents" />
                                             </p>
                                        </div>
                                        <div class="bio-row">
                                             <p><span>Date of birth</span><input type="date" name="dob" /></p>
                                        </div>
                                        <div class="bio-row">
                                             <p><span>Gender</span> 
                                                  <select class="input" name="gender">
                                                       <option value="0">Choose Gender...</option>
                                                       <option value="Male">Male</option>
                                                       <option value="Female">Female</option>
                                                       <option value="Other">Other</option>
                                                  </select>
                                                       <!-- <input class="input" name="gender" /></p> -->
                                        </div>
                                        <div class="bio-row">
                                             <p><span>Marital Status:</span>
                                             <select class="input" name="maritalStatus">
                                                  <option value="0">Choose Marital Status</option>
                                                  <option value="Married">Married</option>
                                                  <option value="Unmarried">Unmarried</option>
                                             </select> 
                                                  <!-- <input class="input" name="maritalStatus" /></p> -->
                                        </div>
                                        <div class="bio-row">
                                             <p><span>Nationality</span> <input class="input" name="nationality" /></p>
                                        </div>
                                        <div class="bio-row">
                                             <p><span>Religion</span> <input class="input" name="religion" /></p>
                                        </div>
                                        <div class="bio-row">
                                             <p><span>Caste</span> <input class="input" name="caste" /></p>
                                        </div>
                                        <div class="bio-row">
                                             <p><span>Sub-Category</span> <input class="input" name="subCategory" /></p>
                                        </div>
                                        <div class="bio-row">
                                             <p><span>Permanent Address </span><textarea class="form-control"
                                                       id="form6Example7" rows="4" name="permanentAddress"></textarea>
                                             </p>
                                        </div>

                                        <div class="bio-row">
                                             <p><span>Address of correspondance</span><textarea class="form-control"
                                                       id="form6Example7" rows="4"
                                                       name="correspondentAddress"></textarea></p>
                                        </div>
                                        <div class="bio-row">
                                             <p><span>Current designation and grade pay</span> <input class="input"
                                                       name="designation" /></p>
                                        </div>
                                   </div>
                                   <!---------->
                                   <div class="panel-body bio-graph-info">
                                        Are you existing employee:
                                        <input id='watch-me' name='emp' type='radio' value="yes" /> Yes
                                        <input id='no-watch' name='emp' type='radio' value="no" />No<br />
                                   </div>
                                   <div id='show-me' class='panel-body bio-graph-info' style='display:none'>
                                        <div class="bio-row">
                                             <p><span>Email </span>: <input type="email" class="email" name="email" />
                                             </p>
                                        </div>
                                        <div class="bio-row">
                                             <p><span>Employee id</span>: <input class="eid" name="eid" value="" /></p>
                                        </div>
                                        <div class="panel-body bio-graph-info">
                                             <label for="Designation">Designation:</label>
                                             <select name="designation" class='Designation' id="des">
                                                  <option value="Fresher">Fresher</option>
                                                  <option value="Professor">Professor</option>
                                                  <option value="Associate Professor">Associate Professor</option>
                                                  <option value="Assistant Professor">Assistant Professor</option>
                                                  <option value="Teaching Assistant">Teaching Assistant</option>
                                                  <option value="Technical Assistant">Technical Assistantt</option>
                                                  <option value="Lab Assistant">Lab Assistant</option>
                                             </select>
                                        </div>
                                   </div>


                                   <br>
                                   <div class="bio-row">
                                        <p><span>Phone Number</span>: <input type="tel" name="mobile" id="phn"
                                                  value="" /></p>
                                   </div>
                                   <div class="bio-row">
                                        <p><span>Password:</span>: <input type="password" id="pwd" name="pwd" value="<?php echo @$_COOKIE['cpass'];?>" required>
                                                            <i id="ipass" class="fa fa-eye" style="padding-top: 15px;" onclick="hideshowpass()"></i></p>
                                        <!-- <div class="center"> -->
                                             <!-- <div class="form-element"> -->
                                                  
                                                            
                                                       
                                                  <!-- </div> -->
                                             <!-- <div class="form">
                                                  <div class="form-element">
                                                       <input type="password" id="password-field">
                                                       <div class="toggle-password">
                                                            <i class="fa fa-eye"></i>
                                                            <i class="fa fa-eye-slash"></i>
                                                       </div>
                                                       <div class="password-policies">
                                                            <div class="policy-length">
                                                                 8 Characters
                                                            </div>
                                                            <div class="policy-number">
                                                                 Contains Number
                                                            </div>
                                                            <div class="policy-uppercase">
                                                                 Contains Uppercase
                                                            </div>
                                                            <div class="policy-special">
                                                                 Contains Special Characters
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div> -->
                                        <!-- </div> -->
                                   </div>


                                   <br>
                                   <br>
                                   <div class="panel-body bio-graph-info">
                                        <p><span>Whether acquired and Degrees/Fresh academic Qualifications this
                                                  year:</span></span> <input class="input" value="" /></p>

                                   </div>
                                   <div class="panel-body bio-graph-info">
                                   
                                   <p><span>UPLOAD PHOTO       </span></p>
                                   <input type="file" id="myFile" name="profilePhoto">
                                   
                                   
                                   </div>

                                   <div class="panel-body bio-graph-info">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                   </div>

                              </form>
                              <!-- form end-->
*/?>

                         </div>
                        <!--  <div class="align-right">
                              <a href="blank - Form B2 - SELFR.php"><button class="btn btn-primary "
                                        type="link">NEXT</button></a>

                         </div> -->

                    </div>
               </div>


          </div>
     </div>


          <?php
        include ('templates/footer.php');
        ?>
     

     <script src="jquery-1.11.3.js"></script>
     <script>
               function hideshowpass() {
                 var txtPassword = document.getElementById('pwd');
                 if (txtPassword.type === "password") {
                    txtPassword.type="text";

                    var p1 = document.getElementById('ipass');
                    p1.setAttribute('class', 'fa fa-eye-slash');
                 }
                 else{
                    txtPassword.type="password";

                    var p1 = document.getElementById('ipass');
                    p1.setAttribute('class', 'fa fa-eye');
                 }
             }
          </script>
     <script>
          $(document).ready(function() {
               $("#watch-me").click(function() {
                    $("#show-me:hidden").show('slow');
               });
               $("#no-watch").click(function() {
                    $("#show-me").hide();
               });
               $("#watch-me").click(function() {
                    if ($('watch-me').prop('checked') === false) {
                         $('#show-me').hide();
                    }
               });
          });
     </script>
     <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
     <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
     <script type="text/javascript">
     $(document).on('ready', function() {
          var educationalRow = 2;
          var workRow = 2;

          $('#addEducationalRowBtn').on('click', function() {
               $('#educationalBody').append('<tr> <th scope="row">' + educationalRow +
                    '</th><td><input name="ex2" spellcheck="false" maxlength="13" style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13" style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13"style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13"style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13" style="width: 135px;"></td> </tr>'
               );
               educationalRow += 1;
          });

          $('#addWorkRowBtn').on('click', function() {
               $('#workBody').append('<tr> <th scope="row">' + workRow +
                    '</th><td><input name="ex2" spellcheck="false" maxlength="13" style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13" style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13"style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13"style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13" style="width: 135px;"></td> </tr>'
               );
               workRow += 1;
          });
     });
     </script>

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

