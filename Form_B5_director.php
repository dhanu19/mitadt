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
                         <form action="controllers/formB5PrincipalRatingController.php?userId=<?php echo $_GET['userId']; ?>"
                              method="POST">
                              <div class="row">
                                   <div class="panel-body bio-graph-info">

                                        <table class="table table-striped ">
                                             <thead>
                                                  <tr>
                                                       <th scope="col" style="text-align: center;">Sr. No. </th>
                                                       <th scope="col" style="text-align: center;">
                                                            <div style="text-align: justify;">Parameters</div>
                                                       </th>
                                                       <th scope="col" style="text-align: center;">Self Rating</th>

                                                       <th scope="col" style="text-align: center;">Director/Principal
                                                            Rating</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <th scope="row" style="text-align: center;">1</th>
                                                       <td style="text-align: center;">
                                                            <div style="text-align: justify;">Punctuality</div>
                                                       </td>
                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <input name="Activity1PR" type="number"
                                                                      style="width: 135px;" placeholder="0-10"
                                                                      aria-label="0-10" min="0" max="10">
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
                                                                 <input name="Activity2PR" type="number"
                                                                      style="width: 135px;" placeholder="0-10"
                                                                      aria-label="0-10" min="0" max="10">
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
                                                                 <input name="Activity3PR" type="number"
                                                                      style="width: 135px;" placeholder="0-10"
                                                                      aria-label="0-10" min="0" max="10">
                                                            </div>
                                                       </td>
                                                  </tr>
                                                  <th scope="row" style="text-align: center;">4</th>
                                                  <td style="text-align: center;">
                                                       <div style="text-align: justify;">Communications Skills</div>
                                                  </td>

                                                  <td>
                                                       <div style="text-align: center;">
                                                            <input name="Activity4PR" type="number"
                                                                 style="width: 135px;" placeholder="0-10"
                                                                 aria-label="0-10" min="0" max="10">
                                                       </div>
                                                  </td>
                                                  </tr>
                                                  <tr>
                                                       <th scope="row" style="text-align: center;">5</th>
                                                       <td style="text-align: center;">
                                                            <div style="text-align: justify;">Institutional Development
                                                                 contributors</div>
                                                       </td>

                                                       <td>
                                                            <div style="text-align: center;">
                                                                 <input name="Activity5PR" type="number"
                                                                      style="width: 135px;" placeholder="0-10"
                                                                      aria-label="0-10" min="0" max="10">
                                                            </div>
                                                       </td>
                                                  </tr>


                                             </tbody>
                                        </table>
                                        <!-- <p><span>Director/Principal remarks: </span>: <input type="text"
                                                  style="width:400px;"></p> -->
                                        <br>
                                        <br>
                                        <div class="text-center">
                                             <button type="submit" class="btn btn-primary">Submit</button>
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