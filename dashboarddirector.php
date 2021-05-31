

     <?php
        //include('headerdirector.php');
        require_once('connection.php');
        include('templates/header.php');
    ?>

    
     <div class="container bootstrap snippets bootdey" style="padding: top 30px; ;">
          <div class="row">
               <div class="col-12 col-md-12 col-lg-3">
                    <?php
                    include('profile.php');
                    ?>
               </div>
               <div class="profile-info col-md-12 col-lg-9">
                    <div class="panel">
                         <div class="panel">
                         
                              <h3 style="text-align:center">Performance Appraisal </h3>
                                        
                         </div>
                    </div>

                    <div class="panel-body bio-graph-info">
                         <div class="flex-container">
                              <div class="flex-item-right " style="font-size: medium; text-align: relative; ">
                                   DEPARTMENTS

                              </div>
                              <div class="flex-item-right">
                                   <div class="dropdown">
                                        <select id="department" name="department">
                                             <option value="0">Choose Department</option>
                                             <?php
                                                $selectDepartmentQuery = "Select distinct(branch) from login WHERE branch != 'NULL'";
                                                $executeSelectDepartmentQuery = mysqli_query($con, $selectDepartmentQuery);
                                                while($rowDepartment = mysqli_fetch_array($executeSelectDepartmentQuery)){ 
                                                ?>
                                             <option value="<?php echo $rowDepartment['branch']; ?>">
                                                  <?php echo $rowDepartment['branch']; ?>
                                             </option>
                                             <?php } ?>
                                        </select>
                                   </div>
                              </div>
                         </div>
                         <div class="panel-body bio-graph-info">
                              <div class="flex-container">
                                   <div class="flex-item-right " style="font-size: medium;  text-align: relative;">
                                        DESIGNATION
                                   </div>
                                   <div class="flex-item-right">
                                        <div class="dropdown">
                                             <select id="designation" name="designation">
                                                  <option value="0">Choose Designation
                                             </select>
                                        </div>
                                   </div>
                              </div>

                              <div class="panel-body bio-graph-info">
                                   <div class="row">
                                        <div class="panel-body bio-graph-info" style="background-color:white">
                                             <!--<h2 style="color:blanchedalmond;">FORM B</h2>-->
                                             <br>
                                             <form action="0" method="POST">
                                                  <table class="table " id="tableId">
                                                       <thead>
                                                            <tr>
                                                                 <th scope="col" style="text-align: left; width: 50px;">
                                                                      Sr. Number </th>
                                                                 <th scope="col"
                                                                      style="text-align:center;  width: 280px;">
                                                                      Name of
                                                                      faculty</th>
                                                                 <th scope="col"
                                                                      style="text-align: center;  width: 70px; ">
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
                                             </form>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <div>
     <?php
        include ('templates/footer.php');
        ?>
     </div>
     <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
     <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
     <script>
     $('#department').change(function() {
          var dep = $(this).val();
          $.ajax({
               type: "POST",
               url: "controllers/ajax.php",
               data: {
                    "dep": dep,
                    flag: "selectDep"
               },
               success: function(resp) {
                    $('#designation').html(resp);
               }
          });
     });
     </script>
     <script type="text/javascript">
     $('#designation').change(function() {
          var desg = $(this).val();
          var dep = $('#department').val();
          $.ajax({
               type: "POST",
               url: "controllers/ajax.php",
               //    dataType: "json",
               data: {
                    "desg": desg,
                    "dep": dep,
                    flag: "selectDesg"
               },
               success: function(response) {
                    // var output = "<option> Select Faculty Name...</option>";
                    // for (var i = 0; i < response.length; i++) {
                    //      output += "<option>" + response[i] + "</option>";
                    // }
                    $("#tableBody").html(response);
                    $("#tableId tr").click(function() {
                         //  alert($(this).attr('id'));
                         window.location.href =
                              "Form_B1_director.php?userId=" + $(this).attr('id');
                    });
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


