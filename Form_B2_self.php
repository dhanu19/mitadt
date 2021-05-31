<?php 
require_once('connection.php');
include('templates/header.php');
//        include('headerself.php');
    ?>
<script>
    var total=parseInt(0);    
     $(document).ready(function(){
          $('#Activity1ER').blur(function(){
               tmp = $('#Activity1ER').val(); 
          total = parseInt(total) + parseInt(tmp);
          $('#total').html(total);
          });

     });
     $(document).ready(function(){
          $('#Activity2ER').blur(function(){
               tmp = $('#Activity2ER').val(); 
          total = parseInt(total) + parseInt(tmp);
          $('#total').html(total);
          });

     });
     $(document).ready(function(){
          $('#Activity3ER').blur(function(){
               tmp = $('#Activity3ER').val(); 
          total = parseInt(total) + parseInt(tmp);
          $('#total').html(total);
          });

     });
     $(document).ready(function(){
          $('#Activity4ER').blur(function(){
               tmp = $('#Activity4ER').val(); 
          total = parseInt(total) + parseInt(tmp);
          $('#total').html(total);
          });

     });
     $(document).ready(function(){
          $('#Activity5ER').blur(function(){
               tmp = $('#Activity5ER').val(); 
          total = parseInt(total) + parseInt(tmp);
          $('#total').html(total);
          });

     });
     
     </script>

