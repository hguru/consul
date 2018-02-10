<?php include "connection.php";
      require('/fpdf/fpdf.php'); 
	  
?>


<?php
$nilai_nisn  = $_POST['inputnisn'];

//Check if input is numeric and it has 10 digit
if(is_numeric($nilai_nisn) && strlen($nilai_nisn)==4)  {
											
$sql ="Select * from personal_info WHERE cardno= '".$nilai_nisn."'";
$result = mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
													
if (mysqli_num_rows($result) == 0)
{
print_r('good');
														
}


else{ 						
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,$row['cardno']);
$pdf->Cell(40,10,$row['surname']);
$pdf->Cell(40,10,$row['other_names']);
$pdf->Cell(40,10,$row['date_issue_card']);
 
$pdf->Output();
					}
			}
							
								//Check if input is numeric and it has not 10 digits
								else if (is_numeric($nilai_nisn) && strlen($nilai_nisn)!=4)
								{
									echo"<h5>NISN : Less than 4 digits</h5>";
									echo"<br>";
								}
								else
								{
									echo "<h5>The value must be numeric 0 to 9,it is not allowed character or its combination</h5>";
									echo "<br>";
								}
								mysqli_close($con);
							?>

















 <?php						
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
?>
