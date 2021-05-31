<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>REGISTER(2)</title>
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
       include('templates/header.php');
    ?> 
    </div>
    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <!-- <div>
                <?php
                // include('profile.php');
                ?>
            </div> -->
            <div class="profile-info">
                    <div class="panel">
                         <h3 style="text-align:center">Performance Appraisal </h3>
                    </div>
                <div class="panel">
                    <div class="bio-graph-heading">
                        Form B2
                    </div>
                    <div class="panel-body bio-graph-info">
                        <div class="row">
                            <div class="panel-body bio-graph-info" style="background-color:white">
                                <!--<h2 style="color:blanchedalmond;">FORM B</h2>-->
                                <h3 style="color:black;">EDUCATIONAL QUALIFICATIONS:</h3>
                                <br>
                                <form action="controllers/form_data_validation_2.php" id="form" method="POST" enctype=multipart/form-data>

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sr. No.</th>
                                                <th scope="col">Exam Passed</th>
                                                <th scope="col">Specialization(if any)</th>
                                                <th scope="col">Board/University</th>
                                                <th scope="col">Year</th>
                                                <th scope="col">% of Marks</th>
                                                <th scope="col">UPLOAD DOCUMENTS</th>
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

                                    <br>
                                    <h3 style="color:black">WORK EXPERIENCE:</h3>
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
                                        <button class="btn btn-primary " type="submit" >Submit</button>
                                    </div>
                                </form>
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