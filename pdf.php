<?php
	include('mpdf60/mpdf.php');

	$field_1 = $_POST['field_1'];
	$field_2 = $_POST['field_2'];
	$field_3 = $_POST['field_3'];
	$field_4 = $_POST['field_4'];
	$field_5 = $_POST['field_5'];
	$field_6 = $_POST['field_6'];
	$field_7 = $_POST['field_7'];
	
	$mpdf = new mPDF(['default_font' => 'opensans']);

	$content ='<html><head><link rel="stylesheet" href="css/pdf.css"></head><body><div class="item"><div class="title">ERRATUM</div><p class="sub-title"><b>Circulaire du ' . $field_1 . 'Octobre au' . $field_2 . ' '. $field_3 . '</b></p>';
	$content .= '<p class="content">Une erreur s’est produite sur notre circulaire page ' . $field_4. ',</p>';
	$content .= '<p class="content">' . $field_5. '</p>';
	$content .= '<p class="content">' . $field_6. '</p>';
	$content .= '<p class="content">' . $field_7. '</p>';
	$content .= '<p>Nous regrettons les inconvénients causés par cette situation. </p>';
	$content .= '<p>Merci, La Direction</p>';
	$content .= '</div><body></html>';

	$mpdf->writeHTML($content);
	$mpdf->Output();
	exit;
?>