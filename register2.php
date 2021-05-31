
    <?php
    require_once('connection.php');
       include('templates/header.php');
    ?> 

    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-3">
                <?php include('profile.php');  ?>
            </div>
            <div class="profile-info col-md-12 col-lg-9">
                    <div class="panel">
                         <h3 style="text-align:center">Performance Appraisal </h3>
                    </div>
                <div class="panel">
                    <div class="bio-graph-heading">
                        Form B2
                    </div>
                    
                    <div class="panel-body bio-graph-info">
                        <form action="controllers/form_data_validation_2.php" id="form" method="POST" enctype=multipart/form-data>
                            <div class="row">
                                    <br>
                                    <div class="container" style="padding-top:10px; text-align:left;"><h5>EDUCATIONAL QUALIFICATIONS</h5></div>
                                    <br>
                                <div class="panel-body bio-graph-info" style="background-color:white">
                                    
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sr. No.</th>
                                                <th scope="col">Exam Passed</th>
                                                <th scope="col">Specialization(if any)</th>
                                                <th scope="col">Board/University</th>
                                                <th scope="col">Year</th>
                                                <th scope="col">% of Marks</th>
                                                <th scope="col">Upload Documents</th>
                                            </tr>
                                        </thead>
                                        <tbody id="educationalBody">
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><input type="text" name="exam1" spellcheck="false" 
                                                        style="width: 135px;"></td>
                                                <td><input type="text" name="spec1" spellcheck="false" 
                                                        style="width: 135px;"></td>
                                                <td><input type="text" name="board1" spellcheck="false"
                                                        style="width: 135px;"></td>
                                                <td><input type="text" name="year1" spellcheck="false" 
                                                        style="width: 135px;"></td>
                                                <td><input type="text" name="mark1" spellcheck="false" 
                                                        style="width: 135px;"></td>
                                                <td>
                                                    
                                                        <input type="file" id="myFile" name="filename1">
                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button id="addEducationalRowBtn">Add New Row</button>

                                </div><!--row -->
                            </div>
                            <div class="row">
                                    <br>
                                    <div class="container" style="padding-top:10px; text-align:left;"><h5>WORK EXPERIENCE</h5></div>
                                    <br>
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
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><input type="text" name="emp1" spellcheck="false" 
                                                        style="width: 135px;"></td>
                                                <td><input type="text" name="duration1" spellcheck="false" 
                                                        style="width: 135px;"></td>
                                                <td><input type="text" name="desg1" spellcheck="false" 
                                                        style="width: 135px;"></td>
                                                <td><input type="text" name="jp1" spellcheck="false" 
                                                        style="width: 135px;"></td>
                                                <td><input type="text" name="sal1" spellcheck="false" 
                                                        style="width: 135px;"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button id="addWorkRowBtn">Add New Row</button>
                                    
                                    <div class="align-left">
                                    <br>
                                        <button class="btn btn-primary " type="submit" >Submit</button>
                                    </div>
                                    <br>
                                
                                </div>
                            </div>
                        </form>
                        <br>
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
    <script type="text/javascript">
        $(document).on('ready',function(){
            var educationalRow = 2;
            var workRow = 2;
            $('#form').append('<input type="hidden" id="e_row" name="e_row" value="'+educationalRow+'">');
            $('#form').append('<input type="hidden" id="w_row" name="w_row" value="'+workRow+'">');
        
        $('#addEducationalRowBtn').on('click', function (e) {
                                 
            e.preventDefault();                     
            $('#educationalBody').append('<tr> <th scope="row">'+educationalRow+'</th><td><input name="exam'+educationalRow+'" spellcheck="false" style="width: 135px;"></td><td><input name="spec'+educationalRow+'" spellcheck="false" style="width: 135px;"></td><td><input name="board'+educationalRow+'" spellcheck="false" style="width: 135px;"></td><td><input name="year'+educationalRow+'" spellcheck="false" style="width: 135px;"></td><td><input name="mark'+educationalRow+'" spellcheck="false" style="width: 135px;"></td>  <td> <input type="file" id="myFile" name="filename'+educationalRow+'"></td> </tr>');
            educationalRow+=1;
            $('#e_row').attr('value',educationalRow);
        });

        $('#addWorkRowBtn').on('click', function (e) {
            e.preventDefault();
            $('#workBody').append('<tr> <th scope="row">'+workRow+'</th><td><input type="text" name="emp'+workRow+'" spellcheck="false" style="width: 135px;"></td><td><input type="text" name="duration'+workRow+'" spellcheck="false" style="width: 135px;"></td><td><input type="text" name="desg'+workRow+'" spellcheck="false" style="width: 135px;"></td><td><input type="text" name="jp'+workRow+'" spellcheck="false" style="width: 135px;"></td><td><input type="text" name="sal'+workRow+'" spellcheck="false" style="width: 135px;"></td> </tr>');
            workRow+=1;
            $('#w_row').attr('value',workRow);
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
    </body>
</html>