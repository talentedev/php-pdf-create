<?php
	include('mpdf60/mpdf.php');

	$field_1 = $_POST['field_1'];
	$field_2 = $_POST['field_2'];
	$field_3 = $_POST['field_3'];
	$field_4 = $_POST['field_4'];
	$field_5 = $_POST['field_5'];
	$field_6 = $_POST['field_6'];
	$field_7 = $_POST['field_7'];
	
	// $mpdf = new mPDF([
	// 	'default_font' => 'opensans',	
	// ]);

	$mpdf=new mPDF('utf-8', array(300,220));

	$content ='<html><head><link rel="stylesheet" href="css/pdf.css"><link rel="stylesheet" href="css/bootstrap.min.css"><style>@page{margin:0px;}</style></head><body>';

    $content .= '<table>';
	for ($i = 0; $i < 3; $i++) { 
		$content .= '<tr>';
		$content .= '<td class="item"><div class="title"><img src="image/title.png"></div><p class="sub-title">Circulaire du ' . $field_1 . ' Octobre au ' . $field_2 . ' '. $field_3 . '</p><br>';
		$content .= '<p class="content">Une erreur s’est produite sur notre circulaire page ' . $field_4. ',</p><br>';
		$content .= '<p class="content">' . $field_5. '</p>';
		$content .= '<p class="content">' . $field_6. '</p>';
		$content .= '<p class="content">' . $field_7. '</p><br>';
		$content .= '<p class="footer-title">Nous regrettons les inconvénients causés par cette situation. </p>';
		$content .= '<p class="footer-title">Merci, La Direction</p></td>';

		$content .= '<td class="item"><div class="title"><img src="image/title.png"></div><p class="sub-title"><b>Circulaire du ' . $field_1 . ' Octobre au ' . $field_2 . ' '. $field_3 . '</b></p><br>';
		$content .= '<p class="content">Une erreur s’est produite sur notre circulaire page ' . $field_4. ',</p><br>';
		$content .= '<p class="content">' . $field_5. '</p>';
		$content .= '<p class="content">' . $field_6. '</p>';
		$content .= '<p class="content">' . $field_7. '</p><br>';
		$content .= '<p class="footer-title">Nous regrettons les inconvénients causés par cette situation. </p>';
		$content .= '<p class="footer-title">Merci, La Direction</p></td>';
	    $content .= '</tr>';
	}	
    $content .= '</table>';

	$content .= '<body></html>';
// echo $content;exit;
	$mpdf->writeHTML($content);
	$mpdf->Output();
	exit;
?>