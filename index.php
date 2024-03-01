<?php require_once( 'update/cms.php' ); ?>
<cms:template title='About' />

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no"> 
<meta name="keywords" content="tabletop, games, board, boardgames, gaming, events, durham, ontario, canada, education, learn, learning, play, community, store, environment">
<meta name="description" content="Events and tournaments showcasing the latest and greatest in tabletop gaming.">
<meta name="author" content="Stephen McMahon">

<title>Leeroy &amp; Coco</title>
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



<section class="banner-about hidden-xs">
	<div class="container">
		<div class="row">
			<div class="col-sm-11">
				<h1>Events and tournaments showcasing the latest and greatest in tabletop gaming.</h1> 
				<p>Located in Durham, Ontario, Canada. Sign up to our <strong>newsletter</strong> for the latest updates:</p>
				<form name="htmlphpformgenerator1" method="Post" action="https://www.leeroyandcoco.com/post.php" onSubmit="return validate();">
					<div class="col-sm-3">
						<label>First Name</label><br />
						<input type="text" name="First_Name" />
					</div>
					<div class="col-sm-3">
						<label>Last Name <span style="color:#7f7f7f">(Optional)</span></label><br />
						<input type="text" name="Last_Name" />
					</div>
					<div class="clear"></div>
					<div class="col-sm-5">
						<label>Email</label><br />
						<input type="text" name="Email_Address" />
					</div>
					<div class="col-sm-7 banner-btn">
						<input class="sign-up" type="submit" name="Submit" value="Sign Up" />
					</div>
				</form>
			</div>
			<div class="col-sm-1">
				<img class="close-btn" src="https://www.leeroyandcoco.com/images/close.png" />
			</div>
		</div>
	</div>
</section>

<section class="open-banner hidden-xs">
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
				<cms:editable name='main_content' type='richtext'>
				<h1>What is Leeroy &amp; Coco?</h1>
				<p>Leeroy &amp; Coco is a community, event planner, and educator for tabletop games. Through our events we will teach people how to play tabletop games, demonstrate the educational benefits of tabletop games, and most importantly have fun. We will have scheduled events and will also be available for bookings.</p>
				<p>Our goal is to create a community for tabletop games. The most important part of a community is the sharing of ideas, cultures, philosophies, and beliefs that creates positive environments, change, and togetherness. This website will be a hub for our content creation and yours, that will be located in our Blog.</p>
				<p><i>... Okay, but why Leeroy &amp; Coco?</i></p>
				<p>Well I'm glad you asked. Leeroy comes from the well known characater from World of Warcraft, Leeroy Jenkins. He is a Paladin with a zest of fearlessness and passion. We all have some Leeroy in us, we all have a desire to be fearless and act on impulse. We like to emphazise those qualities in our community. Coco comes from the Magic: The Gathering card, Collected Company (Coco for short). The collected company represents the community around us. Tabletop games are best played with company.</p>
			    <br />
				<h1>Mission Statement</h1>
				<p>Leeroy &amp; Coco creates a family friendly environment that encourages creativity, education, respect, communication, and community. It is our mission to provide the best gaming experience by providing high quality games, outstanding customer service, and an environment like non-other.</p>
				<br />
				<h1>Core Values</h1>
				<p>We value all people and perspectives inside our walls, among our players, and in our games. We create shared positive experiences that will be a long lasting memory, and create lifelong friendships. We seek to build a positive community.</p>
				</cms:editable>
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