<div >
     <div class="container bootstrap snippets bootdey">
          <div class="row">
          <div class="col-12 col-md-12 col-lg-3">
                    <?php include('profile.php'); ?>
               </div>
               
               <div class="profile-info col-md-12 col-lg-9">
                    <div class="panel">
                         
                         <h3 style="text-align:center">Performance Appraisal </h3>
                                   
                    </div>
                    <div class="panel">
                         <div class="bio-graph-heading">
                              FORM B (Section 2)
                         </div>

                         <br>
                         <div class="container" style="padding-top:10px; text-align:left;"><h5>TEACHING, RESEARCH , PUBLICATIONS & ACADEMIC CONTRIBUTIONS</h5></div>
                         <br>


                         <?php
                              $selectStatusQuery = "Select * from status where Userid = ".$_SESSION['userId'];
                              $executeSelectStatusQuery = mysqli_query($con,$selectStatusQuery);
                              if(mysqli_num_rows($executeSelectStatusQuery)){
                              $rowStatus = mysqli_fetch_assoc($executeSelectStatusQuery);
                              if($rowStatus['SectionII'] == 1){                                                    
                         ?>
                         <div class="panel-body bio-graph-info">
                              <h3>You already have filled this form</h3>
                              <!-- <button>Edit My Previous Response</button> -->
                         </div>
                         <?php }
                         else{ ?>
                         <div class="panel-body bio-graph-info">
                              <form action="controllers/formB2empRatingController.php"
                                   method="POST">

                                   <div class="row">
                                        <div class="panel-body bio-graph-info" style="background-color:white">

                                             <table class="table ">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col" style="text-align: center;width: 50px;">
                                                                 Section number </th>
                                                            <th scope="col" style="text-align: center;">Nature of
                                                                 activity</th>
                                                            <th scope="col" style="text-align: center;">Maximum API
                                                                 score </th>
                                                            <th scope="col" style="text-align: center;">Self Rating</th>

                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">1</th>
                                                            <td style="text-align: left;">
                                                                 <div style = "text-align: justify;">
                                                                      <div style = "text-align: justify;"><b> Research Publications
                                                                           </b> Number of articles in referred National
                                                                           international Journals/ Confrences / Books/
                                                                           Chapters in books (For every publication with
                                                                           quality=5 points, Max. 10 points all
                                                                           together)</div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style = "text-align: center;" >
                                                                      <input type="number" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           style="width: 135px;" name="Activity1ER" id="Activity1ER" >
                                                                 </div>
                                                            </td>



                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">2</th>
                                                            <td style="text-align: left;">
                                                                 <div style = "text-align: justify;">
                                                                      <div style = "text-align: justify;"><b>Sponsored/ Funded
                                                                                Projects/ consultancy carried out/
                                                                                ongoing (more than 50 lakhs-5, More than
                                                                                10 lakhs-3, Less than 10 lakhs-2), Max
                                                                                05 Points.</b></div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <input type="number" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           style="width: 135px;" name="Activity2ER" id="Activity2ER">
                                                                 </div>
                                                            </td>



                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">3</th>
                                                            <td style="text-align: left;">
                                                                 <div style = "text-align: justify;">
                                                                      <div style = "text-align: justify;"><b>Research Guidance</b><br>
                                                                           Ph.D (in progress) and PG - 2 points for
                                                                           every Students/ UG - 1 point for every group,
                                                                           (Max all together 05 points)</div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <input type="number" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           style="width: 135px;" name="Activity3ER" id="Activity3ER">
                                                                 </div>
                                                            </td>



                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">4</th>
                                                            <td style="text-align: left;">
                                                                 <div style = "text-align: justify;">
                                                                      <div style = "text-align: justify;"><b>Involvement in student
                                                                                Research/ Mini Projects/ Major Projects
                                                                                activities</b> <br>
                                                                           <b> a.</b> Inculcate research culture in the
                                                                           institute by arranging motivational lectures
                                                                           to emphasize towards awareness of research
                                                                           tools etc. (2 points) <br>
                                                                           <b> b. </b>Encourage students for
                                                                           participation in project competition,
                                                                           internships, mini projects and Research
                                                                           activities (3 points)
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <input type="number" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           style="width: 135px;" name="Activity4ER" id="Activity4ER">
                                                                 </div>
                                                            </td>



                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;">5</th>
                                                            <td style="text-align: left;">
                                                                 <div style = "text-align: justify;">
                                                                      <p style = "text-align: justify;">Contribution
                                                                           in conducting the activities of professional
                                                                           bodies (IEEE, ACM, CSI, IETE, etc) for either
                                                                           to the students or faculty- like
                                                                           FDP/STTP/Conferences/</p>
                                                                      <p style = "text-align: justify;">
                                                                           Seminars/Workshop- (5 points/activity, Max 05
                                                                           Points)</p>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <input type="number" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           style="width: 135px;" name="Activity5ER" id="Activity5ER">
                                                                 </div>
                                                            </td>



                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;"></th>
                                                            <td style="text-align: center;"><b>Total</b></td>
                                                            <td style="text-align: center;">50</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <!-- <input type="number" placeholder="0-50"
                                                                           aria-label="0-50" min="0" max="50"
                                                                           style="width: 135px;"> -->
                                                                           <label name = "total" value="0" id="total">
                                                                 </div>
                                                            </td>



                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;"></th>
                                                            <td style="text-align: center;"><b>Minimum API score
                                                                      required</b></td>
                                                            <td style="text-align: center;">15</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <input type="number" placeholder="0-15"
                                                                           aria-label="0-15" min="0" max="15"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>


                                                       </tr>
                                                  </tbody>
                                             </table>

                                             <div class="text-center">
                                                  <button type="submit" class="btn btn-primary">Submit</button>
                                             </div>

                                             <br>
                                        </div>

                                   </div>
                              </form>
                         </div>
                         <?php }}
                         else{ ?>
                         <div class="panel-body bio-graph-info">
                              <form action="controllers/formB2empRatingController.php"
                                   method="POST">

                                   <div class="row">
                                        <div class="panel-body bio-graph-info" style="background-color:white">
                                             
                                             <table class="table ">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col" style="text-align: center;width: 50px;">
                                                                 Section number </th>
                                                            <th scope="col" style="text-align: center;">Nature of
                                                                 activity</th>
                                                            <th scope="col" style="text-align: center;">Maximum API
                                                                 score </th>
                                                            <th scope="col" style="text-align: center;">Self Rating</th>

                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">1</th>
                                                            <td style="text-align: left;">
                                                                 <div style = "text-align: justify;">
                                                                      <div style = "text-align: justify;"><b> Research Publications
                                                                           </b> Number of articles in referred National
                                                                           international Journals/ Confrences / Books/
                                                                           Chapters in books (For every publication with
                                                                           quality=5 points, Max. 10 points all
                                                                           together)</div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <input type="number" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           style="width: 135px;" name="Activity1ER">
                                                                 </div>
                                                            </td>



                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">2</th>
                                                            <td style="text-align: left;">
                                                                 <div style = "text-align: justify;">
                                                                      <div style = "text-align: justify;"><b>Sponsored/ Funded
                                                                                Projects/ consultancy carried out/
                                                                                ongoing (more than 50 lakhs-5, More than
                                                                                10 lakhs-3, Less than 10 lakhs-2), Max
                                                                                05 Points.</b></div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <input type="number" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           style="width: 135px;" name="Activity2ER">
                                                                 </div>
                                                            </td>



                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">3</th>
                                                            <td style="text-align: left;">
                                                                 <div style = "text-align: justify;">
                                                                      <div style = "text-align: justify;"><b>Research Guidance</b><br>
                                                                           Ph.D (in progress) and PG - 2 points for
                                                                           every Students/ UG - 1 point for every group,
                                                                           (Max all together 05 points)</div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <input type="number" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           style="width: 135px;" name="Activity3ER">
                                                                 </div>
                                                            </td>



                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">4</th>
                                                            <td style="text-align: left;">
                                                                 <div style = "text-align: justify;">
                                                                      <div style = "text-align: justify;"><b>Involvement in student
                                                                                Research/ Mini Projects/ Major Projects
                                                                                activities</b> <br>
                                                                           <b> a.</b> Inculcate research culture in the
                                                                           institute by arranging motivational lectures
                                                                           to emphasize towards awareness of research
                                                                           tools etc. (2 points) <br>
                                                                           <b> b. </b>Encourage students for
                                                                           participation in project competition,
                                                                           internships, mini projects and Research
                                                                           activities (3 points)
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <input type="number" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           style="width: 135px;" name="Activity4ER">
                                                                 </div>
                                                            </td>



                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;">5</th>
                                                            <td style="text-align: left;">
                                                                 <div style = "text-align: justify;">
                                                                      <p style = "text-align: justify;">Contribution
                                                                           in conducting the activities of professional
                                                                           bodies (IEEE, ACM, CSI, IETE, etc) for either
                                                                           to the students or faculty- like
                                                                           FDP/STTP/Conferences/</p>
                                                                      <p style = "text-align: justify;">
                                                                           Seminars/Workshop- (5 points/activity, Max 05
                                                                           Points)</p>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <input type="number" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           style="width: 135px;" name="Activity5ER">
                                                                 </div>
                                                            </td>



                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;"></th>
                                                            <td style="text-align: center;"><b>Total</b></td>
                                                            <td style="text-align: center;">50</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <input type="number" placeholder="0-50"
                                                                           aria-label="0-50" min="0" max="50"
                                                                           style="width: 135px;" id="total">
                                                                 </div>
                                                            </td>



                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;"></th>
                                                            <td style="text-align: center;"><b>Minimum API score
                                                                      required</b></td>
                                                            <td style="text-align: center;">15</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <input type="number" placeholder="0-15"
                                                                           aria-label="0-15" min="0" max="15"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>


                                                       </tr>
                                                  </tbody>
                                             </table>

                                             <div class="text-center">
                                                  <button type="submit" class="btn btn-primary">Submit</button>
                                             </div>

                                             <br>
                                        </div>

                                   </div>
                              </form>
                         </div>
                         <?php } ?>
                    </div>
               </div>
          </div>
     </div>
     </div>
     <div>
          <?php
        include ('templates/footer.php');
        ?>
     </div>
     <script>
     
     
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
     