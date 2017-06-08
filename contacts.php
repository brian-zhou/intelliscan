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
	<style>
		#email_validation, #name_validation {
		display:none;
		}

		label.required:after {
		content:'*';
		color:#5e4895;
		}

		span.error {
		background-color:;
		color:;
		}
		
		.row {
		margin:5px;
		}
	</style>
	<script>
		function validateForm() {
		  var valid = 1;
		  var email = document.getElementById('email');
		  var email_validation = document.getElementById("email_validation");
		  var name = document.getElementById('name');
		  var name_validation = document.getElementById("name_validation");
		  var message_validation = document.getElementById("message_validation");
		  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		  
		  if (name.length ==0) {
		    valid = 0;
		    name_validation.innerHTML = "Name Required";
		    name_validation.style.display = "block";
		    name_validation.parentNode.style.backgroundColor = "#5e4895";
		  } else {
		    name_validation.style.display = "none";
		    name_validation.parentNode.style.backgroundColor = "transparent";
		  }
		  
		  if (message.value === "") {
		    valid = 0;
		    message_validation.innerHTML = "Message Required";
		    message_validation.style.display = "block";
		    message_validation.parentNode.style.backgroundColor = "#5e4895";
		  } else {
		    message_validation.style.display = "none";
		    message_validation.parentNode.style.backgroundColor = "transparent";
		  }
		  
		  if (email.value === "") {
		    valid = 0;
		    email_validation.innerHTML = "E-mail Required";
		    email_validation.style.display = "block";
		    email_validation.parentNode.style.backgroundColor = "#5e4895";
		  } else {
		    email_validation.style.display = "none";
		    email_validation.parentNode.style.backgroundColor = "transparent";
		  }
		  
		  if(!filter.test(email.value)) {
		    valid = 0;
		    email_validation.innerHTML = "Invalid email address";
		    email_validation.style.display = "block";
		    email_validation.parentNode.style.backgroundColor = "#5e4895";
		  } else {
		    email_validation.style.display = "none";
		    email_validation.parentNode.style.backgroundColor = "transparent";
		  }
		  if (!valid)
		    return false;
		}
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

<body>
	<?php 
		session_start();
	?>
	
	<header>
		<div class="container_12">
			<div class="grid_12">
				<div class="wrapper">
					<a href="about.html" class="logo">intelliscan</a>
					<nav>
						<ul class="menu">
							<li><a href="index.html">home</a></li>
							<li><a href="solutions.html">solutions</a></li>
							<li><a href="calculator.html">calculator</a></li>
							<li class="active"><a href="contacts.php">contacts</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<div id="content">
		<div class="ic"></div>
		<div class="inner pad1">
			<div class="container_12">
				<div class="wrapper h-pad">
					<div class="grid_7">
						<h2>Physical location</h2>
						<div class="wrapper">
							<!--div class="grid_4 alpha">
								<iframe width="300" height="340" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
							</div-->



							<div class="grid_4 alpha">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.6957941033406!2d27.870241315028853!3d-26.14145998346586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e959f795ecb2631%3A0xadece799f85cb351!2s177+Ontdekkers+Rd%2C+Roodepoort%2C+1724%2C+South+Africa!5e0!3m2!1sen!2s!4v1465648896137" width="300" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>

							<div class="grid_3 omega">
								<div class="contacts">
									<strong class="title">Intelliscan Address</strong>
									177 Ontdekkers Road, <br>
									Roodepoort, Gauteng<br>
									1734, South Africa<br>
									Tel:+27 (0)11 039 2452<br>
									
									<p>
									24 Cossal Crescent, <br>
									West Coast, Cape Town<br>
									7704, South Africa<br>
									<!--Tel:+27 (0)21 554 5867<br--><br>
									E-mail: <a href="mailto:info@intelliscan.co.za" class="link">info@intelliscan.co.za</a> 
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="grid_4 prefix_1">
						<h2>Get in touch</h2>
						<form id="contact-form" action="success.php" method="POST" onsubmit="return validateForm();" >
							<fieldset>
							<div class="form-group">
								<label><input type="text" value="" name ="name" placeholder="Name" required>	</label>
								
							</div>
							<div class="form-group">
								<label><input type="email" value="" name ="email" placeholder="E-mail" >	</label>
								
							</div>
							<div class="form-group">
								<label><input type="number" value="" name ="phone" placeholder="Phone" >	</label>
								
							</div>	
								<textarea name ="message" required onFocus="if(this.value=='Message'){this.value=''}" onBlur="if(this.value==''){this.value='Message'}">Message</textarea>
								<!--a href="#" class="button1" onClick="document.getElementById('contact-form').reset()">clear</a-->
								<!--?php  @include('mathcaptcha.php');?><input name="captcha" type=""-->
								<p>
								<img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
								<input type="text" name="captcha_code" size="10" maxlength="6" />
								<br><br>
								<a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
								
								<input type="submit" value="Submit" class="button1">
								<!--a href="#" class="button1" onClick="document.getElementById('contact-form').submit()">send</a-->
							</fieldset>
						</form>
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
