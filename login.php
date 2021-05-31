
     <?php
     require_once('connection.php');
          include ('templates/header.php');
     ?>

          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
		

     <div class="container login_form">
          <div class="row">

                    <div class="col col-md-6 col-lg-6 login_form_image">
                         <img width="100%" src="https://i.imgur.com/uNGdWHi.png" class="image">
                    </div>
                    
                    <div class="col col-12 col-md-6 col-lg-6 login_form_form">
                         <!-- -->
                         <div >
                              <form action="controllers/login_validation.php" class="sign-in-form" method="POST">
                                   <div class="form-outline mb-4">
                                   <div class="panel">
                                        <h3 style="text-align:center">Login </h3>                         
                                   </div>
                                   </div>
                                   <!-- Aadhar number input -->
                                   <div class="form-outline mb-4">
                                        <label class="form-label" for="aadharno">Adhar Card Number: </label>
                                        <input type="number" name="aadharno"  id="aadharno" class="form-control" style="text-align:left;" required/>
                                   </div>

                                   <!-- Password input -->
                                   <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Password</label> &nbsp;
                                        <!--<button id="toggle-password" type="button"><span class="glyphicon glyphicon-eye-open"></span></button>-->
                                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                                        <input type="password" name="password" id="password" class="form-control" style="text-align:left;" required/>
                                   </div>

                                   <!-- 2 column grid layout for inline styling -->
                                   <div class="row mb-4">
                                        <div class="col">
                                             <!-- Simple link -->
                                             <a href="#">Forgot password?</a>
                                        </div>
                                   </div>

                                   <!-- Submit button -->
                                   <button type="submit" value="login" class="btn btn-primary btn-block mb-4">Sign in</button>

                                   <!-- Register buttons -->
                                   <div class="text-center">
                                        <div>Not a member? <a href="signup.php">Register</a></div>
                                   </div>
                              </form>



                              
                         </div>
                         <!-- -->
                    </div>

          </div>
     </div>






          <?php
          include ('templates/footer.php');
        ?>



     </div>
     <script src="assets/js/custom.js"></script>
     <script>
     /*const passwordInput = document.getElementById('password');
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
     }*/
     const togglePassword = document.querySelector('#togglePassword');
     const password = document.querySelector('#password');

     togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
     </script>
     
     
     <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
     <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>



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

