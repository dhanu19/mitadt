<?php
//include connection file 
include_once("../connection.php");
include_once('fpdf.php');
date_default_timezone_set('Asia/Kolkata');

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo
        $this->Image('../assets/images/logo.jpg',10,7,30);
        $this->SetFont('Arial','B',13);
        // Move to the right
        $this->Cell(40);
        // Title
        $this->Cell(110,10,'Employee List with Ratings',1,0,'C');
        $this->Cell(2);
        $this->Cell(30,-8,date("j F Y "),0,0,'C');
        // Line break
        $this->Ln(20);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}


$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',8);

$width_cell=array(10,100,20,20,25);
$count=0;
// foreach($header as $heading) {
$pdf->Cell($width_cell[0],5,'Sr.No.',1);
$pdf->Cell($width_cell[1],5,'Employee Name',1);
$pdf->Cell($width_cell[2],5,'Self Rating',1);
$pdf->Cell($width_cell[3],5,'HOD Rating',1);
$pdf->Cell($width_cell[4],5,'Director Rating',1);
// }


// $db = new dbObj();
// $connString =  $db->getConnstring();
$result = mysqli_query($con, "SELECT id AS Userid FROM login WHERE Branch = '".$_GET['department']."'") or die("database error:". mysqli_error($con));
while($rowFaculty = mysqli_fetch_assoc($result)){
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
    if($status == 100){
        $count+=1;
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

        $selectEmpNameQuery = "SELECT NameOfFacultyMember FROM personaldetails WHERE Userid =".$rowFaculty['Userid'];
        $rowName = mysqli_fetch_assoc(mysqli_query($con,$selectEmpNameQuery));
        $pdf->Ln();
        // foreach($row as $column)
        $pdf->Cell($width_cell[0],5,$count,1);
        $pdf->Cell($width_cell[1],5,$rowName['NameOfFacultyMember'],1,0);
        $pdf->Cell($width_cell[2],5,$overallSelfRating,1,0);
        $pdf->Cell($width_cell[3],5,$overallHODRating,1,0);
        $pdf->Cell($width_cell[4],5,$overallPrincipalRating,1,0);
    }

}

$pdf->Output();
?>