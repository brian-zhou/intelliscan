

<!DOCTYPE html>
<html lang="en">
<head>
<title>intelliscan</title>
<meta charset="utf-8"><link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
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

</head>
<?php 
session_start();

//include_once $_SERVER['DOCUMENT_ROOT'] . '/securimage/securimage.php';
include_once'securimage/securimage.php';
$securimage = new Securimage();

	if ($securimage->check($_POST['captcha_code']) == false) {
  	// the code was incorrect
  	// you should handle the error so that the form processor doesn't continue

  	// or you can use the following code if there is no validation or you do not know how
	//echo "<br />"
  	//echo "The security code entered was incorrect.<br />";
  	//echo "Please <a href='javascript:history.go(-1)'>click here</a> to go back and try again.";
	echo "<script>alert('Wrong captcha, click OK to try again'); window.location = 'contacts.php'</script>";
	//echo "<script>if (window.confirm('Wrong captcha click OK to try again')){}</script>";
  exit;
}


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

	<?php
	// define variables and set to empty values
	$name = $email = $phone = $message = "";
	//$myemail = 'brizhou@gmail.com';
	$myemail = 'info@intelliscan.co.za';

	  $name = $_POST["name"];
	  $email = $_POST["email"];
	  $phone = $_POST["phone"];
	  $message = $_POST["message"];

   
	  $to = $myemail;
	  $email_subject = "Contact form submission from : $name";
	  $email_body = "Hello Mark - you have received a new message from your Intelliscan website. ".
					" Here are the details:\n The person's name: $name \n Their e-mail: $email \n 
					  Their phone number: $phone \nAnd the message is: \n $message"; 

	  $headers = "From: $myemail\n"; 
	  $headers .= "Reply-To: $email";
	  mail($to,$email_subject,$email_body,$headers);
	
	?>
				<div class="wrapper">
					<div class="grid_12">
					<h2 class="h-pad">Thank you <?php if(isset($_POST["name"])){echo $name . ", "; }?> Your e-mail has been submitted succesfully!</h2>
						<a href="contacts.php" class="button1">Back to Intelliscan</a>
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
