<?php 
require_once('connection.php');
include('templates/header.php');
//        include('headerself.php');
$selectForm1 = "SELECT TotalSelfRating FROM section_i WHERE Userid = ".$_SESSION['userId'];
$selectForm2 = "SELECT TotalSelfRating FROM section_ii WHERE Userid = ".$_SESSION['userId'];
$selectForm3 = "SELECT TotalSelfRating FROM section_iii WHERE Userid = ".$_SESSION['userId'];
$selectForm4 = "SELECT TotalSelfRating FROM section_iv WHERE Userid = ".$_SESSION['userId'];
$totalRating = 0;
$rowForm1SelfRating = 0;
$rowForm2SelfRating = 0;
$rowForm3SelfRating = 0;
$rowForm4SelfRating = 0;
if($rowForm1 = mysqli_fetch_assoc(mysqli_query($con,$selectForm1))){
     $rowForm1SelfRating = $rowForm1['TotalSelfRating'];
     $totalRating += $rowForm1['TotalSelfRating'];
}
if($rowForm2 = mysqli_fetch_assoc(mysqli_query($con,$selectForm2))){
     $rowForm2SelfRating = $rowForm2['TotalSelfRating'];
     $totalRating += $rowForm2['TotalSelfRating'];
}
if($rowForm3 = mysqli_fetch_assoc(mysqli_query($con,$selectForm3))){
     $rowForm3SelfRating = $rowForm3['TotalSelfRating'];
     $totalRating += $rowForm3['TotalSelfRating'];
}
if($rowForm4 = mysqli_fetch_assoc(mysqli_query($con,$selectForm4))){
     $rowForm4SelfRating = $rowForm4['TotalSelfRating'];
     $totalRating += $rowForm4['TotalSelfRating'];
}
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
                         <br>
                         <div class="container" style="padding-top:10px; text-align:left;"><h5>OVERALL SUMMARY</h5></div>
                         <br>
                         <div class="panel-body bio-graph-info">

                              <div class="row">
                                   <div class="panel-body bio-graph-info" style="background-color:white">
                                        
                                        <table class="table ">
                                             <thead>
                                                  <tr>
                                                       <th scope="col" style="text-align: center;">Section number </th>
                                                       <th scope="col" style="text-align: center;">Nature of activity
                                                       </th>
                                                       <th scope="col" style="text-align: center;">Maximum API score
                                                       </th>
                                                       <th scope="col" style="text-align: center;">Self Rating</th>
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
                                                                      <label><?php echo $rowForm1SelfRating; ?></label>
                                                                      <!-- <input name="number" type="number"
                                                                           style="width: 135px;" placeholder="0-100"
                                                                           aria-label="0-100" min="0" max="100" id="Activity1ER"> -->
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
                                                                      <label><?php echo $rowForm2SelfRating; ?></label>
                                                                      <!-- <input name="number2" type="number"
                                                                           style="width: 135px;" placeholder="0-50"
                                                                           aria-label="0-50" min="0" max="50" id="Activity2ER"> -->
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
                                                                      <label><?php echo $rowForm3SelfRating; ?></label>
                                                                      <!-- <input name="number3" type="number"
                                                                           style="width: 135px;" placeholder="0-30"
                                                                           aria-label="0-30" min="0" max="30" id="Activity3ER"> --> 
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
                                                                      <label><?php echo $rowForm4SelfRating; ?></label>
                                                                      <!-- <input name="number4" type="number"
                                                                           style="width: 135px;" placeholder="0-20"
                                                                           aria-label="0-20" min="0" max="20" id="Activity4ER"> -->
                                                                 </div>
                                                            </div>
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <th scope="row" style="text-align: center;"></th>
                                                       <td style="text-align: center;"><strong>Total</strong></td>
                                                       <td style="text-align: center;">200</td>
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <div style="text-align: center;">
                                                                      <!-- <input name="number6" type="number"
                                                                           style="width: 135px;" placeholder="0-250"
                                                                           aria-label="0-250" min="0" max="250"> -->
                                                                           <label name = "total" id="total"><?php echo $totalRating; ?></label>
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
                                                                      <label name = "total" id="total"><?php echo $totalRating; ?></label>
                                                                      <!-- <input name="number7" type="number"
                                                                           style="width: 135px;" placeholder="0-125"
                                                                           aria-label="0-125" min="0" max="125"> -->
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