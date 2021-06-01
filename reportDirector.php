<?php
require_once('connection.php');
include('templates/header.php');
?>
<div >
    <div class="container bootstrap snippets bootdey  ">

    <div class="row">
        <div class="col-12 col-md-12 col-lg-3">
                <?php include('profile.php'); ?>
        </div>
        
        <div class="profile-info col-md-12 col-lg-9">
                <div class="panel">
                    <h3 style="text-align:center">Performance Appraisal </h3>
                </div>
                <br>
                <div class="panel">
                    <div class="bio-graph-heading">
                        DOWNLOADS
                    </div>
                    <br>
                    <div class="panel-body bio-graph-info" style="color:black;font-size:15px;">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <form action="controllers/generate_pdf.php" method="get">
                                        <div class="form-group">
                                            <label for="department" style="font-size: 16px;">Select Department</label>
                                            <select name="department" class='form-control' id="department" style="text-align:left;">
                                                <option selected>Select</option>
                                                <option value="CSE">CSE</option>
                                                <option value="IT">IT</option>
                                                <option value="ECE">ECE</option>
                                                <option value="AEROSPACE">AEROSPACE</option>
                                                <option value="CIVIL">CIVIL</option>
                                                <option value="Applied Science & Huminities Department">Applied Science & Huminities Department</option>
                                                <option value="Mechanical">Mechanical</option>
                                            </select>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Generate Report</button>
                                    </form>
                                </div>
                                
                            </div>
                            
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
