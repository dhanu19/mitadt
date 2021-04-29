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

     <title>FORM A (Section 2)
     </title>
     <!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

     <!-- Additional CSS Files -->
     <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> -->

     <!-- <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css"> -->

     <link rel="stylesheet" href="assets/css/templatemo-softy-pinko.css">



     <link rel="stylesheet" href="assets/css/dashboard.css">
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
               <div class="profile-nav col-md-3">
                    <div class="panel">
                         <div class="user-heading round">
                              <a href="#">
                                   <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                              </a>
                              <h1><?php if(isset($_SESSION['userName'])){
                                   echo $_SESSION['userName'];
                              }
                              else{
                                   echo "Welcome User";
                              }?></h1>
                              <p><?php if(isset($_SESSION['userEmail'])){
                                   echo $_SESSION['userEmail'];
                              }
                              ?></p>
                         </div>


                    </div>
               </div>
               <div class="profile-info col-md-9">
                    <div class="panel">
                         <form>
                              <textarea placeholder="Performance Appraisal" rows="2"
                                   class="form-control input-lg p-text-area"></textarea>
                         </form>
                    </div>




                    <div class="panel-body bio-graph-info">
                         <div class="flex-container">
                              <div class="flex-item-left " style="font-size: medium; ">Form A
                                   <p>[General inflormation]</p>
                              </div>
                              <div class="flex-item-right">
                                   <div class="dropdown">
                                        <button class="dropbtn">FORMS</button>
                                        <div class="dropdown-content">
                                             <a href="formB1self.php">1 </a>
                                             <a href="blank - Form B2self.php"> 2</a>

                                             <br>
                                        </div>

                                   </div>
                              </div>



                         </div>
                         <div class="panel-body bio-graph-info">
                              <div class="flex-container">
                                   <div class="flex-item-left " style="font-size: medium; ">Form B
                                        <p>[Academic Performance Indicators]</p>
                                   </div>
                                   <div class="flex-item-right">
                                        <div class="dropdown">
                                             <button class="dropbtn">FORMS</button>
                                             <div class="dropdown-content">
                                                  <a href="teachingself.php?userId=<?php echo $_SESSION['userId'];?>"> 1
                                                  </a>
                                                  <a href=" researchself1.php?userId=<?php echo $_SESSION['userId'];?>">
                                                       2 </a>
                                                  <a
                                                       href="cocurricularself1.php?userId=<?php echo $_SESSION['userId'];?>">
                                                       3</a>
                                                  <a
                                                       href="contributionself1.php?userId=<?php echo $_SESSION['userId'];?>">
                                                       4 </a>

                                                  <br>
                                             </div>

                                        </div>
                                   </div>



                              </div>



                         </div>
                         <div class="panel-body bio-graph-info">
                              <div class="flex-container">
                                   <div class="flex-item-left " style="font-size: medium; ">Form C
                                        <p>[Overall Summary]</p>
                                   </div>
                                   <div class="flex-item-right">
                                        <div class="dropdown">
                                             <button class="dropbtn">FORMS</button>
                                             <div class="dropdown-content">
                                                  <a href="summaryself1.php"> 1</a>

                                                  <br>
                                             </div>

                                        </div>
                                   </div>



                              </div>




                         </div>
                    </div>
               </div>
          </div>
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