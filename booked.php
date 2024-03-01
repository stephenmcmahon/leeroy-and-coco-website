<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no"> 
<meta name="keywords" content="tabletop, games, board, boardgames, gaming, events, durham, ontario, canada, education, learn, learning, play, community, store, environment">
<meta name="description" content="Events and tournaments showcasing the latest and greatest in tabletop gaming.">
<meta name="author" content="Stephen McMahon">

<title>Leeroy &amp; Coco - Booked</title>
<link rel="icon" type="image/png" href="https://www.leeroyandcoco.com/images/favicon.png">

<link href="https://www.leeroyandcoco.com/css/normalize.css" rel="stylesheet">



<link href="https://www.leeroyandcoco.com/css/leeroyandcoco-style.css" rel="stylesheet">
<link href="https://www.leeroyandcoco.com/css/leeroyandcoco-style-responsive.css" rel="stylesheet">

<link href="https://www.leeroyandcoco.com/css/bootstrap.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet"> 

</head>


<body>

<?php include 'includes/header.php';?>


<section class="banner-booking">
	<div class="container">
		<div class="row">
			<div class="col-sm-11">
				<p>Thank you for booking with us! We will get in contact with you as soon as possible to make your special event .</p>
				<br />
				<?php
				$email = "info@leeroyandcoco.com ";

				print "<p>The following information was submitted for bookings:<p>
				<p><b>First Name:</b> ".$_REQUEST["First_Name"]."</p>
				<p><b>Last Name:</b> ".$_REQUEST["Last_Name"]."</p>
				<p><b>Email:</b> ".$_REQUEST["Email_Address"]."</p>
				<p><b>Date:</b> ".$_REQUEST["Event_Date"]."</p>
				<p><b>Description:</b> ".$_REQUEST["Description"]."</p>
				";

				$message = "The following information was submitted from the form on your website:\n";
				$message .= "First Name: ".$_REQUEST["First_Name"]."\n\n";
				$message .= "Last Name: ".$_REQUEST["Last_Name"]."\n\n";
				$message .= "Email Address: ".$_REQUEST["Email_Address"]."\n\n";
				$message .= "Date: ".$_REQUEST["Event_Date"]."\n\n";
				$message .= "Description: ".$_REQUEST["Description"]."\n\n";

				mail( $email, "Booking from www.leeroyandcoco.com", $message, "From: $email Form Submission (Highest)" );
				?>
			</div>
		</div>
	</div>
</section>

<section class="open-banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-11">

			</div>
			<div class="col-sm-1">
				<img class="open-btn" src="https://www.leeroyandcoco.com/images/open.png" />
			</div>
		</div>
	</div>
</section>



<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<h1>What is Leeroy &amp; Coco?</h1>
				<p>Leeroy &amp; Coco is a community, event planner, and educator for tabletop games. Through our events we will teach people how to play tabletop games, demonstrate the educuacational benefits of tabletop games, and most importantly have fun. We will have scheduled events and will also be available for bookings.</p>
				<p>Our goal is to create a community for tabletop games. The most important part of a community is the sharing of ideas, cultures, philosophies, and beliefs that creates positive environments, change, and togetherness. This website will be a hub for our content creation and yours, that will be located in our Blog.</p>
			    <br />
				<h1>Mission Statement</h1>
				<p>Leeroy &amp; Coco creates a family friendly environment that encourages creativity, education, respect, communication, and community. It is our mission to provide the best gaming experience by providing high quality games, outstanding customer service, and an environment like non-other.</p>
				<br />
				<h1>Core Values</h1>
				<p>We value all people and perspectives inside our walls, among our players, and in our games. We create shared positive experiences that will be a long lasting memory, and create lifelong friendships. We seek to build a positive community.</p>
			</div>
			<div class="col-sm-3 sidebar">
			
			</div>
		</div>
	</div>
</section>


<?php include 'includes/footer.php';?>


<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://www.leeroyandcoco.com/js/jquery.js" type="text/javascript"></script>
    <script src="https://www.leeroyandcoco.com/js/bootstrap.js" type="text/javascript"></script>
    <script src="https://www.leeroyandcoco.com/js/mobile-nav.js" type="text/javascript"></script>
    
    <script language="Javascript">
      function validate(){
      var allok = true;
        if(htmlphpformgenerator1.First_Name.value == ""){
          alert('Please enter your First Name');
          return false;
        }
        if(htmlphpformgenerator1.Last_Name.value == ""){
          alert('Please enter your Last Name');
          return false;
        }
        if(htmlphpformgenerator1.Email_Address.value.indexOf("@") == -1){
          alert('Invalid input for Email Address, this must include "@" character(s)');
          return false;
        }
      document.htmlphpformgenerator1.Submit.disabled="disabled";
      return true;
      }
    </script>

</body>
</html>



