<?php require_once( 'update/cms.php' ); ?>
<cms:template title='Events' />

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no"> 
<meta name="keywords" content="tabletop, games, board, boardgames, gaming, events, durham, ontario, canada, education, learn, learning, play, community, store, environment">
<meta name="description" content="Events and tournaments showcasing the latest and greatest in tabletop gaming.">
<meta name="author" content="Stephen McMahon">

<title>Leeroy &amp; Coco - Events</title>
<link rel="icon" type="image/png" href="https://www.leeroyandcoco.com/images/favicon.png">

<link href="https://www.leeroyandcoco.com/css/normalize.css" rel="stylesheet">

<link href="https://www.leeroyandcoco.com/css/leeroyandcoco-style.css" rel="stylesheet">
<link href="https://www.leeroyandcoco.com/css/leeroyandcoco-style-responsive.css" rel="stylesheet">

<link href="https://www.leeroyandcoco.com/css/bootstrap.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet"> 

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119605895-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119605895-1');
</script>

</head>


<body>


<?php include 'includes/header.php';?>



<section class="banner-events">
	<div class="container">
		<div class="row">
			<div class="col-xs-10">
				<h1>Events and tournaments showcasing the latest and greatest in tabletop gaming.</h1> 
				<p>Located in Durham, Ontario, Canada. We are currently running pop-up events throughout the Durham region. Our upcoming events for tabpletop gaming will be posted here as well as our social media platforms.</p>
				

				<h1>Learn &amp; Play Dominion!</h1>
				<p><strong>When:</strong> July 26, 2018. 7pm - 9pm</p>
				<p><strong>Where:</strong> Jolie Cafe - 94 Harwood Avenue South, Ajax, ON, L1S 2H6</p>
				<p><strong>Price:</strong> $5.00</p>
				<img class="img-responsive" src="https://www.leeroyandcoco.com/images/logo-jolie.png" alt="Jolie Cafe" />
				<br />
				<p>In partnership with Jolie Cafe. This is a perfect opportunity to bond with a date, friends, or family. It's also an opportunity to meet new people and create friendships, in a postitive and social environment.</p>
				<p>Experience and learn to play one of the greatest tabletop games, Dominion.</p>
				
				<p>Fore more info or to book a spot please <a href="mailto:info@leeroyandcoco.com">contact us</a>.</p>
				<p>Tickets available for purchase at <a href="https://www.eventbrite.com/e/lets-play-dominion-tickets-47834352837" target="_blank">Eventbrite</a>.</p>
				
			</div>
			<div class="col-xs-2">
				<img class="close-btn" src="https://www.leeroyandcoco.com/images/close.png" />
			</div>
		</div>
	</div>
</section>

<section class="open-banner">
	<div class="container">
		<div class="row">
			<div class="col-xs-10">

			</div>
			<div class="col-xs-2">
				<img class="open-btn" src="https://www.leeroyandcoco.com/images/open.png" />
			</div>
		</div>
	</div>
</section>



<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				
				<h1>What kind of events to expect</h1>
				<p>Leeroy &amp; Coco specializes in tabletop games. Our goal is to cater to the many types of  tabletop gamers, from serious to casual, beginner to expert, and young to experienced.</p>
				<p>Tabletop games have now become a generational hobby. It is something that can be shared between people regardless of age, background, or language.</p>
				<p>There are many different tabletop games that provide different experiences. With our expertise, we can provide the best tabletop gaming experience for your friends, family, partners, or colleagues.</p>
				<p>Tabletop games provide benefits towards communication, education, as well as critical and analytical thinking. We will prove these benefits while having fun!</p>

			    <br />
				<h1>We provide:</h1>
				<p>&bull; Tabletop games</p>
				<p>&bull; Game tutorials</p>
				<p>&bull; Team building</p>
				<p>&bull; Get togethers</p>
				<p>&bull; Birthday parties</p>
				<p>&bull; Game nights</p>
				<p>&bull; Tournaments</p>
				<p>&bull; Tabletop game coaching</p>
				<br />
				<h1>We cater to:</h1>
				<p>&bull; Families</p>
				<p>&bull; Kids</p>
				<p>&bull; Clubs</p>
				<p>&bull; Schools</p>
				<p>&bull; Small Businesses</p>
				<p>&bull; Corporations</p>
				<p>If you have an event that will benefit from our tabletop gaming experience, do not hesitate to let us know by <a href="https://www.leeroyandcoco.com/booking.php">booking</a> us.</p>
	
				
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

<?php COUCH::invoke(); ?>
