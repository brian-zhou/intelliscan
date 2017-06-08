<?php
	$total_scans = "";

	$six_ft = $_POST['6-drawer-filing'];;
	$four_drawer = $_POST['4-drawer-filing'];
	$three_drawer = $_POST['3-drawer-filing'];
	$lever_arch = $_POST['lever-arch-files'];
	$standard_document = $_POST['standard-document'];;
	$large_document = $_POST['large-document'];
	$document_transfer = $_POST['document-transfer-cases'];
	$large_format = $_POST['large-format-documents'];

	//calculations
	$total_six_ft = $six_ft * 20;
	$total_four_drawer = $four_drawer * 15;
	$total_three_drawer = $three_drawer * 10;
	$total_lever_arch = $lever_arch * 8;
	$total_standard_document = $standard_document * 6;
	$total_large_document = $large_document * 4;
	$total_total_document_transfer = $document_transfer * 2;
	$total_large_format = $large_format * 1;

	$total_scans = $total_six_ft + $total_four_drawer + $total_three_drawer + $total_lever_arch + $total_standard_document +
					$total_large_document + $total_total_document_transfer + $total_large_format;

	echo 'You have input:  <br>';
	echo $six_ft . ' - 6ft Double Cabinets based on a capacity of 20, making it a total of ' . $total_six_ft . '<br>';
	echo $four_drawer . ' - Drawer Filing Cabinets based on a capacity of 15, making it a total of ' . $total_four_drawer . '<br>';
	echo $three_drawer . ' - Drawer Filing Cabinets based on a capacity of 10, making it a total of ' . $total_three_drawer . '<br>';
	echo $lever_arch . ' - Lever Arch Files based on a capacity of 8, making it a total of ' . $total_lever_arch . '<br>';
	echo $standard_document . ' - Standard Document Archive Boxes based on a capacity of 6, making it a total of ' . $total_standard_document . '<br>';
	echo $large_document . ' - Large Document Archive Boxes based on a capacity of 4, making it a total of ' . $total_large_document . '<br>';
	echo $document_transfer . ' - Document Transfer Cases based on a capacity of 2, making it a total of ' . $total_total_document_transfer . '<br>';
	echo $large_format . ' - Large Format Documentsbased on a capacity of 1, making it a total of ' . $total_large_format . '<br>' . '<br>';

	echo "We estimate that you will scan a total of " . $total_scans . " documents"

?>