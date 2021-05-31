


     <?php
     require_once('connection.php');
     include('templates/header.php');
     //include('headersuperadmin.php');
    ?>
     <div style="padding-top: 4.5rem;">
     
     <div class="container bootstrap snippets bootdey">
          <div class="row">
               <div class="col-12 col-md-12 col-lg-3">
                    <?php //include('profile.php'); ?>
               </div>
               <div class="profile-info col-md-12">
                    <div class="panel">
                         <form>
                              <h3 style="text-align:center">Performance Appraisal </h3>
                         </form>
                    </div>

                    <div class="panel-body bio-graph-info">
                         <div class="flex-container">
                              <div class="flex-item-left " style="font-size: medium; ">INSTITUTION</div>
                              <div class="flex-item-right">
                                   <div class="dropdown">
                                        <select name="institution" id="institution">
                                             <option value="0">Choose Institution</option>
                                             <?php
                                                  $selectInstituteQuery = "SELECT DISTINCT(institution) FROM login WHERE institution != '' ";
                                                  $executeSelectInstituteQuery = mysqli_query($con,$selectInstituteQuery);
                                                  while($rowInstitute = mysqli_fetch_assoc($executeSelectInstituteQuery)){
                                             ?>
                                             <option value="<?php echo $rowInstitute['institution']; ?>"><?php echo $rowInstitute['institution']; ?></option>
                                             <?php
                                                  } 
                                             ?>
                                        </select>
                                   </div>
                              </div>
                         </div>

                         <div class="panel-body bio-graph-info">
                              <div class="flex-container">
                                   <div class="flex-item-left " style="font-size: medium; ">DEPARTMENT</div>
                                   <div class="flex-item-right">
                                        <div class="dropdown">
                                             <select name="department" id="department">
                                                  <option value="0">Choose Department</option>
                                                  <!-- start -->
                                                  <?php
                                                       // $selectDepartmentQuery = "Select distinct(branch) from login WHERE branch != 'NULL'";
                                                       // $executeSelectDepartmentQuery = mysqli_query($con, $selectDepartmentQuery);
                                                       // while($rowDepartment = mysqli_fetch_array($executeSelectDepartmentQuery)){ 
                                                       ?>
                                                       <!-- <option value="<?php //echo $rowDepartment['branch']; ?>"> -->
                                                            <?php //echo $rowDepartment['branch']; ?>
                                                       <!-- </option> -->
                                                  <?php //} ?>
                                                  <!-- end -->
                                             </select>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="panel-body bio-graph-info">
                              <div class="flex-container">
                                   <div class="flex-item-left " style="font-size: medium; ">DESIGNATION</div>
                                   <div class="flex-item-right">
                                        <div class="dropdown">
                                             <select name="designation" id="designation">
                                                  <option value="0">Choose Designation</option>
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
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
                                             <table class="table " id="tableId">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col" style="text-align: left; width: 50px;">Sr.
                                                                 Number </th>
                                                            <th scope="col" style="text-align:center;  width: 280px;">
                                                                 Name of faculty</th>
                                                            <th scope="col" style="text-align: center;  width: 70px; ">
                                                                 Overall Self Rating</th>
                                                            <th scope="col" style="text-align: center;  width: 70px; ">
                                                                 Overall HOD Rating</th>
                                                            <th scope="col" style="text-align: center;  width: 70px; ">
                                                                 Overall Principal Rating</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody id="tableBody">
                                                       
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

     <?php
        include ('templates/footer.php');
        ?>
     </div>
     <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
     <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

     <script>
          $('#institution').change(function(){
               var institution = $(this).val();
               $.ajax({
                    type: "POST",
                    url: "controllers/ajax.php",
                    data: {
                         "institution": institution,
                         flag: "selectInstitution"
                    },
                    success: function(resp) {
                         $('#department').html(resp);
                    }
               });
          });
     </script>
     <script>
     $('#department').change(function() {
          var dep = $(this).val();
          var institution = $('#institution').val();
          $.ajax({
               type: "POST",
               url: "controllers/ajax.php",
               data: {
                    "dep": dep,
                    "institution": institution,
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
          var institution = $('#institution').val();
          $.ajax({
               type: "POST",
               url: "controllers/ajax.php",
               //    dataType: "json",
               data: {
                    "desg": desg,
                    "dep": dep,
                    "institution": institution,
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
