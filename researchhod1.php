<?php 
require_once('connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

     <title>FORM B (Section 2)</title>
     <!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

     <!-- Additional CSS Files -->
     <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> -->

     <!-- <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css"> -->

     <link rel="stylesheet" href="assets/css/templatemo-softy-pinko.css">



     <link rel="stylesheet" href="assets/css/style1.css">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
     <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>




     </div>
     <div>
          <?php
        include('headerhod.php');
    ?>
     </div>
     <div class="container bootstrap snippets bootdey">
          <div class="row">
               <div class="profile-nav col-md-3">
                    <div class="panel">
                         <div class="user-heading round">
                              <a href="#">
                                   <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                              </a>
                              <h1>Camila Smith</h1>
                              <p>deydey@theEmail.com</p>
                         </div>


                    </div>
               </div>
               <div class="profile-info col-md-9">
                    <div class="panel">
                         <form>
                              <textarea placeholder="Performance Appraisal" rows="2"
                                   class="form-control input-lg p-text-area"></textarea>
                         </form>

                    </div>
                    <div class="panel">
                         <div class="bio-graph-heading">
                              FORM B (Section 2)
                         </div>
                         <?php
                              $selectStatusQuery = "Select * from status where Userid = ".$_GET['userId'];
                              $executeSelectStatusQuery = mysqli_query($con,$selectStatusQuery);
                              $rowStatus = mysqli_fetch_assoc($executeSelectStatusQuery);
                              if($rowStatus['SectionII'] == 0){                                                    
                         ?>
                         <div class="panel-body bio-graph-info">
                              <center>
                                   <h3>Employee has not filled this form</h3>
                              </center>
                              <a
                                   href="cocurricularhod1.php?userId=<?php echo $_GET['userId'];?>"><button>Next</button></a>
                         </div>
                         <?php }
                         else{ ?>
                         <div class="panel-body bio-graph-info">
                              <form action="controllers/formB2HODRatingController.php?userId=<?php echo $_GET['userId']; ?>"
                                   method="POST">
                                   <div class="row">
                                        <div class="panel-body bio-graph-info" style="background-color:white">
                                             <!--<h2 style="color:blanchedalmond;">FORM B</h2>-->
                                             <h3 style="color:black;"> Teaching, Research , publications & Academic
                                                  Contributions:</h3>

                                             <br>
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
                                                            <th scope="col" style="text-align: center;">HOD Rating</th>
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
                                                                 <div allign="justify">
                                                                      <div align="justify"><b> Research Publications
                                                                           </b>
                                                                           Number of articles in referred National
                                                                           international Journals/ Confrences / Books/
                                                                           Chapters in books (For every publication with
                                                                           quality=5 points, Max. 10 points all
                                                                           together)
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div allign="center">
                                                                      <div align="center">
                                                                           <input type="text" placeholder="0-20"
                                                                                value="<?php echo $rowRatings['Activity1']; ?>"
                                                                                style="width: 135px;">
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>
                                                                 <div allign="center">
                                                                      <div align="center">
                                                                           <input type="number" placeholder="0-10"
                                                                                aria-label="0-10" min="0" max="10"
                                                                                style="width: 135px;"
                                                                                name="Activity1HR">
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">2</th>
                                                            <td style="text-align: left;">
                                                                 <div allign="justify">
                                                                      <div align="justify">Sponsored/ Funded Projects/
                                                                           consultancy carried out/ ongoing (more than
                                                                           50
                                                                           lakhs-5, More than 10 lakhs-3, Less than 10
                                                                           lakhs-2), Max 05 Points.</div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div allign="center">
                                                                      <div align="center">
                                                                           <input type="text" placeholder="0-20"
                                                                                value="<?php echo $rowRatings['Activity2']; ?>"
                                                                                style="width: 135px;">
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>
                                                                 <div allign="center">
                                                                      <div align="center">
                                                                           <input type="number" style="width: 135px;"
                                                                                placeholder="0-10" aria-label="0-10"
                                                                                min="0" max="10" name="Activity2HR">
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">3</th>
                                                            <td style="text-align: left;">
                                                                 <div allign="justify">
                                                                      <div align="justify"><b>Research Guidance</b><br>
                                                                           Ph.D (in progress) and PG - 2 points for
                                                                           every
                                                                           Students/ UG - 1 point for every group, (Max
                                                                           all
                                                                           together 05 points)</div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div allign="center">
                                                                      <div align="center">
                                                                           <input type="text" placeholder="0-20"
                                                                                value="<?php echo $rowRatings['Activity3']; ?>"
                                                                                style="width: 135px;">
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>
                                                                 <div allign="center">
                                                                      <div align="center">
                                                                           <input type="number" placeholder="0-10"
                                                                                aria-label="0-10" min="0" max="10"
                                                                                style="width: 135px;"
                                                                                name="Activity3HR">
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">4</th>
                                                            <td style="text-align: left;">
                                                                 <div allign="justify">
                                                                      <div align="justify"><b>Involvement in student
                                                                                Research/ Mini Projects/ Major Projects
                                                                                activities</b> <br>
                                                                           <b> a.</b> Inculcate research culture in the
                                                                           institute by arranging motivational lectures
                                                                           to
                                                                           emphasize towards awareness of research tools
                                                                           etc.
                                                                           (2 points) <br>
                                                                           <b> b. </b>Encourage students for
                                                                           participation in
                                                                           project competition, internships, mini
                                                                           projects
                                                                           and Research activities (3 points)
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div allign="center">
                                                                      <div align="center">
                                                                           <input type="text" placeholder="0-20"
                                                                                value="<?php echo $rowRatings['Activity4']; ?>"
                                                                                style="width: 135px;">
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>
                                                                 <div allign="center">
                                                                      <div align="center">
                                                                           <input type="number" style="width: 135px;"
                                                                                placeholder="0-10" aria-label="0-10"
                                                                                min="0" max="10" name="Activity4HR">
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;">5</th>
                                                            <td style="text-align: left;">
                                                                 <div allign="justify">
                                                                      <div align="justify">Contribution in conducting
                                                                           the
                                                                           activities of professional bodies (IEEE, ACM,
                                                                           CSI,
                                                                           IETE, etc) for either to the students or
                                                                           faculty-
                                                                           like FDP/STTP/Conferences/Seminars/Workshop-
                                                                           (5
                                                                           points/activity, Max 05 Points)</div>
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div allign="center">
                                                                      <div align="center">
                                                                           <input type="text" placeholder="0-20"
                                                                                value="<?php echo $rowRatings['Activity5']; ?>"
                                                                                style="width: 135px;">
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>
                                                                 <div allign="center">
                                                                      <div align="center">
                                                                           <input type="number" style="width: 135px;"
                                                                                placeholder="0-10" aria-label="0-10"
                                                                                min="0" max="10" name="Activity5HR">
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                       </tr>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;"></th>
                                                            <td style="text-align: center;"><b>Total</b></td>
                                                            <td style="text-align: center;">50</td>
                                                            <td>
                                                                 <div allign="center">
                                                                      <div align="center">
                                                                           <input type="text" placeholder="0-50"
                                                                                value="<?php echo $rowRatings['TotalSelfRating']; ?>"
                                                                                style="width: 135px;">
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>
                                                                 <div allign="center">
                                                                      <div align="center">
                                                                           <input name="number5" type="number"
                                                                                style="width: 135px;" placeholder="0-50"
                                                                                aria-label="0-50" min="0" max="50">
                                                                      </div>
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
                                                                 <div allign="center">
                                                                      <div align="center">
                                                                           <input type="number" placeholder="0-15"
                                                                                aria-label="0-15" min="0" max="15"
                                                                                style="width: 135px;">
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>
                                                                 <div allign="center">
                                                                      <div align="center">
                                                                           <input name="number6" type="number"
                                                                                style="width: 135px;" placeholder="0-15"
                                                                                aria-label="0-15" min="0" max="15">
                                                                      </div>
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
     </div>
     </div>
     <?php
        include ('footer.php');
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