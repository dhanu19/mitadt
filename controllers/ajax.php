<?php

// session_start();
require_once('../connection.php');

if(isset($_POST['flag'])){
     if($_POST['flag'] == 'selectDesg'){
          
        $desgValue = str_replace("+", " ", $_POST['desg']);
        $selectFacultyQuery = " Select * from personaldetails where Userid in (Select id from login where designation = '".$desgValue."')";
        $executeSelectFacultyQuery = mysqli_query($con, $selectFacultyQuery);
     //    $return_array = array();
          $output = "";
          $i=1;
        while($rowFaculty = mysqli_fetch_assoc($executeSelectFacultyQuery)){
          //   $return_array[] = $rowFaculty[0];
          $output .= "<tr>";
          $output .= "<th scope='row' style='text-align: center;'>".$i."</td>";
          $output .= "<td style='text-align: left;'>".$rowFaculty['NameOfFacultyMember']."</td>";
          $selectStatusQuery = "SELECT * from status where Userid = ".$rowFaculty['Userid'];
          $executeSelectStatusQuery = mysqli_query($con ,$selectStatusQuery );
          $status = 0;
          $rowStatus = mysqli_fetch_assoc($executeSelectStatusQuery);
          if($rowStatus['SectionI'] == 1){
               $status += 20; 
          }
          if($rowStatus['SectionII'] == 1){
               $status += 20; 
          }
          if($rowStatus['SectionIII'] == 1){
               $status += 20; 
          }
          if($rowStatus['SectionIV'] == 1){
               $status += 20; 
          }
          if($rowStatus['SectionV'] == 1){
               $status += 20; 
          }
//            70"
//   70%">
//      
          $output .= '<td style="text-align: center;"><div class="progress"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'.$status.'" aria-valuemin="0" aria-valuemax="100" style="width:'.$status.'%">'.$status.'%</div></div></td>';
          $output .= "</tr>";
        }
     //    echo json_encode($return_array)
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