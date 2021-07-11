<title>SyraTech User List</title>
<?php 

	//IMPORTS
	include '../includes/mysql_connection.php'; 
	require_once('../tcpdf/tcpdf_import.php');

	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

	// set document information
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Francis Ong');
	$pdf->SetTitle('SyraTech User List');

	// set margins
	$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

	// set auto page breaks
	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

	// set image scale factor
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


	// ---------------------------------------------------------

	// set font
	$pdf->SetFont('helvetica', 'B', 20);

	// add a page
	$pdf->AddPage();

	
	$pdf->SetFont('helvetica', '', 12);

// -----------------------------------------------------------------------------
	$con = mysql_connect();
	$query = "SELECT * FROM account";
	$result = mysqli_query($con,$query);
$tbl = <<<EOD
<h1 align="center" style="font-size:24px;color:deepskyblue;background-color:rgb(550,550,550,.5);border-top:2px solid blue;border-right:2px solid blue;border-left:2px solid blue;"></h1>
<h1 align="center" style="font-size:25px;color:deepskyblue;background-color:rgb(550,550,550,.5);border-right:2px solid blue;border-left:2px solid blue;border-bottom:2px solid blue;">SyraTech User List</h1>
<table cellspacing="2" cellpadding="5" width="780" style="background-color:rgb(550,550,550,.5);color:white;border:3px solid blue;">
    <tr style="font-size:20px;font-weight:bold;background-color:deepskyblue;color:black;">
        <th align="center" width ="50">ID</th>
		<th align="center" >Account User</th>
		<th align="center" >Account Email</th>
		<th align="center" >Account Created</th>
    </tr>
    

EOD;

if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {
	$id = $row['account_id'];
	$user=$row['account_user'];
	$email=$row['account_email'];
	$time=$row['account_created'];

	$tbl = $tbl.<<<EOD
		<tr>
	        <td align="center" >$id</td>
			<td align="center" >$user</td>
			<td align="center" >$email</td>
			<td align="center" >$time</td>
    	</tr>
EOD;
	
}
}

// End Tag of table
$tbl = $tbl.<<<EOD
    </table>
EOD;

// Write 
$pdf->writeHTML($tbl, true, false, false, false, '');
ob_end_clean();
$pdf->Output('SyraTech_User_List.pdf', 'I');


?>