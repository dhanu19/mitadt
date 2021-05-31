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
                    <br>
                    <div class="panel">
                         <div class="bio-graph-heading">
                              FORM B (Section 3)
                         </div>

                         <br>
                         <div class="container" style="padding-top:10px; text-align:left;"><h5>CO-CURRICULAR, EXTENSION AND PROFESSIONAL DEVELOPMENT RELATED ACTIVITIES</h5></div>
                         <br>


                         <?php
                              $selectStatusQuery = "Select * from status where Userid = ".$_SESSION['userId'];
                              $executeSelectStatusQuery = mysqli_query($con,$selectStatusQuery);
                              if(mysqli_num_rows($executeSelectStatusQuery)){
                              $rowStatus = mysqli_fetch_assoc($executeSelectStatusQuery);
                              if($rowStatus['SectionIII'] == 1){                                                    
                         ?>
                         <div class="panel-body bio-graph-info">
                              <h3>You already have filled this form</h3>
                              <!-- <button>Edit My Previous Response</button> -->
                         </div>
                         <?php }
                         else{ ?>
                         <div class="panel-body bio-graph-info">
                              <form action="controllers/formB3empRatingController.php"
                                   method="POST">
                                   <div class="row">
                                        <div class="panel-body bio-graph-info" style="background-color:white">

                                             <table class="table ">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col" style="text-align: left; width: 50px;">
                                                                 Section number </th>
                                                            <th scope="col" style="text-align:center;  ">Nature of
                                                                 activity</th>
                                                            <th scope="col" style="text-align: center;  ">Maximum
                                                                 API
                                                                 score </th>
                                                            <th scope="col" style="text-align: center;">Self Rating
                                                            </th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">1</th>
                                                            <td style="text-align: left;">
                                                                 <div style = "text-align: justify;">
                                                                      <div style = "text-align: justify;"><b>Students
                                                                                Mentorship:</b><br>
                                                                           <br>
                                                                           Contributions towards the welfare of the
                                                                           Students(Attendance
                                                                           Monitoring/Communications
                                                                           and maintaining the records of
                                                                           Attendance,
                                                                           Parent-Teacher Meetings, Student welfare
                                                                           and
                                                                           Counselling/Mentoring to Students) (2
                                                                           Points/activity/Sem, max. 10 points)
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <input type="number" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           style="width: 135px;" name="Activity1ER" id="Activity1ER">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">2</th>
                                                            <td style="text-align: left;">
                                                                 <div style = "text-align: justify;">
                                                                      <div style = "text-align: justify;">Contributions towards
                                                                           Social
                                                                           Service activities like Unnat Bharat
                                                                           Abhiyan,
                                                                           Rural Immersion program, Guest speaker,
                                                                           Students industry visits as study tours
                                                                           both
                                                                           national and international, Internships
                                                                           (2
                                                                           Points/activity/Semester, Max 05 points)
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">5</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <input type="number" style="width: 135px;"
                                                                           placeholder="0-5" aria-label="0-5" min="0"
                                                                           max="5" name="Activity2ER" id="Activity2ER">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">3</th>
                                                            <td style="text-align: left;">
                                                                 <div style = "text-align: justify;">
                                                                      <div style = "text-align: justify;">Involvement in
                                                                           development of
                                                                           the School/Faculty/University through
                                                                           active
                                                                           participation in Academic
                                                                           Advisory/BoS/Academic Council/any other
                                                                           Academic/Administrative Committee (2
                                                                           points
                                                                           max. 05 points all together) </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">5</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <input type="number" style="width: 135px;"
                                                                           placeholder="0-5" aria-label="0-5" min="0"
                                                                           max="5" name="Activity3ER" id="Activity3ER">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">4</th>
                                                            <td style="text-align: left;">
                                                                 <div style = "text-align: justify;">
                                                                      <div style = "text-align: justify;"><b>Professional
                                                                                Development:</b><br>
                                                                           <br>
                                                                           <b>a.</b> Awards/Recognition/Any other
                                                                           achievement through professional bodies
                                                                           of
                                                                           national/international repute(e.g. Best
                                                                           Teacher, Young Scientist award given; (2
                                                                           Points for each Award)) <br>
                                                                           <b> b.</b> Qualification improvement
                                                                           (Ph. D -
                                                                           % and Post Doctorate - 5) (Ph. D
                                                                           registered -
                                                                           2) - for every progress report
                                                                           submission -
                                                                           2points (Max 10 points all together)
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <input type="number" style="width: 135px;"
                                                                           placeholder="0-10" aria-label="0-10" min="0"
                                                                           max="10" name="Activity4ER" id="Activity4ER">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;"></th>
                                                            <td style="text-align: center;"><b>Total</b></td>
                                                            <td style="text-align: center;">30</td>
                                                            <td><!--<input type="number" placeholder="0-30"
                                                                      aria-label="0-30" min="0" max="30"
                                                                      style="width: 135px;"> -->
                                                                 <label name = "total" value="0" id="total">                                                                
                                                            </td>
                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;"></th>
                                                            <td style="text-align: center;"><b>Minimum API score
                                                                      required</b></td>
                                                            <td style="text-align: center;">15</td>
                                                            <td><input type="number" placeholder="0-15"
                                                                      aria-label="0-15" min="0" max="15"
                                                                      style="width: 135px;"></td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                             <div class="text-center">
                                                  <button type="submit" class="btn btn-primary">Submit</button>
                                             </div>

                                             <br>
                                        </div>

                                   </div>
                         </div>
                         <?php }}
                         else{ ?>
                         <div class="panel-body bio-graph-info">
                              <form action="controllers/formB3empRatingController.php"
                                   method="POST">
                                   <div class="row">
                                        <div class="panel-body bio-graph-info" style="background-color:white">
                                             

                                             <table class="table table-striped">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col" style="text-align: left; width: 50px;">
                                                                 Section number </th>
                                                            <th scope="col" style="text-align:center;  ">Nature of
                                                                 activity</th>
                                                            <th scope="col" style="text-align: center;  ">Maximum
                                                                 API
                                                                 score </th>
                                                            <th scope="col" style="text-align: center;">Self Rating
                                                            </th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">1</th>
                                                            <td style="text-align: left;">
                                                                 <div style = "text-align: justify;">
                                                                      <div style = "text-align: justify;"><b>Students
                                                                                Mentorship:</b><br>
                                                                           <br>
                                                                           Contributions towards the welfare of the
                                                                           Students(Attendance
                                                                           Monitoring/Communications
                                                                           and maintaining the records of
                                                                           Attendance,
                                                                           Parent-Teacher Meetings, Student welfare
                                                                           and
                                                                           Counselling/Mentoring to Students) (2
                                                                           Points/activity/Sem, max. 10 points)
                                                                      </div>
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
                                                                      <div style = "text-align: justify;">Contributions towards
                                                                           Social
                                                                           Service activities like Unnat Bharat
                                                                           Abhiyan,
                                                                           Rural Immersion program, Guest speaker,
                                                                           Students industry visits as study tours
                                                                           both
                                                                           national and international, Internships
                                                                           (2
                                                                           Points/activity/Semester, Max 05 points)
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">5</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <input type="number" style="width: 135px;"
                                                                           placeholder="0-5" aria-label="0-5" min="0"
                                                                           max="5" name="Activity2ER">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">3</th>
                                                            <td style="text-align: left;">
                                                                 <div style = "text-align: justify;">
                                                                      <div style = "text-align: justify;">Involvement in
                                                                           development of
                                                                           the School/Faculty/University through
                                                                           active
                                                                           participation in Academic
                                                                           Advisory/BoS/Academic Council/any other
                                                                           Academic/Administrative Committee (2
                                                                           points
                                                                           max. 05 points all together) </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">5</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <input type="number" style="width: 135px;"
                                                                           placeholder="0-5" aria-label="0-5" min="0"
                                                                           max="5" name="Activity3ER">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">4</th>
                                                            <td style="text-align: left;">
                                                                 <div style = "text-align: justify;">
                                                                      <div style = "text-align: justify;"><b>Professional
                                                                                Development:</b><br>
                                                                           <br>
                                                                           <b>a.</b> Awards/Recognition/Any other
                                                                           achievement through professional bodies
                                                                           of
                                                                           national/international repute(e.g. Best
                                                                           Teacher, Young Scientist award given; (2
                                                                           Points for each Award)) <br>
                                                                           <b> b.</b> Qualification improvement
                                                                           (Ph. D -
                                                                           % and Post Doctorate - 5) (Ph. D
                                                                           registered -
                                                                           2) - for every progress report
                                                                           submission -
                                                                           2points (Max 10 points all together)
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style = "text-align: center;">
                                                                      <input type="number" style="width: 135px;"
                                                                           placeholder="0-10" aria-label="0-10" min="0"
                                                                           max="10" name="Activity4ER">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;"></th>
                                                            <td style="text-align: center;"><b>Total</b></td>
                                                            <td style="text-align: center;">30</td>
                                                            <td><input type="number" placeholder="0-30"
                                                                      aria-label="0-30" min="0" max="30"
                                                                      style="width: 135px;" id="total"></td>
                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;"></th>
                                                            <td style="text-align: center;"><b>Minimum API score
                                                                      required</b></td>
                                                            <td style="text-align: center;">15</td>
                                                            <td><input type="number" placeholder="0-15"
                                                                      aria-label="0-15" min="0" max="15"
                                                                      style="width: 135px;"></td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                             <div class="text-center">
                                                  <button type="submit" class="btn btn-primary">Submit</button>
                                             </div>

                                             <br>
                                        </div>

                                   </div>
                         </div>
                         <?php } ?>
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

