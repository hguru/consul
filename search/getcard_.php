<?php include "connection.php";
      require('/fpdf/fpdf.php'); 
	  
use setasign\Fpdi\Fpdi;
require_once('fpdi/src/autoload.php');
	  
	  
	  
?>

 

<?php



$nilai_nisn  = $_POST['inputnisn'];

//Check if input is numeric and it has 10 digit
if(is_numeric($nilai_nisn) && strlen($nilai_nisn)==4 )  {
											
$sql ="Select * from personal_info WHERE cardno= '".$nilai_nisn."'";
 
$result = mysqli_query($con, $sql);

$row=mysqli_fetch_array($result);
													
if (mysqli_num_rows($result) == 0)
{

echo "<script>


alert ('Sorry, Card Not Found');
window.location.href = './print_card_index.php';

</script>
";

//print_r('good');
														
}


else{ 						
$pdf = new FPDI();
$pdf->AddPage('L');


$pdf->setSourceFile('card_print.pdf');
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
//$pdf->useTemplate($tplIdx, 100, 10, 100);
$pdf ->useTemplate($tplIdx, 16, null, 260.6, 190.9,FALSE);


$pdf->SetFont('Helvetica');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(30, 30);
//$pdf->Write(0, 'This is just a simple text');

$pdf->SetFont('Arial','B',18);
$pdf->SetXY(72, 83.7);
$pdf->Cell(100,90,$row['cardno']);

$pdf->SetFont('Arial','',10);
$pdf->SetXY(76, 39);
//$pdf->Cell(40,10,$row['photo']);
$pro_forma_number = $row['photo'];
$pdf->Image("http://localhost/CodeIgniter/assets/uploads/files/$pro_forma_number",45,60,50,60);
 

$pdf->SetFont('Arial','B',18);
$pdf->SetXY(136, 64.9);
$pdf->Cell(40,10,$row['surname']);


$pdf->SetFont('Arial','B',18);
$pdf->SetXY(136, 73.5);
$pdf->Cell(40,10,$row['other_names']);

//$hello = $row ['date_of_birth'];
//$date = date('d/m/Y', strtotime ($hello)); //date format
//echo ' is working ' . $date;


$dateofbirth = $row['date_of_birth'];
$datebirth = date('d/m/Y', strtotime ($dateofbirth)); //date format

$pdf->SetFont('Arial','B',18);
$pdf->SetXY(165, 83);
$pdf->Cell(40,10,$datebirth);

 

 

$pdf->SetFont('Arial','B',18);
$pdf->SetXY(166, 91);
$pdf->Cell(40,10,$row['place_of_birth']);



$pdf->SetFont('Arial','B',18);
$pdf->SetXY(150, 99.8);
$pdf->Cell(40,10,$row['passport_no']);


$date_issue_card = $row['date_issue_card'];
$dateissuecard = date('d/m/Y', strtotime ($date_issue_card)); //date format

$pdf->SetFont('Arial','B',18);
$pdf->SetXY(140, 108);
$pdf->Cell(40,10,$dateissuecard);


$date_expire_card = $row['date_expire_card'];
$dateexpirecard = date('d/m/Y', strtotime ($date_expire_card)); //date format

$pdf->SetFont('Arial','B',18);
$pdf->SetXY(140, 115);
$pdf->Cell(40,10,$dateexpirecard);


$pdf->SetFont('Arial','B',18);
$pdf->SetXY(138, 125.5);
$pdf->Cell(40,10,$row['address_guinea']);

 
//$pdf->Output();
$pdf->Output('ID Card.pdf', 'I');
					}
			}
							
								//Check if input is numeric and it has not 10 digits
								else if (is_numeric($nilai_nisn) && strlen($nilai_nisn)!= 4)
								{
								echo "<script>


                         alert ('Card No: Less than 4 digits');
                         window.location.href = './print_card_index.php';
</script>
";
								}
								else
								{
									
																echo "<script>


                         alert ('The value must be numeric 0 to 4,it is not allowed character or its combination');
                         window.location.href = './print_card_index.php';

</script>
";
			
									 
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
