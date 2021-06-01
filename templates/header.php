<!-- HEADER ALL-->

<!DOCTYPE html>
<html lang="en"> <!-- html ends in templates/footer -->
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIT ADT UNIVERSITY</title>

    <!-- other CDN -->
          
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            <!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- other CDN end -->

    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
            
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="assets/css/templatemo-softy-pinko.css">        
        <link rel="stylesheet" href="assets/css/dashboard.css">
        <link rel="stylesheet" href="assets/css/style.css">      
        <link rel="stylesheet" href="assets/css/transparent-background.css">      

</head>
<style>
.fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;

    background-image: linear-gradient(135deg, #4b0082 0%, #a759d1 100%);
    color: white;
}
header {
    padding-bottom: 50px;
}
</style>
<body> <!-- body ends in templates/footer -->

<?php /*


    <!-- <header class="header-area header-sticky"> -->
    <header  >
        <?php 
        if($_SESSION['userStatus'] == 'logged_in'){ //error is shown on this line
            //user logged in
            //show this header?>
                    <!-- <nav class="navbar navbar-expand-lg ">-->
                    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-light fixed-top">
                        <!-- <a class="navbar-brand" href="#"><img src="assets/images/logo.jpg" alt="Softy Pinko" /></a> -->
                        <div class="container">
                            <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div style="right:0;" class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">

                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php" style="color: white;">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboardself.php" style="color: white;">Dashboard</a>
                                    </li>
                                    
                                    <?php if(!($_SESSION['designation'] == 'Principal Dean (R&D)' || $_SESSION['designation'] == 'Admin' )) {?>
                                        <!-- if user is principal or superadmin then these will not be shown in header-->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                                            Form A
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="Form_A1_self.php">1</a>
                                            <a class="dropdown-item" href="Form_A2_self.php">2</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                                            Form B
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="Form_B1_self.php">1</a>
                                            <a class="dropdown-item" href="Form_B2_self.php">2</a>
                                            <a class="dropdown-item" href="Form_B3_self.php">3</a>
                                            <a class="dropdown-item" href="Form_B4_self.php">4</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                                            Form C
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">1</a>
                                            <a class="dropdown-item" href="#">2</a>
                                            <a class="dropdown-item" href="#">3</a>
                                            </div>
                                        </li>
                                        
                                    <?php } ?>

                                    <!--<li class="nav-item">
                                        <a class="nav-link" href="contactUs.php">Contact us</a>
                                    </li> -->

                                    <li class="nav-item">
                                        <a class="nav-link" href="controllers/logout.php" style="color: white;">Logout</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </nav>
            
    <?php }else{ ?>
                <!-- Not logged in-->
                <!-- user not logged in 
                    show this header -->
                <!-- header before login-->

                <nav class="navbar  navbar-expand-lg navbar-dark bg-light fixed-top">
                <!-- <nav class="navbar navbar-expand-lg ">-->
                    <div class="container">
                        <a class="navbar-brand" href="#">MIT ADT University</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contactUs.php">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
        <?php } ?>
    </header> 

*/ ?>



    <header >
        
                    <!-- <nav class="navbar navbar-expand-lg ">-->
                    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-light fixed-top">
                        <!-- <a class="navbar-brand" href="#"><img src="assets/images/logo.jpg" alt="Softy Pinko" /></a> -->
                        <div class="container">
                            <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div style="right:0;" class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item active" >
                                        <a class="nav-link"  style="color: white; "><h6>MIT-ADT University</h6></a>
                                    </li>
                                     <!-- home -->
                                    <?php if((isset($_SESSION["login"]) && $_SESSION["login"] == "1")){ //if session is set run this?>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php" style="color: white;">Home</a>
                                    </li>
                                    
                                     <?php } else { //if session is not set run this?>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php" style="color: white;">Home</a>
                                    </li>
                                    <?php }?>

                                    <!-- dashboard -->
                                    <?php if((isset($_SESSION['login']) && $_SESSION['login'] == "1")){ // if session is set run this?>
                                        <?php if(($_SESSION['designation'] == 'Principal' )) {?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboarddirector.php" style="color: white;">Dashboard</a>
                                        </li>
                                        <?php }elseif(($_SESSION['designation'] == 'HOD' )) {?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboardHOD.php" style="color: white;">Dashboard</a>
                                        </li>
                                        <?php }elseif(($_SESSION['designation'] == 'Admin' )){?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboardsuperadmin.php" style="color: white;">Dashboard</a>
                                        </li>
                                        <?php }else{?>
                                            <li class="nav-item">
                                            <a class="nav-link" href="dashboardself.php" style="color: white;">Dashboard</a>
                                        </li>
                                        <?php } ?>
                                    <?php } ?>

                                    <?php if(!(isset($_SESSION['login']) && $_SESSION['login'] == "1")){ // if session is set run this?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="signup.php" style="color: white;">Sign Up</a>
                                    </li>
                                    <?php } ?>

                                    <!-- forms -->
                                    <?php if((isset($_SESSION['login']) && $_SESSION['login'] == "1")){ //if session is set run this?>

                                        <?php if(!($_SESSION['designation'] == 'Admin' )) {?>
                                            <!-- if user is principal or superadmin then these will not be shown in header-->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                                                Form A
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="Form_A1_self.php">1</a>
                                                <a class="dropdown-item" href="Form_A2_self.php">2</a>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                                                Form B
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="Form_B1_self.php">1</a>
                                                <a class="dropdown-item" href="Form_B2_self.php">2</a>
                                                <a class="dropdown-item" href="Form_B3_self.php">3</a>
                                                <a class="dropdown-item" href="Form_B4_self.php">4</a>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                                                Form C
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="Form_C1_self.php">1</a>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    <?php }?>
                                        
                                </ul>

                                <ul class="navbar-nav">

                                    <!-- WELCOME MESSAGE -->

                                    <!-- LOGIN /LOGOUT-->
                                    <?php if((isset($_SESSION["login"]) && $_SESSION["login"] == "1")){ //if session is set run this?>
                                        <?php if($_SESSION['designation'] == 'Admin' ) {?>
                                            <li class="nav-item"><a href="reportAdmin.php"><button class="btn btn-primary btn-sm" >Download</button></a></li>
                                        <?php }elseif($_SESSION['designation'] == 'Principal') {?>
                                            <li class="nav-item"><a href="reportDirector.php"><button class="btn btn-primary btn-sm" >Download</button></a></li>
                                        <?php }?>
                                    <?php }?>

                                    <!-- LOGIN /LOGOUT-->
                                    <?php if((isset($_SESSION["login"]) && $_SESSION["login"] == "1")){ //if session is set run this?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="controllers/logout.php" style="color: white;">Logout</a>
                                        </li>
                                        
                                    <?php }else { //if session is not set run this?>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.php" style="color: white;">Login</a>
                                        </li>
                                    <?php }?>

                                    


                                </ul>
                            </div>
                        </div>
                    </nav>
            
    
    </header> 
    
<div class="main-body" ><!-- ends in footer-->