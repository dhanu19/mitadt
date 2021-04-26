<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>contributionself</title>
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
        include('headerself.php');
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
                        FORM A(Section 2)
                    </div>
                    <div class="panel-body bio-graph-info">
                        
                        <div class="row">
                            <div class="panel-body bio-graph-info" style="background-color:white">
                                <!--<h2 style="color:blanchedalmond;">FORM B</h2>-->
                                <h3 style="color:black;">EDUCATIONAL QUALIFICATIONS:</h3>
                                <br>
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
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><input name="ex2" spellcheck="false" maxlength="13"
                                                    style="width: 135px;"></td>
                                            <td><input name="ex2" spellcheck="false" maxlength="13"
                                                    style="width: 135px;"></td>
                                            <td><input name="ex2" spellcheck="false" maxlength="13"
                                                    style="width: 135px;"></td>
                                            <td><input name="ex2" spellcheck="false" maxlength="13"
                                                    style="width: 135px;"></td>
                                            <td><input name="ex2" spellcheck="false" maxlength="13"
                                                    style="width: 135px;"></td>
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
                                            <td><input name="ex2" spellcheck="false" maxlength="13"
                                                    style="width: 135px;"></td>
                                            <td><input name="ex2" spellcheck="false" maxlength="13"
                                                    style="width: 135px;"></td>
                                            <td><input name="ex2" spellcheck="false" maxlength="13"
                                                    style="width: 135px;"></td>
                                            <td><input name="ex2" spellcheck="false" maxlength="13"
                                                    style="width: 135px;"></td>
                                            <td><input name="ex2" spellcheck="false" maxlength="13"
                                                    style="width: 135px;"></td>
                                        </tr>
                                     
                                    </tbody>
                                </table>
                                <button id="addWorkRowBtn">Add New Row</button>

                            </div>
                        </div>
                    </div>
                    <div>

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
        include ('footer.php');
        ?>
    </div>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).on('ready',function(){
            var educationalRow = 2;
            var workRow = 2;
        
        $('#addEducationalRowBtn').on('click', function () {
            $('#educationalBody').append('<tr> <th scope="row">'+educationalRow+'</th><td><input name="ex2" spellcheck="false" maxlength="13" style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13" style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13"style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13"style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13" style="width: 135px;"></td> </tr>');
            educationalRow+=1;
        });

        $('#addWorkRowBtn').on('click', function () {
            $('#workBody').append('<tr> <th scope="row">'+workRow+'</th><td><input name="ex2" spellcheck="false" maxlength="13" style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13" style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13"style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13"style="width: 135px;"></td><td><input name="ex2" spellcheck="false" maxlength="13" style="width: 135px;"></td> </tr>');
            workRow+=1;
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