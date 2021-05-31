     <?php

        require_once('connection.php');
        include('templates/header.php');
     ?>

<div >

     <div class="container bootstrap snippets bootdey  ">

          <div class="row">
               <div class="col-12 col-md-12 col-lg-3">
                    <?php include('profile.php'); ?>
               </div>
               
               <div class="profile-info col-md-12 col-lg-9">
                    <div class="panel">
                         <div class="panel">
                         
                              <h3 style="text-align:center">Performance Appraisal </h3>
                                   
                         </div>
                    </div>
                    <br>
                    <div class="panel-body bio-graph-info" style="color: black;">
                         <div class="flex-container">
                              <div class="flex-item-left " style="font-size: medium; ">Form A
                                   <p>[General inflormation]</p>
                              </div>
                              <div class="flex-item-right">
                                   <div class="dropdown">
                                        <button class="dropbtn">FORMS</button>
                                        <div class="dropdown-content">
                                             <a class="dropdown-content-hover" href="Form_A1_self.php?userId=<?php echo $_SESSION['userId'];?>"> 1 </a>
                                             <a class="" href="Form_A2_self.php?userId=<?php echo $_SESSION['userId'];?>"> 2 </a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="panel-body bio-graph-info" style="color: black;">
                              <div class="flex-container">
                                   <div class="flex-item-left " style="font-size: medium; ">Form B
                                        <p>[Academic Performance Indicators]</p>
                                   </div>
                                   <div class="flex-item-right">
                                        <div class="dropdown">
                                             <button class="dropbtn">FORMS</button>
                                             <div class="dropdown-content">
                                                  <a href="Form_B1_self.php?userId=<?php echo $_SESSION['userId'];?>"> 1 </a>
                                                  <a href="Form_B2_self.php?userId=<?php echo $_SESSION['userId'];?>"> 2 </a>
                                                  <a href="Form_B3_self.php?userId=<?php echo $_SESSION['userId'];?>"> 3 </a>
                                                  <a href="Form_B4_self.php?userId=<?php echo $_SESSION['userId'];?>"> 4 </a>
                                                  
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="panel-body bio-graph-info" style="color: black;">
                              <div class="flex-container">
                                   <div class="flex-item-left " style="font-size: medium; ">Form C
                                        <p>[Overall Summary]</p>
                                   </div>
                                   <div class="flex-item-right">
                                        <div class="dropdown">
                                             <button class="dropbtn">FORMS</button>
                                             <div class="dropdown-content">
                                                  <a href="Form_C1_self.php?userId=<?php echo $_SESSION['userId'];?>"> 1 </a>
                                                  
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
