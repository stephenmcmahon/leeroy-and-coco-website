

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no"> 
<meta name="keywords" content="tabletop, games, board, boardgames, gaming, events, durham, ontario, canada, education, learn, learning, play, community, store, environment">
<meta name="description" content="Events and tournaments showcasing the latest and greatest in tabletop gaming.">
<meta name="author" content="Stephen McMahon">

<title>Leeroy &amp; Coco - Search Results</title>
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
			<div class="col-sm-12">
			</div>
		</div>
	</div>
</section>


<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<h1>Results</h1>
				<?php
				    mysql_connect("localhost", "stevemc_landc", "Hommie22") or die("Error connecting to database: ".mysql_error());
				    /*
				        localhost - it's location of the mysql server, usually localhost
				        root - your username
				        third is your password
				         
				        if connection fails it will stop loading the page and display an error
				    */
				     
				    mysql_select_db("stevemc_landc") or die(mysql_error());
				    /* tutorial_search is the name of database we've created */
				     

				    $query = $_GET['query']; 
				    // gets value sent over search form
				     
				    $min_length = 3;
				    // you can set minimum length of the query if you want
				     
				    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
				         
				        $query = htmlspecialchars($query); 
				        // changes characters used in html to their equivalents, for example: < to &gt;
				         
				        $query = mysql_real_escape_string($query);
				        // makes sure nobody uses SQL injection
				         
				        $raw_results = mysql_query("SELECT * FROM search
				            WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')") or die(mysql_error());
				             
				        // * means that it selects all fields, you can also write: `id`, `title`, `text`
				        // articles is the name of our table
				         
				        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
				        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
				        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
				         
				        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
				             
				            while($results = mysql_fetch_array($raw_results)){
				            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
				             
				                echo "<p><h2>".$results['title']."</h2>".$results['text']."</p><a href=".$results['link'].">".$results['link']."</a><br /><hr />";
				                // posts results gotten from database(title and text) you can also show id ($results['id'])
				            }
				             
				        }
				        else{ // if there is no matching rows do following
				            echo "No results";
				        }
				         
				    }
				    else{ // if query length is less than minimum
				        echo "Minimum length is ".$min_length;
				    }
				?>
			</div>
			<div class="col-sm-3 sidebar">
				<h3 style="margin-bottom:7px;">Search Blog</h3>
				<form action="https://www.leeroyandcoco.com/results.php" method="GET">
					<input class="search-bar" type="text" name="query" placeholder="Search Blog" style="margin-bottom:7px;" />
					<input type="submit" value="Search" class="blog-comment-btn" />
			  	</form>
				<a href="https://www.leeroyandcoco.com/blog/" class="small-btn" style="margin:50px 0px;">&#8920; Back to Blog</a>
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

