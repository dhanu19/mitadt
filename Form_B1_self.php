<?php 
require_once('connection.php');
include('templates/header.php');
//include('headerself.php');
?>
<script>
var total = parseInt(0);
$(document).ready(function() {
     $('#Activity1ER').blur(function() {
          tmp = $('#Activity1ER').val();
          total = parseInt(total) + parseInt(tmp);
          $('#total').html(total);
     });

});
$(document).ready(function() {
     $('#Activity2ER').blur(function() {
          tmp = $('#Activity2ER').val();
          total = parseInt(total) + parseInt(tmp);
          $('#total').html(total);
     });

});
$(document).ready(function() {
     $('#Activity3ER').blur(function() {
          tmp = $('#Activity3ER').val();
          total = parseInt(total) + parseInt(tmp);
          $('#total').html(total);
     });

});
$(document).ready(function() {
     $('#Activity4ER').blur(function() {
          tmp = $('#Activity4ER').val();
          total = parseInt(total) + parseInt(tmp);
          $('#total').html(total);
     });

});
$(document).ready(function() {
     $('#Activity5ER').blur(function() {
          tmp = $('#Activity5ER').val();
          total = parseInt(total) + parseInt(tmp);
          $('#total').html(total);
     });

});
$(document).ready(function() {
     $('#Activity6ER').blur(function() {
          tmp = $('#Activity6ER').val();
          total = parseInt(total) + parseInt(tmp);
          $('#total').html(total);
     });

});
</script>

