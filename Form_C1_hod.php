<?php 
require_once('connection.php');
include('templates/header.php');
//        include('headerhod.php');
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
                              FORM C (Section 1)
                         </div>
                         <div class="panel-body bio-graph-info">

                              <div class="row">
                                   <div class="panel-body bio-graph-info" style="background-color:white">
                                        <!--<h2 style="color:blanchedalmond;">FORM B</h2>-->
                                        <h3 style="color:black;">Overall Summary</h3>
                                        <br>
                                        <table class="table ">
                                             <thead>
                                                  <tr>
                                                       <th scope="col" style="text-align: center;">Section number </th>
                                                       <th scope="col" style="text-align: center;">Nature of activity
                                                       </th>
                                                       <th scope="col" style="text-align: center;">Maximum API score
                                                       </th>
                                                       <th scope="col" style="text-align: center;">Self Rating</th>
                                                       <th scope="col" style="text-align: center;">HOD Rating</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <th scope="row" style="text-align: center;">1</th>
                                                       <td style="text-align: center;">
                                                            <div style="text-align: justify;">
                                                                 <div style="text-align: justify;">Teaching,learning and evaluation
                                                                      related activities</div>
                                                            </div>
                                                       </td>
                                                       <td style="text-align: center;">100</td>
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-100"
                                                                           aria-label="0-100" min="0" max="100"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </div>
                                                       </td>
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <div style="text-align: center;">
                                                                      <input name="number" type="number"
                                                                           style="width: 135px;" placeholder="0-100"
                                                                           aria-label="0-100" min="0" max="100">
                                                                 </div>
                                                            </div>
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <th scope="row" style="text-align: center;">2</th>
                                                       <td style="text-align: center;">
                                                            <div style="text-align: justify;">
                                                                 <div style="text-align: justify;">Research, publications&academic
                                                                      contributons</div>
                                                            </div>
                                                       </td>
                                                       <td style="text-align: center;">50</td>
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-50"
                                                                           aria-label="0-50" min="0" max="50"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </div>
                                                       </td>
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-50"
                                                                           aria-label="0-50" min="0" max="50"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </div>
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <th scope="row" style="text-align: center;">3</th>
                                                       <td style="text-align: center;">
                                                            <div style="text-align: justify;">
                                                                 <div style="text-align: justify;">Co-Curricular, extension and
                                                                      proffesional development related activities</div>
                                                            </div>
                                                       </td>
                                                       <td style="text-align: center;">30</td>
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-30"
                                                                           aria-label="0-30" min="0" max="30"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </div>
                                                       </td>
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <div style="text-align: center;">
                                                                      <input name="number2" type="number"
                                                                           style="width: 135px;" placeholder="0-30"
                                                                           aria-label="0-30" min="0" max="30">
                                                                 </div>
                                                            </div>
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <th scope="row" style="text-align: center;">4</th>
                                                       <td style="text-align: center;">
                                                            <div style="text-align: justify;">
                                                                 <div style="text-align: justify;">Contribution to
                                                                      trust/society/university</div>
                                                            </div>
                                                       </td>
                                                       <td style="text-align: center;">20</td>
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-20"
                                                                           aria-label="0-20" min="0" max="20"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </div>
                                                       </td>
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-20"
                                                                           aria-label="0-20" min="0" max="20"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </div>
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                  <tr>
                                                       <th scope="row" style="text-align: center;">5</th>
                                                       <td style="text-align: center;">
                                                            <div style="text-align: justify;">
                                                                 <div style="text-align: justify;">Personal Assessment</div>
                                                            </div>
                                                       </td>
                                                       <td style="text-align: center;">50</td>
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-50"
                                                                           aria-label="0-50" min="0" max="50"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </div>
                                                       </td>
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-50"
                                                                           aria-label="0-50" min="0" max="50"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </div>
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <th scope="row" style="text-align: center;"></th>
                                                       <td style="text-align: center;"><strong>Total</strong></td>
                                                       <td style="text-align: center;">250</td>
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-250"
                                                                           aria-label="0-250" min="0" max="250"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </div>
                                                       </td>
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <div style="text-align: center;">
                                                                      <input name="number3" type="number"
                                                                           style="width: 135px;" placeholder="0-250"
                                                                           aria-label="0-250" min="0" max="250">
                                                                 </div>
                                                            </div>
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <th scope="row" style="text-align: center;"></th>
                                                       <td style="text-align: center;"><strong>Minimum API score
                                                                 required</strong></td>
                                                       <td style="text-align: center;">125</td>
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-125"
                                                                           aria-label="0-125" min="0" max="125"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </div>
                                                       </td>
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-125"
                                                                           aria-label="0-125" min="0" max="125"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </div>
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>

                                        <br>

                                        <p><span>What is your current gross salary </span>: <input type="number"
                                                  id="visiblity" style="width: 135px;"></p>


                                        <p><span>What salary you think you would get,if you explore the oppurtunities
                                                  outside </span>: <input type="number" id="visiblity"
                                                  style="width: 135px;"></p>


                                        <p><span>What are the reasons you have not thought about exploring the same
                                             </span>: <input type="text" id="visiblity" style="width: 135px;"></p>
                                        <br>
                                        <br>
                                        <p><span>Verified by HOD:_________________________________(Signature) </span>
                                        </p>
                                        <br>

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