<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
	//Title
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'PDF From mysql',0,1,'C');
	$this->Ln(10);
	//Ensure table header is output
	parent::Header();
}
}

//Connect to database
mysql_connect('localhost','root','m7muyepeh');
mysql_select_db('projekt');

$pdf=new PDF();
$pdf->AddPage();
//First table: put all columns automatically
$pdf->Table('SELECT `project_name`, `category`,`start_date`,`end_date` from projekt order by `project_name`');
$pdf->AddPage();
//Second table: specify 3 columns
$pdf->AddCol('project_name',40,'','C');
$pdf->AddCol('category',40,'projekt','C');
$pdf->AddCol('start_date',40,'','C');
$pdf->AddCol('end_date',40,'','C');
//$pdf->AddCol('info',40,'','C');
$prop=array('HeaderColor'=>array(255,150,100),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
$pdf->Table('select project_name, category,start_date, end_date from projekt order by project_name limit 0,10',$prop);

//$pdf->Output("C:\Users\John\Desktop/somename.pdf",'F'); 

header('Content-type: projekter/pdf');
$pdf->Output('projekter'.".pdf", 'D'); 
//header('Location: '.projekter.".pdf");
?>
