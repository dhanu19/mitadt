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
                              FORM B (Section 4)
                         </div>
                         <br>
                         <div class="container" style="padding-top:10px; text-align:left;">
                              <h5>CONTRIBUTION TO TRUST/SOCIETY/UNIVERSITY</h5>
                         </div>
                         <br>
                         <?php
                              $selectStatusQuery = "Select * from status where Userid = ".$_GET['userId'];
                              $executeSelectStatusQuery = mysqli_query($con,$selectStatusQuery);
                              $rowStatus = mysqli_fetch_assoc($executeSelectStatusQuery);
                              if($rowStatus['SectionIV'] == 0){                                                    
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
                                   href="Form_B5_director.php?userId=<?php echo $_GET['userId'];?>"><button>Next</button></a>
                         </div>
                         <?php }
                         else{ ?>
                         <div class="panel-body bio-graph-info">
                              <form action="controllers/formB4PrincipalRatingController.php?userId=<?php echo $_GET['userId']; ?>"
                                   method="POST">
                                   <div class="row">
                                        <div class="panel-body bio-graph-info" style="background-color:white">

                                             <!-- <form action="" method="POST"> -->
                                             <table class="table ">


                                                  <thead>
                                                       <tr>
                                                            <th scope="col" style="text-align: left; width: 50px;">
                                                                 Section number </th>
                                                            <th scope="col" style="text-align:center;  width: 280px;">
                                                                 Nature of activity</th>
                                                            <th scope="col" style="text-align: center;  width: 70px; ">
                                                                 Maximum API score </th>
                                                            <th scope="col" style="text-align: center;">Self Rating
                                                            </th>

                                                            <th scope="col" style="text-align: center;">
                                                                 Director/Principal Rating</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <?php
                                                            $selectRatingsQuery = "Select * from section_iv where Userid = ".$_GET['userId'];
                                                            $executeSelectRatingsQuery = mysqli_query($con, $selectRatingsQuery);
                                                            $rowRatings = mysqli_fetch_assoc($executeSelectRatingsQuery);
                                                            
                                                            ?>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">1</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify;">
                                                                      <div style="text-align: justify;">Placement
                                                                           support (MoU's
                                                                           created form the Industries at National
                                                                           and
                                                                           International level) (2 Points/
                                                                           activity,
                                                                           max. 05 points all together)</div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">5</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <div style="text-align: center;">
                                                                           <input type="text" placeholder="0-5"
                                                                                value="<?php echo $rowRatings['Activity1']; ?>"
                                                                                style="width: 135px;">
                                                                      </div>
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <div style="text-align: center;">
                                                                           <input type="number" placeholder="0-5"
                                                                                aria-label="0-5" min="0" max="5"
                                                                                style="width: 135px;" name="Activity1PR"
                                                                                value="<?php echo $rowRatings['Activity1PR']; ?>">
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">2</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify;">
                                                                      <div style="text-align: justify;">Improvement in
                                                                           University
                                                                           organized Programs; e.g. Persona Fest
                                                                           etc…,
                                                                           (5 points/ activity, max. 05 points)
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">5</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <div style="text-align: center;">
                                                                           <input type="text" placeholder="0-5"
                                                                                value="<?php echo $rowRatings['Activity2']; ?>"
                                                                                style="width: 135px;">
                                                                      </div>
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <div style="text-align: center;">
                                                                           <input name="Activity2PR" type="number"
                                                                                style="width: 135px;" placeholder="0-5"
                                                                                aria-label="0-5" min="0" max="5"
                                                                                value="<?php echo $rowRatings['Activity2PR']; ?>">
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">3</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify;">
                                                                      <div style="text-align: justify;">Involvement in
                                                                           University
                                                                           Admission process, Exhibition Drive/
                                                                           Education Expo, Branding work and School
                                                                           of
                                                                           Holistic Development activities (2
                                                                           points/
                                                                           activity/ semester, Max. 05 points all
                                                                           together)</div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">5</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <div style="text-align: center;">
                                                                           <input type="text" placeholder="0-5"
                                                                                value="<?php echo $rowRatings['Activity3']; ?>"
                                                                                style="width: 135px;">
                                                                      </div>
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <div style="text-align: center;">
                                                                           <input type="number" placeholder="0-5"
                                                                                aria-label="0-5" min="0" max="5"
                                                                                style="width: 135px;" name="Activity3PR"
                                                                                value="<?php echo $rowRatings['Activity3PR']; ?>">
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">4</th>
                                                            <td style="text-align: left;">
                                                                 <div style="text-align: justify;">
                                                                      <div style="text-align: justify;">Value Addition
                                                                           Programmes
                                                                           (other than regular syllabus which is
                                                                           helpful
                                                                           to the students) (2 points/ activity/
                                                                           semester, max. 05 points all together)
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">05</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <div style="text-align: center;">
                                                                           <input type="text" placeholder="0-5"
                                                                                value="<?php echo $rowRatings['Activity4']; ?>"
                                                                                style="width: 135px;">
                                                                      </div>
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <div style="text-align: center;">
                                                                           <input name="Activity4PR" type="number"
                                                                                style="width: 135px;" placeholder="0-5"
                                                                                aria-label="0-5" min="0" max="5"
                                                                                value="<?php echo $rowRatings['Activity4PR']; ?>">
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;"></th>
                                                            <td style="text-align: center;"><b>Total</b></td>
                                                            <td style="text-align: center;">20</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <div style="text-align: center;">
                                                                           <input type="text" placeholder="0-20"
                                                                                value="<?php echo $rowRatings['TotalSelfRating']; ?>"
                                                                                style="width: 135px;">
                                                                      </div>
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <div style="text-align: center;">
                                                                           <input name="number" type="number"
                                                                                style="width: 135px;" placeholder="0-20"
                                                                                aria-label="0-20" min="0" max="20"
                                                                                value="<?php echo $rowRatings['TotalDirectorPrincipalRating']; ?>">
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;"></th>
                                                            <td style="text-align: center;"><b>Minimum API score
                                                                      required</b></td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <div style="text-align: center;">
                                                                           <input type="number" placeholder="0-10"
                                                                                aria-label="0-10" min="0" max="10"
                                                                                style="width: 135px;">
                                                                      </div>
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div style="text-align: center;">
                                                                      <div style="text-align: center;">
                                                                           <input name="number2" type="number"
                                                                                style="width: 135px;" placeholder="0-10"
                                                                                aria-label="0-10" min="0" max="10">
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                  </tbody>
                                             </table>

                                             <p style="text-align: left;"><span> Director/Principal remarks: </span>:
                                                  <input type="text" style="width:400px;">
                                             </p>
                                             <br>
                                             <br>
                                             <div class="text-center">
                                                  <button type="submit" class="btn btn-primary"
                                                       name="save">Save</button>
                                                  <button type="submit" class="btn btn-primary"
                                                       name="submit">Submit</button>
                                             </div>
                                             <!-- </form> -->
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