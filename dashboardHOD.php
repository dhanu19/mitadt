<!DOCTYPE html>
<html lang="en">
<?php include('connection.php');?>

<head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

     <title>FORM A (Section 2)
     </title>
     <!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

     <!-- Additional CSS Files -->
     <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> -->

     <!-- <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css"> -->

     <link rel="stylesheet" href="assets/css/templatemo-softy-pinko.css">



     <link rel="stylesheet" href="assets/css/dashboard.css">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
     <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>




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





                    <div class="panel-body bio-graph-info">
                         <div class="flex-container">
                              <div class="flex-item-left " style="font-size: medium; ">DESIGNATION

                              </div>
                              <div class="flex-item-right">
                                   <div class="dropdown">
                                        <select id="designation" name="designation">
                                             <option value="0">Choose Designation
                                             </option>
                                             <?php
                                                $selectDesignationQuery = "Select distinct(designation) from login";
                                                $executeSelectDesigntaionQuery = mysqli_query($con, $selectDesignationQuery);
                                                while($rowDesignation = mysqli_fetch_array($executeSelectDesigntaionQuery)){ 
                                                ?>
                                             <option value="<?php echo $rowDesignation['designation']; ?>">
                                                  <?php echo $rowDesignation['designation']; ?></option>
                                             <?php } ?>
                                        </select>
                                   </div>
                              </div>






                         </div>



                    </div>

                    <div class="panel-body bio-graph-info">

                         <div class="row">
                              <div class="panel-body bio-graph-info" style="background-color:white">
                                   <!--<h2 style="color:blanchedalmond;">FORM B</h2>-->



                                   <br>
                                   <form action="" method="POST">
                                        <table class="table">


                                             <thead>
                                                  <tr>
                                                       <th scope="col" style="text-align: left; width: 50px;">Sr.
                                                            Number
                                                       </th>
                                                       <th scope="col" style="text-align:center;  width: 280px;">
                                                            Name of
                                                            faculty</th>
                                                       <th scope="col" style="text-align: center;  width: 70px; ">
                                                            Progress </th>

                                                  </tr>
                                             </thead>
                                             <tbody id="tableBody">

                                                  <!-- <tr>
                                                       <th scope="row" style="text-align: center;">1</th>
                                                       <td style="text-align: left;">
                                                            <div allign="justify"></div>
                                                       </td>
                                                       <td style="text-align: center;"></td>
                                                  </tr>

                                                  <tr>
                                                       <th scope="row" style="text-align: center;">2</th>
                                                       <td style="text-align: left;">
                                                            <div allign="justify"></div>
                                                       </td>
                                                       <td style="text-align: center;"></td>
                                                  </tr>
                                                  <tr>
                                                       <th scope="row" style="text-align: center;">3</th>
                                                       <td style="text-align: left;">
                                                            <div allign="justify"></div>
                                                       </td>
                                                       <td style="text-align: center;"></td>
                                                  </tr>
                                                  <tr>
                                                       <th scope="row" style="text-align: center;">4</th>
                                                       <td style="text-align: left;">
                                                            <div allign="justify"></div>
                                                       </td>
                                                       <td style="text-align: center;"></td>
                                                  </tr>
                                                  <tr>
                                                       <th scope="row" style="text-align: center;">5</th>
                                                       <td style="text-align: left;">
                                                            <div allign="justify"></div>
                                                       </td>
                                                       <td style="text-align: center;"></td>
                                                  </tr>
                                                  <tr>
                                                       <th scope="row" style="text-align: center;">6</th>
                                                       <td style="text-align: left;">
                                                            <div allign="justify"></div>
                                                       </td>
                                                       <td style="text-align: center;"></td>
                                                  </tr> -->


                                             </tbody>
                                        </table>



                              </div>


                         </div>
                    </div>
               </div>
          </div>





     </div>
     </div>
     </div>
     </div>
     </div>





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
     $('#designation').change(function() {
          var desg = $(this).val();
          $.ajax({
               type: "POST",
               url: "controllers/ajax.php",
               //    dataType: "json",
               data: {
                    "desg": desg,
                    flag: "selectDesg"
               },
               success: function(response) {
                    // var output = "<option> Select Faculty Name...</option>";
                    // for (var i = 0; i < response.length; i++) {
                    //      output += "<option>" + response[i] + "</option>";
                    // }
                    $("#tableBody").html(response);
               }
          });
     });
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