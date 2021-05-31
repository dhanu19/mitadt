<?php

// session_start();
require_once('../connection.php');

if(isset($_POST['flag'])){
      if($_POST['flag'] == 'selectInstitution'){

        $institutionValue = str_replace("+", " ", $_POST['institution']);
        $selectDepartmentQuery = " Select distinct(Branch) from login where institution = '".$institutionValue."'";
        $executeSelectDepartmentQuery = mysqli_query($con, $selectDepartmentQuery);
        $output = "<option value=0>Choose Department</option>";
         while ($rowDepartment = mysqli_fetch_assoc($executeSelectDepartmentQuery)) {
              $output .= "<option value='".$rowDepartment['Branch']."'>".$rowDepartment['Branch']."</option>";
         }
         echo $output;

      }
      else if($_POST['flag'] == 'selectDesg'){
          
        $desgValue = str_replace("+", " ", $_POST['desg']);
        $selectFacultyQuery = "";
        if(isset($_POST['dep'])){
          $depValue = str_replace("+"," ", $_POST['dep']);
          if(isset($_POST['institution'])){
            $institutionValue = str_replace("+"," ", $_POST['institution']);
            $selectFacultyQuery = " Select * from personaldetails where Userid in (Select id from login where Designation = '".$desgValue."' AND Branch = '".$depValue."' AND institution = '".$institutionValue."')";
          }
          else{
            $selectFacultyQuery = " Select * from personaldetails where Userid in (Select id from login where Designation = '".$desgValue."' AND Branch = '".$depValue."')";
          }
        }
        else{
          if(isset($_POST['institution'])){
            $institutionValue = str_replace("+"," ", $_POST['institution']);
            $selectFacultyQuery = " Select * from personaldetails where Userid in (Select id from login where designation = '".$desgValue."' AND institution = '".$institutionValue."')";
          }
          else{
            $selectFacultyQuery = " Select * from personaldetails where Userid in (Select id from login where designation = '".$desgValue."')";
          }
        }
        $executeSelectFacultyQuery = mysqli_query($con, $selectFacultyQuery);
          $output = "";
          $i=1;
        while($rowFaculty = mysqli_fetch_assoc($executeSelectFacultyQuery)){
          
          $selectStatusQuery = "SELECT * from status where Userid = ".$rowFaculty['Userid'];
          $executeSelectStatusQuery = mysqli_query($con ,$selectStatusQuery );
          $status = 0;
          if(mysqli_num_rows($executeSelectStatusQuery)){
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
          }
          if ($_SESSION['designation'] == 'Admin') {
            if($status == 100){
              $selectS1Total = "SELECT TotalSelfRating,TotalHODRating,TotalDirectorPrincipalRating FROM section_i WHERE Userid = ".$rowFaculty['Userid'];
              $selectS2Total = "SELECT TotalSelfRating,TotalHODRating,TotalDirectorPrincipalRating FROM section_ii WHERE Userid = ".$rowFaculty['Userid'];
              $selectS3Total = "SELECT TotalSelfRating,TotalHODRating,TotalDirectorPrincipalRating FROM section_iii WHERE Userid = ".$rowFaculty['Userid'];
              $selectS4Total = "SELECT TotalSelfRating,TotalHODRating,TotalDirectorPrincipalRating FROM section_iv WHERE Userid = ".$rowFaculty['Userid']; 
              $rowS1Total = mysqli_fetch_assoc(mysqli_query($con,$selectS1Total));
              $rowS2Total = mysqli_fetch_assoc(mysqli_query($con,$selectS2Total));
              $rowS3Total = mysqli_fetch_assoc(mysqli_query($con,$selectS3Total));
              $rowS4Total = mysqli_fetch_assoc(mysqli_query($con,$selectS4Total));
              $overallSelfRating = ($rowS1Total['TotalSelfRating'] + $rowS2Total['TotalSelfRating'] + $rowS3Total['TotalSelfRating'] + $rowS4Total['TotalSelfRating'])/4;
              
              $overallHODRating = ($rowS1Total['TotalHODRating'] + $rowS2Total['TotalHODRating'] + $rowS3Total['TotalHODRating'] + $rowS4Total['TotalHODRating'])/4;

              $overallPrincipalRating = ($rowS1Total['TotalDirectorPrincipalRating'] + $rowS2Total['TotalDirectorPrincipalRating'] + $rowS3Total['TotalDirectorPrincipalRating'] + $rowS4Total['TotalDirectorPrincipalRating'])/4;

              $output .= "<tr id='".$rowFaculty['Userid']."'>";
              $output .= "<th scope='row' style='text-align: center;'>".$i."</td>";
              $output .= "<td style='text-align: left;'>".$rowFaculty['NameOfFacultyMember']."</td>";
              $output .= '<td style="text-align: center;">'.$overallSelfRating.'</td>';
              $output .= '<td style="text-align: center;">'.$overallHODRating.'</td>';
              $output .= '<td style="text-align: center;">'.$overallPrincipalRating.'</td>';
              $output .= "</tr>";
              $i += 1;
            }
          }
          else if($_SESSION['designation'] == 'Principal'){
            if($status == 100){
              $output .= "<tr id='".$rowFaculty['Userid']."'>";
              $output .= "<th scope='row' style='text-align: center;'>".$i."</td>";
              $output .= "<td style='text-align: left;'>".$rowFaculty['NameOfFacultyMember']."</td>";
              $output .= '<td style="text-align: center;"><div class="progress"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'.$status.'" aria-valuemin="0" aria-valuemax="100" style="width:'.$status.'%">'.$status.'%</div></div></td>';
              $output .= "</tr>";
              $i += 1;
            }
          }else{
            $output .= "<tr id='".$rowFaculty['Userid']."'>";
            $output .= "<th scope='row' style='text-align: center;'>".$i."</td>";
            $output .= "<td style='text-align: left;'>".$rowFaculty['NameOfFacultyMember']."</td>";
            $output .= '<td style="text-align: center;"><div class="progress"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'.$status.'" aria-valuemin="0" aria-valuemax="100" style="width:'.$status.'%">'.$status.'%</div></div></td>';
            $output .= "</tr>";
            $i += 1;

            // $selectS1Total = "SELECT TotalSelfRating,TotalHODRating,TotalDirectorPrincipalRating FROM section_i WHERE Userid = ".$rowFaculty['Userid'];
            //   $selectS2Total = "SELECT TotalSelfRating,TotalHODRating,TotalDirectorPrincipalRating FROM section_ii WHERE Userid = ".$rowFaculty['Userid'];
            //   $selectS3Total = "SELECT TotalSelfRating,TotalHODRating,TotalDirectorPrincipalRating FROM section_iii WHERE Userid = ".$rowFaculty['Userid'];
            //   $selectS4Total = "SELECT TotalSelfRating,TotalHODRating,TotalDirectorPrincipalRating FROM section_iv WHERE Userid = ".$rowFaculty['Userid']; 
            //   $rowS1Total = mysqli_fetch_assoc(mysqli_query($con,$selectS1Total));
            //   $rowS2Total = mysqli_fetch_assoc(mysqli_query($con,$selectS2Total));
            //   $rowS3Total = mysqli_fetch_assoc(mysqli_query($con,$selectS3Total));
            //   $rowS4Total = mysqli_fetch_assoc(mysqli_query($con,$selectS4Total));
            //   $overallSelfRating = ($rowS1Total['TotalSelfRating'] + $rowS2Total['TotalSelfRating'] + $rowS3Total['TotalSelfRating'] + $rowS4Total['TotalSelfRating'])/4;
              
            //   $overallHODRating = ($rowS1Total['TotalHODRating'] + $rowS2Total['TotalHODRating'] + $rowS3Total['TotalHODRating'] + $rowS4Total['TotalHODRating'])/4;

            //   $overallPrincipalRating = ($rowS1Total['TotalDirectorPrincipalRating'] + $rowS2Total['TotalDirectorPrincipalRating'] + $rowS3Total['TotalDirectorPrincipalRating'] + $rowS4Total['TotalDirectorPrincipalRating'])/4;

            //   $output .= "<tr id='".$rowFaculty['Userid']."'>";
            //   $output .= "<th scope='row' style='text-align: center;'>".$i."</td>";
            //   $output .= "<td style='text-align: left;'>".$rowFaculty['NameOfFacultyMember']."</td>";
            //   $output .= '<td style="text-align: center;">'.$overallSelfRating.'</td>';
            //   $output .= '<td style="text-align: center;">'.$overallHODRating.'</td>';
            //   $output .= '<td style="text-align: center;">'.$overallPrincipalRating.'</td>';
            //   $output .= "</tr>";
            //   $i += 1;
          }
          
        }
     echo $output;
     }
     else if($_POST['flag'] == 'selectDep'){
      $depValue = str_replace("+", " ", $_POST['dep']);
      $selectDesignationQuery = "";
        if(isset($_POST['institution'])){
          $institutionValue = str_replace("+"," ", $_POST['institution']);
          $selectDesignationQuery = "SELECT DISTINCT(Designation) FROM login WHERE Branch = '".$depValue."' AND institution = '".$institutionValue."'";
        }
        else{
          $selectDesignationQuery = " SELECT DISTINCT(Designation) FROM login WHERE Branch = '".$depValue."'";
        }
        
        $executeSelectDesignationQuery = mysqli_query($con, $selectDesignationQuery);
        $output = "<option value=0>Choose Designation</option>";
         while ($rowDesignation = mysqli_fetch_assoc($executeSelectDesignationQuery)) {
              $output .= "<option value='".$rowDesignation['Designation']."'>".$rowDesignation['Designation']."</option>";
         }
         echo $output;
     }
     
}


