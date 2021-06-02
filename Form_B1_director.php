<?php 
require_once('connection.php');
include('templates/header.php');

?>
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
                              FORM B (Section 1)
                         </div>
                         <br>
                         <div class="container" style="padding-top:10px; text-align:left;">
                              <h5>TEACHING, LEARNING AND EVALUATION RELATED ACTIVITIES</h5>
                         </div>
                         <br>
                         <?php
                              $selectStatusQuery = "Select * from status where Userid = ".$_GET['userId'];
                              $executeSelectStatusQuery = mysqli_query($con,$selectStatusQuery);
                              $rowStatus = mysqli_fetch_assoc($executeSelectStatusQuery);
                              if($rowStatus['SectionI'] == 0){                                                    
                         ?>
                         <div class="panel-body bio-graph-info">
                              <div style="text-align: center;">
                                   <br>
                                   <div class="container" style="padding-top:10px; text-align:left;">
                                        <h5>Employee has not filled this form</h5>
                                   </div>
                                   <br>
                              </div>
                              <a
                                   href="Form_B2_director.php?userId=<?php echo $_GET['userId'];?>"><button>Next</button></a>
                         </div>
                         <?php }
                         else{ ?>
                         <div class="panel-body bio-graph-info">
                              <form action="controllers/formB1PrincipalRatingController.php?userId=<?php echo $_GET['userId']; ?>"
                                   method="POST">
                                   <div class="row">
                                        <div class="panel-body bio-graph-info" style="background-color:white">

                                             <table class="table ">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col" style="text-align: left; width: 50px;">
                                                                 Section
                                                                 number </th>
                                                            <th scope="col" style="text-align:center;  width: 280px;">
                                                                 Nature
                                                                 of activity</th>
                                                            <th scope="col" style="text-align: center;  width: 70px; ">
                                                                 Maximum API score </th>
                                                            <th scope="col" style="text-align: center;">Self Rating</th>

                                                            <th scope="col" style="text-align: center;">
                                                                 Director/Principal
                                                                 Rating</th>

                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <?php
                                                    $selectRatingsQuery = "Select * from section_i where Userid = ".$_GET['userId'];
                                                    $executeSelectRatingsQuery = mysqli_query($con, $selectRatingsQuery);
                                                    $rowRatings = mysqli_fetch_assoc($executeSelectRatingsQuery);
                                                    
                                                    ?>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">1</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify">
                                                                      <div style="text-align: justify">Percentage of
                                                                           lectures,
                                                                           contact
                                                                           hours undertaken during both the semesters
                                                                           (100%
                                                                           compliance = 25), <br>Title of the courses in
                                                                           both
                                                                           semesters:
                                                                           <?php echo $rowRatings['titleCourses']; ?>
                                                                           <br>No. of Lectures
                                                                           allocated:
                                                                           <?php echo $rowRatings['lectures']; ?>
                                                                           <br>No. of Lectues
                                                                           taken:<?php echo $rowRatings['takenLectures']; ?>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">20</td>
                                                            <td>
                                                                 <div style="text-align: center">
                                                                      <input type="text" placeholder="0-20"
                                                                           value="<?php echo $rowRatings['Activity1']; ?>"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>
                                                            <td>
                                                                 <div style="text-align: center">
                                                                      <input type="number" placeholder="0-20"
                                                                           aria-label="0-20" min="0" max="20"
                                                                           style="width: 135px;" name="Activity1PR"
                                                                           value="<?php echo $rowRatings['Activity1PR']; ?>">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">2</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify">
                                                                      <div style="text-align: center">Percentage of
                                                                           Seminars,
                                                                           Tutorials,
                                                                           Practicals, etc. or other teaching duties
                                                                           other
                                                                           than actual conducted (100% compliance = 25)
                                                                           <br>Title
                                                                           of the practicals in both
                                                                           semesters:<?php echo $rowRatings['titlePractical']; ?>
                                                                           <br>No.
                                                                           of
                                                                           Seminars, tutorials, practicals
                                                                           allocated:<?php echo $rowRatings['practicals']; ?>
                                                                           <br>No. of Seminars, tutorials, practicals
                                                                           taken:<?php echo $rowRatings['takenPracticals']; ?>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">20</td>
                                                            <td>
                                                                 <div style="text-align: center">
                                                                      <input type="text" placeholder="0-20"
                                                                           value="<?php echo $rowRatings['Activity2']; ?>"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div style="text-align: center">
                                                                      <input type="number" placeholder="0-20"
                                                                           aria-label="0-20" min="0" max="20"
                                                                           style="width: 135px;" name="Activity2PR"
                                                                           value="<?php echo $rowRatings['Activity2PR']; ?>">
                                                                 </div>
                                                            </td>


                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">3</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify">
                                                                      <div style="text-align: justify">Use of
                                                                           participatory and
                                                                           innovative teaching/ learning methodologies;
                                                                           updating of subject content, course
                                                                           improvement
                                                                           etc.., <br>
                                                                           <b> a. </b> Development of innovative
                                                                           pedagogy/
                                                                           ICT mediated Teaching Learning <br>
                                                                           <b> b. </b>Updated subject content and course
                                                                           improvement <br>
                                                                           <b> c. </b>Use of MOOCs/ Online platforms for
                                                                           e-learning <br>
                                                                           <b> d. </b>Subject materials sharing with
                                                                           students
                                                                           <br>
                                                                           <b>e. </b>any other innovative methods used
                                                                           (5
                                                                           points for each activity/ Semester/ Subject,
                                                                           Max.
                                                                           25 all together
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">20</td>
                                                            <td>
                                                                 <div style="text-align: center">
                                                                      <input type="text" placeholder="0-20"
                                                                           value="<?php echo $rowRatings['Activity3']; ?>"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div style="text-align: center">
                                                                      <input type="number" placeholder="0-20"
                                                                           aria-label="0-20" min="0" max="20"
                                                                           style="width: 135px;" name="Activity3PR"
                                                                           value="<?php echo $rowRatings['Activity3PR']; ?>">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">4</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify">
                                                                      <div style="text-align: justify">Examination
                                                                           duties
                                                                           (Invigilation,
                                                                           question paper setting, evaluation/
                                                                           assessment of
                                                                           answer scripts) as per the allotment </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">20</td>
                                                            <td>
                                                                 <div style="text-align: center">
                                                                      <input type="text" placeholder="0-20"
                                                                           value="<?php echo $rowRatings['Activity4']; ?>"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div style="text-align: center">
                                                                      <input type="number" placeholder="0-20"
                                                                           aria-label="0-20" min="0" max="20"
                                                                           style="width: 135px;" name="Activity4PR"
                                                                           value="<?php echo $rowRatings['Activity4PR']; ?>">
                                                                 </div>
                                                            </td>



                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;">5</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify">
                                                                      <div style="text-align: justify">University final
                                                                           results for
                                                                           the
                                                                           subjects allocated for both the semesters
                                                                           (Above
                                                                           85% - 10, Above 75% - 7, Above 65% - 5, Above
                                                                           55%
                                                                           - 3, less than 50% - 0) Max. 10 points.
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style="text-align: center">
                                                                      <input type="text" placeholder="0-10"
                                                                           value="<?php echo $rowRatings['Activity5']; ?>"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div style="text-align: center">
                                                                      <input type="number" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           style="width: 135px;" name="Activity5PR"
                                                                           value="<?php echo $rowRatings['Activity5PR']; ?>">
                                                                 </div>
                                                            </td>



                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">6</th>
                                                            <td style="text-align: left;">
                                                                 <div allign="justify">
                                                                      <div style="text-align: justify">Student Feedback
                                                                           for both the
                                                                           semesters - ERP-Feedback ( 100% compliance =
                                                                           10
                                                                           points) </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style="text-align: center">
                                                                      <input type="text" placeholder="0-10"
                                                                           value="<?php echo $rowRatings['Activity6']; ?>"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div style="text-align: center">
                                                                      <input type="number" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           style="width: 135px;" name="Activity6PR"
                                                                           value="<?php echo $rowRatings['Activity6PR']; ?>">
                                                                 </div>
                                                            </td>



                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;"></th>
                                                            <td style="text-align: center;"><b>Total</b></td>
                                                            <td style="text-align: center;">100</td>
                                                            <td>
                                                                 <div style="text-align: center">
                                                                      <input type="text" placeholder="0-100"
                                                                           value="<?php echo $rowRatings['TotalSelfRating']; ?>"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div style="text-align: center">
                                                                      <input type="number" placeholder="0-100"
                                                                           aria-label="0-100" min="0" max="100"
                                                                           style="width: 135px;"
                                                                           value="<?php echo $rowRatings['TotalDirectorPrincipalRating']; ?>">
                                                                 </div>
                                                            </td>



                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;"></th>
                                                            <td style="text-align: center;"><b>Minimum API score
                                                                      required</b>
                                                            </td>
                                                            <td style="text-align: center;">60</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-60"
                                                                           aria-label="0-60" min="0" max="60"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-60"
                                                                           aria-label="0-60" min="0" max="60"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>



                                                       </tr>


                                                  </tbody>
                                             </table>
                                             <p><span>Director/Principal remarks </span>: <input type="text"
                                                       style="width:400px;"></p>
                                             <br>
                                             <br>
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