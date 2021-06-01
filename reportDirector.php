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
                                <div class="col-3">
                                    <form action="">
                                        <div class="form-group">
                                            <label for="designation" style="font-size: 16px;">Select Designation</label>
                                            <select name="designation" class='form-control' id="des" style="text-align:left;">
                                                <option selected>Select</option>
                                                <option value="Fresher">Fresher</option>
                                                <option value="Professor">Professor</option>
                                                <option value="Associate Professor">Associate Professor</option>
                                                <option value="Assistant Professor">Assistant Professor</option>
                                                <option value="Teaching Assistant">Teaching Assistant</option>
                                                <option value="Technical Assistant">Technical Assistantt</option>
                                                <option value="Lab Assistant">Lab Assistant</option>
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
