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

     <title>FORM B (Section 5)</title>
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
                              FORM B (Section 5)
                         </div>
                         <div class="panel-body bio-graph-info">
                              <form action="controllers/formB5PrincipalRatingController.php?userId=<?php echo $_GET['userId']; ?>"
                                   method="POST">
                                   <div class="row">
                                        <div class="panel-body bio-graph-info" style="background-color:white">
                                             <!--<h2 style="color:blanchedalmond;">FORM B</h2>-->
                                             <h3 style="color:black;">Personality Assessment</h3>
                                             <br>
                                             <table class="table table-striped ">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col" style="text-align: center;">Sr. No. </th>
                                                            <th scope="col" style="text-align: center;">
                                                                 <div align="justify">Parameters</div>
                                                            </th>
                                                            <!-- <th scope="col" style="text-align: center;">HOD Rating</th> -->

                                                            <th scope="col" style="text-align: center;">
                                                                 Principal/Director
                                                                 Rating</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>

                                                       <tr>
                                                            <th scope="row" style="text-align: center;">1</th>
                                                            <td style="text-align: center;">
                                                                 <div align="justify">Punctuality</div>
                                                            </td>
                                                            <!-- <td>
                                                                 <div align="center">
                                                                      <input type="text" style="width: 135px;"
                                                                           placeholder="0-10"
                                                                           value="<?php //echo $rowRatings['Activity1']; ?>">
                                                                 </div>
                                                            </td> -->
                                                            <td>
                                                                 <div align="center">
                                                                      <input name="number6" type="number"
                                                                           style="width: 135px;" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           name="Activity1PR">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">2</th>
                                                            <td style="text-align: center;">
                                                                 <div align="justify">Integrity</div>
                                                            </td>
                                                            <!-- <td>
                                                                 <div align="center">
                                                                      <input type="text" style="width: 135px;"
                                                                           placeholder="0-10"
                                                                           value="<?php //echo $rowRatings['Activity2']; ?>">
                                                                 </div>
                                                            </td> -->

                                                            <td>
                                                                 <div align="center">
                                                                      <input name="number7" type="number"
                                                                           style="width: 135px;" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           name="Activity2PR">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">3</th>
                                                            <td style="text-align: center;">
                                                                 <div align="justify">Interpersonal Skills</div>
                                                            </td>
                                                            <!-- <td>
                                                                 <div align="center">
                                                                      <input type="text" style="width: 135px;"
                                                                           placeholder="0-10"
                                                                           value="<?php //echo $rowRatings['Activity3']; ?>">
                                                                 </div>
                                                            </td> -->

                                                            <td>
                                                                 <div align="center">
                                                                      <input name="number8" type="number"
                                                                           style="width: 135px;" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           name="Activity3PR">
                                                                 </div>
                                                            </td>
                                                       </tr>
                                                       <th scope="row" style="text-align: center;">4</th>
                                                       <td style="text-align: center;">
                                                            <div align="justify">Communications Skills
                                                            </div>
                                                       </td>
                                                       <!-- <td>
                                                            <div align="center">
                                                                 <input type="text" style="width: 135px;"
                                                                      placeholder="0-10"
                                                                      value="<?php //echo $rowRatings['Activity4']; ?>">
                                                            </div>
                                                       </td> -->

                                                       <td>
                                                            <div align="center">
                                                                 <input name="number9" type="number"
                                                                      style="width: 135px;" placeholder="0-10"
                                                                      aria-label="0-10" min="0" max="10"
                                                                      name="Activity4PR">
                                                            </div>
                                                       </td>
                                                       </tr>
                                                       <tr>
                                                            <th scope="row" style="text-align: center;">5</th>
                                                            <td style="text-align: center;">
                                                                 <div align="justify">Institutional Development
                                                                      contributors
                                                                 </div>
                                                            </td>
                                                            <!-- <td>
                                                                 <div align="center">
                                                                      <input type="text" style="width: 135px;"
                                                                           placeholder="0-10"
                                                                           value="<?php //echo $rowRatings['Activity5']; ?>">
                                                                 </div>
                                                            </td> -->

                                                            <td>
                                                                 <div align="center">
                                                                      <input name="number10" type="number"
                                                                           style="width: 135px;" placeholder="0-10"
                                                                           aria-label="0-10" min="0" max="10"
                                                                           name="Activity5PR">
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
                                                  <button type="submit" class="btn btn-primary">Submit</button>
                                             </div>

                                             <br>

                                        </div>



                                   </div>
                              </form>
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