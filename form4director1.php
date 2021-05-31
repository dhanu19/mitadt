<?php 
require_once('connection.php');
include('templates/header.php');
        include('headerdirector.php');
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
                         <div class="panel-body bio-graph-info">
                              <form action="controllers/formB5PrincipalRatingController.php?userId=<?php echo $_GET['userId']; ?>"
                                   method="POST">
                                   <div class="row">
                                        <div class="panel-body bio-graph-info" style="background-color:white">
                                             <!--<h2 style="color:blanchedalmond;">FORM B</h2>-->
                                             <h3 style="color:black;">Personality Assessment</h3>
                                             <br>
                                             <table class="table table-striped ">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col" style="text-align: center;">Sr. No. </th>
                                                            <th scope="col" style="text-align: center;">
                                                                 <div style="text-align: justify;">Parameters</div>
                                                            </th>
                                                            <!-- <th scope="col" style="text-align: center;">HOD Rating</th> -->

                                                            <th scope="col" style="text-align: center;">
                                                                 Principal/Director
                                                                 Rating</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;">1</th>
                                                            <td style="text-align: center;">
                                                                 <div style="text-align: justify;">Punctuality</div>
                                                            </td>
                                                            <!-- <td>
                                                                 <div align="center">
                                                                      <input type="text" style="width: 135px;"
                                                                           placeholder="0-10"
                                                                           value="<?php //echo $rowRatings['Activity1']; ?>">
                                                                 </div>
                                                            </td> -->
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input name="number6" type="number"
                                                                           style="width: 135px;" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           name="Activity1PR">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">2</th>
                                                            <td style="text-align: center;">
                                                                 <div style="text-align: justify;">Integrity</div>
                                                            </td>
                                                            <!-- <td>
                                                                 <div align="center">
                                                                      <input type="text" style="width: 135px;"
                                                                           placeholder="0-10"
                                                                           value="<?php //echo $rowRatings['Activity2']; ?>">
                                                                 </div>
                                                            </td> -->

                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input name="number7" type="number"
                                                                           style="width: 135px;" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           name="Activity2PR">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">3</th>
                                                            <td style="text-align: center;">
                                                                 <div style="text-align: justify;">Interpersonal Skills</div>
                                                            </td>
                                                            <!-- <td>
                                                                 <div align="center">
                                                                      <input type="text" style="width: 135px;"
                                                                           placeholder="0-10"
                                                                           value="<?php //echo $rowRatings['Activity3']; ?>">
                                                                 </div>
                                                            </td> -->

                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input name="number8" type="number"
                                                                           style="width: 135px;" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           name="Activity3PR">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <th scope="row" style="text-align: center;">4</th>
                                                       <td style="text-align: center;">
                                                            <div style="text-align: justify;">Communications Skills
                                                            </div>
                                                       </td>
                                                       <!-- <td>
                                                            <div align="center">
                                                                 <input type="text" style="width: 135px;"
                                                                      placeholder="0-10"
                                                                      value="<?php //echo $rowRatings['Activity4']; ?>">
                                                            </div>
                                                       </td> -->

                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <input name="number9" type="number"
                                                                      style="width: 135px;" placeholder="0-10"
                                                                      aria-label="0-10" min="0" max="10"
                                                                      name="Activity4PR">
                                                            </div>
                                                       </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">5</th>
                                                            <td style="text-align: center;">
                                                                 <div style="text-align: justify;">Institutional Development
                                                                      contributors
                                                                 </div>
                                                            </td>
                                                            <!-- <td>
                                                                 <div align="center">
                                                                      <input type="text" style="width: 135px;"
                                                                           placeholder="0-10"
                                                                           value="<?php //echo $rowRatings['Activity5']; ?>">
                                                                 </div>
                                                            </td> -->

                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input name="number10" type="number"
                                                                           style="width: 135px;" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           name="Activity5PR">
                                                                 </div>
                                                            </td>
                                                       </tr>

                                                  

                                                  </tbody>
                                             </table>
                                             <p><span>Director/Principal remarks: </span>: <input type="text"
                                                       style="width:400px;"></p>
                                             <br>
                                             <br>
                                             <div class="text-center">
                                                  <button type="submit" class="btn btn-primary">Submit</button>
                                             </div>

                                             <br>
                                        </div>
                                   </div>
                              </form>
                         </div>
                    </div>

                    <?php
        include ('templates/footer.php');
        ?>
        
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
          </div>
     </div>



</body>

</html>