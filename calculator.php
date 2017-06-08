<!DOCTYPE html>
<html lang="en">
<head>
<title>intelliscan</title>
<meta charset="utf-8"><link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/table.css" type="text/css" media="screen">
	<link rel="icon" href="images/favicon.ico">
       <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-migrate-1.1.1.js"></script>
		<script type="text/javascript" src="js/jcarousellite_1.0.1.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script>
 $(document).ready(function() {
 	$(".carousel").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev",
       visible: 4
    });
 });	
</script>
  <!--[if lt IE 8]><div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div><![endif]-->
  	<!--[if lt IE 9]>
	   	<script src="js/html5shiv.js"></script>
	   	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	   	<link href='http://fonts.googleapis.com/css?family=Lato:300italic' rel='stylesheet' type='text/css'>
	   	<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	   	<link href='http://fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
	   	<link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
    <![endif]-->
</head>
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
	$total_six_ft = $six_ft * 24000;
	$total_four_drawer = $four_drawer * 12000;
	$total_three_drawer = $three_drawer * 9000;
	$total_lever_arch = $lever_arch * 400;
	$total_standard_document = $standard_document * 2000;
	$total_large_document = $large_document * 3000;
	$total_total_document_transfer = $document_transfer * 500;
	$total_large_format = $large_format * 1;

	$total_scans = $total_six_ft + $total_four_drawer + $total_three_drawer + $total_lever_arch + $total_standard_document +
					$total_large_document + $total_total_document_transfer + $total_large_format;

	/*echo 'You have input:  <br>';
	echo $six_ft . ' - 6ft Double Cabinets based on a capacity of 20, making it a total of ' . $total_six_ft . '<br>';
	echo $four_drawer . ' - Drawer Filing Cabinets based on a capacity of 15, making it a total of ' . $total_four_drawer . '<br>';
	echo $three_drawer . ' - Drawer Filing Cabinets based on a capacity of 10, making it a total of ' . $total_three_drawer . '<br>';
	echo $lever_arch . ' - Lever Arch Files based on a capacity of 8, making it a total of ' . $total_lever_arch . '<br>';
	echo $standard_document . ' - Standard Document Archive Boxes based on a capacity of 6, making it a total of ' . $total_standard_document . '<br>';
	echo $large_document . ' - Large Document Archive Boxes based on a capacity of 4, making it a total of ' . $total_large_document . '<br>';
	echo $document_transfer . ' - Document Transfer Cases based on a capacity of 2, making it a total of ' . $total_total_document_transfer . '<br>';
	echo $large_format . ' - Large Format Documentsbased on a capacity of 1, making it a total of ' . $total_large_format . '<br>' . '<br>';*/

	echo "We estimate that you will scan a total of " . $total_scans . " documents"

?>

<body>
	<header>
		<div class="container_12">
			<div class="grid_12">
				<div class="wrapper">
					<a href="about.html" class="logo">design.maniacs</a>
					<nav>
						<ul class="menu">
							<li><a href="index.html">about</a></li>
							<li><a href="solutions.html">solutions</a></li>
							<li><a href="calculator.html">calculator</a></li>
							<li><a href="contacts.php">contacts</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<div id="content">
		<div class="ic"></div>
		<div class="inner">
			<div class="container_12">
				<div class="wrapper">
					<div class="grid_12">
					
				</div>
				<div class="wrapper">
					<div class="grid_12">
						<div class="grid_4 prefix_1">
						<h2>Request a quote</h2>

						<div class="grid_12">
						<h3 style="color:red ">We estimate that you need to scan a total of <?php echo $total_scans;?> images.</h3>

						<div class="block">
					<h3>Your caculation results were based on the following infomation that you supplied:</h3>

					<?php
					echo "<h4 style='color:#5e4895'>$six_ft</>" . ' x 6ft Double Cabinets totalling ' . $total_six_ft . '<br>';
					echo $four_drawer . ' x 4 - Drawer Filing Cabinets totalling ' . $total_four_drawer . '<br>';
					echo $three_drawer . ' x 3 - Drawer Filing Cabinets totalling ' . $total_three_drawer . '<br>';
					echo $lever_arch . ' x Lever Arch Files totalling ' . $total_lever_arch . '<br>';
					echo $standard_document . ' x Standard Document Archive Boxes totalling ' . $total_standard_document . '<br>';
					echo $large_document . ' x Large Document Archive Boxes totalling ' . $total_large_document . '<br>';
					echo $document_transfer . ' x Document Transfer Cases totalling ' . $total_total_document_transfer . '<br>';
					echo $large_format . ' x Large Format Documents totalling ' . $total_large_format;
					?>
						
						</div>
						<br>
							

						
					</div>

						<form id="contact-form" action="quote.php" method="POST" onsubmit="return validateForm();" >
							<fieldset>
							<div class="form-group">
								<label><input type="text" value="" name ="name" placeholder="Name" required>	</label>
								<span id="name_validation" class="error"></span>
							</div>
							<div class="form-group">
								<label><input type="email" value="" name ="email" placeholder="E-mail" required>	</label>
								<span id="email_validation" class="error"></span>
							</div>
							<div class="form-group">
								<label><input type="number" value="" name ="phone" placeholder="Phone" required>	</label>
								<span id="name_validation" class="error"></span>
							</div>

							<div class="form-group">
								<label><input type="text" value="" name ="company" placeholder="Company Name" >	</label>
								<span id="name_validation" class="error"></span>
							</div>

							<div class="form-group">
								<label><input type="text" name ="documents" readonly value="<?php echo $total_scans;?> documents" >	</label>
								<span id="name_validation" class="error"></span>
							</div>

								<textarea name ="message" onFocus="if(this.value=='Message'){this.value=''}" onBlur="if(this.value==''){this.value='Message'}">Additional Information</textarea>
								<!--a href="#" class="button1" onClick="document.getElementById('contact-form').reset()">clear</a-->
								<input type="submit" value="Request a quote" class="button1">
								<!--a href="#" class="button1" onClick="document.getElementById('contact-form').submit()">send</a-->
							</fieldset>
						</form>
					</div>
					</div>
				</div>
				<div class="wrapper">
					<div class="grid_12">
						<div class="block">
						
						</div>
						<!--h3>We estimate that you need to scan a total of <?php echo $total_scans;?> images.</h3-->
							
		<br>
						
					</div>
				</div>
				
				<div class="wrapper">
					<div class="grid_12">
						<div class="block">
							<div class="wrapper">
								
							</div>
						</div>
						<div class="wrapper h-pad">
							<div class="grid_8 alpha">
								
							</div>
							
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
	<footer>
		<div class="container_12">
			<div class="wrapper">
				<div class="grid_8">
					Intelliscan &copy; 2017 &nbsp; | &nbsp; designed by <a href="http://www.zhoumicro.com" rel="nofollow" class="link">Zhoumicro Software Solutions</a>
				</div>
				<div class="grid_4">
					<div class="social">
						Our Social Network:<a href="#"><img src="images/facebook-icon.png" alt=""></a><a href="#"><img src="images/twitter-icon.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>
