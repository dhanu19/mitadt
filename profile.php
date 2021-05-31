<?php 

        $selectProfilePhotoQuery = "SELECT profilePhoto from personaldetails where Userid = ".$_SESSION['userId'];
        $executeSelectProfilePhotoQuery = mysqli_query($con ,$selectProfilePhotoQuery );
        $imagePath = "";
        if(mysqli_num_rows($executeSelectProfilePhotoQuery) > 0){
          $rowProfilePhoto = mysqli_fetch_assoc($executeSelectProfilePhotoQuery);
          $imagePath = $rowProfilePhoto['profilePhoto'];
        }
        else{
          $imagePath = "https://bootdey.com/img/Content/avatar/avatar3.png";
        }

        $selectStatusQuery = "SELECT * from status where Userid = ".$_SESSION['userId'];
        $executeSelectStatusQuery = mysqli_query($con ,$selectStatusQuery );
        $status = 0;
        if(mysqli_num_rows($executeSelectStatusQuery) > 0){
          
          $rowStatus = mysqli_fetch_assoc($executeSelectStatusQuery);
          if($rowStatus['SectionI'] == 1){
               $status += 25; 
          }
          if($rowStatus['SectionII'] == 1){
               $status += 25; 
          }
          if($rowStatus['SectionIII'] == 1){
               $status += 25; 
          }
          if($rowStatus['SectionIV'] == 1){
               $status += 25; 
          }
          // if($rowStatus['SectionV'] == 1){
          //      $status += 20; 
          // }
        }
          // $output .= '<td style="text-align: center;"><div class="progress"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'.$status.'" aria-valuemin="0" aria-valuemax="100" style="width:'.$status.'%">'.$status.'%</div></div></td>';
          ?>

     <div class="profile-nav ">
          <div class="panel">
               <div class="user-heading round">
                    <a href="#">
                         <img src="<?php echo $imagePath; ?>" alt="">
                    </a>
                    <h1><?php if(isset($_SESSION['userName'])){
                                             echo $_SESSION['userName'];
                                        }
                                        else{
                                             echo "Welcome User";
                                        }?>
                    </h1>
                    <p><?php if(isset($_SESSION['userEmail'])){
                                             echo $_SESSION['userEmail'];
                                        }
                    ?></p>
               </div>
          </div>
          <?php if($_SESSION['designation'] != 'Principal'){ ?>
               <br>
          <ul class="nav nav-pills nav-stacked">
               <li class="active"><a href="#"></i><b>Form Completion Status</b></a></li>
          </ul>

          
          <div class="progress">
               <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $status; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $status; ?>%">
                    <?php echo $status; ?>%
          </div>
     </div>
     <?php } ?>
     <br>
     </div>