<div>
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
                              FORM B(Section 1)
                         </div>
                         <br>
                         <div class="container" style="padding-top:10px; text-align:left;">
                              <h5>TEACHING, LEARNING AND EVALUATION RELATED ACTIVITIES</h5>
                         </div>
                         <br>

                         <?php
                              $selectRatingQuery = "SELECT * FROM section_i WHERE Userid = ".$_SESSION['userId'];
                              $rowRating='';
                              if($rowRating = mysqli_fetch_assoc(mysqli_query($con,$selectRatingQuery))){}
                              $selectStatusQuery = "Select * from status where Userid = ".$_SESSION['userId'];
                              $executeSelectStatusQuery = mysqli_query($con,$selectStatusQuery);
                              if(mysqli_num_rows($executeSelectStatusQuery)){
                              $rowStatus = mysqli_fetch_assoc($executeSelectStatusQuery);
                              if($rowStatus['SectionI'] == 1){                                                    
                         ?>
                         <div class="panel-body bio-graph-info">
                              <br>
                              <div class="container" style="padding-top:10px; text-align:left;"><h5>You already have filled this form</h5></div>
                              <br>
                              <!-- <button>Edit My Previous Response</button> -->
                         </div>
                         <?php }
                         else{ ?>
                         <div class="panel-body bio-graph-info">

                              <form action="controllers/formB1empRatingController.php" method="POST">
                                   <div class="row">
                                        <div class="panel-body bio-graph-info" style="background-color:white">



                                             <table class="table ">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col" style="text-align: left; width: 50px;">
                                                                 Section number </th>
                                                            <th scope="col" style="text-align:center;  width: 280px;">
                                                                 Nature
                                                                 of activity</th>
                                                            <th scope="col" style="text-align: center;   ">Maximum
                                                                 API score </th>
                                                            <th scope="col" style="text-align: center;">Self Rating
                                                            </th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">1</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify">
                                                                      <div style="text-align: justify">Percentage of
                                                                           lectures,
                                                                           contact hours
                                                                           undertaken during both the semesters
                                                                           (100% compliance = 25), Title of
                                                                           the courses in both semesters: -
                                                                           <input type="text"
                                                                                plcaeholder="title of allocated courses"
                                                                                name="titleCourses" value="<?php if(isset($rowRating['titleCourses'])){
                                                                                    echo $rowRating['titleCourses'];
                                                                                } ?>" style="border-color: gray;" />
                                                                           <br>
                                                                           No. of Lectures allocated:
                                                                           <input type="number" value="<?php if(isset($rowRating['lectures'])){
                                                                                    echo $rowRating['lectures'];
                                                                                } ?>" name="a_lectures"
                                                                                style="border-color: gray;" />
                                                                           <br>
                                                                           No. of Lectues taken:
                                                                           <input type="number" value="<?php if(isset($rowRating['takenLectures'])){
                                                                                    echo $rowRating['takenLectures'];
                                                                                } ?>" name="t_lectures"
                                                                                style="border-color: gray;" value="" />
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">20</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-20"
                                                                           aria-label="0-20" min="0" max="20"
                                                                           style="width: 135px;" name="Activity1ER"
                                                                           id="Activity1ER" value="<?php if(isset($rowRating['Activity1'])){
                                                                                    echo $rowRating['Activity1'];
                                                                                } ?>">
                                                                 </div>
                                                            </td>

                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">2</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify">
                                                                      <div style="text-align: justify">Percentage of
                                                                           Seminars,
                                                                           Tutorials, Practicals,
                                                                           etc. or other teaching duties other than
                                                                           actual conducted (100%
                                                                           compliance = 25) <br>
                                                                           Title of the practicals in both
                                                                           semesters:
                                                                           <input type="text"
                                                                                placeholder="Enter title of practicals assigned"
                                                                                name="titlePractical" value="<?php if(isset($rowRating['titlePractical'])){
                                                                                    echo $rowRating['titlePractical'];
                                                                                } ?>" style="border-color: gray;" />
                                                                           <br>
                                                                           No. of Seminars, tutorials,
                                                                           practicals allocated:
                                                                           <input type="number" value="<?php if(isset($rowRating['practicals'])){
                                                                                    echo $rowRating['practicals'];
                                                                                } ?>" name="a_practicals"
                                                                                style="border-color: gray;" />
                                                                           <br>
                                                                           No. of
                                                                           Seminars, tutorials, practicals taken:
                                                                           <input type="number" value="<?php if(isset($rowRating['takenPracticals'])){
                                                                                    echo $rowRating['takenPracticals'];
                                                                                } ?>" name="t_practicals"
                                                                                style="border-color: gray;" />
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">20</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" style="width: 135px;"
                                                                           placeholder="0-20" aria-label="0-20" min="0"
                                                                           max="20" name="Activity2ER" id="Activity2ER"
                                                                           value="<?php if(isset($rowRating['Activity2'])){
                                                                                    echo $rowRating['Activity2'];
                                                                                } ?>">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">3</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify">
                                                                      <div style="text-align: justify">Use of
                                                                           participatory and
                                                                           innovative teaching/
                                                                           learning methodologies; updating of
                                                                           subject content, course improvement
                                                                           etc.., <br>
                                                                           <b> a. </b> Development of innovative
                                                                           pedagogy/ ICT mediated
                                                                           Teaching Learning <br>
                                                                           <b> b. </b>Updated subject content and
                                                                           course
                                                                           improvement <br>
                                                                           <b> c. </b>Use of MOOCs/ Online
                                                                           platforms for
                                                                           e-learning <br>
                                                                           <b> d. </b>Subject materials sharing
                                                                           with students <br>
                                                                           <b>e. </b>any other innovative methods
                                                                           used (5 points for each activity/
                                                                           Semester/ Subject, Max. 25 all together
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">20</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" style="width: 135px;"
                                                                           placeholder="0-20" aria-label="0-20" min="0"
                                                                           max="20" name="Activity3ER" id="Activity3ER"
                                                                           value="<?php if(isset($rowRating['Activity3'])){
                                                                                    echo $rowRating['Activity3'];
                                                                                } ?>">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">4</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify">
                                                                      <div style="text-align: justify">Examination
                                                                           duties
                                                                           (Invigilation, question
                                                                           paper setting, evaluation/ assessment of
                                                                           answer scripts) as per the
                                                                           allotment </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">20</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" style="width: 135px;"
                                                                           placeholder="0-20" aria-label="0-20" min="0"
                                                                           max="20" name="Activity4ER" id="Activity4ER"
                                                                           value="<?php if(isset($rowRating['Activity4'])){
                                                                                    echo $rowRating['Activity4'];
                                                                                } ?>">
                                                                 </div>
                                                            </td>
                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;">5</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify">
                                                                      <div style="text-align: justify">University final
                                                                           results
                                                                           for the subjects
                                                                           allocated for both the semesters (Above
                                                                           85% - 10, Above 75% - 7, Above
                                                                           65% - 5, Above 55% - 3, less than 50% -
                                                                           0) Max. 10 points. </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" style="width: 135px;"
                                                                           placeholder="0-10" aria-label="0-10" min="0"
                                                                           max="10" name="Activity5ER" id="Activity5ER"
                                                                           value="<?php if(isset($rowRating['Activity5'])){
                                                                                    echo $rowRating['Activity5'];
                                                                                } ?>">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">6</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify">
                                                                      <div style="text-align: justify">Student Feedback
                                                                           for
                                                                           both the semesters -
                                                                           ERP-Feedback ( 100% compliance = 10
                                                                           points) </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" style="width: 135px;"
                                                                           placeholder="0-10" aria-label="0-10" min="0"
                                                                           max="10" name="Activity6ER" id="Activity6ER"
                                                                           value="<?php if(isset($rowRating['Activity6'])){
                                                                                    echo $rowRating['Activity6'];
                                                                                } ?>">
                                                                 </div>
                                                            </td>
                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;"></th>
                                                            <td style="text-align: center;"><b>Total</b></td>
                                                            <td style="text-align: center;">100</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <!-- <input type="number" placeholder="0-100"
                                                                           aria-label="0-100" min="0" max="50"
                                                                           style="width: 135px;"> -->
                                                                      <label name="total" value="<?php if(isset($rowRating['TotalSelfRating'])){
                                                                                    echo $rowRating['TotalSelfRating'];
                                                                                } ?>" id="total">
                                                                 </div>
                                                            </td>
                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;"></th>
                                                            <td style="text-align: center;"><b>Minimum API score
                                                                      required</b></td>
                                                            <td style="text-align: center;">60</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" style="width: 135px;"
                                                                           placeholder="0-60" aria-label="0-60" min="0"
                                                                           max="60">

                                                                 </div>
                                                            </td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                             <div class="panel-body bio-graph-info" style="background-color:white">

                                                  <label class="control-label" style=" color: gray;">UPLOAD
                                                       REQUIRED DOCUMENTS</label>
                                                  <input id="input-b5" type=" file" multiple>
                                             </div>
                                             <div class="text-center">
                                                  <button type="submit" class="btn btn-primary"
                                                       name="save">Save</button>
                                                  <button type="submit" class="btn btn-primary"
                                                       name="submit">Submit</button>
                                             </div>

                                             <br>
                                        </div>

                                   </div>
                              </form>
                         </div>
                         <?php } }
                         else{ ?>
                         <div class="panel-body bio-graph-info">

                              <form action="controllers/formB1empRatingController.php" method="POST">
                                   <div class="row">
                                        <div class="panel-body bio-graph-info" style="background-color:white">

                                             <table class="table ">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col" style="text-align: left; width: 50px;">
                                                                 Section number </th>
                                                            <th scope="col" style="text-align:center;  width: 280px;">
                                                                 Nature
                                                                 of activity</th>
                                                            <th scope="col" style="text-align: center;   ">Maximum
                                                                 API score </th>
                                                            <th scope="col" style="text-align: center;">Self Rating
                                                            </th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">1</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify">
                                                                      <div style="text-align: justify">Percentage of
                                                                           lectures,
                                                                           contact hours
                                                                           undertaken during both the semesters
                                                                           (100% compliance = 25), Title of
                                                                           the courses in both semesters: -
                                                                           <input type="input" value=""
                                                                                style="border-color: gray;" />
                                                                           <br>
                                                                           No. of Lectures allocated:
                                                                           <input type="number" value=""
                                                                                style="border-color: gray;" />
                                                                           <br>
                                                                           No. of Lectues taken:
                                                                           <input type="number"
                                                                                style="border-color: gray;" value="" />
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">20</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-20"
                                                                           aria-label="0-20" min="0" max="20"
                                                                           style="width: 135px;" name="Activity1ER">
                                                                 </div>
                                                            </td>

                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">2</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify">
                                                                      <div style="text-align: justify">Percentage of
                                                                           Seminars,
                                                                           Tutorials, Practicals,
                                                                           etc. or other teaching duties other than
                                                                           actual conducted (100%
                                                                           compliance = 25) <br>
                                                                           Title of the practicals in both
                                                                           semesters:
                                                                           <input type="input" value=""
                                                                                style="border-color: gray;" />
                                                                           <br>
                                                                           No. of Seminars, tutorials,
                                                                           practicals allocated:
                                                                           <input type="number" value=""
                                                                                style="border-color: gray;" />
                                                                           <br>
                                                                           No. of
                                                                           Seminars, tutorials, practicals taken:
                                                                           <input type="number" value=""
                                                                                style="border-color: gray;" />
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">20</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" style="width: 135px;"
                                                                           placeholder="0-20" aria-label="0-20" min="0"
                                                                           max="20" name="Activity2ER">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">3</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify">
                                                                      <div style="text-align: justify">Use of
                                                                           participatory and
                                                                           innovative teaching/
                                                                           learning methodologies; updating of
                                                                           subject content, course improvement
                                                                           etc.., <br>
                                                                           <b> a. </b> Development of innovative
                                                                           pedagogy/ ICT mediated
                                                                           Teaching Learning <br>
                                                                           <b> b. </b>Updated subject content and
                                                                           course
                                                                           improvement <br>
                                                                           <b> c. </b>Use of MOOCs/ Online
                                                                           platforms for
                                                                           e-learning <br>
                                                                           <b> d. </b>Subject materials sharing
                                                                           with students <br>
                                                                           <b>e. </b>any other innovative methods
                                                                           used (5 points for each activity/
                                                                           Semester/ Subject, Max. 25 all together
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">20</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" style="width: 135px;"
                                                                           placeholder="0-20" aria-label="0-20" min="0"
                                                                           max="20" name="Activity3ER">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">4</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify">
                                                                      <div style="text-align: justify">Examination
                                                                           duties
                                                                           (Invigilation, question
                                                                           paper setting, evaluation/ assessment of
                                                                           answer scripts) as per the
                                                                           allotment </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">20</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" style="width: 135px;"
                                                                           placeholder="0-20" aria-label="0-20" min="0"
                                                                           max="20" name="Activity4ER">
                                                                 </div>
                                                            </td>
                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;">5</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify">
                                                                      <div style="text-align: justify">University final
                                                                           results
                                                                           for the subjects
                                                                           allocated for both the semesters (Above
                                                                           85% - 10, Above 75% - 7, Above
                                                                           65% - 5, Above 55% - 3, less than 50% -
                                                                           0) Max. 10 points. </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" style="width: 135px;"
                                                                           placeholder="0-10" aria-label="0-10" min="0"
                                                                           max="10" name="Activity5ER">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">6</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify">
                                                                      <div style="text-align: justify">Student Feedback
                                                                           for
                                                                           both the semesters -
                                                                           ERP-Feedback ( 100% compliance = 10
                                                                           points) </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" style="width: 135px;"
                                                                           placeholder="0-10" aria-label="0-10" min="0"
                                                                           max="10" name="Activity6ER">
                                                                 </div>
                                                            </td>
                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;"></th>
                                                            <td style="text-align: center;"><b>Total</b></td>
                                                            <td style="text-align: center;">100</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-100"
                                                                           aria-label="0-100" min="0" max="50"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>
                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;"></th>
                                                            <td style="text-align: center;"><b>Minimum API score
                                                                      required</b></td>
                                                            <td style="text-align: center;">60</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" style="width: 135px;"
                                                                           placeholder="0-60" aria-label="0-60" min="0"
                                                                           max="60">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                             <div class="panel-body bio-graph-info" style="background-color:white">

                                                  <label class="control-label" style=" color: gray;">UPLOAD
                                                       REQUIRED DOCUMENTS</label>
                                                  <input id="input-b5" type=" file" multiple>
                                             </div>
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