<?php 
require_once('connection.php');
include('templates/header.php');
?>
<div class="signup_form" >
     <div class="container bootstrap snippets bootdey">
          
          <div class="row">
               <div class="col col-lg-6 col-md-9 col-sm-12 offset-lg-3">
                    <div class="container " style="padding: 10px;">
                         <div class="panel">
                              <h3 style="text-align:center">Sign Up </h3>                         
                         </div>
                         <form action="" method="">
                              <div class="form-group">
                                   <label for="aadharno">Aadhar Card Number</label>
                                   <input type="number" class="form-control" id="aadharno" name="password" value="" style="text-align:left;" required >
                              </div>
                              <br>
                              <div class="form-group">
                                   <label for="empid">Employee ID</label>
                                   <input type="text" class="form-control" id="empid" name="password" value="" style="text-align:left;" required>
                              </div>
                              <br>
                              <div class="form-group">
                                   <label for="institute">Institute</label>
                                   <select class="form-control" id="institute" name="institute" value="" required>
                                        <option>Select</option>
                                        <option>SOE</option>
                                        <option>SANGEET</option>
                                        <option>MANET</option>
                                        <option>4</option>
                                        <option>5</option>
                                   </select>
                              </div>
                              <br>
                              <div class="form-group">
                                   <label for="designation">Designation</label>
                                   <select class="form-control" id="designation" name="designation" value="" required>
                                        <option>Select</option>
                                        <option>HOD</option>
                                        <option>PRINCIPAL</option>
                                        <option>PROFESSOR</option>
                                        <option>4</option>
                                        <option>5</option>
                                   </select>
                              </div>
                              <br>
                              <div class="form-inline">
                              <div class="form-group">
                                   <label for="exampleFormControlSelect1">Branch</label>
                                   <select class="form-control" id="exampleFormControlSelect1" name="" value="" required>
                                        <option>Select</option>
                                        <option>CSE</option>
                                        <option>MECHANICAL</option>
                                        <option>IT</option>
                                        <option>4</option>
                                        <option>5</option>
                                   </select>
                              </div>
                              <br>
                              <div class="form-group">
                                   <label for="exampleInputEmail1">Password</label>
                                   <input type="password" class="form-control" id="password" name="password" value="" style="text-align:left;" required>
                              </div>
                              <br>
                              <div class="form-group">
                                   <label for="confirmpassword">Confirm Password</label>
                                   <input type="password" class="form-control" id="confirmpassword" name="confirmpassowrd" value="" style="text-align:left;" required>
                              </div>
                              <br>
                              <button type="submit" class="btn btn-primary">Sign Up</button>
                              <br>
                         </form>
                    </div>
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

