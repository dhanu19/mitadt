<?php 
require_once('connection.php');

include('templates/header.php');
//include('headerdirector.php');
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
                              FORM B (Section 2)
                         </div>
                         <br>
                         <div class="container" style="padding-top:10px; text-align:left;">
                              <h5>RESEARCH, PUBLICATIONS & ACADEMIC CONTRIBUTIONS</h5>
                         </div>
                         <br>
                         <?php
                              $selectStatusQuery = "Select * from status where Userid = ".$_GET['userId'];
                              $executeSelectStatusQuery = mysqli_query($con,$selectStatusQuery);
                              $rowStatus = mysqli_fetch_assoc($executeSelectStatusQuery);
                              if($rowStatus['SectionII'] == 0){                                                    
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
                                   href="Form_B3_director.php?userId=<?php echo $_GET['userId'];?>"><button>Next</button></a>
                         </div>
                         <?php }
                         else{ ?>
                         <div class="panel-body bio-graph-info">
                              <form action="controllers/formB2PrincipalRatingController.php?userId=<?php echo $_GET['userId']; ?>"
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
                                                    $selectRatingsQuery = "Select * from section_ii where Userid = ".$_GET['userId'];
                                                    $executeSelectRatingsQuery = mysqli_query($con, $selectRatingsQuery);
                                                    $rowRatings = mysqli_fetch_assoc($executeSelectRatingsQuery);
                                                    
                                                    ?>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">1</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify;"><b> Research
                                                                           Publications </b>
                                                                      Number
                                                                      of articles in referred National international
                                                                      Journals/ Confrences / Books/ Chapters in books
                                                                      (For
                                                                      every publication with quality=5 points, Max. 10
                                                                      points
                                                                      all together)</div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="text" placeholder="0-10"
                                                                           value="<?php echo $rowRatings['Activity1']; ?>"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" style="width: 135px;"
                                                                           placeholder="0-10" aria-label="0-10" min="0"
                                                                           max="10" name="Activity1PR"
                                                                           value="<?php echo $rowRatings['Activity1PR']; ?>">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">2</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify;">Sponsored/ Funded
                                                                      Projects/
                                                                      consultancy
                                                                      carried out/ ongoing (more than 50 lakhs-5, More
                                                                      than
                                                                      10 lakhs-3, Less than 10 lakhs-2), Max 05 Points.
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="text" style="width: 135px;"
                                                                           placeholder="0-10"
                                                                           value="<?php echo $rowRatings['Activity2']; ?>">
                                                                 </div>
                                                            </td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           style="width: 135px;" name="Activity2PR"
                                                                           value="<?php echo $rowRatings['Activity2PR']; ?>">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">3</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify;"><b>Research
                                                                           Guidance</b><br>
                                                                      Ph.D (in progress) and PG - 2 points for every
                                                                      Students/ UG - 1 point for every group, (Max all
                                                                      together 05 points)</div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="text" placeholder="0-10"
                                                                           value="<?php echo $rowRatings['Activity3']; ?>"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           style="width: 135px;" name="Activity3PR"
                                                                           value="<?php echo $rowRatings['Activity3PR']; ?>">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">4</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify;"><b>Involvement in
                                                                           student
                                                                           Research/
                                                                           Mini Projects/ Major Projects activities</b>
                                                                      <br>
                                                                      <b> a.</b> Inculcate research culture in the
                                                                      institute
                                                                      by arranging motivational lectures to emphasize
                                                                      towards
                                                                      awareness of research tools etc. (2 points) <br>
                                                                      <b> b. </b>Encourage students for participation in
                                                                      project competition, internships, mini projects
                                                                      and
                                                                      Research activities (3 points)
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="text" placeholder="0-10"
                                                                           value="<?php echo $rowRatings['Activity4']; ?>"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input name="Actvity4PR" type="number"
                                                                           style="width: 135px;" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           value="<?php echo $rowRatings['Activity4PR']; ?>">
                                                                 </div>
                                                            </td>
                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;">5</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify;">
                                                                      <p>Contribution in conducting the activities of
                                                                           professional bodies (IEEE, ACM, CSI, IETE,
                                                                           etc)
                                                                           for either to the students or faculty- like
                                                                           FDP/STTP/Conferences/Seminars/</p>
                                                                      <p>Workshop- (5 points/activity, Max 05 Points)
                                                                      </p>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="text" style="width: 135px;"
                                                                           placeholder="0-10"
                                                                           value="<?php echo $rowRatings['Activity5']; ?>">
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           style="width: 135px;" name="Activity5PR"
                                                                           value="<?php echo $rowRatings['Activity5PR']; ?>">
                                                                 </div>
                                                            </td>
                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;"></th>
                                                            <td style="text-align: center;"><b>Total</b></td>
                                                            <td style="text-align: center;">50</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="text" placeholder="0-50"
                                                                           value="<?php echo $rowRatings['TotalSelfRating']; ?>"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-50"
                                                                           aria-label="0-50" min="0" max="50"
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
                                                            <td style="text-align: center;">15</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-15"
                                                                           aria-label="0-15" min="0" max="15"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <input type="number" placeholder="0-15"
                                                                           aria-label="0-15" min="0" max="15"
                                                                           style="width: 135px;">
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
</div>
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