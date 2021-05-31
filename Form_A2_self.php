<?php
    require_once('connection.php');
    include('templates/header.php');
        //include('headerself.php');
    ?>

<div class="container bootstrap snippets bootdey">
     <div class="row">
          <div class="col-12 col-md-12 col-lg-3">
               <?php include('profile.php'); ?>
          </div>
          <?php
          $selectEducationalInfo = "SELECT * FROM educationalqualification WHERE Userid = ".$_SESSION['userId'];
          $executeSelectEducationalInfo = mysqli_query($con,$selectEducationalInfo);
          $selectWorkInfo = "SELECT * FROM workexperience WHERE Userid = ".$_SESSION['userId'];
          $executeSelectWorkInfo = mysqli_query($con,$selectWorkInfo);
          $eCount = $wCount = 1;
          ?>
          <div class="profile-info col-md-12 col-lg-9">
               <div class="panel">

                    <h3 style="text-align:center">Performance Appraisal </h3>

               </div>
               <div class="panel">
                    <div class="bio-graph-heading">
                         FORM A(Section 2)
                    </div>
                    <br>
                    <div class="container" style="padding-top:10px; text-align:left;">
                         <h5>EDUCATIONAL QUALIFICATIONS</h5>
                    </div>
                    <br>
                    <!-- <div class="panel-body bio-graph-info"> -->

                    <div class="row">
                         <div class="panel-body bio-graph-info" style="background-color:white">
                              <!--<h2 style="color:blanchedalmond;">FORM B</h2>-->

                              <table class="table">
                                   <thead>
                                        <tr>
                                             <th scope="col">Sr. No.</th>
                                             <th scope="col">Exam Passed</th>
                                             <th scope="col">Specialization(if any)</th>
                                             <th scope="col">Board/University</th>
                                             <th scope="col">Year</th>
                                             <th scope="col">% of Marks</th>
                                        </tr>
                                   </thead>
                                   <tbody id="educationalBody">
                                        <?php
                                        while($rowInfo = mysqli_fetch_assoc($executeSelectEducationalInfo)){
                                        ?>
                                        <tr>
                                             <th scope="row"><?php echo $eCount;?></th>
                                             <td><?php echo $rowInfo['ExamPassed'];?></td>
                                             <td><?php echo $rowInfo['PrincipalSubject'];?></td>
                                             <td><?php echo $rowInfo['BoardUniversity'];?></td>
                                             <td><?php echo $rowInfo['Year'];?></td>
                                             <td><?php echo $rowInfo['Marks'];?></td>
                                        </tr>
                                        <?php $eCount += 1;} ?>

                                   </tbody>
                              </table>
                              <button id="addEducationalRowBtn" class="btn btn-secondary">Add New Row</button>
                              <br>
                         </div>
                    </div>
                    <br>
                    <div class="container" style="padding-top:10px; text-align:left;">
                         <h5>WORK EXPERIENCE</h5>
                    </div>
                    <br>
                    <div class="row">

                         <div class="panel-body bio-graph-info" style="background-color:white">

                              <table class="table">
                                   <thead>
                                        <tr>
                                             <th scope="col">Sr. No.</th>
                                             <th scope="col">Name of the employer</th>
                                             <th scope="col">Duration</th>
                                             <th scope="col">Last Designation</th>
                                             <th scope="col">Job Profile</th>
                                             <th scope="col">Salary</th>
                                        </tr>
                                   </thead>
                                   <tbody id="workBody">
                                        <?php
                                        while($rowInfo1 = mysqli_fetch_assoc($executeSelectWorkInfo)){
                                        ?>
                                        <tr>
                                             <th scope="row"><?php echo $wCount;?></th>
                                             <td><?php echo $rowInfo['NameOfEmployee'];?></td>
                                             <td><?php echo $rowInfo['Duration'];?></td>
                                             <td><?php echo $rowInfo['LastDesignation'];?></td>
                                             <td><?php echo $rowInfo['JobProfile'];?></td>
                                             <td><?php echo $rowInfo['Salary'];?></td>
                                        </tr>
                                        <?php $wCount += 1;} ?>

                                   </tbody>
                              </table>

                              <button id="addWorkRowBtn" class="btn btn-secondary">Add New Row</button>
                         </div>

                    </div>
               </div>
               <!--</div> -->
               <div>

               </div>
          </div>
     </div>
</div>
</div>

<div>
     <br>
     <?php
        include ('templates/footer.php');
        ?>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).on('ready', function() {
     var educationalRow = <?php echo $eCount;?>;
     var workRow = <?php echo $wCount;?>;

     $('#addEducationalRowBtn').on('click', function() {
          $('#educationalBody').append('<tr> <th scope="row">' +
               educationalRow +
               '</th><td><input name="ex2" spellcheck="false" maxlength="13" style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13" style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13"style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13"style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13" style="width: 135px;"></td> </tr>'
          );
          educationalRow += 1;
     });

     $('#addWorkRowBtn').on('click', function() {
          $('#workBody').append('<tr> <th scope="row">' + workRow +
               '</th><td><input name="ex2" spellcheck="false" maxlength="13" style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13" style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13"style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13"style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13" style="width: 135px;"></td> </tr>'
          );
          workRow += 1;
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