// if(isset($_POST['search_post_btn']))
// {
//     $id = $_POST['Faculty'];
//     $_SESSION['CFaculty'] = $id;
//     $return_array = array();
//     $query = "SELECT Activity1SR,Activity2SR,Activity3SR,Activity4SR FROM cocurricular WHERE Faculty = '$id'";
//     $query_run = mysqli_query($con,$query);

//     if($query_run)
//     {

//         $row = mysqli_fetch_array($query_run);
    
//         $return_array[]=array("a1"=> $row['Activity1SR'],"a2"=> $row['Activity2SR'],"a3"=> $row['Activity3SR'],"a4"=> $row['Activity4SR']);
        
//         echo json_encode($return_array);
            

//         $_SESSION['sr1'] = $row['Activity1SR'];
//         $_SESSION['sr2'] = $row['Activity2SR'];
//         $_SESSION['sr3'] = $row['Activity3SR'];
//         $_SESSION['sr4'] = $row['Activity4SR'];

        
//     }
    
//     else
//     {
//         echo "Data not found";
//     }
// }
// // else if($_POST['flag'] == "selectDesg"){
// //         $desgValue = str_replace("+", " ", $_POST['desg']);
// //         // echo "<script>console.log(".$desgValue.")</script>";
// //         $selectFacultyQuery = " Select name from registerform where des = '" . $desgValue . "'";
// //         $executeSelectFacultyQuery = mysqli_query($con, $selectFacultyQuery);
// //         $return_array = array();
// //         while($rowFaculty = mysqli_fetch_array($executeSelectFacultyQuery)){
// //             $return_array[] = $rowFaculty[0];
// //         }
// //         echo json_encode($return_array);
// //    }

// else if($_POST['flag'] == "selectDep"){
//         //$depValue = str_replace("+", " ", $_POST['dep']);
//         //echo "<script>console.log(".$_POST['dep'].")</script>";
//         $selectDepartmentQuery = "Select des from registerform where department = ' " .$_POST['dep']."'";
//         $executeDepartmentQuery = mysqli_query($con, $selectDepartmentQuery);
//         $return_array = array();
//         echo "<script>console.log(".$executeDepartmentQuery.")</script>";
//         while($rowdepartment = mysqli_fetch_array($executeDepartmentQuery)){
//             $return_array[] = $rowdepartment[0];
//         }
//         //echo json_encode($return_array);
//     }

?>