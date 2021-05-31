<?php
// session_start();

require_once('..\connection.php');

$educationalRows = $_POST['e_row'];
$workRows = $_POST['w_row'];

$userId = $_SESSION['userId'];


// $i = $j = 1;
for( $i = 1 ; $i < $educationalRows ; $i++ ){
	$examPassed = $_POST['exam'.$i];
	$specSubject = $_POST['spec'.$i];
	$board = $_POST['board'.$i];
	$year = $_POST['year'.$i];
	$marks = $_POST['mark'.$i];
	$str = "";	
    
    if(isset($_FILES["filename".$i])){
    	$file=$_FILES["filename".$i];
    	$fileName = $_FILES["filename".$i]['name'];
        $fileTmpName = $_FILES["filename".$i]['tmp_name'];
        $fileSize = $_FILES["filename".$i]['size'];
        $fileErro = $_FILES["filename".$i]['error'];
        $fileType = $_FILES["filename".$i]['type'];
    
        $fileExtTmp=explode('.',$fileName);
        $fileExt= strtolower(end($fileExtTmp));
        $allow = array('jpg','jpeg','png','svg');
        
    
        if (!empty($fileExt)) {
                if ($fileErro === 0) {
                    
                        $fileNewName = $userId.'_'.$name."e_qualification"."_"."$i".".".$fileExt;
                        $path = "../Documents/Educational/";
                        if (!file_exists($path)) {
                            mkdir($path, 0777, true);
                        }
                        $fileDestination = '../Documents/Educational/'.$fileNewName;
                        move_uploaded_file($fileTmpName,$fileDestination);
                        $str=substr($fileDestination,3);
                    
                }
                else {
                    // $_SESSION['msg']="There is error while uploading a image!";
                    // header("Location: ../subject.php?class=$varClass&subject=$varSubject");
                    return;
                }
        }
        else{
            // $_SESSION["return"] = "Error! Please Select Logo File!";
            // header("Location: ../subject.php?class=$varClass&subject=$varSubject");
            return;
        }
    }


	$insertEducationQuery = "INSERT INTO educationalqualification(`Userid`,`ExamPassed`,`PrincipalSubject`,`BoardUniversity`,`Year`,`Marks`,`documentPath`) VALUES('$userId','$examPassed','$specSubject','$board','$year','$marks','$str') ";
	mysqli_query($con,$insertEducationQuery);
}

for( $j = 1 ; $j < $workRows ; $j++){
	$empName = $_POST['emp'.$j];
	$duration = $_POST['duration'.$j];
	$desg = $_POST['desg'.$j];
	$jobProfile = $_POST['jp'.$j];
	$salary = $_POST['sal'.$j];
	$insertWorkQuery = "INSERT INTO workexperience(`Userid`,`NameOfEmployee`,`Duration`,`LastDesignation`,`JobProfile`,`Salary`) VALUES('$userid','$empName','$duration','$desg','$jobProfile','$salary')";
	mysqli_query($con,$insertWorkQuery);
}
// header('Location:dashboard.php');


$selectDesignationQuery = "SELECT * from login where id = '$userId'";
$executeSelectDesignationQuery = mysqli_query($con, $selectDesignationQuery);
$rowDesignation = mysqli_fetch_assoc($executeSelectDesignationQuery);
if($rowDesignation['Designation'] == 'Admin'){
    //redirect to admin dashboard
    header('location:../dashboardsuperadmin.php'); // redirect to registration page //tell to add designation
}elseif($rowDesignation['Designation'] == 'Principal'){
    //redirect to principal dashboard
    header('location:../principal.php'); // redirect to registration page //tell to add designation
}elseif($rowDesignation['Designation'] == 'HOD'){
    //redirect to hod dashboard
	header('location:../dashboardHOD.php'); // redirect to registration page //tell to add designation
}else{
    //redirect to assistant professor dashboard
    header('location:../dashboardself.php'); // redirect to registration page //tell to add designation
}
?>