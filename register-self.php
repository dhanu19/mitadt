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



    <link rel="stylesheet" href="assets/css/style2.css">
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
              <textarea placeholder="Performance Appraisal" rows="2" class="form-control input-lg p-text-area"></textarea>
          </form>
          
      </div>
      <div class="panel">
          <div class="bio-graph-heading">
              FROM B
          </div>
          <div class="panel-body bio-graph-info">
              <h1>PERSONAL INFORMATION</h1>
              <div class="row">
                  <div class="bio-row">
                      <p><span>First Name </span> <input class="input" value="" /></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Last Name </span> <input class="input" value="" /></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Father's Name</span> <input class="input" value="" /></p>
                  </div>
                  <div class="bio-row">
                      <p><span>No. of Children</span> <input class="input" value="" /></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Date of birth</span><input type="date" value="" /></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Gender</span> <input class="input" value="" /></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Departments</span> <input class="input" value="" /></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Marital Status:</span> <input class="input" value="" /></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Nationality</span> <input class="input" value="" /></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Religion</span> <input class="input" value="" /></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Caste</span> <input class="input" value="" /></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Sub-Category</span> <input class="input" value="" /></p>
                  </div>
                  <div class="bio-row">
                      <p><span>School name and department name</span> <input class="input" value="" /></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Permanent Address </span><textarea class="form-control" id="form6Example7" rows="4"></textarea></p>
                  </div>
                  
                  <div class="bio-row">
                      <p><span>Address of correspondance</span><textarea class="form-control" id="form6Example7" rows="4"></textarea></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Current designation and grade pay</span> <input class="input" value="" /></p>
                  </div>
                 
                  
                </div>
            
    
    
                  <!---------->
                  <div class="panel-body bio-graph-info">
                    Are you existing employee:
                    <input id='watch-me' name='emp' type='radio' value="yes" /> Yes
                    <input id='no-watch' name='emp' type='radio' value="no" />No<br />
                </div>
                <div id='show-me' class='panel-body bio-graph-info' style='display:none'>
                    <div class="bio-row">
                        <p><span>Email </span>: <input class="email" name="email" value="" /></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Employee id</span>: <input class="eid" name="eid" value="" /></p>
                    </div>
                    <div class="panel-body bio-graph-info">
                        <label for="Designation">Designation:</label>
                        <select name="des" class='Designation' id="des">
                            <option value="Fresher">Fresher</option>
                            <option value="Professor">Professor</option>
                            <option value="Associate Professor">Associate Professor</option>
                            <option value="Assistant Professor">Assistant Professor</option>
                            <option value="Teaching Assistant">Teaching Assistant</option>
                            <option value="Technical Assistant">Technical Assistantt</option>
                            <option value="Lab Assistant">Lab Assistant</option>
                        </select>
                    </div>
                </div>

                <br>
                <script src="jquery-1.11.3.js"></script>
                <script>
                    $(document).ready(function () {
                        $("#watch-me").click(function () {
                            $("#show-me:hidden").show('slow');
                        });
                        $("#no-watch").click(function () {
                            $("#show-me").hide();
                        });
                        $("#watch-me").click(function () {
                            if ($('watch-me').prop('checked') === false) {
                                $('#show-me').hide();
                            }
                        });
                    });
                </script>
                <div class="bio-row">
                    <p><span>Phone Number</span>: <input type="tel" name="phn" id="phn" value="" /></p>
                </div>
                <div  class="bio-row">
                    <p><span>Password:</span>: </p>
                    <div class="center">
                        <div class="form">
                            <div class="form-element">
                                <input type="password" id="password-field">
                                <div class="toggle-password">
                                    <i class="fa fa-eye"></i>
                                    <i class="fa fa-eye-slash"></i>
                                </div>
                                <div class="password-policies">
                                    <div class="policy-length">
                                        8 Characters
                                    </div>
                                    <div class="policy-number">
                                        Contains Number
                                    </div>
                                    <div class="policy-uppercase">
                                        Contains Uppercase
                                    </div>
                                    <div class="policy-special">
                                        Contains Special Characters
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <br>
                <br>
                <div class="panel-body bio-graph-info">
                      <p><span>Whether acquired and Degrees/Fresh academic Qualifications this year:</span></span> <input class="input" value="" /></p>
                        
                      </div>
                      
                      
                      
                      <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div> 
                
          
</div>
<div class="align-right">
    <a href="blank - Form B2 - SELFR.php"><button class="btn btn-primary " type="link" >NEXT</button></a>

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