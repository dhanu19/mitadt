<?php 
require_once('connection.php');
include('templates/header.php');

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
                              FORM B (Section 4)
                         </div>

                         <br>
                         <div class="container" style="padding-top:10px; text-align:left;">
                              <h5>CONTRIBUTION TO TRUST/SOCIETY/UNIVERSITY</h5>
                         </div>
                         <br>

                         <?php
                              $selectRatingQuery = "SELECT * FROM section_iv WHERE Userid = ".$_SESSION['userId'];
                              $rowRating='';
                              if($rowRating = mysqli_fetch_assoc(mysqli_query($con,$selectRatingQuery))){}
                              $selectStatusQuery = "Select * from status where Userid = ".$_SESSION['userId'];
                              $executeSelectStatusQuery = mysqli_query($con,$selectStatusQuery);
                              if(mysqli_num_rows($executeSelectStatusQuery)){
                              $rowStatus = mysqli_fetch_assoc($executeSelectStatusQuery);
                              if($rowStatus['SectionIV'] == 1){                                                    
                         ?>
                         <div class="panel-body bio-graph-info">
                              <br>
                              <div class="container" style="padding-top:10px; text-align:left;">
                                   <h5>You already have filled this form</h5>
                              </div>
                              <br>
                              <!-- <button>Edit My Previous Response</button> -->
                         </div>
                         <?php }
                         else{ ?>
                         <div class="panel-body bio-graph-info">
                              <form action="controllers/formB4empRatingController.php" method="POST">
                                   <div class="row">
                                        <div class="panel-body bio-graph-info" style="background-color:white">

                                             <form action="demo.php" method="POST">

                                                  <table class="table ">

                                                       <thead>
                                                            <tr>
                                                                 <th scope="col" style="text-align: left; width: 50px;">
                                                                      Section
                                                                      number </th>
                                                                 <th scope="col" style="text-align: center;">Nature of
                                                                      activity</th>
                                                                 <th scope="col" style="text-align: center;">Maximum API
                                                                      score </th>
                                                                 <th scope="col" style="text-align: center;">Self Rating
                                                                 </th>

                                                            </tr>
                                                       </thead>
                                                       <tbody>
                                                            <tr>
                                                                 <th scope="row" style="text-align: center;">1</th>
                                                                 <td style="text-align: left;">
                                                                      <div allign="justify">Placement support (MoU's
                                                                           created form the Industries at National and
                                                                           International level) (2 Points/ activity,
                                                                           max. 05 points all together)</div>
                                                                 </td>
                                                                 <td style="text-align: center;">5</td>
                                                                 <td>
                                                                      <div style="text-align: center;">
                                                                           <input type="number" placeholder="0-5"
                                                                                aria-label="0-5" min="0" max="5"
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
                                                                      <div allign="justify">Improvement in University
                                                                           organized Programs; e.g. Persona Fest etc…,
                                                                           (5 points/ activity, max. 05 points)</div>
                                                                 </td>
                                                                 <td style="text-align: center;">5</td>
                                                                 <td>
                                                                      <div style="text-align: center;">
                                                                           <input type="number" placeholder="0-5"
                                                                                aria-label="0-5" min="0" max="5"
                                                                                style="width: 135px;" name="Activity2ER"
                                                                                id="Activity2ER" value="<?php if(isset($rowRating['Activity2'])){
                                                                                    echo $rowRating['Activity2'];
                                                                                } ?>">
                                                                      </div>
                                                                 </td>
                                                            </tr>


                                                            <tr>
                                                                 <th scope="row" style="text-align: center;">3</th>
                                                                 <td style="text-align: left;">
                                                                      <div allign="justify">Involvement in University
                                                                           Admission process, Exhibition Drive/
                                                                           Education Expo, Branding work and School of
                                                                           Holistic Development activities (2 points/
                                                                           activity/ semester, Max. 05 points all
                                                                           together)</div>
                                                                 </td>
                                                                 <td style="text-align: center;">5</td>
                                                                 <td>
                                                                      <div style="text-align: center;">
                                                                           <input type="number" placeholder="0-5"
                                                                                aria-label="0-5" min="0" max="5"
                                                                                style="width: 135px;" name="Activity3ER"
                                                                                id="Activity3ER" value="<?php if(isset($rowRating['Activity3'])){
                                                                                    echo $rowRating['Activity3'];
                                                                                } ?>">
                                                                      </div>
                                                                 </td>
                                                            </tr>


                                                            <tr>
                                                                 <th scope="row" style="text-align: center;">4</th>
                                                                 <td style="text-align: left;">
                                                                      <div allign="justify">Value Addition Programmes
                                                                           (other than regular syllabus which is helpful
                                                                           to the students) (2 points/ activity/
                                                                           semester, max. 05 points all together)</div>
                                                                 </td>
                                                                 <td style="text-align: center;">5</td>
                                                                 <td>
                                                                      <div style="text-align: center;">
                                                                           <input type="number" placeholder="0-5"
                                                                                aria-label="0-5" min="0" max="5"
                                                                                style="width: 135px;" name="Activity4ER"
                                                                                id="Activity4ER" value="<?php if(isset($rowRating['Activity4'])){
                                                                                    echo $rowRating['Activity4'];
                                                                                } ?>">
                                                                      </div>
                                                                 </td>
                                                            </tr>



                                                            <tr>
                                                                 <th scope="row" style="text-align: center;"></th>
                                                                 <td style="text-align: center;"><b>Total</b></td>
                                                                 <td style="text-align: center;">20</td>
                                                                 <!-- <td><input type="number" placeholder="0-20"
                                                                           aria-label="0-20" min="0" max="20"
                                                                           style="width: 135px;"></td> -->
                                                                 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                      <label name="total" value="<?php if(isset($rowRating['TotalSelfRating'])){
                                                                                    echo $rowRating['TotalSelfRating'];
                                                                                } ?>" id="total">
                                                                 </td>

                                                            </tr>



                                                            <tr>
                                                                 <th scope="row" style="text-align: center;"></th>
                                                                 <td style="text-align: center;"><b>Minimum API score
                                                                           required</b></td>
                                                                 <td style="text-align: center;">10</td>
                                                                 <td>
                                                                      <div style="text-align: center;">
                                                                           <input type="number" placeholder="0-10"
                                                                                aria-label="0-10" min="0" max="10"
                                                                                style="width: 135px;">
                                                                      </div>
                                                                 </td>
                                                            </tr>



                                                       </tbody>

                                                  </table>
                                                  <div class="text-center">
                                                       <button type="submit" class="btn btn-primary"
                                                            name="save">Save</button>
                                                       <button type="submit" class="btn btn-primary"
                                                            name="submit">Submit</button>
                                                  </div>
                                             </form>
                                             <br>
                                        </div>
                                   </div>
                         </div>
                         <?php }}
                         else{ ?>
                         <div class="panel-body bio-graph-info">
                              <form action="controllers/formB4empRatingController.php" method="POST">
                                   <div class="row">
                                        <div class="panel-body bio-graph-info" style="background-color:white">

                                             <form action="demo.php" method="POST">

                                                  <table class="table ">

                                                       <thead>
                                                            <tr>
                                                                 <th scope="col"
                                                                      style="text-align: left; width: 100px;">Section
                                                                      number </th>
                                                                 <th scope="col" style="text-align: center;">Nature of
                                                                      activity</th>
                                                                 <th scope="col" style="text-align: center;">Maximum API
                                                                      score </th>
                                                                 <th scope="col" style="text-align: center;">Self Rating
                                                                 </th>

                                                            </tr>
                                                       </thead>
                                                       <tbody>
                                                            <tr>
                                                                 <th scope="row" style="text-align: center;">1</th>
                                                                 <td style="text-align: left;">
                                                                      <div allign="justify">Placement support (MoU's
                                                                           created form the Industries at National and
                                                                           International level) (2 Points/ activity,
                                                                           max. 05 points all together)</div>
                                                                 </td>
                                                                 <td style="text-align: center;">5</td>
                                                                 <td>
                                                                      <div style="text-align: center;">
                                                                           <input type="number" placeholder="0-5"
                                                                                aria-label="0-5" min="0" max="5"
                                                                                style="width: 135px;"
                                                                                name="Activity1ER">
                                                                      </div>
                                                                 </td>
                                                            </tr>

                                                            <tr>
                                                                 <th scope="row" style="text-align: center;">2</th>
                                                                 <td style="text-align: left;">
                                                                      <div allign="justify">Improvement in University
                                                                           organized Programs; e.g. Persona Fest etc…,
                                                                           (5 points/ activity, max. 05 points)</div>
                                                                 </td>
                                                                 <td style="text-align: center;">5</td>
                                                                 <td>
                                                                      <div style="text-align: center;">
                                                                           <input type="number" placeholder="0-5"
                                                                                aria-label="0-5" min="0" max="5"
                                                                                style="width: 135px;"
                                                                                name="Activity2ER">
                                                                      </div>
                                                                 </td>
                                                            </tr>


                                                            <tr>
                                                                 <th scope="row" style="text-align: center;">3</th>
                                                                 <td style="text-align: left;">
                                                                      <div allign="justify">Involvement in University
                                                                           Admission process, Exhibition Drive/
                                                                           Education Expo, Branding work and School of
                                                                           Holistic Development activities (2 points/
                                                                           activity/ semester, Max. 05 points all
                                                                           together)</div>
                                                                 </td>
                                                                 <td style="text-align: center;">5</td>
                                                                 <td>
                                                                      <div style="text-align: center;">
                                                                           <input type="number" placeholder="0-5"
                                                                                aria-label="0-5" min="0" max="5"
                                                                                style="width: 135px;"
                                                                                name="Activity3ER">
                                                                      </div>
                                                                 </td>
                                                            </tr>


                                                            <tr>
                                                                 <th scope="row" style="text-align: center;">4</th>
                                                                 <td style="text-align: left;">
                                                                      <div allign="justify">Value Addition Programmes
                                                                           (other than regular syllabus which is helpful
                                                                           to the students) (2 points/ activity/
                                                                           semester, max. 05 points all together)</div>
                                                                 </td>
                                                                 <td style="text-align: center;">05</td>
                                                                 <td>
                                                                      <div style="text-align: center;">
                                                                           <input type="number" placeholder="0-5"
                                                                                aria-label="0-5" min="0" max="5"
                                                                                style="width: 135px;"
                                                                                name="Activity4ER">
                                                                      </div>
                                                                 </td>
                                                            </tr>



                                                            <tr>
                                                                 <th scope="row" style="text-align: center;"></th>
                                                                 <td style="text-align: center;"><b>Total</b></td>
                                                                 <td style="text-align: center;">20</td>
                                                                 <td>
                                                                      <div style="text-align: center;">
                                                                           <input type="number" placeholder="0-20"
                                                                                aria-label="0-20" min="0" max="20"
                                                                                style="width: 135px;">
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
                                                                           <input type="number" placeholder="0-10"
                                                                                aria-label="0-10" min="0" max="10"
                                                                                style="width: 135px;">
                                                                      </div>
                                                                 </td>
                                                            </tr>



                                                       </tbody>

                                                  </table>
                                                  <div class="text-center">
                                                       <button type="submit" class="btn btn-primary"
                                                            name="save">Save</button>
                                                       <button type="submit" class="btn btn-primary"
                                                            name="submit">Submit</button>
                                                  </div>
                                             </form>
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