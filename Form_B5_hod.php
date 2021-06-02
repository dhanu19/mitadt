<?php 
require_once('connection.php');
include('templates/header.php');

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
                         FORM B (Section 5)
                    </div>
                    <br>
                    <div class="container" style="padding-top:10px; text-align:left;">
                         <h5>PERSONALITY ASSESSMENT</h5>
                    </div>
                    <br>


                    <div class="panel-body bio-graph-info">
                         <form action="controllers/formB5HODRatingController.php?userId=<?php echo $_GET['userId'];?>"
                              method="POST">
                              <div class="row">
                                   <div class="panel-body bio-graph-info" style="background-color:white">

                                        <table class="table ">
                                             <thead>
                                                  <tr>
                                                       <th scope="col" style="text-align: center;">Sr. No. </th>
                                                       <th scope="col" style="text-align: center;">
                                                            <div style="text-align: justify;">Parameters</div>
                                                       </th>
                                                       <th scope="col" style="text-align: center;">HOD Rating</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <?php
                                                            $selectRatingsQuery = "Select * from section_v where Userid = ".$_GET['userId'];
                                                            $executeSelectRatingsQuery = mysqli_query($con, $selectRatingsQuery);
                                                            $rowRatings = mysqli_fetch_assoc($executeSelectRatingsQuery);
                                                            
                                                            ?>
                                                  <tr>
                                                       <th scope="row" style="text-align: center;">1</th>
                                                       <td style="text-align: center;">
                                                            <div style="text-align: justify;">Punctuality</div>
                                                       </td>
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <input type="number" placeholder="0-10"
                                                                      aria-label="0-10" min="0" max="10"
                                                                      style="width: 135px;" name="Activity1HR"
                                                                      value="<?php echo $rowRatings['Activity1HR']; ?>">
                                                            </div>
                                                       </td>


                                                  </tr>
                                                  <tr>
                                                       <th scope="row" style="text-align: center;">2</th>
                                                       <td style="text-align: center;">
                                                            <div style="text-align: justify;">Integrity</div>
                                                       </td>
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <input type="number" placeholder="0-10"
                                                                      aria-label="0-10" min="0" max="10"
                                                                      style="width: 135px;" name="Activity2HR"
                                                                      value="<?php echo $rowRatings['Activity2HR']; ?>">
                                                            </div>
                                                       </td>

                                                  </tr>
                                                  <tr>
                                                       <th scope="row" style="text-align: center;">3</th>
                                                       <td style="text-align: center;">
                                                            <div style="text-align: justify;">Interpersonal Skills</div>
                                                       </td>
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <input type="number" placeholder="0-10"
                                                                      aria-label="0-10" min="0" max="10"
                                                                      style="width: 135px;" name="Activity3HR"
                                                                      value="<?php echo $rowRatings['Activity3HR']; ?>">
                                                            </div>
                                                       </td>

                                                  </tr>

                                                  <th scope="row" style="text-align: center;">4</th>
                                                  <td style="text-align: center;">
                                                       <div style="text-align: justify;">Communications Skills
                                                       </div>
                                                  </td>
                                                  <td>
                                                       <div style="text-align: center;">
                                                            <input type="number" placeholder="0-10" aria-label="0-10"
                                                                 min="0" max="10" style="width: 135px;"
                                                                 name="Activity4HR"
                                                                 value="<?php echo $rowRatings['Activity4HR']; ?>">
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
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <input type="number" placeholder="0-10"
                                                                      aria-label="0-10" min="0" max="10"
                                                                      style="width: 135px;" name="Activity5HR"
                                                                      value="<?php echo $rowRatings['Activity5HR']; ?>">
                                                            </div>
                                                       </td>

                                                  </tr>


                                             </tbody>
                                        </table>
                                        <div class="text-center">
                                             <button type="submit" class="btn btn-primary" name="save">Save</button>
                                             <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                        </div>

                                        <br>
                                   </div>
                              </div>
                         </form>
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