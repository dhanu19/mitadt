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

     <title>FORM B (Section 3)</title>
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



     <div id="preloader">
          <div class="jumper">
               <div></div>
               <div></div>
               <div></div>
          </div>
     </div>

     <div>
          <?php
        include('headerdirector.php');
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
                              FORM B (Section 3)
                         </div>
                         <?php
                              $selectStatusQuery = "Select * from status where Userid = ".$_GET['userId'];
                              $executeSelectStatusQuery = mysqli_query($con,$selectStatusQuery);
                              $rowStatus = mysqli_fetch_assoc($executeSelectStatusQuery);
                              if($rowStatus['SectionIII'] == 0){                                                    
                         ?>
                         <div class="panel-body bio-graph-info">
                              <center>
                                   <h3>Employee has not filled this form</h3>
                              </center>
                              <a
                                   href="contributionhod1.php?userId=<?php echo $_GET['userId'];?>"><button>Next</button></a>
                         </div>
                         <?php }
                         else{ ?>
                         <div class="panel-body bio-graph-info">
                              <form action="controllers/formB3PrincipalRatingController.php?userId=<?php echo $_GET['userId']; ?>"
                                   method="POST">
                                   <div class="row">
                                        <div class="panel-body bio-graph-info" style="background-color:white">
                                             <!--<h2 style="color:blanchedalmond;">FORM B</h2>-->
                                             <h3 style="color:black;"> CO-CURRICULAR, EXTENSION AND PROFESSIONAL
                                                  DEVELOPMENT
                                                  RELATED ACTIVITIES</h3>

                                             <table class="table table-striped">
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
                                                    $selectRatingsQuery = "Select * from section_iii where Userid = ".$_GET['userId'];
                                                    $executeSelectRatingsQuery = mysqli_query($con, $selectRatingsQuery);
                                                    $rowRatings = mysqli_fetch_assoc($executeSelectRatingsQuery);
                                                    
                                                    ?>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">1</th>
                                                            <td style="text-align: left;">
                                                                 <div align="justify"><b>Students Mentorship:</b><br>
                                                                      Contributions towards the welfare of the
                                                                      Students(Attendance Monitoring/Communications and
                                                                      maintaining the records of Attendance,
                                                                      Parent-Teacher
                                                                      Meetings, Student welfare and
                                                                      Counselling/Mentoring to
                                                                      Students) (2 Points/activity/Sem, max. 10 points)
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div align="center">
                                                                      <input type="text" style="width: 135px;"
                                                                           placeholder="0-10"
                                                                           value="<?php echo $rowRatings['Activity1']; ?>">
                                                                 </div>
                                                            </td>
                                                            <td>
                                                                 <div align="center">
                                                                      <input name="Activity1PR" type="number"
                                                                           style="width: 135px;" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">2</th>
                                                            <td style="text-align: left;">
                                                                 <div align="justify">Contributions towards Social
                                                                      Service
                                                                      activities like Unnat Bharat Abhiyan, Rural
                                                                      Immersion
                                                                      program, Guest speaker, Students industry visits
                                                                      as
                                                                      study tours both national and international,
                                                                      Internships (2 Points/activity/Semester, Max 05
                                                                      points)
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">5</td>
                                                            <td>
                                                                 <div align="center">
                                                                      <input type="text" placeholder="0-5"
                                                                           value="<?php echo $rowRatings['Activity2']; ?>"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div align="center">
                                                                      <input type="number" placeholder="0-5"
                                                                           aria-label="0-5" min="0" max="5"
                                                                           style="width: 135px;" name="Activity2PR">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">3</th>
                                                            <td style="text-align: left;">
                                                                 <div align="justify">Involvement in development of the
                                                                      School/Faculty/University through active
                                                                      participation
                                                                      in Academic Advisory/BoS/Academic Council/any
                                                                      other
                                                                      Academic/Administrative Committee (2 points max.
                                                                      05
                                                                      points all together)
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">5</td>
                                                            <td>
                                                                 <div align="center">
                                                                      <input type="text" placeholder="0-5"
                                                                           value="<?php echo $rowRatings['Activity3']; ?>"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div align="center">
                                                                      <input type="number" placeholder="0-5"
                                                                           aria-label="0-5" min="0" max="5"
                                                                           style="width: 135px;" name="Activity3PR">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">4</th>
                                                            <td style="text-align: left;">
                                                                 <div align="justify"><b>Professional
                                                                           Development:</b><br>
                                                                      <b>a.</b> Awards/Recognition/Any other achievement
                                                                      through professional bodies of
                                                                      national/international
                                                                      repute(e.g. Best Teacher, Young Scientist award
                                                                      given;
                                                                      (2 Points for each Award)) <br>
                                                                      <b> b.</b> Qualification improvement (Ph. D - %
                                                                      and
                                                                      Post Doctorate - 5) (Ph. D registered - 2) - for
                                                                      every
                                                                      progress report submission - 2points (Max 10
                                                                      points all
                                                                      together)
                                                                 </div>
                                                            </td>
                                                            <td style="text-align: center;">10</td>
                                                            <td>
                                                                 <div align="center">
                                                                      <input type="text" placeholder="0-10"
                                                                           value="<?php echo $rowRatings['Activity4']; ?>"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div align="center">
                                                                      <input name="Activity4PR" type="number"
                                                                           style="width: 135px;" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;"></th>
                                                            <td style="text-align: center;"><b>Total</b></td>
                                                            <td style="text-align: center;">30</td>
                                                            <td>
                                                                 <div align="center">
                                                                      <input type="text" placeholder="0-30"
                                                                           value="<?php echo $rowRatings['TotalSelfRating']; ?>"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div align="center">
                                                                      <input name="number4" type="number"
                                                                           style="width: 135px;" placeholder="0-30"
                                                                           aria-label="0-30" min="0" max="30">
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
                                                                 <div align="center">
                                                                      <input type="number" placeholder="0-15"
                                                                           aria-label="0-15" min="0" max="15"
                                                                           style="width: 135px;">
                                                                 </div>
                                                            </td>

                                                            <td>
                                                                 <div align="center">
                                                                      <input name="number5" type="number"
                                                                           style="width: 135px;" placeholder="0-15"
                                                                           aria-label="0-15" min="0" max="15">
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