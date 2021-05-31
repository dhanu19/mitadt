<?php 
require_once('connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

     <title>contributionself</title>
     <!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

     <!-- Additional CSS Files -->
     <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> -->

     <!-- <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css"> -->

     <link rel="stylesheet" href="assets/css/templatemo-softy-pinko.css">



     <link rel="stylesheet" href="assets/css/style1.css">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
     <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

     <?php
        include('headerself.php');
    ?>
     </div>
     <div class="container bootstrap snippets bootdey">
          <div class="row">
               <div>
                    <?php
                    include('profile.php');
                    ?>
               </div>
               <div class="profile-info col-md-9">
                    <div class="panel">
                         
                         <h3 style="text-align:center">Performance Appraisal </h3>
                                   
                    </div>
                    <div class="panel">
                         <div class="bio-graph-heading">
                              FORM A
                         </div>
                         <div class="panel-body bio-graph-info">
                              <h1>Bio Graph</h1>
                              <div class="row">
                                   <div class="bio-row">
                                        <p><span>Name </span>: <input class="input" value="" /></p>
                                   </div>
                                   <div class="bio-row">
                                        <p><span>Adhaar Number </span>: <input class="input" value="" /></p>
                                   </div>
                                   <!---------->
                                   <div class="panel-body bio-graph-info">
                                        <p><span>Are you an existing employee?</span></p>
                                        <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                  id="inlineRadio1" value="option1">
                                             <label class="form-check-label" for="inlineRadio1"><span>Yes</span></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                  id="inlineRadio2" value="option2">
                                             <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
                                   </div>
                                   <!---------------->
                                   <div class="panel-body bio-graph-info">
                                        <p><span>Designation:</span></p>
                                        <select class="custom-select">
                                             <option selected="">Select</option>
                                             <option value="1">Ui designer</option>
                                             <option value="2">JS developer</option>
                                             <option value="3">Web developer</option>
                                        </select>
                                   </div>
                                   <br>
                                   <!-------------------->
                                   <div class="bio-row">
                                        <p><span>Email </span>: <input type="email" value="" /></p>
                                   </div>
                                   <div class="bio-row">
                                        <p><span>Phone Number</span>: <input type="tel" value="" /></p>
                                   </div>
                                   <div class="bio-row">
                                        <p><span>Password </span>: <input type="Password" value="" /></p>
                                   </div>
                                   <div class="bio-row">
                                        <p><span> Re-Enter Password </span>: <input type="Password" value="" /></p>
                                   </div>

                              </div>
                         </div>
                    </div>
                    <div>



                    </div>
               </div>
          </div>
     </div>
     <div>
          <?php
        include ('footer.php');
        ?>
     </div>
     <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
     <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
     <script type="text/javascript">

     </script>
     </br>
     </br>


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



</body>

</html>