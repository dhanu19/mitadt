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

     <title>FORM A (Section 1)</title>
     <!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

     <!-- Additional CSS Files -->
     <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> -->

     <!-- <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css"> -->

     <link rel="stylesheet" href="assets/css/templatemo-softy-pinko.css">



     <link rel="stylesheet" href="assets/css/loginstyle.css">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
     <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>




     <?php
        include('headerhod.php');
    ?>
     </div>
     <div class="card card0 border-0">
          <div class="row d-flex">
               <div class="col-lg-6">
                    <div class="card1 pb-5">
                         <div class="row">
                              <div></div>
                         </div>
                         </br>
                         </br>
                         <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img
                                   src="https://i.imgur.com/uNGdWHi.png" class="image"> </div>
                    </div>
               </div>
               <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                         <div class="row mb-4 px-3">
                              <h6 class="mb-0 mr-4 mt-2"></h6>
                              <div class="">

                              </div>
                              <div class="">

                              </div>
                              <div class="">

                              </div>
                         </div>
                         <div class="row px-3 mb-4">

                         </div>
                         <form action="validation.php" class="sign-in-form" method="POST">
                              <div class="row px-3"> <label class="mb-1">
                                        <h6 class="mb-0 text-sm">Adhaar Number</h6>
                                   </label> <input type="number" min="0" max="100" step="5" class="mb-4" type="number"
                                        name="aadharno" placeholder="Enter Adhaar Number"> </div>
                              <div class="row px-3"> <label class="mb-1">

                                   </label>
                                   <section>
                                        <label for="password">Password</label>
                                        <button id="toggle-password"
                                             style=" color: black; font-size: small; text-align: right; align-self: auto;"
                                             type="button"
                                             aria-label="Show password as plain text. Warning: this will display your password on the screen.">Show
                                             password</button>
                                        <input id="password" name="password" type="password"
                                             autocomplete="current-password" required>
                                   </section>
                              </div>
                              <div class="row px-3 mb-4">

                              </div>
                              <div class="row mb-3 px-3"> <button type="submit" value="login"
                                        class="btn btn-blue text-center">Login</button> </div>
                              <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a
                                             href="register.html" class="text-danger">Register</a></small> </div>
                    </div>
               </div>
          </div>
          </form>
     </div>
     </div>
     </div>

     <script src="assets/js/custom.js"></script>
     <script>
     const passwordInput = document.getElementById('password');
     const togglePasswordButton = document.getElementById('toggle-password');

     togglePasswordButton.addEventListener('click', togglePassword);

     function togglePassword() {
          if (passwordInput.type === 'password') {
               passwordInput.type = 'text';
               togglePasswordButton.textContent = 'Hide password';
               togglePasswordButton.setAttribute('aria-label',
                    'Hide password.');
          } else {
               passwordInput.type = 'password';
               togglePasswordButton.textContent = 'Show password';
               togglePasswordButton.setAttribute('aria-label',
                    'Show password as plain text. ' +
                    'Warning: this will display your password on the screen.');
          }
     }
     </script>
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