<?php 
require_once('connection.php');
include('templates/header.php');
?>
<div class="signup_form">
     <div class="container bootstrap snippets bootdey">

          <div class="row">
               <div class="col col-lg-6 col-md-9 col-sm-12 offset-lg-3">
                    <div class="container " style="padding: 10px;">
                         <div class="panel">
                              <h3 style="text-align:center">Registration </h3>
                         </div>
                         <form action="controllers/signup_validation.php" method="POST">
                              <div class="form-group">
                                   <label for="aadharno">Aadhar Card Number</label>
                                   <input type="number" class="form-control" id="aadharno" name="aadharno" value=""
                                        style="text-align:left;" required>
                              </div>
                              <br>
                              <div class="form-group">
                                   <label for="empid">Employee ID</label>
                                   <input type="text" class="form-control" id="empid" name="empid" value=""
                                        style="text-align:left;" required>
                              </div>
                              <br>
                              <div class="form-group">
                                   <label for="emailid">Email ID</label>
                                   <input type="email" class="form-control" id="emailid" name="emailid" value=""
                                        style="text-align:left;" required>
                              </div>
                              <br>
                              <div class="form-group">
                                   <label for="institute">Institute</label>
                                   <select class="form-control" id="institute" name="institute" value="" required>
                                        <option selected>Select</option>
                                        <option value="SOE">SOE</option>
                                        <option value="SANGEET">SANGEET</option>
                                        <option value="MANET">MANET</option>
                                   </select>
                              </div>
                              <br>
                              <div class="form-group">
                                   <label for="designation">Designation</label>
                                   <select class="form-control" id="designation" name="designation" value="" required>
                                        <option selected>Select</option>
                                        <option value="HOD">HOD</option>
                                        <option value="PRINCIPAL">PRINCIPAL</option>
                                        <option value="PROFESSOR">PROFESSOR</option>
                                   </select>
                              </div>
                              <br>
                              <div class="form-inline">
                                   <div class="form-group">
                                        <label for="exampleFormControlSelect1">Branch</label>
                                        <select class="form-control" id="exampleFormControlSelect1"
                                             name="exampleFormControlSelect1" value="" required>
                                             <option selected>Select</option>
                                             <option value="CSE">CSE</option>
                                             <option value="MECHANICAL">MECHANICAL</option>
                                             <option value="IT">IT</option>
                                        </select>
                                   </div>
                                   <br>
                                   <!--
                                        <div class="form-group">
                                             <label for="exampleInputEmail1">Password</label>
                                             <input type="password" class="form-control" id="password" name="password"
                                                  value="" style="text-align:left;" required>
                                        </div>
                                        <br>
                                        -->

                                   <button type="submit" name="signup" class="btn btn-primary"
                                        onclick="generatePassword()">Submit & Notify </button>
                                   <small>OTP will be sent on email provided. Login using the OTP.</small>
                                   <br>
                         </form>
                    </div>
               </div>
          </div>
     </div>

</div>
<?php include ('templates/footer.php'); ?>

<?php
        include ('templates/footer.php');
        ?>


<script>
function generatePassword() {

}
</script>
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